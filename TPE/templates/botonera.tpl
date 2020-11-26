<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <h1 class="navbar-brand">MABREX</h1>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
        <a class="nav-link active" href="home">Home <span class="sr-only">(current)</span></a>
        <a class="nav-link" href="peliculas">Peliculas</a>
        <a class="nav-link" href="generos">Géneros</a>
        {if $logeado neq null}
            {if $logeado->administrador}
            <a class="nav-link" href="usuarios">Usuarios</a>
            {/if}
        <a class="nav-link" href="logout">Cerrar Sesion</a>
        {else}
        <a class="nav-link" href="login">Iniciar Sesion</a>
        {/if}
        </div>
    </div>
    </nav>
</header>
