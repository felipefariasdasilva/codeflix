# Code Micro Videos

## Descrição

Microsserviço de catálogo de vídeos

## Rodar a aplicação

#### Crie os containers com Docker

```bash

$ docker-compose up -d
```

#### Accesse no browser

```
http://localhost:8000
```

## Apéndice

```bash

# executar o bash do laravel

$ docker exec -it micro-videos-app bash
```

```bash

# rodando a migrate no laravel

$ php artisan migrate:refresh --seed
```

```bash

# usando o tinker

$ php artisan tinker
```

```bash

# criando model (--all irá gerar a migração, factory e controller para o model)

$ php artisan make:model <Folder>/<Model> --all
```

```bash

# caso a migration nao funcione

$ composer dump-autoload

$ php artisan migrate:fresh --seed
```



