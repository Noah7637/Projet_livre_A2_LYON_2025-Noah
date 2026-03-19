<?php
namespace livre\Models;

use livre\Models\livre;
/** Class UserManager **/
class livreManager {

    private $bdd;

    public function __construct() {
        $this->bdd = new \PDO('mysql:host='.HOST.';dbname=' . DATABASE . ';charset=utf8;' , USER, PASSWORD);
        $this->bdd->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    }

    public function getAll() {
         
        $stmt = $this->bdd->query("SELECT * FROM livre");
        $stmt->setFetchMode(\PDO::FETCH_CLASS, livre::class);

        return $stmt->fetchAll();
    }

    public function create() {
        $stmt = $this->bdd->prepare("
            INSERT INTO livre (title, author, slug, description, date)
            VALUES (?, ?, ?, ?, ?)
        ");

        return $stmt->execute([
            $_POST['title'], $_POST['author'], $_POST['slug'], $_POST['description'], $_POST['date']
        ]);
    }

    public function show(int $id) {
        $stmt = $this->bdd->prepare("SELECT * FROM livre WHERE id = ?");

        $stmt->execute([
            $id
        ]);
        
        $stmt->setFetchMode(\PDO::FETCH_CLASS, livre::class);

        return $stmt->fetchAll();
    }

    public function delete(int $id) {
        $stmt = $this->bdd->prepare("DELETE FROM livre WHERE id = ?");

       return $stmt->execute([
            $id
        ]);
    }

    public function confirm(int $id) {
        $stmt = $this->bdd->prepare("UPDATE livre SET title= ?,author= ?,slug= ?,description= ?,date= ? WHERE id = ?");

        return $stmt->execute([
            $_POST['NEWtitle'], $_POST['NEWauthor'], $_POST['NEWslug'], $_POST['NEWdescription'], $_POST['NEWdate'], $id
        ]);
    }
   
}

