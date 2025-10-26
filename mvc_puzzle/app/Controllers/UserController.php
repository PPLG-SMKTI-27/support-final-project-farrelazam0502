<?php
require_once __DIR__ . '/../Models/User.php';
class UserController {
    private $model;
    public function __construct() {
        $this->model = new User();
    }
    public function index() {
        $users = $this->model->all();
        include __DIR__ . '/../Views/users/index.php';
    }
    public function create() {
        include __DIR__ . '/../Views/users/create.php';
    }
    public function store() {
        $this->model->create($_POST, $_FILES['photo']);
        header("Location: index.php");
    }
    public function show($id) {
        $user = $this->model->findById($id);
        include __DIR__ . '/../Views/users/show.php';
    }
    public function edit($id) {
    $user = $this->model->findById($id);
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name  = $_POST['name'];
        $email = $_POST['email'];
        $this->model->update($id, $name, $email);
        header("Location: ../../index.php");
        exit; 
    }
    include __DIR__ . '/../Views/users/edit.php';
    }
    public function delete($id) {
        $this->model->delete($id);
        header("Location: ../../index.php");
        exit;
    }

}
?>