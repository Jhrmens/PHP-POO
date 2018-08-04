<?php
/**
 * Created by PhpStorm.
 * User: jhonatan
 * Date: 03/08/18
 * Time: 23:39
 */

require_once 'Tv.php';
class ItemPedido
{
    private $produto;
    private $transporte;
    private $preco;

    /**
     * ItemPedido constructor.
     * @param $produto
     * @param $transporte
     */
    public function __construct($produto, $transporte)
    {
        $this->produto = $produto;
        $this->transporte = $transporte;
    }

    /**
     * @return mixed
     */
    public function getProduto()
    {
        return $this->produto;
    }

    /**
     * @param mixed $produto
     */
    public function setProduto($produto)
    {
        $this->produto = $produto;
    }

    /**
     * @return mixed
     */
    public function getTransporte()
    {
        return $this->transporte;
    }

    /**
     * @param mixed $transporte
     */
    public function setTransporte($transporte)
    {
        $this->transporte = $transporte;
    }

    /**
     * @return mixed
     */
    public function getPreco()
    {
        return $this->preco;
    }

    /**
     * @param mixed $preco
     */
    public function setPreco($preco)
    {
        $this->preco = $preco;
    }


   }