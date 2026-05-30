<?php
require_once '../vendor/autoload.php';

// Load environment variables
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/..');
$dotenv->load();

// Get the requested URL
$request = $_SERVER['REQUEST_URI'];
$request = strtok($request, '?'); // Remove query strings
$request = str_replace('/task-manager-mvc', '', $request); // Remove base path if any
$request = trim($request, '/');

// Simple routing
if ($request == 'tasks' || $request == 'tasks/index') {
    $controller = new \App\Controllers\TaskController();
    $controller->index();
}
elseif ($request == 'tasks/create') {
    $controller = new \App\Controllers\TaskController();
    $controller->create();
}
elseif ($request == 'tasks/store' && $_SERVER['REQUEST_METHOD'] == 'POST') {
    $controller = new \App\Controllers\TaskController();
    $controller->store();
}
elseif (preg_match('/tasks\/edit\/(\d+)/', $request, $matches)) {
    $controller = new \App\Controllers\TaskController();
    $controller->edit($matches[1]);
}
elseif (preg_match('/tasks\/update\/(\d+)/', $request, $matches) && $_SERVER['REQUEST_METHOD'] == 'POST') {
    $controller = new \App\Controllers\TaskController();
    $controller->update($matches[1]);
}
elseif (preg_match('/tasks\/delete\/(\d+)/', $request, $matches)) {
    $controller = new \App\Controllers\TaskController();
    $controller->delete($matches[1]);
}
elseif (preg_match('/tasks\/toggle\/(\d+)/', $request, $matches)) {
    $controller = new \App\Controllers\TaskController();
    $controller->toggle($matches[1]);
}
else {
    echo "404" . htmlspecialchars($request);
    http_response_code(404);
}
?>