<?php
include_once("../../estructura/cabecera.php");
?>


    <div class="border border-light m-3 shadow">
        <a class="text-justify text-primary btn btn-light btn-block bg-light"><i class="fa fa-pencil-square-o"></i> Cinem@as</a>
        <form class="p-4" id="tp2eje2" name="tp2eje2" action="accion2.php" method="POST" data-toggle="validator" autocomplete="on">
            <div class="form-row">
                <div class="col-md-6 form-group">
                    <label for="titulo">Título: </label>
                    <input type="text" id="titulo" name="titulo" class="form-control" placeholder="Título">
                </div>
                <div class="col-md-6 form-group">
                    <label for="actores">Actores: </label>
                    <input type="text" id="actores" name="actores" class="form-control" placeholder="Actores">
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6 form-group">
                    <label for="dire">Director: </label>
                    <input type="text" id="dire" name="dire" class="form-control" placeholder="Director">
                </div>
                <div class="col-md-6 form-group">
                    <label for="guion">Guión: </label>
                    <input type="text" id="guion" name="guion" class="form-control" placeholder="Guion">
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6 form-group">
                    <label for="produccion">Producción: </label>
                    <input type="text" id="produccion" name="produccion" class="form-control" placeholder="Producción">
                </div>
                <div class="col-md-6 form-group">
                    <label for="anio">Año: </label>
                    <input type="number" id="anio" name="anio" class="col-6 form-control" placeholder="Año">
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6 form-group">
                    <label for="nacionalidad">Nacionalidad: </label>
                    <input type="text" id="nacionalidad" name="nacionalidad" class="form-control" placeholder="Nacionalidad">
                </div>
                <div class="col-md-6 form-group">
                    <label for="genero">Género: </label>
                    <select id="genero" name="genero" class="form-control">
                        <option value="">SELECCIONAR</option>
                        <option value="acción">Acción</option>
                        <option value="aventura">Aventura</option>
                        <option value="comedia">Comedia</option>
                        <option value="ciencia ficción">Ciencia ficción</option>
                        <option value="drama">Dramática</option>
                        <option value="infantiles">Infantiles</option>
                        <option value="romanticas">Románticas</option>
                        <option value="suspenso">Suspenso</option>
                        <option value="otros">Otros</option>
                    </select>

                </div>
            </div>
            <div class="form-row">
                <div class="col-md-3 form-group">
                    <label for="duracion">Duración: </label>
                    <input type="number" id="duracion" name="duracion" class="form-control" placeholder="Duración">
                    <small class="form-text text-muted">(Minutos)</small>
                </div>
                <div class="col-md-9">
                    <h5>Restricciones de edad</h5>
                    <div class="col-md-4 form-check-inline">
                        <input class="form-check-input" type="radio" id="apt" name="espectador" value="Todo público">
                        <label class="form-check-label" for="apt">Todo público</label>
                    </div>
                    <div class="col-md-4 form-check-inline">
                        <input class="form-check-input" type="radio" id="menor" name="espectador" value="Mayores de 7 años">
                        <label class="form-check-label" for="menor">Mayores de 7 años</label>
                    </div>
                    <div class="col-md-3 form-check-inline">
                        <input class="form-check-input" type="radio" id="mayor" name="espectador" value="Mayores de 18 años">
                        <label class="form-check-label" for="mayor">Mayores de 18 años</label>
                    </div>

                </div>
            </div>
            <div class="col-md-12 form-group">
                <label for="sinopsis">Sinopsis:</label>
                <textarea type="text" id="sinopsis" name="sinopsis" class="form-control" row=3 value=""></textarea>
            </div>
            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-primary">Enviar</button>
                <button type="reset" class="btn btn-light">Borrar</button>
            </div>
        </form>
    </div>
</div>


<?php
include_once("../../estructura/pie.php");
?>