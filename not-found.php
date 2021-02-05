<!DOCTYPE html>
<html lang="fi">
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
        <meta charset="utf8">
        <title>Example site</title>
        <style>
            body{
                display: flex;
                flex-direction: column;
                min-height: 100vh;
            }
            .content{
                flex-grow: 2;
                padding-top: 20px;
            }
        </style>
    </head>
    <body>
            <?php
            include "nav.php";
            echo '<div class="container content">Tämä sivu ei ole vielä kehitetty!</div>';
            include "footer.php"; ?>
    </body>
</html>