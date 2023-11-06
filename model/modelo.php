<?php
class Libro
{
	private $libro;
	private $dbh;

	public function __construct()
	{
		$this->libro = array();
		$this->dbh = new PDO('mysql:host=localhost;dbname=bd_libreria', "root", "");
	}

	private function set_names()
	{
		return $this->dbh->query("SET NAMES 'utf8'");
	}

	public function lista_libros()
	{
		self::set_names();
		$sql="select titulo,id_autor, editorial, anio, genero, precio, stock, portada from tbl_libro ";
		foreach ($this->dbh->query($sql) as $res)
		{
			$this->libro[]=$res;
		}
		return $this->libro;
		$this->dbh=null;
	}
}
?>