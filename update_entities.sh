php bin/console doctrine:generate:entities $1:$2
php bin/console doctrine:schema:update --dump-sql
php bin/console doctrine:schema:update --force
