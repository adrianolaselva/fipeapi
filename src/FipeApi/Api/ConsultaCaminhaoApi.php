<?php

namespace FipeApi\Api;

use FipeApi\AbstractConsultaApi;
use FipeApi\Constants\Tipo;
use FipeApi\Client;

/**
 * Class ConsultaCaminhaoApi
 *
 * @package FipeApi\Api
 */
class ConsultaCaminhaoApi extends AbstractConsultaApi
{

    /**
     * CaminhaoApi constructor.
     *
     * @param Client|null $client
     */
    public function __construct(Client $client = null)
    {
        parent::__construct(Tipo::CAMINHOES, $client);
    }

}