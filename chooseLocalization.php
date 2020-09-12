<form method="POST" action="" id="findDistance">

<p>Escolha a rota inicial</p>
    <div class="row">
        <div class="form-group  col-md-3">
            <label for="firstCity">Nome da Cidade</label>
            <input type="text" class="form-control" id="firstCity"  name="firstCity" placeholder="Digite o nome da cidade" required>
        </div>

        <div class="form-group  col-md-3">
            <label for="firstLatitude">Latitude</label>
            <input type="text" class="form-control" id="firstLatitude"  name="firstLatitude" placeholder="Digite a latitude" required>
        </div>

        <div class="form-group  col-md-3">
            <label for="firstLongitude">Longitude</label>
            <input type="text" class="form-control" id="firstLongitude" name="firstLongitude" placeholder="Digite a longitude" required>
        </div>

    </div>

    <p>Escolha a rota final</p>
        <div class="row">
            <div class="form-group  col-md-3">
                <label for="secondCity">Nome da Cidade</label>
                <input type="text" class="form-control" id="secondCity"  name="secondCity" placeholder="Digite o nome da cidade" required>
            </div>

            <div class="form-group  col-md-3">
                <label for="secondLatitude">Latitude</label>
                <input type="text" class="form-control" id="secondLatitude"  name="secondLatitude" placeholder="Digite a latitude" required>
            </div>

            <div class="form-group  col-md-3">
                <label for="secondLongitude">Longitude</label>
                <input type="text" class="form-control" id="secondLongitude" name="secondLongitude" placeholder="Digite a longitude" required>
            </div>

        </div>

        <div class="form-group  col-md-3">
                <button id="showDistance" type="submit" class="btn btn-primary">Procurar</button>
        </div>
</form>

<div id="map">
        <iframe width="750" scrolling="no" height="350" frameborder="0" id="iframeMap" name="iframeMap" marginheight="0" marginwidth="0" 
        src=""></iframe>
  </div>
  <div id="resultDistance"></div>
  <div id="resultDistance2"></div>
  <button id= "linkCityRegister" class="btn" >Deseja cadastrar mais uma cidade?</button>
