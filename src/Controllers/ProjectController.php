<?php

namespace Clement\PomoTask\Controllers;

use Clement\PomoTask\Core\Controller;
use Clement\PomoTask\Models\ProjectModel;

class ProjectController extends Controller
{
  protected ProjectModel $projectModel;

  public function __construct()
  {
    $this->projectModel = new ProjectModel();
  }

  public function listProject(){
    $data = [
      'page' => 'Mes projets'
    ];

    renderView('/project/listProject', $data);
  }
  public function createProject(){
    $data = [
      'page' => 'Projet'
    ];

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
      $title = $_REQUEST['title'];
      $content = $_REQUEST['content'];
      $userId = $_SESSION['user_id'];

      $dataProject = [
        'title' => $title,
        'content' => $content,
        'user_id' => $userId,
      ];

      $project = $this->projectModel->createProject($dataProject);

      p($project);

      if(!isset($project)){
        echo 'Erreur';
      }

      Header('Location: /projects');

    }

    renderView('/project/createProject', $data);
  }


}