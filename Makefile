init:
	COMPOSER_ALLOW_SUPERUSER=1 composer install --no-dev --optimize-autoloader
	COMPOSER_ALLOW_SUPERUSER=1 composer dump-env prod
	php bin/console doctrine:migrations:migrate --no-interaction
	php bin/console app:theme:refresh
	php bin/console app:update
ifeq ($(shell id -u), 0)
	chown -R www-data:www-data public/
	chown -R www-data:www-data var/
	chown -R www-data:www-data files/
endif

update:
	git pull
	COMPOSER_ALLOW_SUPERUSER=1 composer install --no-dev --optimize-autoloader
	COMPOSER_ALLOW_SUPERUSER=1 composer dump-env prod
	php bin/console doctrine:migrations:migrate --no-interaction
	php bin/console app:theme:refresh
	php bin/console app:update
ifeq ($(shell id -u), 0)
	chown -R www-data:www-data public/
	chown -R www-data:www-data var/
	chown -R www-data:www-data files/
endif

test:
	@echo "--------------------------------------"
	@echo "------------ Log versions ------------"
	@echo "--------------------------------------"
	google-chrome --version
	chromedriver --version
	php --version
	composer --version
	@echo "--------------------------------------"
	@echo "---------- Lint validation -----------"
	@echo "--------------------------------------"
	APP_ENV=test php bin/console lint:twig templates/ vendor/wirdesign-communication-ag/wirhub/
	APP_ENV=test php bin/console lint:yaml config/ vendor/wirdesign-communication-ag/wirhub/Resources/config/
	APP_ENV=test php bin/console lint:container
	@echo "--------------------------------------"
	@echo "-------------- PHPStan ---------------"
	@echo "--------------------------------------"
	vendor/bin/phpstan analyse -c phpstan.neon
	@echo "--------------------------------------"
	@echo "--------- Custom validation ----------"
	@echo "--------------------------------------"
	APP_ENV=test php bin/console app:test
	@echo "--------------------------------------"
	@echo "--------- Prepare database -----------"
	@echo "--------------------------------------"
	APP_ENV=test php bin/console doctrine:database:create
	APP_ENV=test php bin/console doctrine:schema:update --force --complete
	@echo "--------------------------------------"
	@echo "----------- Create theme -------------"
	@echo "--------------------------------------"
	APP_ENV=test php bin/console app:theme:refresh
	@echo "--------------------------------------"
	@echo "------------- PHPUnit ----------------"
	@echo "--------------------------------------"
	php bin/phpunit
