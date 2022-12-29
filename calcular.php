<?php

require __DIR__.'/vendor/autoload.php';

use \App\Entity\Sala;
$obParede  = new Sala;

$areaJanela = (2.00 * 1.20); 
$areaPorta  = (0.80 * 1.90);
  
  //REALIZA O CALCULA DA AREA DA PAREDE 1 
  $obParede->altura_parede     = (float)$_POST['alturaParede1'];
  $obParede->largura_parede    = (float)$_POST['larguraParede1'];
  $obParede->possui_janela     = $_POST['possuiJanela1'];
  $obParede->possui_porta      = $_POST['possuiPorta1'];

  $verificaParede1             = $obParede->verificaAreaParede($obParede->altura_parede,$obParede->largura_parede);
  $verificaPortaParede1        = $obParede->verificaParedeComPorta($obParede->possui_porta, $obParede->altura_parede);
  $verificaAreaPortaJanela1    = $obParede->verificaAreaPortaJanela($obParede->possui_porta, $obParede->possui_janela);
  
  //REALIZA O CALCULA DA AREA DA PAREDE 2
  $obParede->altura_parede     = (float)$_POST['alturaParede2'];
  $obParede->largura_parede    = (float)$_POST['larguraParede2'];
  $obParede->possui_janela     = $_POST['possuiJanela2'];
  $obParede->possui_porta      = $_POST['possuiPorta2'];

  $verificaParede2             = $obParede->verificaAreaParede($obParede->altura_parede,$obParede->largura_parede);
  $verificaPortaParede2        = $obParede->verificaParedeComPorta($obParede->possui_porta, $obParede->altura_parede);
  $verificaAreaPortaJanela2    = $obParede->verificaAreaPortaJanela($obParede->possui_porta, $obParede->possui_janela);
  
  //REALIZA O CALCULA DA AREA DA PAREDE 3
  $obParede->altura_parede     = (float)$_POST['alturaParede3'];
  $obParede->largura_parede    = (float)$_POST['larguraParede3'];
  $obParede->possui_janela     = $_POST['possuiJanela3'];
  $obParede->possui_porta      = $_POST['possuiPorta3'];

  $verificaParede3             = $obParede->verificaAreaParede($obParede->altura_parede,$obParede->largura_parede);
  $verificaPortaParede3        = $obParede->verificaParedeComPorta($obParede->possui_porta, $obParede->altura_parede);
  $verificaAreaPortaJanela3    = $obParede->verificaAreaPortaJanela($obParede->possui_porta, $obParede->possui_janela);
  
  //REALIZA O CALCULA DA AREA DA PAREDE 4
  $obParede->altura_parede     = (float)$_POST['alturaParede4'];
  $obParede->largura_parede    = (float)$_POST['larguraParede4'];
  $obParede->possui_janela     = $_POST['possuiJanela4'];
  $obParede->possui_porta      = $_POST['possuiPorta4'];

  $verificaParede4             = $obParede->verificaAreaParede($obParede->altura_parede,$obParede->largura_parede);
  $verificaPortaParede4        = $obParede->verificaParedeComPorta($obParede->possui_porta, $obParede->altura_parede);
  $verificaAreaPortaJanela4    = $obParede->verificaAreaPortaJanela($obParede->possui_porta, $obParede->possui_janela);
  
  //VERIFICA SE UMA DAS PAREDES POSSUI MENOS DE 1 METRO² OU MAIS DE 50 METROS²
  if ($verificaParede1 === false or $verificaParede2 === false or $verificaParede3 === false or $verificaParede4 === false) {
    header('location: index.php?status=areaParedeinvalida');
    exit;
  }  

  //VERIFICA SE UMA DAS PAREDES COM PORTA POSSUI MENOS DE 30 CM DA ALTURA DA PORTA
  if ($verificaPortaParede1 === false or $verificaPortaParede2 === false or $verificaPortaParede3 === false or $verificaPortaParede4 === false) {
    header('location: index.php?status=paredeComPortaMenorMinimo');
    exit;
  }

  //VERIFICA SE UMA DAS PAREDES COM PORTA E JANELA POSSUI AREA MAIOR QUE 50% DA AREA TOTAL DA PAREDE
  if ($verificaAreaPortaJanela1 === false or $verificaAreaPortaJanela2 === false or $verificaAreaPortaJanela3 === false or $verificaAreaPortaJanela4 === false) {
    header('location: index.php?status=areaJanelaEPortaMaiorMetadeParede');
    exit;
  }

  $areaParede1 = $obParede->calculoArea($obParede);

  $areaParede2 = $obParede->calculoArea($obParede);

  $areaParede3 = $obParede->calculoArea($obParede);

  $areaParede4 = $obParede->calculoArea($obParede);

//REALIZA O CALCULO DA QUANTIDADE TOTAL DE TINTA NECESSARIA PARA PINTAR A SALA
$quantidadeTinta = $obParede->calculoTinta($areaParede1,$areaParede2,$areaParede3,$areaParede4);

//REALIZA O CALCULO TOTAL DA AREAS DE TODAS AS PAREDES
$areaTotal = $obParede->calculoAreaTotal($areaParede1,$areaParede2,$areaParede3,$areaParede4);

//REALIZA O CALCULO DA QUANTIDADE DE LATAS DE TINTA NECESSARIA PARA PINTAR A SALA
$quantidadeLata = $obParede->calcularQuantidadeLatas($quantidadeTinta);

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/listagem.php';
include __DIR__.'/includes/footer.php';