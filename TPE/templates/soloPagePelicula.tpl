{include file="header.tpl"}
{include file="botonera.tpl"}
<div class="soloMovieTitulo">
    <h2 class="tituloPelicula p-3 mb-2 bg-danger">{$pelicula->titulo}</h2>
</div>
<section class="especificacionPelicula">
    <ul class="list-group list-group-flush font-weight-bold">
        <li class="list-group-item">Descripción: {$pelicula->descripcion}</li>
        <li class="list-group-item">Director: {$pelicula->director}</li>
        <li class="list-group-item">Fecha de estreno: {$pelicula->estreno}</li>
        <li class="list-group-item">Género: {$pelicula->tipo}</li>
        {if $pelicula->imagen!==null}
            <li class="list-group-item"><img src="{$pelicula->imagen}"></li>           
        {/if}
    </ul>
</section>
{include file="comentarios.tpl"}
{include file="footer.tpl"}
