<?php
 if (isset($_POST["submit2"])) { 
    $perfil =$_POST["perfil"];
    $cep =$_POST["cep"];
    $street = $_POST["street"];
    $numberhouse = $_POST ["numberhouse"];
    $district = $_POST ["district"];
    $city =$_POST["city"];
    $state = [
        "ac" => "Acre",
        "al" => "Alagoas",
        "am" => "Amazonas",
        "ap" => "Amapá",
        "ba" => "Bahia",
        "ce" => "Ceará",
        "df" => "Distrito Federal",
        "es" => "Espírito Santo",
        "go" => "Goiás",
        "ma" => "Maranhão",
        "mt" => "Mato Grosso",
        "ms" => "Mato Grosso do Sul",
        "mg" => "Minas Gerais",
        "pa" => "Pará",
        "pb" => "Paraíba",
        "pr" => "Paraná",
        "pe" => "Pernambuco",
        "pi" => "Piauí",
        "rj" => "Rio de Janeiro",
        "rn" => "Rio Grande do Norte",
        "ro" => "Rondônia",
        "rs" => "Rio Grande do Sul",
        "rr" => "Roraima",
        "sc" => "Santa Catarina",
        "se" => "Sergipe",
        "sp" => "São Paulo",
        "to" => "Tocantins",
    ];
    $sql = "INSERT INTO users ( perfil, cep, street,numberhouse, district, city, state) VALUES
     ('$cep', '$street', '$numberhouse', '$district', '$city', '{$state[$_POST['state']]}')";
    if (mysqli_query($conn, $sql)) {
        // Redireciona o usuário para a próxima página após o cadastro
        header("Location: cadastro2.php");
        exit();
    } else {
        echo "Erro ao inserir os dados: " . mysqli_error($conn);
    }
}
?>