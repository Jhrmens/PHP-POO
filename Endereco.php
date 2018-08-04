<?php
/**
 * Created by PhpStorm.
 * User: jhonatan
 * Date: 04/08/18
 * Time: 13:19
 */

class Endereco
{
    private $rua;
    private $bairro;
    private $cidade;
    private $estado;

    /**
     * Endereco constructor.
     * @param $rua
     * @param $bairro
     * @param $cidade
     * @param $estado
     */
    public function __construct($rua, $bairro, $cidade, $estado)
    {
        $this->rua = $rua;
        $this->bairro = $bairro;
        $this->cidade = $cidade;
        $this->estado = $estado;
    }



    /**
     * @return mixed
     */
    public function getRua()
    {
        return $this->rua;
    }

    /**
     * @param mixed $rua
     */
    public function setRua($rua)
    {
        $this->rua = $rua;
    }

    /**
     * @return mixed
     */
    public function getBairro()
    {
        return $this->bairro;
    }

    /**
     * @param mixed $bairro
     */
    public function setBairro($bairro)
    {
        $this->bairro = $bairro;
    }

    /**
     * @return mixed
     */
    public function getCidade()
    {
        return $this->cidade;
    }

    /**
     * @param mixed $cidade
     */
    public function setCidade($cidade)
    {
        $this->cidade = $cidade;
    }

    /**
     * @return mixed
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * @param mixed $estado
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;
    }

}