<form method="post" action="<?= $url ?>color">
    <h1>Color API</h1>
    <label>Color Name:<br>
        <input type="color" name="color_hex" required value="<?= htmlspecialchars($colorHex ?? '') ?>">
    </label>

    <?php if ($colorName): ?>
    <div style="width: 200px; height: 200px; background-color: <?= htmlspecialchars($colorHex) ?>; border: 1px solid #ccc; margin-bottom: 10px;"></div>
    <p><?= htmlspecialchars($colorName) ?></p>
    <?php endif ?>

    <button type="submit">Get Color Name</button>
</form>