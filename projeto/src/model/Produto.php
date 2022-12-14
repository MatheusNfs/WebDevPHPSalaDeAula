<?php
class Produto
{

    private $idProduto;
    private $nome;
    private $tipo;
    private $categoria;
    private $fabricante;
    private $descricao;
    private $foto;
    private $ativo;

    public function __construct(
        $idProduto,
        $nome,
        $tipo,
        $categoria,
        $fabricante,
        $descricao,
        $foto,
        $ativo
    ) {
        $this->idProduto = $idProduto;
        $this->nome = $nome;
        $this->tipo = $tipo;
        $this->categoria = $categoria;
        $this->fabricante = $fabricante;
        $this->descricao = $descricao;
        $this->foto = $foto;
        $this->ativo = $ativo;
    }

    //Metodos acessores Getters e Setters 
    public function getIdProduto(): int
    {
        return $this->idProduto;
    }

    public function setIdProduto(int $idProduto): void
    {
        $this->idProduto = $idProduto;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

    public function getTipo(): string
    {
        return $this->tipo;
    }

    public function setTipo(string $tipo): void
    {
        $this->tipo = $tipo;
    }

    public function getCategoria(): string
    {
        return $this->categoria;
    }

    public function setCategoria(string $categoria): void
    {
        $this->categoria = $categoria;
    }

    public function getFabricante(): string
    {
        return $this->fabricante;
    }

    public function setFabricante(string $fabricante): void
    {
        $this->fabricante = $fabricante;
    }

    public function getDescricao(): string
    {
        return $this->descricao;
    }

    public function setDescricao(string $descricao): void
    {
        $this->descricao = $descricao;
    }

    public function getFoto():string{
        return $this->foto;
    }

    public function setFoto(string $foto): void{
        $this->foto = $foto;
    }

    public function getAtivo(): bool{
        return $this->ativo;
    }

    public function setAtivo(bool $ativo): void{
        $this->ativo = $ativo;
    }

}


