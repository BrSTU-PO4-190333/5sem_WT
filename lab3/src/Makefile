start-mysql:
	cd mysql; docker-compose up

restart-mysql:
	cd mysql; rm -rfv var/lib/mysql
	cd mysql; docker-compose down
	make start-mysql

start-api:
	cd api; npm run start
