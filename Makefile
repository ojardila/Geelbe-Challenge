bash:
	@docker exec -it geelbe_challenge bash
run:
	@docker exec -it geelbe_challenge php index.php
start:
	@docker-compose up --force-recreate --build -d

test:
	@docker exec -it geelbe_challenge ./vendor/bin/phpunit

composer:
	@docker exec -it geelbe_challenge composer $(filter-out $@,$(MAKECMDGOALS))

