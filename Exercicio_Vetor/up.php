<?php
    if (!empty($_POST)) {

        session_start();

        if (!isset($_SESSION["nome"])) {

            $_SESSION["nome"] = array();
            $_SESSION["sexo"] = array();
            $_SESSION["email"] = array();
            $_SESSION["email"] = array();
        }

        $_SESSION["nome"][] = $_POST["nome"];
        $_SESSION["email"][] = $_POST["email"];
        $_SESSION["obj"][] = $_POST["obj"];
        $_SESSION["lvl"][] = $_POST["lvl"];

        if ($_POST["sexo"] == "0") {

            $_SESSION["sexo"][] = "Masculino";

        }
        else{
            $_SESSION["sexo"][] = "Feminino";
        }
        echo "<script> alert('Cadastro concluído'); window.location='index2.php'; </script>";
    }

?>