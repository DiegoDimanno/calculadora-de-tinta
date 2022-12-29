<?=$mensagem?>

<div id="form">
      <form action="calcular.php" method="post">
        <h2 class="title">Parede 1</h2>

        <label for="alturaParede">Altura da parede:</label>
        <div class="input">
          <input type="text" pattern="[0-9.]{4,5}" name="alturaParede1" placeholder="ex: 3.10" required>
        </div>

        <label for="alturaParede">Largura da parede:</label>
        <div class="input">
          <input type="text" pattern="[0-9.]{4,5}" name="larguraParede1" placeholder="ex: 2.20" required>
        </div>

        <div>
        <div>
          <label for="possuiJanela">Possui Janela?</label>
          <div class="input">
            <input type="radio" name="possuiJanela1" value="s"> Sim

            <label for="possuiJanela">
              <input type="radio" name="possuiJanela1" value="n" checked> Não
            </label>
          </div>
        </div>

        <div>
          <label for="possuiPorta">Possui Porta?</label>
          <div class="input">
            <input type="radio" name="possuiPorta1" value="s"> Sim

            <label for="possuiPorta">
              <input type="radio" name="possuiPorta1" value="n" checked> Não
            </label>
          </div>
        </div>
      </div>  
    </div>    

    <div id="form">
        <h2 class="title">Parede 2</h2>

        <label for="alturaParede">Altura da parede:</label>
        <div class="input">
          <input type="text" pattern="[0-9.]{4,5}" name="alturaParede2" placeholder="ex: 3.10" required>
        </div>

        <label for="alturaParede">Largura da parede:</label>
        <div class="input">
          <input type="text" pattern="[0-9.]{4,5}" name="larguraParede2" placeholder="ex: 2.20" required>
        </div>

        <div>
          <label for="possuiJanela">Possui Janela?</label>
          <div class="input">
            <input type="radio" name="possuiJanela2" value="s"> Sim

            <label for="possuiJanela">
              <input type="radio" name="possuiJanela2" value="n" checked> Não
            </label>
          </div>
        </div>

        <div>
          <label for="possuiPorta">Possui Porta?</label>
          <div class="input">
            <input type="radio" name="possuiPorta2" value="s"> Sim

            <label for="possuiPorta">
              <input type="radio" name="possuiPorta2" value="n" checked> Não
            </label>
          </div>
        </div>
    </div>

    <div id="form">
        <h2 class="title">Parede 3</h2>

        <label for="alturaParede">Altura da parede:</label>
        <div class="input">
          <input type="text" pattern="[0-9.]{4,5}" name="alturaParede3" placeholder="ex: 3.10" required>
        </div>

        <label for="alturaParede">Largura da parede:</label>
        <div class="input">
          <input type="text" pattern="[0-9.]{4,5}" name="larguraParede3" placeholder="ex: 2.20" required>
        </div>

        <div>
          <label for="possuiJanela">Possui Janela?</label>
          <div class="input">
            <input type="radio" name="possuiJanela3" value="s"> Sim

            <label for="possuiJanela">
              <input type="radio" name="possuiJanela3" value="n" checked> Não
            </label>
          </div>
        </div>

        <div>
          <label for="possuiPorta">Possui Porta?</label>
          <div class="input">
            <input type="radio" name="possuiPorta3" value="s"> Sim

            <label for="possuiPorta">
              <input type="radio" name="possuiPorta3" value="n" checked> Não
            </label>
          </div>
        </div>
    </div>

    <div id="form">
        <h2 class="title">Parede 4</h2>

        <label for="alturaParede">Altura da parede:</label>
        <div class="input">
          <input type="text" pattern="[0-9.]{4,5}" name="alturaParede4" placeholder="ex: 3.10" required>
        </div>

        <label for="alturaParede">Largura da parede:</label>
        <div class="input">
          <input type="text" pattern="[0-9.]{4,5}" name="larguraParede4" placeholder="ex: 2.20" required>
        </div>

        <div>
          <label for="possuiJanela">Possui Janela?</label>
          <div class="input">
            <input type="radio" name="possuiJanela4" value="s"> Sim

            <label for="possuiJanela">
              <input type="radio" name="possuiJanela4" value="n" checked> Não
            </label>
          </div>
        </div>

        <div>
          <label for="possuiPorta">Possui Porta?</label>
          <div class="input">
            <input type="radio" name="possuiPorta4" value="s"> Sim

            <label for="possuiPorta">
              <input type="radio" name="possuiPorta4" value="n" checked> Não
            </label>
          </div>
        </div>        
      </div>
      
      <div id="btn">
        <button type="submit">Calcular</button>
      </div>

  </form>
  