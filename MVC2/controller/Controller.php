<?php

class Controller {



    public function StartSite() {
        include 'view/main.php';
    }

    private $model;

    public function __construct() {
        $this->model = new Model('localhost', 'gamesev', 'root', '');
    }

    
    public function BookList() {
        $bookList = $this->model->getBookList(); 
        include 'view/bookList.php';
    }

    
    public function BookDetail($name) {
        $book = $this->model->getBookByName($name); 
        include 'view/bookDetail.php';
    }
public function error404() {
    include 'view/error404.php';
}
}
?>