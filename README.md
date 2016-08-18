[![version][packagist-badge]][packagist]
[packagist-badge]: https://img.shields.io/packagist/v/adrianolaselva/fipeapi.svg
[packagist]: https://packagist.org/packages/adrianolaselva/fipeapi

[![Build Status](https://travis-ci.org/adrianolaselva/fipeapi.svg?branch=master)](https://travis-ci.org/adrianolaselva/fipeapi)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/adrianolaselva/fipeapi/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/adrianolaselva/fipeapi/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/adrianolaselva/fipeapi/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/adrianolaselva/fipeapi/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/adrianolaselva/fipeapi/badges/build.png?b=master)](https://scrutinizer-ci.com/g/adrianolaselva/fipeapi/build-status/master)
[![License](https://poser.pugx.org/adrianolaselva/fipeapi/license)](https://packagist.org/packages/adrianolaselva/fipeapi)

[![Total Downloads](https://poser.pugx.org/adrianolaselva/fipeapi/downloads)](https://packagist.org/packages/adrianolaselva/fipeapi)
[![Monthly Downloads](https://poser.pugx.org/adrianolaselva/fipeapi/d/monthly)](https://packagist.org/packages/adrianolaselva/fipeapi)
[![Daily Downloads](https://poser.pugx.org/adrianolaselva/fipeapi/d/daily)](https://packagist.org/packages/adrianolaselva/fipeapi)


## Pacote de integração com APIs da Fipe

Este Projeto tem por finalidade prover uma integração menos traumática e padronizada com as API's de consulta da Fipe


### Dependências
#### require
* PHP >= 5.6
* php-curl-class/php-curl-class ^4.11
* apache/log4php 2.3.0

#### require-dev
* phpunit/phpunit 5.2.12

### Instalação

Execute em seu shell:

    composer require adrianolaselva/fipeapi

### Descrição

Para passar parâmetros contendo configurações será necessário instânciar o Client e passar um array da seguinte forma.

```php
$client = new \FipeApi\Client([
    \FiapeApi\FipeApiParameter::FIPE_API_HOST  => "http://fipeapi.appspot.com/api/1/",
    \FiapeApi\FipeApiParameter::FIPE_API_TIMEOUT  => 20,
]);
```

Caso o parâmetro do construtor seja passado como nulo, as seguintes informações serão usadas como padrão.

    'FIPE_API_HOST' = 'http://fipeapi.appspot.com/api/1/'
    'FIPE_API_TIMEOUT' = 10

Para iniciar as consultas basta instânciar uma das classes presentes no pacote "Fipe\Api\\*", passar a instância do Client 
como parâmetro no construtor ou deixar vazio para que seja acatado o padrão, ficando da seguinte forma:

```php
$caminhaoApi = new \FipeApi\Api\Caminhao();
```

Ou

```php
$caminhaoApi = new \FipeApi\Api\Caminhao($client);
```

Caso precise alterar os parâmetros após inicializado o client, basta fazer da seguinte forma:

```php
$client = new \FipeApi\Client();

$client->setParameter(\FiapeApi\FipeApiParameter::FIPE_API_HOST, "http://fipeapi.appspot.com/api/1/");
$client->setParameter(\FiapeApi\FipeApiParameter::FIPE_API_TIMEOUT, 50);

$caminhaoApi = new \FipeApi\Api\Caminhao($client);
```

[Bitbucket]: <https://github.com/adrianolaselva/fipeapi.git>