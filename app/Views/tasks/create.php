<div class="card">
    <h2>اضافه کرد کار</h2>
    <form method="POST" action="/tasks/store">
        <div class="form-group">
            <label>سربرگ *</label>
            <input type="text" name="title" required placeholder="سربرگ مثال کد دیتابیس">
        </div>
        <div class="form-group">
            <label>توضیحات</label>
            <textarea name="description" rows="4" placeholder="توضیحات"></textarea>
        </div>
        <div class="form-group">
            <label>تاریخ *</label>
            <input type="date" name="due_date" required>
        </div>
        <button type="submit" class="btn">💾 ذخیره</button>
        <a href="/tasks" class="btn" style="background: #95a5a6;">لغو</a>
    </form>
</div>