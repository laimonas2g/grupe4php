<form method="post" action="<?= $url ?>box/update/<?= $box->id ?>">
    <label>Box count:<br>
        <input type="text" name="count" value="<?= $box->count ?>" required>
    </label>
    <button type="submit">Update Box</button>
</form>