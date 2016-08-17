## Componente de integração com APIs da Fipe

Este Projeto tem por finalidade prover uma integração menos traumática e padronizada com as API's da smartbill

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
    'FIPE_API_FIPE_API_TIMEOUT' = 10

Para iniciar as consultas basta instânciar uma das classes presentes no pacote "Fipe\Api\*", passar o Client 
como parâmetro do construtor, ou deixar vazio para que seja acatado o padrão, ficando da seguinte forma:

```php
$caminhaoApi = new \FipeApi\Api\Caminhao();
```

Ou

```php
$client = new \FipeApi\Api\Caminhao($client);
```

Caso precise alterar os parâmetros após inicializado o client, basta fazer da seguinte forma:

```php
$client = new \FipeApi\Client();

$client->setParameter(\FiapeApi\FipeApiParameter::FIPE_API_HOST, "http://fipeapi.appspot.com/api/1/");
$client->setParameter(\FiapeApi\FipeApiParameter::FIPE_API_TIMEOUT, 50);

$caminhaoApi = new \FipeApi\Api\Caminhao($client);
```

[Bitbucket]: <https://github.com/adrianolaselva/fipeapi.git>