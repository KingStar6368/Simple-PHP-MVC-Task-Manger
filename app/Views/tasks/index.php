<h2>لیست کار ها</h2>
<a href="/tasks/create" class="btn" style="margin-bottom: 20px;">کار جدید</a>

<table>
    <thead>
        <tr>
            <th>کد</th>
            <th>سربرگ</th>
            <th>توضیحات</th>
            <th>تاریخ</th>
            <th>وضعیت</th>
            <th>اکشن ها</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($tasks as $task): ?>
        <tr>
            <td><?= $task['id'] ?></td>
            <td><?= htmlspecialchars($task['title']) ?></td>
            <td><?= htmlspecialchars($task['description']) ?></td>
            <td><?= $task['due_date'] ?></td>
            <td><?= $task['status'] ? '✅ انجام شد' : '⏳ درحال انجام' ?></td>
            <td>
                <a href="/tasks/edit/<?= $task['id'] ?>" class="btn">تغییر</a>
                <a href="/tasks/toggle/<?= $task['id'] ?>" class="btn btn-success">تغییر وضعیت</a>
                <a href="/tasks/delete/<?= $task['id'] ?>" class="btn btn-danger" onclick="return confirm('Are you sure?')">حذف</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>