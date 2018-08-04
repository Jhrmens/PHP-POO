<?php
/**
 * Created by PhpStorm.
 * User: jhonatan
 * Date: 03/08/18
 * Time: 23:24
 */
require_once 'Produto.php';
class Celular extends Produto
{
    private $qtChips;
    private $armazenamento;
    private $processador;
    private $memoria;

    /**
     * Celular constructor.
     * @param $qtChips
     * @param $armazenamento
     * @param $processador
     * @param $memoria
     */
    public function __construct($qtChips, $armazenamento, $processador, $memoria, $marca, $modelo, $valor, $descricao)
    {
        $this->qtChips = $qtChips;
        $this->armazenamento = $armazenamento;
        $this->processador = $processador;
        $this->memoria = $memoria;
        $this->setMarca($marca);
        $this->setModelo($modelo);
        $this->setValor($valor);
        $this->setDescricao($descricao);
    }

    /**
     * @return mixed
     */
    public function getQtChips()
    {
        return $this->qtChips;
    }

    /**
     * @param mixed $qtChips
     */
    public function setQtChips($qtChips)
    {
        $this->qtChips = $qtChips;
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
}