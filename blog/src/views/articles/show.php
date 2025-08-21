<!-- 
$article[content, title, author, id] 
-->
<div class="article-container">
    <h1><?= htmlspecialchars($article['title']) ?></h1>
    <div class="content"><?= nl2br(htmlspecialchars($article['content'])) ?></div>
    <div class="author">Autorius: <?= htmlspecialchars($article['author']) ?></div>
</div>