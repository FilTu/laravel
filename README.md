# JSON API 
Simple JSON API with JWT 


## Require Faker and Tymon\JWTAuth
`composer require fzaninotto/faker`

`composer require tymon/jwt-auth`

## Edycja pliku .env (testowane na MySql)
DB_CONNECTION,DB_HOST,DB_PORT,DB_DATABASE,DB_USERNAME,DB_PASSWORD

`php artisan jwt:secret`

## Migracja i dane
`php artisan migrate`

`php artisan db:seed`


## Methods

api/authorize - autoryzacja i uzyskanie tokena JWT (name 'admin', password 'admin')

api/publishers/list - pobranie listy wydawnictw wraz z tytułami

api/magazines/search/{ciąg tekstu}/{ilość na stronie} - filtrowanie po fragmencie tekstu lub ID/ilość wyników na stronie

api/magazines/{id} - pobranie danych magazynu prasowego po ID
