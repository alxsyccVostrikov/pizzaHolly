<?php
include "conexao.php";
//include "pessoa.php";

class cliente{
public $nome;
public $cpf;
public $rg;  
public $nascimento;
public $rua;
public $bairro;
public $email;
public $telefone;
  
    
  
  public function setNome($nome){
    $this->nome=$nome;
    
  }
  public function getNome(){
  return $this->nome;  
  }
  public function setCpf($cpf){
    $this->cpf=$cpf;
    
  }
  
  public function getCpf(){
  return $this->cpf;  
  }
  public function setRg($rg){
    $this->rg=$rg;
    
  }
  public function getRg(){
  return $this->rg;  
  }

  public function setNascimento($nascimento){
    $this->nascimento=$nascimento;
    
  }
  public function getNascimento(){
  return $this->nascimento;  
  }
  public function setRua($rua){
    $this->rua=$rua;
    
  }
  public function getRua(){
  return $this->rua;  
  }
   public function setBairro($bairro){
    $this->bairro=$bairro;
    
  }
  public function getBairro(){
  return $this->bairro;  
  }
   public function setEmail($email){
    $this->email=$email;
    
  }
  public function getEmail(){
  return $this->email;  
  }
   public function setTelefone($telefone){
    $this->telefone=$telefone;
    
  }
  public function getTelefone(){
  return $this->telefone;  
  }
  
  


}