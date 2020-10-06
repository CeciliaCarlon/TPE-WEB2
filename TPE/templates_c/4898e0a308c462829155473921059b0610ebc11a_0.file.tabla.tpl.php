<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-04 22:46:02
  from 'C:\xampp\htdocs\TPE\templates\tabla.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f7a348a27ab39_62595101',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4898e0a308c462829155473921059b0610ebc11a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE\\templates\\tabla.tpl',
      1 => 1601844259,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:botonera.tpl' => 1,
    'file:filtro.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f7a348a27ab39_62595101 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:botonera.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div class="semantica_medio">
        <article>
            <h2>Peliculas</h2>
            <section>
                <table class="tabla">
                    <thead>
                        <tr>
                            <th>Titulo</th>
                            <th>Descripcion</th>
                            <th>Director/a</th>
                            <th>Estreno</th>
                            <th>Genero</th>
                            <th><i  class="fas fa-trash-alt"></i></th>
                            <th><i class="far fa-edit"></i></th>
                        </tr>
                    </thead>
                    <tbody class="body-table">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['peliculas']->value, 'pelicula');
$_smarty_tpl->tpl_vars['pelicula']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['pelicula']->value) {
$_smarty_tpl->tpl_vars['pelicula']->do_else = false;
?>
                            <tr>
                                <td><?php echo $_smarty_tpl->tpl_vars['pelicula']->value->titulo;?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['pelicula']->value->descripcion;?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['pelicula']->value->director;?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['pelicula']->value->estreno;?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['pelicula']->value->tipo;?>
</td>
                                <td><button><a href="delete/<?php echo $_smarty_tpl->tpl_vars['pelicula']->value->id_pelicula;?>
"><i class="fas fa-trash-alt"></i><button></td>
                                <td><button><a href="formularioEditarPelicula/<?php echo $_smarty_tpl->tpl_vars['pelicula']->value->id_pelicula;?>
"><i class="far fa-edit"></i><button></td>
                            </tr>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </tbody>
                </table>
            </section>
        </article>
        <aside>
            <form action="formularioInsertarPelicula" method="GET">
                <button >Insertar Pelicula <i class="fas fa-plus"></i></button>
            </form>
            <?php $_smarty_tpl->_subTemplateRender("file:filtro.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </aside>
    </div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}