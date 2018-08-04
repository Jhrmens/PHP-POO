<?php
/**
 * Created by PhpStorm.
 * User: jhonatan
 * Date: 03/08/18
 * Time: 23:39
 */

class Transporte
{
    private $tipoTransporte;
    private $localSaida;
    private $localEntrega;
    private $precoFrete;

    /**
     * Transporte constructor.
     * @param $tipoTransporte
     * @param $localSaida
     * @param $localEntrega
     * @param $precoFrete
     */
    public function __construct($tipoTransporte, $localSaida, $localEntrega, $precoFrete)
    {
        $this->tipoTransporte = $tipoTransporte;
        $this->localSaida = $localSaida;
        $this->localEntrega = $localEntrega;
        $this->precoFrete = $precoFrete;
    }


    /**
     * @return mixed
     */
    public function getTipoTransporte()
    {
        return $this->tipoTransporte;
    }

    /**
     * @param mixed $tipoTransporte
     */
    public function setTipoTransporte($tipoTransporte)
    {
        $this->tipoTransporte = $tipoTransporte;
    }

    /**
     * @return mixed
     */
    public function getLocalSaida()
    {
        return $this->localSaida;
    }

    /**
     * @param mixed $localSaida
     */
    public function setLocalSaida($localSaida)
    {
        $this->localSaida = $localSaida;
    }

    /**
     * @return mixed
     */
    public function getLocalEntrega()
    {
        return $this->localEntrega;
    }

    /**
     * @param mixed $localEntrega
     */
    public function setLocalEntrega($localEntrega)
    {
        $this->localEntrega = $localEntrega;
    }

    /**
     * @return mixed
     */
    public function getPrecoFrete()
    {
        return $this->precoFrete;
    }

    /**
     * @param mixed $precoFrete
     */
    public function setPrecoFrete($precoFrete)
    {
        $this->precoFrete = $precoFrete;
    }


}