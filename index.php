<?php

$templates = './templates/';
$page = $templates . 'home.php';

if (isset($_GET['page'])) {
    $page = $templates . $_GET['page'] . '.php';
}

?>
<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <link rel="stylesheet" href="assets/styles.css">
    <title>Zwyrtany</title>
</head>

<body>

    <div class="wrapper">

        <input type="checkbox" id="btn-sidebar" name="btn-sidebar">

        <?php require_once $templates . 'sidebar.php'; ?>

        <main id="main">

            <nav class="hamburger"><label for="btn-sidebar"><i class="fa fa-bars" aria-hidden="true"></i></label></nav>

            <?php

                require_once $page;

            ?>

            <?php if ($page != './templates/gallery.php') { ?>

            <footer id="footer">

                <a href=".">Zwyrtany.pl </a> 2018 &copy; All rights reserved!
            
            </footer>

            <?php } ?>

        </main>

    </div>

    <script src="assets/bundle.js"></script>

</body>

</html>