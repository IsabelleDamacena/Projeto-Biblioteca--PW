<?php
    include '../conecta.php';
?>



<?php 

$codlivro = $_GET['codlivro'];

//echo $codlivro;

$titulo = $_POST['titulo'];
$autor= $_POST['autor'];
$genero= $_POST['genero'];
$editora= $_POST['editora'];
$paginas= $_POST['paginas'];
$qtdeExemplares= $_POST['qtdeExemplares'];

//echo $nome;
//echo $email;
//echo $tel;
//echo $celular;
//echo $dataNascimento;

$consulta = $conexao -> prepare ("
	UPDATE livros SET 
	titulo='$titulo', 
	autor='$autor',
	genero='$genero',
	editora='$editora',
	paginas='$paginas',
	qtdeExemplares='$qtdeExemplares'


	WHERE codlivro = '$codlivro'");

	$consulta -> execute();


	header('Location: index.php');

?>