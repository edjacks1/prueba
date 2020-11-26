@csrf

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
        <x-input tipo="emailInput" atributo="email" nombreDisplay="Correo electronico" />
    </div>
</div>

<div class="row">
    <div class="col">
        <x-text-area tipo="tipoContratoInput" atributo="tipo_contrato" nombreDisplay="Tipo de contrato" />
    </div>
</div>