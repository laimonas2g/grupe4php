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
            </li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>No articles found.</p>
    <?php endif; ?>
</div>