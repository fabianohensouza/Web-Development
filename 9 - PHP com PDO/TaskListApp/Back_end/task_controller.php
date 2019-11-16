<?php

    require "../Back_end/task.model.php";
    require "../Back_end/task.service.php";
    require "../Back_end/db_connection.php";

    $action = isset($_GET['action']) ? $_GET['action'] : $action;

    echo $action;

    if($action == 'insert') {
        $task = new Task();
        $task->__set('task', $_POST['task']);

        $connection = new Connection();

        //Instancing the object passing the paramaters required
        $taskService = new TaskService($connection, $task);
        $taskService->insert();

        header('Location: nova_tarefa.php?inclusao=1');
    } else if($action == 'recover') {
        
        $task = new Task();
        $connection = new Connection();

        //Instancing the object passing the paramaters required
        $taskService = new TaskService($connection, $task);
        $tasks = $taskService->recover();
    } else if($action == 'update') {
        
        $task = new Task();
        $task->__set('id', $_POST['id']);
        $task->__set('task', $_POST['task']);

       $connection = new Connection();

        //Instancing the object passing the paramaters required
        $taskService = new TaskService($connection, $task);
        $tasks = $taskService->update();

        if ($tasks) {
            header('Location: todas_tarefas.php?update=1');
        }
    } else if($action == 'remove') {
    
        $task = new Task();
        $task->__set('id', $_GET['id']);

        $connection = new Connection();

        //Instancing the object passing the paramaters required
        $taskService = new TaskService($connection, $task);
        $tasks = $taskService->remove();

        if ($tasks) {
            if(isset($_GET['pag']) && $_GET['pag'] == 'pending') {
                header('Location: tarefas_pendentes.php');
            } else {
                header('Location: todas_tarefas.php?update=2');
            }
        }

    } else if($action == 'completed') {
    
        $task = new Task();
        $task->__set('id', $_GET['id']);
        $task->__set('id_status', 2);

        $connection = new Connection();

        //Instancing the object passing the paramaters required
        $taskService = new TaskService($connection, $task);
        $tasks = $taskService->changeStatus();

        if ($tasks) {
            if(isset($_GET['pag']) && $_GET['pag'] == 'pending') {
                header('Location: tarefas_pendentes.php');
            } else {
                 header('Location: todas_tarefas.php?update=3');
            }
        }

    } else if($action == 'pendingTask') {
            
        $task = new Task();
        $task->__set('id_status', 1);

        $connection = new Connection();

        //Instancing the object passing the paramaters required
        $taskService = new TaskService($connection, $task);
        $tasks = $taskService->pendingTask();

    } else if($action == 'returns') {
    
        $task = new Task();
        $task->__set('id', $_GET['id']);
        $task->__set('id_status', 1);

        $connection = new Connection();

        //Instancing the object passing the paramaters required
        $taskService = new TaskService($connection, $task);
        $tasks = $taskService->changeStatus();

        if ($tasks) {
            if(isset($_GET['pag']) && $_GET['pag'] == 'pending') {
                header('Location: tarefas_pendentes.php');
            } else {
                 header('Location: todas_tarefas.php?update=3');
            }
        }

    }

?>