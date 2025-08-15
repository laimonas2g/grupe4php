<?php
session_start();

if (!isset($_SESSION['todos'])) {
    $_SESSION['todos'] = [];
}

$action = null;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    foreach (['add', 'edit', 'delete', 'toggle', 'start_edit', 'cancel_edit'] as $act) {
        if (isset($_POST[$act])) {
            $action = $act;
            break;
        }
    }
}

$editIdx = isset($_POST['start_edit']) ? intval($_POST['idx']) : null;
if (isset($_POST['cancel_edit'])) $editIdx = null;

if ($action) {
    $fn = match($action) {
        'add' => function() {
            $task = trim($_POST['task']);
            if ($task !== '') {
                $_SESSION['todos'][] = ['task' => $task, 'done' => false];
            }
        },
        'edit' => function() {
            $idx = intval($_POST['idx']);
            $task = trim($_POST['task']);
            if ($task !== '' && isset($_SESSION['todos'][$idx])) {
                $_SESSION['todos'][$idx]['task'] = $task;
            }
        },
        'delete' => function() {
            $idx = intval($_POST['idx']);
            if (isset($_SESSION['todos'][$idx])) {
                array_splice($_SESSION['todos'], $idx, 1);
            }
        },
        'toggle' => function() {
            $idx = intval($_POST['idx']);
            if (isset($_SESSION['todos'][$idx])) {
                $_SESSION['todos'][$idx]['done'] = !$_SESSION['todos'][$idx]['done'];
            }
        },
        default => function() {}
    };
    $fn();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>To-Do App</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 2em; }
        .done { text-decoration: none; color: #888; }
        .todo-item { margin-bottom: 1em; }
        input[type="text"] { width: 300px; }
        button { margin-left: 0.5em; }
    </style>
</head>
<body>
    <h2>To-Do App</h2>
    <form method="post">
        <input type="text" name="task" placeholder="Add new task..." autocomplete="off" required>
        <button type="submit" name="add">Add</button>
    </form>
    <hr>
    <ul>
        <?php foreach ($_SESSION['todos'] as $idx => $todo): ?>
            <li class="todo-item">
                <?php if ($editIdx === $idx): ?>
                    <form method="post" style="display:inline;">
                        <input type="hidden" name="idx" value="<?= $idx ?>">
                        <input type="text" name="task" value="<?= $todo['task'] ?>" required>
                        <button type="submit" name="edit">Save</button>
                        <button type="submit" name="cancel_edit">Cancel</button>
                    </form>
                <?php else: ?>
                    <form method="post" style="display:inline;">
                        <span class="<?= $todo['done'] ? 'done' : '' ?>">
                            <?= $todo['task'] ?>
                        </span>
                        <input type="hidden" name="idx" value="<?= $idx ?>">
                        <button type="submit" name="toggle"><?= $todo['done'] ? 'Undone' : 'Done' ?></button>
                        <button type="submit" name="start_edit">Edit</button>
                        <button type="submit" name="delete">Delete</button>
                    </form>
                <?php endif; ?>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>