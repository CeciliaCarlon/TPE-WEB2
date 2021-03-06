<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-03 01:18:02
  from 'C:\xampp\htdocs\TPE\templates\vue\comentarios.vue' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc82ebaac78c9_70395435',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '219f409ef0cded19959859682e9c2bd9519e4f00' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE\\templates\\vue\\comentarios.vue',
      1 => 1606954680,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fc82ebaac78c9_70395435 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="vue-comentarios">
    <h4>Promedio puntuacion: {{getPromedio()}}</h4>
    <h2 class="comentarios">Comentarios</h2>
    <ul id="ulComentarios">
        <li v-for="comentario in comentarios" class="p-3 mb-2 bg-danger">
            <h3>{{comentario.texto}}</h3> 
            <small id="emailHelp" class="form-text">PUNTUACION: {{comentario.puntuacion}}</small>
            <input type="hidden" id="idComentario" value="comentario.id_comentario">

        <?php if ($_smarty_tpl->tpl_vars['logeado']->value != null && $_smarty_tpl->tpl_vars['logeado']->value->administrador) {?>
        <button id="botonEliminarComentario" class="btn btn-outline-light" @click="deleteComentario(comentario.id_comentario)">Eliminar Comentario</button>
        <?php }?>
        </li>
    </ul>
</div>

<?php }
}
