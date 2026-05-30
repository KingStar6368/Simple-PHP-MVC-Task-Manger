<?php
namespace App\Models;

use App\Core\Model;

class Task extends Model {
    public function getAll() {
        $stmt = $this->db->query("SELECT * FROM tasks ORDER BY created_at DESC");
        return $stmt->fetchAll();
    }
    
    public function getById($id) {
        $stmt = $this->db->prepare("SELECT * FROM tasks WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch();
    }
    
    public function create($title, $description, $due_date) {
        $stmt = $this->db->prepare("INSERT INTO tasks (title, description, due_date) VALUES (?, ?, ?)");
        return $stmt->execute([$title, $description, $due_date]);
    }
    
    public function update($id, $title, $description, $due_date, $status) {
        $stmt = $this->db->prepare("UPDATE tasks SET title=?, description=?, due_date=?, status=? WHERE id=?");
        return $stmt->execute([$title, $description, $due_date, $status, $id]);
    }
    
    public function delete($id) {
        $stmt = $this->db->prepare("DELETE FROM tasks WHERE id = ?");
        return $stmt->execute([$id]);
    }
    
    public function toggleStatus($id) {
        $stmt = $this->db->prepare("UPDATE tasks SET status = NOT status WHERE id = ?");
        return $stmt->execute([$id]);
    }
}