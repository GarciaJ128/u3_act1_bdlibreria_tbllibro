<?php
	require_once("../model/modelo.php");
	$menu = new Libro();
	$pd = $menu->lista_libros();
	require_once("../view/vista.php");
?>