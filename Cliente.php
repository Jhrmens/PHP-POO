<?php
/**
 * Created by PhpStorm.
 * User: jhonatan
 * Date: 04/08/18
 * Time: 13:22
 */
require_once 'Endereco.php';
class Cliente
{
    private $nome;
    private $cpf;
    private $endereco;

    /**
     * Cliente constructor.
     * @param $nome
     * @param $cpf
     * @param $endereco
     */
    public function __construct($nome, $cpf, $endereco)
    {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->endereco = $endereco;
    }


    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * @param mixed $cpf
     */
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }

    /**
     * @return mixed
     */
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * @param mixed $endereco
     */
    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
    }



}