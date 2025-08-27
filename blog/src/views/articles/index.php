<div class="container">
    <h1>Articles List</h1>
    <?php if (!empty($articles)): ?>
        <ul>
            <?php foreach ($articles as $index => $article): ?>
                <li>
                    <a href="<?= $url ?>article/<?= $article['id'] ?>">
                    <strong>#<?= $index + 1 ?></strong> - 
                    <?= htmlspecialchars($article['title']) ?> 
                    (by <?= htmlspecialchars($article['author']) ?>)
                </a>
                <div class="buttons">
                    <a href="<?= $url ?>article/edit/<?= $article['id'] ?>" class="button">Edit</a>
                    <form action="<?= $url ?>article/delete/<?= $article['id'] ?>" method="POST" class="inline-form">
                        <button type="submit" class="button">Delete</button>
                    </form>
                </div>
            </li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>No articles found.</p>
    <?php endif; ?>
</div>