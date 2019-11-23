<?php

class TaskService {

    //Recovering the connection and task objects to pass to the CRUD operations
    private $connection;
    private $task;

    //Attrituting the paramaters with its respectives classes types
    public function __construct(Connection $connection, Task $task) {
        $this->connection = $connection->connect();
        $this->task = $task;
    }

    //CRUD functions
    public function insert() { //create
        $query = 'insert into tb_tarefas(task) values (:task)';
        $stmt = $this->connection->prepare($query);
        $stmt->bindValue(':task', $this->task->__get('task'));
        $stmt->execute();
    }

    public function recover() { //read
        $query = 'select 
                      t.id, s.status, t.task 
                  from 
                      tb_tarefas as t
                      left join tb_status as s on (t.id_status = s.id)';
        $stmt = $this->connection->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function update() { //update        
        $query = 'update tb_tarefas set task = ? where id = ?';
        $stmt = $this->connection->prepare($query);
        $stmt->bindValue(1, $this->task->__get('task'));
        $stmt->bindValue(2, $_POST['id'], PDO::PARAM_INT);
        return $stmt->execute();
    }

    public function remove() { //delete
        $query = 'delete from tb_tarefas where id = :id';
        $stmt = $this->connection->prepare($query);
        $stmt->bindValue(':id', $this->task->__get('id'));
        return $stmt->execute();
    }

    public function changeStatus() { //update        
        $query = 'update tb_tarefas set id_status = ? where id = ?';
        $stmt = $this->connection->prepare($query);
        $stmt->bindValue(1, $this->task->__get('id_status'));
        $stmt->bindValue(2, $this->task->__get('id'));
        return $stmt->execute();
    }

    public function pendingTask() { //read
        $query = 'select 
                      t.id, s.status, t.task 
                  from 
                      tb_tarefas as t
                      left join tb_status as s on (t.id_status = s.id)
                  where
                  t.id_status = 1';
        $stmt = $this->connection->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
}

?>