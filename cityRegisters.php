<main class="container mt-5">
    <section class="col">
        <div id="mainCityRegister">
            <form id='formCityRegister' method="POST" action="">
                <div class="form-group  col-md-6">
                    <label for="cityName">Nome da Cidade</label>
                    <input type="text" class="form-control" id="cityName"  name="cityName" placeholder="Digite o nome da cidade">
                </div>

                <div class="form-group  col-md-6">
                    <label for="latitude">Latitude</label>
                    <input type="text" class="form-control" id="latitude"  name="latitude" placeholder="Digite a latitude">
                </div>

                <div class="form-group  col-md-6">
                    <label for="longitude">Longitude</label>
                    <input type="text" class="form-control" id="longitude" name="longitude" placeholder="Digite a longitude">
                </div>

                <div class="form-group  col-md-6">
                    <button id="btnCityRegister" type="submit" class="btn btn-primary">Cadastrar</button>
                </div>

            </form>
        </div>
    </section>
</main>
  