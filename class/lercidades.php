<?php

include_once 'conexao.php';

@$id = $_GET['id'];
echo $id;
$query = "SELECT * FROM cidade WHERE estado='$id' ORDER BY nome";
$sql = mysqli_query($conn, $query);
while($row = mysqli_fetch_array($sql)){
    $nome = $row['nome'];
    $id = $row['id'];
    
    echo '<option class="cidades" value="'.$id.'">'.$nome.'</option>';
}