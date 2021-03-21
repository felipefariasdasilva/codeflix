# :movie_camera: Code Micro Videos

Microsserviço de catálogo de vídeos

## Começando

As instruções a seguir irão lhe proporcionar uma cópia deste projeto e de como rodar em sua máquina local para propósito de desenvolvimento e testes. Veja na sessão de [deployment](#Deployment) para saber com mais detalhes de como dar deploy em sua aplicação.

### Pré-requisitos

Dependências necessárias para se instalar o software e como instalá-las.

1. É necessário que você tenha Docker instalado na sua máquina. Para verificar, rode o seguinte comando:

```bash
$ docker -version
```

### Instalação

Para rodar a aplicação, execute os próximos passos:

1. Faça o clone do projeto

```bash
$ git clone https://github.com/felipefariasdasilva/codeflix.git
```

2. Entre na pasta

```bash
$ cd codeflix
```

3. Execute a aplicação com Docker Compose

```bash
$ docker-compose up -d
```

## Observação

Caso você esteja usando o SO Windows e sem utilizar o WSL2, você terá problemas em executar o `docker-compose`, pois existe diferenças no sistema de fim de arquivo (CRLF/LF).
Para contornar essa situção faça o seguinte:

1. Abra o `git bash`
2. Caminhe até a pasta `.docker/` do projeto
3. Execute o comando 
```bash
   $ dos2unix entrypoint.sh
```
## Endpoints

* Recurso: Category
```bash
# GET ALL CATEGORIES
$ /api/categories

# GET CATEGORY BY ID
$ /api/categories/{id}

# POST CATEGORY
$ /api/categories

# UPDATE CATEGORY
$ /api/categories/{id}

# DELETE CATEGORY
$ /api/categories/{id}

```

* Recurso: Genre
```bash
# GET ALL GENRES
$ /api/genres

# GET GENRE BY ID
$ /api/genres/{id}

# POST GENRE
$ /api/genres

# UPDATE GENRE
$ /api/genres/{id}

# DELETE GENRE
$ /api/genres/{id}

```

## Executando os testes

Para rodar os testes automáticos do seu sistema siga os comandos abaixo:

```bash
# rodando todos testes unitários

$ vendor/bin/phpunit

```

```bash
# rodando teste unitário filtrado por classe

$ vendor/bin/phpunit --filter <ClassName>

```

```bash
# rodando teste unitário filtrado por classe e por método

$ vendor/bin/phpunit --filter <ClassName>::<Method>
````


### Análise dos testes fim-a-fim

Explique o que esses testes testam e o porquê.

```
Dê um exemplo
```

### Estilo de criação dos testes

Explique o que esses testes testam e o porque.

```
Dê um exemplo
```

## Deployment

Adicione notas de como dar deploy do sistema em produção.

## Desenvolvido com
* [Laravel](https://laravel.com/) - O framework web utilizado

## Contribuições

Criar um arquivo chamado CONTRIBUTING.md e colocar suas regras para contribuição nesse repositório.

Por favor leia [CONTRIBUTING.md]() para mais detalhes a respeito do nosso código de contuda e o processo de submissão de pull-requests para nós.

## Versionamento

Nós usamos [GitHub](https://github.com/) para versionamento. Para visualizar as versões disponíveis veja [tags nesse repositórios](https://github.com/your/project/tags).

## Autores

* **Felipe Farias** - *Trabalho inicial* - [@felipefariasdasilva](https://github.com/felipefariasdasilva)

Veja também a lista completa de [contribuidores](https://github.com/your/project/contributors) que contribuiram para o desenvolvimento deste projeto.

## Licença

Esse projeto é licenciado pela MIT License - veja também [LICENSE.md](LICENSE.md) para mais detalhes

## Agradecimentos

* Inspiração
* etc

## Apêndice

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

```bash
# criando a classe de teste unitário em FEATURE
$ php artisan make:test <ClassName>+'Test'

# criando a classe de teste unitário em UNIT
$ php artisan make:test <ClassName>+'Test' --unit
```

```bash
# acessando serviço via docker-compose
$ docker-compose exec <service> bash

# vendo as variáveis ambiente (após comando acima)
$ printenv
```

## Acessando o banco de dados

```bash

# acessando serviço via docker-compose
$ docker-compose exec db bash

# logando no banco de dados
$ mysql -u<user> -p<password>

# acessando o banco de dados
$ use <database>;

# vizualizando tabelas
$ show tables;
```



