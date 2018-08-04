<?php
/**
 * Created by PhpStorm.
 * User: jhonatan
 * Date: 03/08/18
 * Time: 23:18
 */
require_once 'Produto.php';
class Tv extends Produto
{


    private $dimensoes;

    /**
     * Tv constructor.
     * @param $dimensoes
     */
    public function __construct($dimensoes, $marca, $modelo, $valor, $descricao)
    {
        $this->dimensoes = $dimensoes;
        $this->setMarca($marca);
        $this->setModelo($modelo);
        $this->setValor($valor);
        $this->setDescricao($descricao);
    }

    /**
     * @return mixed
     */
    public function getDimensoes()
    {
        return $this->dimensoes;
    }

    /**
     * @param mixed $dimensoes
     */
    public function setDimensoes($dimensoes)
    {
        $this->dimensoes = $dimensoes;
    }

}