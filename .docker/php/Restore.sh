sleep 15 | echo "Waiting for 15s to start MySql Server"

echo "Restoring DB."
php bin/console doctrine:schema:update
php bin/console doctrine:fixtures:load --no-interaction

echo "DB restored."
