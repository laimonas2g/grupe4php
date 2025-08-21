<ul>
    <?php foreach ($boxes as $box): ?>
        <li>
            <strong><?= $box['count'] ?></strong>
            <a href="<?= $url ?>box/edit/<?= $box['id'] ?>">Edit</a>
            <form action="<?= $url ?>box/delete/<?= $box['id'] ?>" method="post" style="display:inline;">
                <button type="submit">Delete</button>
            </form>
        </li>
    <?php endforeach; ?>
</ul>