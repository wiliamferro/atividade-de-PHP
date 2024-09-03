<?php

include 'db.php';

$sql = "SELECT * from user";

$result = $conn -> query($sql);

if ($result -> num_rows > 0){
    echo "<table border='1'>
    <tr>
        <th> ID </th>
        <th> nome </th>
        <th> Email </th>
        <th> Data de Criação </th>
        <th> Ações </th>
    </tr>";
    while( $row = $result -> fetch_assoc()){
        echo "<tr>
            <td> {$row['id']} </td>
            <td> {$row['name']} </td>
            <td> {$row['email']} </td>
            <td> {$row['created_at']} </td>
            <td> ações </td>
            <td>
                <a href='update.php?id={$row['id']}'>editar</a> |
                <a href='delete.php?id={$row['id']}'>editar</a>
            </td>
        </tr>";
    }
    echo "</table>";
}else{
    echo "nenhum registro encontrado.";
}
$conn -> close();
?>
<a href="create.php">Inserir novo registro.</a>