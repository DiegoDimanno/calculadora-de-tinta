<?php

  $mensagem = '';
  if(isset($_GET['status'])){
    switch ($_GET['status']) {
      case 'areaParedeinvalida':
        $mensagem = '<div class="erro">A área de umas das paredes não pode ter menos de 1 metro² ou mais de 50 metros²</div>';
        break;

        case 'paredeComPortaMenorMinimo':
            $mensagem = '<div class="erro">A altura da parede com porta deve ser no minimo 30cm maior que a altura da porta</div>';
            break;

            case 'areaJanelaEPortaMaiorMetadeParede':
                $mensagem = '<div class="erro">Uma Parede com porta e janela não pode ocupar mais de 50% da area da parede</div>';
                break;
    }
  }

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/formulario.php';
include __DIR__.'/includes/footer.php';