# php_mvc_alura
php -S localhost:8080 in public folder

I edited my php.ini locate at /etc/php/7.0/apache2/php.ini
uncomment the line : extension=php_pdo_mysql.dll

composer dump-autoload

php tabela-usuario.php

php cria-usuario.php "email@example.com" "123456"


php -a [interactive php shell]

echo password_hash('123456',PASSWORD_ARGON@ID);

exit