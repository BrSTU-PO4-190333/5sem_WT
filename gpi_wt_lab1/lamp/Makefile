gpi-run-mysql:
	docker-compose up

gpi-clean-mysql:
	rm -rfv var/lib/mysql/*

gpi-restart-mysql:
	docker-compose down
	make cleandb
	make start
