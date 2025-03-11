<?php

namespace Clement\PomoTask\Models;

use Clement\PomoTask\Core\Model;

class TaskModel extends Model
{
  public function createProject(array $data){

    $sql = "INSERT INTO project (title, content, user_id) VALUES (:title, :content, :user_id)";
    $vars = [
      ':title' => $data['title'],
      ':content' => $data['content'],
      ':user_id' => $data['user_id']
    ];

    return $this->query($sql, $vars);
  }

  public function listProject(int $userId){
    $sql = "SELECT * FROM project WHERE user_id = :user_id";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute([':user_id' => $userId]);

    $row = $stmt->fetchAll();
    return $row;
  }
}