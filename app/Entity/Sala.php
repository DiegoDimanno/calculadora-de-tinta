<?php

namespace App\Entity;

class Sala{

 /**
   * Altura em metros da parede
   * @var string
   */
  public $altura_parede;

  /**
   * Largura em metros da parede
   * @var string
   */
  public $largura_parede;

    /**
   * Define se a parede existe janela
   * @var string(s/n)
   */
  public $possui_janela;

    /**
   * Define se a parede existe porta
   * @var string(s/n)
   */
  public $possui_porta;

  /**
   * Define a area da janela   
   * @var float
   */
  public $areaJanela = (2.00 * 1.20); 

  /**
   * Define a area da porta   
   * @var float
   */
  public $areaPorta  = (0.80 * 1.90);

  /**
   * Define a parede do calculo   
   * @param objeto $obParede
   */
  public function __construct($obParede = null){
    $this->altura_parede = $obParede->altura_parede;
    $this->largura_parede = $obParede->largura_parede;
    $this->possui_janela = $obParede->possui_janela;
    $this->possui_porta = $obParede->possui_porta;
  }

  /**
   * Método responsável por calcular a area da parede
   * @param objeto $obComodo
   * @return float
   */
  public function calculoArea($obComodo){  
    $areaParede = $obComodo->altura_parede * $obComodo->largura_parede;

    if ($obComodo->possui_janela === 's' and $obComodo->possui_porta === 'n') {
      $areaParede -= $this->areaJanela;    
    }

    if ($obComodo->possui_porta === 's' and $obComodo->possui_janela === 'n') {
      $areaParede -= $this->areaPorta;
    }

    if ($obComodo->possui_janela === 's' and $obComodo->possui_porta === 's') {
      $areaParede -= $this->areaPorta + $this->areaJanela;
    }

    return $areaParede;
  }

  /**
   * Método responsável por calcular a area total de todas as paredes   *
   * @param float $areaParede1
   * @param float $areaParede2
   * @param float $areaParede3
   * @param float $areaParede4
   * @return float
   */
  public function calculoAreaTotal($areaParede1,$areaParede2,$areaParede3,$areaParede4){
    $areaTotal = $areaParede1 + $areaParede2 + $areaParede3 + $areaParede4;

    return $areaTotal;
  } 

  /**
   * Método responsável por calcular a quantidade total de tinta   
   * @param float $areaParede1
   * @param float $areaParede2
   * @param float $areaParede3
   * @param float $areaParede4
   * @return void
   */
  public function calculoTinta($areaParede1,$areaParede2,$areaParede3,$areaParede4){
    $areaTotal = $areaParede1 + $areaParede2 + $areaParede3 + $areaParede4;
    $quantidadeTinta = $areaTotal / 5;
  
    return $quantidadeTinta;    
  }

  /**
   * Método responsável por calcular a quantidade de latas de tintas  
   * @param float $quantidadeTinta
   * @return array
   */
  public function calcularQuantidadeLatas($quantidadeTinta){
    $latas = [
      '0,5' => 0,
      '2,5' => 0,
      '3,6' => 0,
      '18'  => 0,
    ];

    while ($quantidadeTinta >= 18){
        $latas['18']++;
        $quantidadeTinta -= 18;
    }
    while ($quantidadeTinta >= 3.6){
        $latas['3,6']++;
        $quantidadeTinta -= 3.6;
    }
    while ($quantidadeTinta >= 2.5){
        $latas['2,5']++;
        $quantidadeTinta -= 2.5;
    }
    while ($quantidadeTinta > 0){
        $latas['0,5']++;
        $quantidadeTinta -= 0.5;
    }

    return $latas;
  }

  /**
   * Método responsável por validar se a parede possui menos de 1 metro² ou mais de 50 metros²
   * @return boolean
   */
  public function verificaAreaParede(){
  if ($this->altura_parede * $this->largura_parede < 1.00 or $this->altura_parede * $this->largura_parede > 50.00) {
    return false;
  }
  return true;
} 

/**
 * Método responsável por validar se a altura da parede com porta tem mais de 30cm da altura da porta 
 * @return boolean
 */
public function verificaParedeComPorta(){
  if ($this->possui_porta === 's' and $this->altura_parede < 2.20) {
    return false;
  }
  return true;
} 

/**
 * Método responsavel por validar se a aerea da porta e janela ocupam mais de 50% da area da parede 
 * @return boolean
 */
public function verificaAreaPortaJanela(){
  if ($this->possui_janela === 's' and  $this->possui_porta === 's'and $this->areaJanela + $this->areaPorta > $this->altura_parede * $this->largura_parede/2) {
    return false;
  }
  return true;
}

}