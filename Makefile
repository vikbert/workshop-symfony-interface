SHELL := /bin/bash

help:
	# shellcheck disable=SC2046
	@grep -E '^[a-zA-Z_-]+:.*?## .*$$|(^#--)' $(MAKEFILE_LIST) | awk 'BEGIN {FS = ":.*?## "}; {printf "\033[32m %-43s\033[0m %s\n", $$1, $$2}' | sed -e 's/\[32m #-- /[33m/'

.PHONY: help
.DEFAULT_GOAL := help


init: ## init the application
	composer install
	php bin/console do:mi:mi -n
	php bin/console do:fi:lo -n

start: ## start the application
	symfony serve
