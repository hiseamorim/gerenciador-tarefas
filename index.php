<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciador de Tarefas</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
   
<div class="container">
    <div class="header">
        <h1>Gerenciador de Tarefas</h1>
    </div>
    <div class="form">
        <form action="" method="get">
            <label for="task_name"></label>
             <input type="text" name="task_name" placeholder="Nome da Tarefa">
             <button type="submit">Cadastrar</button>
        </form>
    </div>
    <div class="separator">
    </div>
    <div class="list-tasks">
    <ul>
            <?php
            if (isset($_SESSION['tasks'])) {
                foreach ($_SESSION['tasks'] as $key => $task) {
                    echo "<li>$task</li>";
                }
            }
            ?>
        </ul>
    </div>
    <form action="" method="get">
        <input type="hidden" name="clear" value="clear">
        <button type="submit" class="btn-clear">Limpar tarefas</button>
    </form>
    <div class="footer">
    <p>Desenvolvido por @MonolitoPHP</p>
   </div>
</div>
 
</body>
</html>