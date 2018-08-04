<?php
/**
 * Created by PhpStorm.
 * User: jhonatan
 * Date: 03/08/18
 * Time: 23:22
 */
require_once 'Produto.php';
class Notebook extends Produto
{
    private $armazenamento;
    private $memoria;
    private $dimensoes;
    private $processador;

    /**
     * Notebook constructor.
     * @param $armazenamento
     * @param $memoria
     * @param $dimensoes
     * @param $processador
     */
    public function __construct($armazenamento, $memoria, $dimensoes, $processador, $marca, $modelo, $valor, $descricao)
    {
        $this->armazenamento = $armazenamento;
        $this->memoria = $memoria;
        $this->dimensoes = $dimensoes;
        $this->processador = $processador;
        $this->setMarca($marca);
        $this->setModelo($modelo);
        $this->setValor($valor);
        $this->setDescricao($descricao);
    }

    /**
     * @return mixed
     */
    public function getArmazenamento()
    {
        return $this->armazenamento;
    }

    /**
     * @param mixed $armazenamento
     */
    public function setArmazenamento($armazenamento)
    {
        $this->armazenamento = $armazenamento;
    }

    /**
     * @return mixed
     */
    public function getMemoria()
    {
        return $this->memoria;
    }

    /**
     * @param mixed $memoria
     */
    public function setMemoria($memoria)
    {
        $this->memoria = $memoria;
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

    /**
     * @return mixed
     */
    public function getProcessador()
    {
        return $this->processador;
    }

    /**
     * @param mixed $processador
     */
    public function setProcessador($processador)
    {
        $this->processador = $processador;
    }


}