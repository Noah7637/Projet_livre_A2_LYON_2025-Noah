<?php

namespace livre\Controllers;

use livre\Models\livreManager;
use livre\Validator;

/** Class UserController **/
class livreController {
    private $manager;
    private $validator;

    public function __construct() {
        $this->manager = new livreManager();
        $this->validator = new Validator();
    }

    public function index() {
        $livres = $this->manager->getAll();
        require VIEWS . 'livre/index.php';
    }

  public function insert() {
    $this->manager->create();
    header("Location: /");
    exit;
  }

    public function create() {
        require VIEWS . "LIVRE" . '/create.php';
    
    }

    public function affiche(int $id) {
        $solo = $this->manager->show($id);
        require VIEWS . "LIVRE" . "/affiche.php";
    }

    public function delete(int $id) {
        $this->manager->delete($id);
        header("Location: /");
        exit;
    }

    public function modify(int $id) {
        $solo = $this->manager->show($id);
        require VIEWS . "LIVRE" . "/modify.php";
    }

    public function confirm(int $id) {
    $this->manager->confirm($id);
    header("Location: /");
    exit;
  }

}
