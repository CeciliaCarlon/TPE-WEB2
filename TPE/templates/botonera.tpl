<header>
    <h1>MABREX</h1>
    <nav>
        <button class="btn_menu">Menu</button>
        <ul class="botonera">
            <li><a class="boton" href="home">Inicio</a></li>
            <li><a class="boton" href="tabla">Tabla</a></li>
            {if $logeado}
            <li><a class="boton" href="logout">Cerrar Sesion</a></li>
            {else}
            <li><a class="boton" href="login">Iniciar Sesion</a></li>
            {/if}
        </ul>
    </nav>
</header>