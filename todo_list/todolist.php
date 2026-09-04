
<?php 

$localhost ="localhost";
$banco ="todo_list";
$user ="root";
$senha ="";

$conn = new mysqli($localhost, $user, $senha, $banco);

if($conn->connect_error) { 
    die("deu bosta". $conn->connect_error);
}

# criacao de tarefas

# Exclusão de tarefas


$tarefas=[]; 
# Listar tarefas


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo-list</title>
</head>
<body>

    <h1>TO-DO List</h1>
    <form action="todo-list2.php" method="POST">
        <input type="text" placeholder="Descrição da sua tarefa" name="descricao"/>
        <button type="submit">Adicionar</button> 
    </form>
   
    <?php if(!empty($tarefas)):?>
    <h2>Suas tarefas</h2>
        <ul>
            <li>Tenho uma tarefa</li>
        </ul>
    <?php else:?>
    <h3>Não tem tarefas</h3>
    <?php endif;?>
</body>
</html>