<?php
    use Bebro\Blogas\Services\Auth; // inject service
?>

<nav>
    <ul class="menu">
        <li><a href="<?= $url ?>">Namai</a></li>
        <li><a href="<?= $url ?>about">Apie</a></li>
        <li><a href="<?= $url ?>box">Dėžutės</a></li>
        <li><a href="<?= $url ?>box/create">Nauja dėžutė</a></li>
        <li><a href="<?= $url ?>color">Spalvos</a></li>
        <li><a href="<?= $url ?>article/create">Naujas straipsnis</a></li>

        <li style="width: 200px;"></li>

        <li style="display: <?= Auth::check() ? 'none' : 'block' ?>;">
            <a href="<?= $url ?>register">Registruotis</a>
        </li>
        <li style="display: <?= Auth::check() ? 'none' : 'block' ?>;">
            <a href="<?= $url ?>login">Prisijungti</a>
        </li>
        <li style="display: <?= Auth::check() ? 'block' : 'none' ?>;">
            <form action="<?= $url ?>logout" method="post" style="background:none;display:inline; margin:0; padding:0;">
                <button type="submit" style="background:none;color:white;border:none;padding:16px;font-weight:300;font-size:14px;cursor:pointer;margin:0;">
                    Atsijungti (<?= htmlspecialchars(Auth::user()->username) ?>)
                </button>
            </form>
        </li>
    </ul>
</nav>