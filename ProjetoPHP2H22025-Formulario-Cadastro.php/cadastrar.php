<?php 

if ($_SERVER['REQUEST_METHOD'] == 'post'){

$priemiroNome = $_POST['$priemiroNome'];
$seundoNome = $_POST['$seundoNome'];
$escolhasPets = $_POST['$escolhasPets'];

echo($priemiroNome . "-" . $segundoNome . "-" . $escolhasPets);
echo '<a href="../index.php">Voltar</a>';

//header("location: ..index.php")

}else {

echo "é post";



}

 ?>