<?php
namespace App\Controllers;

use App\Core\Controller;
use App\Models\Task;

class TaskController extends Controller {
    private $taskModel;
    
    public function __construct() {
        $this->taskModel = new Task();
    }
    
    public function index() {
        $tasks = $this->taskModel->getAll();
        $this->view('tasks/index', ['tasks' => $tasks]);
    }
    
    public function create() {
        $this->view('tasks/create', []);
    }
    
    public function store() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->taskModel->create(
                $_POST['title'],
                $_POST['description'],
                $_POST['due_date']
            );
            $this->redirect('tasks');
        }
    }
    
    public function edit($id) {
        $task = $this->taskModel->getById($id);
        $this->view('tasks/edit', ['task' => $task]);
    }
    
    public function update($id) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->taskModel->update(
                $id,
                $_POST['title'],
                $_POST['description'],
                $_POST['due_date'],
                $_POST['status'] ?? 0
            );
            $this->redirect('tasks');
        }
    }
    
    public function delete($id) {
        $this->taskModel->delete($id);
        $this->redirect('tasks');
    }
    
    public function toggle($id) {
        $this->taskModel->toggleStatus($id);
        $this->redirect('tasks');
    }
}