
COMPOSER = composer
SYMFONY = bin/console
DEPTRAC = php bin/deptrac.phar
CS_FIXER = php bin/php-cs-fixer-v2.phar

BUILD_DIR = build
CACHE_DIR = app/cache
COVERAGE_DIR = $(BUILD_DIR)/coverage
DEPTRAC_DIR = $(BUILD_DIR)/deptrac
WEB_DIR =  web


# full deployment for production
update:
	git pull

	COMPOSER_ALLOW_SUPERUSER=1 $(COMPOSER) install --no-dev --optimize-autoloader

	$(SYMFONY) doctrine:migration:migrate  --no-interaction
	$(SYMFONY) app:theme:refresh
	$(SYMFONY) app:update

    ifeq ($(shell id -u), 0)
		 chown -R www-data:www-data $(WEB_DIR)
		 chown -R www-data:www-data $(CACHE_DIR)
    endif

	rm -r web/asset/grunt/js/modules/plugin 2> /dev/null ||:

# install PHP dependencies
composer: prep
	$(COMPOSER) validate
	$(COMPOSER) install
.PHONY: composer

prep:
	mkdir -p web/theme
.PHONY: prep

# install PHP dependencies, without test and analysis tools, and
# optimize autoloading (recommended for live deployments)
composer-prod:
	APP_ENV=prod $(COMPOSER) install --no-dev --optimize-autoloader
.PHONY: composer-prod


# (re-)build everything in the dev environment from scratch, install
# dependencies, drop and rebuild db, load fixtures
build-dev: composer
	$(SYMFONY) doctrine:database:drop --force
	$(SYMFONY) doctrine:database:create
	$(SYMFONY) doctrine:migration:migrate  --no-interaction
	$(SYMFONY) doctrine:fixtures:load --no-interaction
.PHONY: build-dev


# alias for build-dev
reset-dev: build-dev
.PHONY: reset-dev


# update dev environment, non-destructive... use after git pull
# or after switching branches
update-dev: composer
	$(SYMFONY) doctrine:migrations:migrate --no-interaction
	$(SYMFONY) doctrine:fixtures:load --no-interaction
.PHONY: update-dev


# initialize test data, usually not for direct use
init-test:
	APP_ENV=test $(SYMFONY) app:test
	APP_ENV=test $(SYMFONY) doctrine:database:create
	APP_ENV=test $(SYMFONY) doctrine:schema:update --force
	APP_ENV=test $(SYMFONY) app:theme:refresh
.PHONY: init-test

# run tests
test: init-test
	vendor/bin/simple-phpunit
.PHONY: test

# make a ramdisk.
ramdisk:
	mountpoint -q /mnt/ramdisk && echo "Ramdisk already exists" || (sudo mkdir -p /mnt/ramdisk && sudo mount -t tmpfs -o size=512m tmpfs /mnt/ramdisk && echo "Ramdisk created")
.PHONY: ramdisk

# run tests and generate coverage
test-coverage: init-test
	vendor/bin/simple-phpunit --coverage-html $(COVERAGE_DIR)
.PHONY: test-coverage

# run tests, -> no coverage <-, and all code stats - recommended for CI use
test-ci: init-test lint test deptrac-deprecations phpstan
.PHONY: test-ci

# run tests, coverage, and all code stats - recommended for CI use
test-ci-coverage: init-test lint test-coverage deptrac-deprecations phpstan
.PHONY: test-ci

# check for dependencies on deprecated bundles in source folder
deptrac-deprecations:
	-$(DEPTRAC) analyze
.PHONY: deptrac-deprecations


# lint Twig, YAML, Container config
lint:
	$(SYMFONY) lint:twig templates src
	$(SYMFONY) lint:yaml app src
	$(SYMFONY) lint:container
.PHONY: lint


# run phpstan, but do not fail build
phpstan:
	-vendor/bin/phpstan analyse -c phpstan.neon
.PHONY: phpstan


# run CS Fixer, but do not fail build
cs-fixer:
	-$(CS_FIXER) fix src --dry-run -v
.PHONY: cs-fixer

# command after deployment, example only, TBD when CI is configureds
build-deploy: composer-prod
	APP_ENV=prod $(SYMFONY) doctrine:migrations:migrate --no-interaction
.PHONY: build-deploys
