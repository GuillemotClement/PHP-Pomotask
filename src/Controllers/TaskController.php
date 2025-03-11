<?php

namespace Clement\PomoTask\Controllers;

use Clement\PomoTask\Core\Controller;
use Clement\PomoTask\Models\ProjectModel;
use Clement\PomoTask\Models\TaskModel;

class TaskController extends Controller
{
  protected TaskModel $taskModel;

  public function __construct()
  {
    $this->taskModel = new TaskModel();
  }

  public function listTask(){
    $data = [
      'page' => 'Mes taches'
    ];

    $userId = $_SESSION['user_id'];

    $listTask = $this->taskModel->listProject($userId);

    $data['data'] = [$listTask];
    renderView('/task/listTask', $data);
  }
  public function createTask(){
    $data = [
      'page' => 'Projet'
    ];

//    if($_SERVER['REQUEST_METHOD'] === 'POST'){
//      $title = $_REQUEST['title'];
//      $content = $_REQUEST['content'];
//      $userId = $_SESSION['user_id'];
//
//      $dataProject = [
//        'title' => $title,
//        'content' => $content,
//        'user_id' => $userId,
//      ];

      $task = $this->taskModel->createTask($dataProject);

      p($task);

      if(!isset($task)){
        echo 'Erreur';
      }

      Header('Location: /tasks');

    }

    renderView('/task/createTask', $data);
  }


}