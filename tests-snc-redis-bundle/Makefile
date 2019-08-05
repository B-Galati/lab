.PHONY: start
start:
	docker-compose down
	docker-compose up --remove-orphans --force-recreate -d
	docker-compose exec redis-cluster-1 redis-cli --cluster create 10.0.0.2:7000 10.0.0.3:7001 10.0.0.4:7002
	docker-compose logs -tf
