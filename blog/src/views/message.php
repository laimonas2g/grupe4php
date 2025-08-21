<?php if (isset($flash['message'])): ?>
    <div class="alert alert-<?= $flash['message']['type'] ?>">
        <?= $flash['message']['text'] ?>
    </div>
<?php endif ?>