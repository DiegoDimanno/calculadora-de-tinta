<div class="card">
  <img class="img" src="https://thumbs.dreamstime.com/b/uma-lata-de-estanho-aberta-com-tinta-vermelha-derramada-e-um-pincel-manchado-ilustra%C3%A7%C3%A3o-realista-do-vetor-d-para-renova%C3%A7%C3%A3o-da-189160957.jpg" alt="Denim Jeans" style="width:100%">
  <h1>Resultado do calculo</h1><br>

  <h3>Area Total:</h3>
  <p class="result"><?= $areaTotal ?> M²</p><br>

  <h3>Quantidade de Tinta:</h3>
  <p class="result"><?= number_format($quantidadeTinta,2) ?> Litros</p><br>

  <h3>Quantidade de Latas de tinta:</h3>
  <p class="result"><?= !empty($quantidadeLata['18'])  ? $quantidadeLata['18'] . "lata(s) de 18 litros</p><br>"   : "" ?>
  <p class="result"><?= !empty($quantidadeLata['3,6']) ? $quantidadeLata['3,6'] . "lata(s) de 3,6 litros</p><br>" : "" ?>
  <p class="result"><?= !empty($quantidadeLata['2,5']) ? $quantidadeLata['2,5'] . "lata(s) de 2,5 litros</p><br>" : "" ?>
  <p class="result"><?= !empty($quantidadeLata['0,5']) ? $quantidadeLata['0,5'] . "lata(s) de 0,5 litros</p><br>" : "" ?>

  <p><a href="index.php"><button>Voltar</button></p></a>
</div>