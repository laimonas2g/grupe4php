<style>
    body {
        background: #f8fafc;
        color: #22223b;
        font-family: 'Segoe UI', Arial, sans-serif;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        height: 100vh;
        margin: 0;
    }
    .container {
        text-align: center;
        padding: 40px 30px;
        background: #fff;
        border-radius: 16px;
        box-shadow: 0 4px 24px rgba(34,34,59,0.08);
    }
    h1 {
        font-size: 6rem;
        margin: 0;
        color: #9a8c98;
        letter-spacing: 8px;
    }
    h2 {
        font-size: 2rem;
        margin: 10px 0 20px 0;
        color: #4a4e69;
    }
    p {
        color: #6c757d;
        margin-bottom: 30px;
    }
    a {
        display: inline-block;
        padding: 12px 28px;
        background: #4a4e69;
        color: #fff;
        border-radius: 8px;
        text-decoration: none;
        font-weight: 500;
        transition: background 0.2s;
    }
    a:hover {
        background: #22223b;
    }
</style>
<div class="container">
    <h1>404</h1>
    <h2>Page Not Found</h2>
    <p>Atsiprašome, puslapis, kurio ieškote, neegzistuoja arba buvo perkeltas.</p>
    <a href="<?= $url ?>">Eiti namo</a>
</div>