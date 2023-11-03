<?php
class Cliente{
    private string $nome;
    private string $cpf;
    private string $codigo;
    private Conta $conta;

    public function __construct($nome,$cpf,$codigo,$conta){
        $this->definirNome($nome);
        $this->definirCpf($cpf);
        $this->definirCodigo($codigo);
        $this->definirConta($conta);
    }

    public function definirNome(string $nome){
        $this->nome = $nome;
    }

    public function definirCpf(string $cpf){
        $this->cpf = $cpf;
    }

    public function definirCodigo(string $codigo){
        $this->codigo = $codigo;
    }

    public function definirConta(Conta $conta){
        $this->conta = $conta;
    }

    public function exibirNome(){
        return $this->nome;
    }

    public function exibirCpf(){
        return $this->cpf;
    }

    public function exibirCodigo(){
        return $this->codigo;
    }

    public function exibirConta(){
        return $this->conta;
    }
}
?>