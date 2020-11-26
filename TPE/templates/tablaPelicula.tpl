{include file="header.tpl"}
{include file="botonera.tpl"}
    <div class="semantica_medio">
        <article>
            <h2>Peliculas</h2>
            <section>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Titulo</th>
                            <th scope="col">Genero</th>
                        </tr>
                    </thead>
                    <tbody class="body-table">
                        {foreach from=$peliculas item=pelicula}
                            <tr>
                                <td scope="row">{$pelicula->titulo}</td>
                                <td>{$pelicula->tipo}</td>
                                <td><a type="button" href="verMasPelicula/{$pelicula->id_pelicula}" class="btn btn-light"><i class="fas fa-plus-circle"></i></a></td>
                                {if $logeado neq null && $logeado->administrador}
                                <td><a type="button" href="deletePelicula/{$pelicula->id_pelicula}" class="btn btn-light"><i class="fas fa-trash-alt"></i></a></td>
                                <td><a type="button" href="formularioEditarPelicula/{$pelicula->id_pelicula}" class="btn btn-light"><i class="far fa-edit"></i></a></td>
                                {/if}
                            </tr>
                        {/foreach}
                    </tbody>
                </table>
            </section>
        </article>
        <aside>
            {include file="filtro.tpl"}
            {if $logeado neq null && $logeado->administrador}
            <a type="button" href="formularioInsertarPelicula" class="btn btn-light">Insertar Pelicula<i class="fas fa-plus"></i></a>
            {/if}
        </aside>
    </div>
    <nav aria-label="Page navigation example">
        <ul class="pagination">
            <li class="page-item">
            <a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
            </a>
            </li>
            {for $foo=1 to $paginacion}
            <li class="page-item"><a class="page-link" href="peliculas={$foo}">{$foo}</a></li>
            {/for}
            <li class="page-item">
            <a class="page-link" href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
            </a>
            </li>
        </ul>
    </nav>
{include file="footer.tpl"}