<?php
include 'db.php';

if($_SERVER ['REQUEST_METHOD'] == 'POST'){

    $name = $_POST['name'];
    $email = $_POST['email'];

    $sql = "insert into user (name, email) value   ('$name','$email')";

    if($conn -> query($sql) === true){
        echo "novo registro adicional com sucesso";
    }else{
        echo "erro $sql <br>" . $conn -> error;
    }

}
$conn -> close();

?>

<form method="post" action="create.php">
    Nome: <input type="text" name="name" required>
    Email: <input type="email" name="email" required>
    <input type="submit" value="Adicionar">
</form>

<a href="read.php">Ver registros.</a>