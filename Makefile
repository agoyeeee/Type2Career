run:
	php artisan serve

migrate:
	php artisan optimize:clear
	php artisan migrate:fresh --seed

cln:
	php artisan optimize
