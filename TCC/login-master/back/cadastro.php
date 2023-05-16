<?php

// print_r('nome: '. $_POST['firstname']);
// print_r('sobrenome: '. $_POST['lastname']);
// print_r('email: '. $_POST['email']);
// print_r('tele: '. $_POST['number']);
// print_r('senha: '. $_POST['password']);
// print_r('gender: '. $_POST['gender']);
// print_r('perfil: '. $_POST['perfil']);
// print_r('cep: '. $_POST['cep']);
// print_r('street: '. $_POST['street']);
// print_r('numberhouse: '. $_POST['numberhouse']);
// print_r('district: '. $_POST['district']);
// print_r('city: '. $_POST['city']);
// print_r('state: '. $_POST['states']);

// Inclui o arquivo de conexão com o banco de dados
require_once ".\config\db.php";

// Verifica se o formulário de cadastro foi submetido
if (isset($_POST["submit"])) {
    // Obtém os dados do formulário
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $number = $_POST["number"];
    $password = $_POST["password"];
    $gender = $_POST["gender"];
    $perfil =$_POST["perfil"];
   
    // Insere os dados do usuário no banco de dados
    $result = mysqli_query($conexao, "INSERT INTO users (firstname, lastname, email, number, password, gender, perfil, cep, street,
     numberhouse, district, city, state) VALUES ('$firstname', '$lastname', '$email', '$number', '$password', 
     '$gender', '$perfil')");

    if (mysqli_query($conn, $sql)) {
    // Redireciona o usuário para a próxima página após o cadastro
       header("Location: cadastro2.php");
        exit();
     } else {
        echo "Erro ao inserir os dados: " . mysqli_error($conn);
     }
    
}
?>


