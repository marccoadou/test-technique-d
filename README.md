# Test technique danoun

## Comment le mettre en route

NB : La base de données est en sqlite

Executer les commandes :

- Renommer le `.env.example` en `.env`
- `composer install`
- `npm install`
- `touch database.sqlite` (ou le nom qu'on veut lui donner)
- bien donner un path absolu dans le `.env` à la db
- `php artisan migrate --seed`

Il n'y a pas de bouton pour se logout mais il suffit de supprimer les cookies

PS : Si les events ne marchent pas pour une raison inconnue, run la commande :

- `php artisan event:generate`
