<?php
    include '../conecta.php';
?>



<?php 

$ra = $_GET['ra'];

//echo $ra;

$nome = $_POST['nome'];
$email= $_POST['email'];
$tel= $_POST['tel'];
$celular= $_POST['celular'];
$dataNascimento= $_POST['dataNascimento'];

//echo $nome;
//echo $email;
//echo $tel;
//echo $celular;
//echo $dataNascimento;

$consulta = $conexao -> prepare ("
	UPDATE aluno SET 
	nome='$nome', 
	email='$email',
	dataNascimento='$dataNascimento',
	celular='$celular',
	tel='$tel'


	WHERE ra = '$ra'");

	$consulta -> execute();


	header('Location: index.php');

?>