include vendor/wirdesign-communication-ag/wirhub/.env
export

BUNDLE_ASSETS = vendor/wirdesign-communication-ag/wirhub/Resources/public/${VERSION}

assets:
	@echo "--------------------------------------"
	@echo "-------- Create bundle assets --------"
	@echo "--------------------------------------"
	$(MAKE) bundle-assets
	@echo "--------------------------------------"
	@echo "----------- Symlink assets -----------"
	@echo "--------------------------------------"
	php bin/console assets:install --symlink
	@echo "--------------------------------------"
	@echo "------------ Clean up  ---------------"
	@echo "--------------------------------------"
	rm -rf vendor/wirdesign-communication-ag/wirhub/build/node_modules

$(BUNDLE_ASSETS):
	npm --prefix vendor/wirdesign-communication-ag/wirhub/build ci
	npm --prefix vendor/wirdesign-communication-ag/wirhub/build run build

bundle-assets: $(BUNDLE_ASSETS)

dkim:
	openssl genrsa -out secret/dkim.pem 2048
	@echo ''
	@echo -n 'wirhub._domainkey.domain.de. 86400 IN TXT v=DKIM1; k=rsa; p='
	@openssl rsa -in secret/dkim.pem -pubout -outform der 2>/dev/null | openssl base64 -A
	@echo ''

init:
	COMPOSER_ALLOW_SUPERUSER=1 composer install --no-dev --optimize-autoloader
	COMPOSER_ALLOW_SUPERUSER=1 composer dump-env prod
	COMPOSER_ALLOW_SUPERUSER=1 composer dump-autoload --no-dev --classmap-authoritative
	php bin/console doctrine:migrations:migrate --no-interaction
	php bin/console app:update
	php bin/console app:theme:refresh

ifeq ($(shell id -u), 0)
	chown -R www-data:www-data public/
	chown -R www-data:www-data var/
	chown -R www-data:www-data files/
endif

update:
	git pull
	COMPOSER_ALLOW_SUPERUSER=1 composer dump-env prod
	COMPOSER_ALLOW_SUPERUSER=1 composer install --no-dev --optimize-autoloader
	COMPOSER_ALLOW_SUPERUSER=1 composer dump-autoload --no-dev --classmap-authoritative
	$(MAKE) bundle-assets
	php bin/console doctrine:migrations:migrate --no-interaction
	php bin/console app:update
	php bin/console app:theme:refresh
ifeq ($(shell id -u), 0)
	chown -R www-data:www-data public/
	chown -R www-data:www-data var/
	chown -R www-data:www-data files/
endif

test:
	@echo "--------------------------------------"
	@echo "---------- Lint validation -----------"
	@echo "--------------------------------------"
	APP_ENV=test php bin/console lint:twig templates/ vendor/wirdesign-communication-ag/wirhub/
	APP_ENV=test php bin/console lint:yaml config/ vendor/wirdesign-communication-ag/wirhub/Resources/config/
	APP_ENV=test php bin/console lint:container
	@echo ""
	@echo ""
	@echo "--------------------------------------"
	@echo "-------------- PHPStan ---------------"
	@echo "--------------------------------------"
	vendor/bin/phpstan analyse -c phpstan.neon
	@echo ""
	@echo ""
	@echo "--------------------------------------"
	@echo "--------- Custom validation ----------"
	@echo "--------------------------------------"
	APP_ENV=test php bin/console app:test
	@echo ""
	@echo ""
	@echo "--------------------------------------"
	@echo "-------- PHPUnit WebAndKernel --------"
	@echo "--------------------------------------"
	/usr/bin/php8.4 bin/phpunit -c phpunit.xml.dist vendor/wirdesign-communication-ag/wirhub/Tests/Cases/WebAndKernel/
	@echo ""
	@echo ""
	@echo "--------------------------------------"
	@echo "----------- PHPUnit Panther ----------"
	@echo "--------------------------------------"
	/usr/bin/php8.4 bin/phpunit -c phpunit.xml.dist vendor/wirdesign-communication-ag/wirhub/Tests/Cases/Panther/

# Webserver for the Panther suite, the same command the CI uses. APP_DEBUG=0 is
# roughly a fifth faster, but without debug the kernel does not track resources:
# template, routing and translation changes only show up after
# "APP_ENV=test bin/console cache:clear", which also drops the Liip database
# snapshots in the cache dir (they rebuild lazily). variables_order=EGPCS makes
# the built-in server read APP_ENV and APP_DEBUG from the environment at all.
# PHP_CLI_SERVER_WORKERS above 1 lets Chrome fetch the assets in parallel, but
# it also runs simultaneous uploads in parallel: ImageCompareTest drops two
# images at once and expects the second one refused, with four workers both
# were accepted in two of five runs. Stay at 1 unless that race is fixed.
# Usage: make test-server [APP_DEBUG=0] [PHP_CLI_SERVER_WORKERS=4] [PORT=8001]
# Another PORT needs PANTHER_EXTERNAL_BASE_URI on the phpunit side as well.
test-server: APP_DEBUG ?= 1
test-server: PHP_CLI_SERVER_WORKERS ?= 1
test-server: PORT ?= 8000
test-server:
	APP_ENV=test APP_DEBUG=$(APP_DEBUG) PHP_CLI_SERVER_WORKERS=$(PHP_CLI_SERVER_WORKERS) php -d variables_order=EGPCS -S localhost:$(PORT) -t public/ vendor/wirdesign-communication-ag/wirhub/Tests/Helper/router.php
