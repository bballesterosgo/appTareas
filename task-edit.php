<?php 
include('database.php');

$name = $_POST['name'];
$description = $_POST['description'];
$id = $_POST['id'];

$query = "UPDATE `tasks-app`.`task` SET  name = '$name', description = '$description' WHERE id = $id;";

$result = mysqli_query($connection,$query);

if(!$result){
    die('Query Failed');
}

echo 'Tarea realizada correctamente'
?>