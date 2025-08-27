<form method="post" action="<?= $url ?>article/update" enctype="multipart/form-data">
    <label>Article Title:<br>
        <input type="text" name="title" value="<?= htmlspecialchars($article->title) ?>" required>
    </label>
    <label>Article Content:<br>
        <textarea name="content" required><?= htmlspecialchars($article->content) ?></textarea>
    </label>
    <label>Article Author:<br>
        <input type="text" name="author" value="<?= htmlspecialchars($article->author) ?>" required>
    </label>
        <?php if ($article->image): ?>
        <div class="image-preview">
            <img class="small" src="<?= $url . $article->image ?>" alt="<?= htmlspecialchars($article->title) ?>">
            <input type="checkbox" name="delete_image" value="1" id="delete_image"> <label for="delete_image">Delete image</label>
        </div>
    <?php endif ?>
    <label>Article Image:<br>
        <input type="file" name="image" required>
    </label>
    <button type="submit">Update Article</button>
</form>