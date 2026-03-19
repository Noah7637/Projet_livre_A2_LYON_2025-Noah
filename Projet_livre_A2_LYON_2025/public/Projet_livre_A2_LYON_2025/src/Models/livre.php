<?php
namespace livre\Models;

/** Class Todo **/
class livre {

    private $id;
    private $title;
    private $author;
    private $slug;
    private $description;
    private $date;

    public function getId() {
        return $this->id;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getAuthor() {
        return $this->author;
    }

    public function getSlug() {
        return $this->slug;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getDate() {
        return $this->date;
    }

    public function setId(Int $id) {
        $this->id = $id;
    }

    public function setName(String $title) {
        $this->title = $title;
    }

    public function setUser_id(String $author) {
        $this->author = $author;
    }

    public function setSlug(String $slug) {
        $this->slug = $slug;
    }

    public function setDescription(String $description) {
        $this->description = $description;
    }

    public function setDate(String $date) {
        $this->date = $date;
    }

}