<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Docker LAMP Starter Project</title>

        <style>
            body {
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                height: 100vh;
                color: #ffffff;
                background-color: #222222;
            }

            img {
                height: 10vh;
            }

            h1,
            p {
                text-align: center;
            }
        </style>
    </head>
    <body>
        <img src="logo.png" alt="LAMP Starter Project" />

        <pre>
            <h1>Docker LAMP Starter Project</h1>
            <p><?php require_once('db.php'); ?></p>
            <p>Your LAMP project begins here…</p>
        </pre>
    </body>
</html>
