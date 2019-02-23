# cursoLaravel

## Udemy - Introdução ao Laravel 5.3

1) Antes de verificar como requisito de software, pode ser Ubuntu ou Windows
```
1- Composer (https://getcomposer.org/)
2- Mysql-Server ou MariaDB-Server
```

2) Clonar o repositorio para seu local
```
git git@github.com:estevamota/cursoLaravel.git
```

3) Acessa para diretorio.
```
cd cursoLaravel
```

4) Executar o composer como dependencias os bibliotecas.
```
composer install
```

5) Executar para banco de dados, antes de verificar o arquivo ".env" como Servidor, Usuario e Senha do Mysql.
```
php artisan migrate
```

6) Executar para criar o registro na tabela Users
```
php artisan db:seed
```

7) Executar o serviço de WEB
```
php artisan serve
```

8) Acessa no navegacao
```
http://localhost:8000
```

9) Acesso ao Admin
```
Login: admin
Login: 123456
```
