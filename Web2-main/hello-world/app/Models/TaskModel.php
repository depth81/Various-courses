<?php

namespace App\Models;

use CodeIgniter\Model;

class TaskModel extends Model
{
    function addTask($task, $description, $imageURL){
        $sql = "INSERT INTO tasks (task, description, imageurl) VALUES ('{$task}', '{$description}', '{$imageURL}')";
        $this->db->query($sql);
    }

    function readTasks(){
        $sql = "SELECT * FROM tasks";
        $tasks = $this->db->query($sql);
        return $tasks->getResult();
    }

    function deleteTask($id){
        $sql = "DELETE FROM tasks WHERE id={$id}";
        $this->db->query($sql);
    }

    function getTask($id){
        $sql = "SELECT * FROM tasks WHERE id={$id}";
        $task = $this -> db -> query($sql);
        return $task->getResult();
    }

    function updateTask($id, $task, $description, $path){
        $sql = "UPDATE tasks SET task='{$task}', description='{$description}', imageurl='{$path}' WHERE id='{$id}' ";

        $task = $this->db->query($sql);
        return $task->getResult();

    }

}