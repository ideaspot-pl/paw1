<?php // index.php
$connection = new PDO("sqlite:" . __DIR__ . "/../../../flat.db");

$result = $connection->query('SELECT id, title FROM post');
?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <title>List of Posts</title>
        <style>
            body {
                background: #c0c0c0;
                color: #000;
                font-family: "Times New Roman", serif;
                margin: 8px;
            }

            h1 {
                font-size: 30px;
                margin: 0 0 22px;
            }

            .top-links {
                margin-bottom: 14px;
            }

            .toolbar {
                margin-bottom: 18px;
            }

            .toolbar a {
                background: #d0b5c4;
                border: 2px outset #eee;
                color: #000;
                display: inline-block;
                font-style: italic;
                font-weight: bold;
                padding: 1px 10px;
                text-decoration: none;
            }

            .toolbar a:first-child {
                background: #aaa5c4;
            }

            .post-list {
                font-size: 18px;
                line-height: 1.3;
            }

            footer {
                border-top: 1px solid #fff;
                margin-top: 18px;
                padding-top: 8px;
            }
        </style>
    </head>
    <body>
    <h1><a href="index.php">Classic Blog</a> - A Guide to Posts</h1>

    <div class="top-links">
        [ <a href="#">What's New?</a> |
        <a href="#">What's Cool?</a> |
        <a href="#">What's Popular?</a> |
        <a href="#">Stats</a> |
        <a href="#">A Random Link</a> ]
    </div>

    <div class="toolbar">
        <a href="index.php">Y&nbsp; Top</a>
        <a href="#">&#8593;&nbsp; Up</a>
        <a href="#">&#128269;&nbsp; Search</a>
        <a href="#">&#9993;&nbsp; Mail</a>
        <a href="#">+&nbsp; Add</a>
        <a href="#">??&nbsp; Help</a>
    </div>

    <h2>List of Posts</h2>
    <ul class="post-list">
        <?php while ($row = $result->fetch(PDO::FETCH_ASSOC)): ?>
            <li>
                <a href="show.php?id=<?= $row['id'] ?>">
                    <?= $row['title'] ?>
                </a>
            </li>
        <?php endwhile ?>
    </ul>

    <footer>
        <div>Classic Blog links: <a href="#">About</a> | <a href="#">Archive</a> | <a href="#">Guestbook</a> | <a href="#">Help</a></div>
        <div>Copyright &copy; 1994 Classic Blog Webmasters</div>
    </footer>
    </body>
    </html>

<?php
$connection = null;

// based on https://symfony.com/doc/current/introduction/from_flat_php_to_symfony.html
?>
