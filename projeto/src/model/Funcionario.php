<?php

class Funcionario {
    private $idFuncionario;
    private $nome;
    private $dataNascimento;
    private $cpf;
    private $estadoCivil;
    private $tipo;
    private $telefone;
    private $email;
    private $senha;
    private $ativo;

    public function __construct(int $idFuncionario, string $nome, string $dataNascimento, string $cpf, string $estadoCivil, string $tipo, string $telefone, string $email, string $senha, bool $ativo){
        
        $this->idFuncionario = $idFuncionario;
        $this->nome = $nome;
        $this->dataNascimento = $dataNascimento ;
        $this->cpf = $cpf;
        $this->estadoCivil = $estadoCivil ;
        $this->tipo = $tipo;
        $this->telefone = $telefone;
        $this->email = $email;
        $this->senha = $senha;
        $this->ativo = $ativo;
    }
    
    private function validaNome(string $nome){
        if(strlen($nome)<5){
            echo "Nome precisa ter pelo menos 5 caracteres!";
        }else{
            $this->nome = $nome;
        }
    }

    //Métodos acessores de Getters e Setters
    
    public function getIdFuncionario(): int{
        return $this->idFuncionario;
    }
    public function setIdFuncionario(int $idFuncionario): void{
        $this->idFuncionario = $idFuncionario;
    }
    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome): void
    {
        $this->validaNome($nome);
    }

    public function getDataNascimento(): string
    {
        return $this->dataNascimento;
    }

    public function setDataNascimento(string $dataNascimento): void
    {
        $this->dataNascimento = $dataNascimento;
    }

    public function getCpf(): string
    {
        return $this->cpf;
    }

    public function setCpf(string $cpf): void
    {

        $this->cpf = $cpf;
    }

    public function getEestadoCivil(): string
    {
        return $this->estadoCivil;
    }

    public function setEestadoCivil(string $estadoCivil): void
    {
        $this->estadoCivil = $estadoCivil;
    }

    public function getTipo(): string
    {
        return $this->tipo;
    }

    public function setTipo(string $tipo): void
    {
        $this->tipo = $tipo;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }
    public function getTelefone(): string
    {
        return $this->telefone;
    }

    public function setTelefone(string $telefone): void
    {
        $this->telefone = $telefone;
    }

    public function getSenha(): string
    {
        return $this->senha;
    }

    public function setSenha(string $senha): void
    {
        $this->senha = $senha;
    }

    public function getAtivo(): string
    {
        return $this->ativo;
    }

    public function setAtivo(bool $ativo): void
    {
        $this->ativo = $ativo;
    }
}