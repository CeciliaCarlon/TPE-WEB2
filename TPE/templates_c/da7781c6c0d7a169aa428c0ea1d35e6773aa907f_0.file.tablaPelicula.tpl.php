<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-26 00:04:39
  from 'C:\xampp\htdocs\TPE\templates\tablaPelicula.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fbee3078d33e2_76635305',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'da7781c6c0d7a169aa428c0ea1d35e6773aa907f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE\\templates\\tablaPelicula.tpl',
      1 => 1606345478,
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
function content_5fbee3078d33e2_76635305 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:botonera.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
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
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['peliculas']->value, 'pelicula');
$_smarty_tpl->tpl_vars['pelicula']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['pelicula']->value) {
$_smarty_tpl->tpl_vars['pelicula']->do_else = false;
?>
                            <tr>
                                <td scope="row"><?php echo $_smarty_tpl->tpl_vars['pelicula']->value->titulo;?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['pelicula']->value->tipo;?>
</td>
                                <td><a type="button" href="verMasPelicula/<?php echo $_smarty_tpl->tpl_vars['pelicula']->value->id_pelicula;?>
" class="btn btn-light"><i class="fas fa-plus-circle"></i></a></td>
                                <?php if ($_smarty_tpl->tpl_vars['logeado']->value != null && $_smarty_tpl->tpl_vars['logeado']->value->administrador) {?>
                                <td><a type="button" href="deletePelicula/<?php echo $_smarty_tpl->tpl_vars['pelicula']->value->id_pelicula;?>
" class="btn btn-light"><i class="fas fa-trash-alt"></i></a></td>
                                <td><a type="button" href="formularioEditarPelicula/<?php echo $_smarty_tpl->tpl_vars['pelicula']->value->id_pelicula;?>
" class="btn btn-light"><i class="far fa-edit"></i></a></td>
                                <?php }?>
                            </tr>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </tbody>
                </table>
            </section>
        </article>
        <aside>
            <?php $_smarty_tpl->_subTemplateRender("file:filtro.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php if ($_smarty_tpl->tpl_vars['logeado']->value != null && $_smarty_tpl->tpl_vars['logeado']->value->administrador) {?>
            <a type="button" href="formularioInsertarPelicula" class="btn btn-light">Insertar Pelicula<i class="fas fa-plus"></i></a>
            <?php }?>
        </aside>
    </div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
