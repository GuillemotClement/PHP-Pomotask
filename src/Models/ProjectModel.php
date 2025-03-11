<?php

namespace Clement\PomoTask\Models;

use Clement\PomoTask\Core\Model;

class ProjectModel extends Model
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
}