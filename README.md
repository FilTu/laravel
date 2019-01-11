# JSON API 
Simple JSON API with JWT 

## Require Faker and Tymon\JWTAuth
`composer require fzaninotto/faker`

`composer require tymon/jwt-auth`

## Migracja i dane
`php artisan migrate`

`php artisan db:seed`


## Methods

api/authorize - autoryzacja i uzyskanie tokena JWT (name 'admin', password 'admin')

api/publishers/list - pobranie listy wydawnictw wraz z tytułami

api/magazines/search/{ciąg tekstu}/{ilość na stronie} - filtrowanie po fragmencie tekstu lub ID/ilość wyników na stronie

api/magazines/{id} - pobranie danych magazynu prasowego po ID
