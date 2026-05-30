<h2>Edit Task</h2>
<form method="POST" action="/tasks/update/<?= $task['id'] ?>">
    <div class="form-group">
        <label>سربرگ:</label>
        <input type="text" name="title" value="<?= htmlspecialchars($task['title']) ?>" required>
    </div>
    <div class="form-group">
        <label>توضیحات:</label>
        <textarea name="description" rows="4"><?= htmlspecialchars($task['description']) ?></textarea>
    </div>
    <div class="form-group">
        <label>تاریخ:</label>
        <input type="date" name="due_date" value="<?= $task['due_date'] ?>" required>
    </div>
    <div class="form-group">
        <label>وضعیت:</label>
        <select name="status">
            <option value="0" <?= !$task['status'] ? 'selected' : '' ?>>درحال انجام</option>
            <option value="1" <?= $task['status'] ? 'selected' : '' ?>>انجام شد</option>
        </select>
    </div>
    <button type="submit" class="btn">بروزرسانی</button>
    <a href="/tasks" class="btn">لغو</a>
</form>