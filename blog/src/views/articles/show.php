<!-- 
$article[content, title, author, id] 
-->
<div class="article-container">
    <h1><?= htmlspecialchars($article->title) ?></h1>
    <div class="content"><?= nl2br(htmlspecialchars($article->content)) ?></div>
    <?php if ($article->image): ?>
    <img src="<?= $url . $article->image ?>" alt="<?= htmlspecialchars($article->title) ?>">
    <?php endif ?>
    <div class="author">Autorius: <?= htmlspecialchars($article->author) ?></div>
</div>