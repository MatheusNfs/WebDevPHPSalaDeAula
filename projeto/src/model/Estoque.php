<?php

class Estoque{

    private $idEstoque;
    private Produto $produto;
    private $qtd;
    private $registro;
    private $dataRegistro;
    private $valorCompra;
    private $valorVenda;
    
    public function __construct(
        $idEstoque,
        Produto $produto,
        $qtd,
        $registro,
        $dataRegistro,
        $valorCompra,
        $valorVenda
        )
        {
        $this->idEstoque = $idEstoque;
        $this->produto = $produto;
        $this->qtd = $qtd;
        $this->registro = $registro;
        $this->dataRegistro = $dataRegistro;
        $this->valorCompra = $valorCompra;
        $this->valorVenda = $valorVenda;
    }

    //Metodos acessores Getters e Setters 
    public function getIdEstoque(): int{
        return $this->idEstoque;
    }

    public function setIdEstoque(int $idEstoque): void{
        $this->idEstoque = $idEstoque;
    }

    public function getProduto(): Produto
    {
        return $this->produto;
    }

    public function setProduto(int $produto): void
    {
        $this->produto = $produto;
    }

    public function getQtd(): int{
        return $this->qtd;
    }

    public function setQtd(int $qtd): void{
        $this->qtd = $qtd;
    }

    public function getRegistro(): string{
        return $this->registro;
    }

    public function setRegistro(string $registro): void{
        $this->registro = $registro;
    }

    public function getDataRegistro(): string {
        return $this->dataRegistro;
    }

    public function setDataRegistro(string $dataRegistro): void{
        $this->dataRegistro = $dataRegistro;
    }

    public function getValorCompra(): float{
        return $this->valorCompra;
    }

    public function setValorCompra(float $valorCompra): void{
        $this->valorCompra = $valorCompra;
    }

    public function getValorVenda(): float{
        return $this->valorVenda;
    }

    public function setValorVenda(float $valorVenda): void{
        $this->valorVenda = $valorVenda;
    }
}



