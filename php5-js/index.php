<?php
/*
BODY:
app.use(bodyParser.json()); kai perduome JSON
app.use(bodyParser.urlencoded({ extended: true })); kai perduodam tradiciniu būdu formData koduoja HTML'as
tada:
let data = req.body;

PARAMETER:
const sk = parseInt(req.params.skaicius);

QUERY:
const sk1 = parseInt(req.query.skaicius1 || 0);
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="send.js" defer></script>
    <title>WEB Mechanika</title>
</head>
<body>
    <h1>Welcome to Mechanika</h1>

    <h2>QUERY</h2>
    <form action="info.php">
        <input type="text" name="animal" placeholder="animal">
        <button type="submit">Send</button>
    </form>

    <h2>BODY</h2>
    <form action="info.php" method="post">
        <input type="text" name="animal" placeholder="animal">
        <button type="submit">Send</button>
    </form>

    <h2>BODY + QUERY</h2>
    <form action="info.php?plusAnimalData=<?php echo rand(10, 99) ?>" method="post">
        <input type="text" name="animal" placeholder="animal">
        <button type="submit">Send</button>
    </form>

    <h2>BODY JSON</h2>
    <form data-form>
        <input type="text" name="animal" placeholder="animal">
        <button type="button">Send</button>
    </form>

</body>
</html>