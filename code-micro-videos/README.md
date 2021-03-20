# :mag: Code Micro Videos

Microsserviço de catálogo de vídeos

## Começando

As instruções a seguir irão lhe proporcionar uma cópia deste projeto e de como rodar em sua máquina local para propósito de desenvolvimento e testes. Veja na sessão de [deployment](#Deployment) para saber com mais detalhes de como dar deploy em sua aplicação.

### Pre-requisitos

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

Finalize com um exemplo obtendo dados do sistema ou fazendo uma pequena demostração do funcionamento da aplicação


## Executando os testes

Explique como rodar os testes automáticos do seu sistema caso haja algum


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

Nós usamos [GitHub](https://github.com/ para versionamento. Para visualizar as versões disponíveis veja [tags nesse repositórios](https://github.com/your/project/tags).

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



