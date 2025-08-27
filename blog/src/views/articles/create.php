<form method="post" action="<?= $url ?>article/store" enctype="multipart/form-data">
    <label>Article Title:<br>
        <input type="text" name="title" required>
    </label>
    <label>Article Content:<br>
        <textarea name="content" required></textarea>
    </label>
    <label>Article Author:<br>
        <input type="text" name="author" required>
    </label>
    <label>Article Image:<br>
        <input type="file" name="image" required>
    </label>
    <button type="submit">Create Article</button>
</form>