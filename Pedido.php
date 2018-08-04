<?php
/**
 * Created by PhpStorm.
 * User: jhonatan
 * Date: 04/08/18
 * Time: 13:24
 */
require_once 'ItemPedido.php';
require_once 'Cliente.php';

class Pedido
{
    private $itPed;
    private $cliente;


    /**
     * Pedido constructor.
     * @param $itPed
     * @param $cliente
     */
    public function __construct($itPed, $cliente)
    {
        $this->itPed = $itPed;
        $this->cliente = $cliente;

    }



    public function getItPed()
    {
        return $this->itPed;
    }

    /**
     * @param mixed $itPed
     */
    public function setItPed($itPed)
    {
        $this->itPed = $itPed;
    }

    /**
     * @return mixed
     */
    public function getCliente()
    {
        return $this->cliente;
    }

    /**
     * @param mixed $cliente
     */
    public function setCliente($cliente)
    {
        $this->cliente = $cliente;
    }


}