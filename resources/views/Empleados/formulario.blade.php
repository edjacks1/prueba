<form>
    <div class="row">
        <div class="col">
            <x-input tipo="nombreInput" atributo="nombre" nombreDisplay="Nombre" />
        </div>

        <div class="col">
            <x-input tipo="apellidoPaternoInput" atributo="apellido_paterno" nombreDisplay="Apellido paterno" />
        </div>

        <div class="col">
            <x-input tipo="apellidoMaternoInput" atributo="apellido_materno" nombreDisplay="Apellido materno" />
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="form-group">
                <label for="tipoContratoInput">Tipo de contrato</label>
                <textarea class="form-control" id="apellidoPaternoInput" name="tipo_contracto"></textarea>
            </div>
        </div>
    </div>
</form>