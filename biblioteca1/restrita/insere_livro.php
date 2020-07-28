<?php
    include '../conecta.php';

    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $editora = $_POST['editora'];
    $paginas = $_POST['paginas'];
    $Genero = $_POST['Genero'];
    $exemplares = $_POST['exemplares'];

    $query = $conexao->prepare("INSERT INTO livros(titulo,autor,genero,editora,paginas,qtdeExemplares) 
    VALUES ('$titulo','$autor','$Genero','$editora','$paginas','$exemplares')");

    $query->execute();

    header('Location:index.php');
?>