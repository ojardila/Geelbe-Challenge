bash:
	@docker exec -it geelbe_challenge bash
doc:
	@docker exec -it geelbe_challenge ./vendor/bin/phpdoc-md  generate src/ > docs/README.md
run:
	@docker exec -it geelbe_challenge php index.php
start:
	@docker-compose up --force-recreate --build -d

test:
	@docker exec -it geelbe_challenge ./vendor/bin/phpunit

test-coverage:
	@docker exec -it geelbe_challenge ./vendor/bin/phpunit --bootstrap src/bootstrap.php --coverage-text docs/tests/  tests/GeelbeChallengeTest.php 

test-coverage-html:
	@docker exec -it geelbe_challenge ./vendor/bin/phpunit --coverage-html docs/tests/


composer:
	@docker exec -it geelbe_challenge composer $(filter-out $@,$(MAKECMDGOALS))

