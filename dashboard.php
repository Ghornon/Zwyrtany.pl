<?php

$templates = './templates/';
$page = $templates . 'home.php';

if (isset($_GET['page'])) {
    $page = $templates . $_GET['page'] . '.php';
}

$target = 'banner';
$action = 'add';

if (isset($_GET['target']))
    $target = $_GET['target'];

if (isset($_GET['action']))
    $action = $_GET['action'];

?>
<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <link rel="stylesheet" href="assets/styles.css">
    <title>Zwyrtany - panel sterowania</title>
</head>

<body>

    <main id="dashboard">
    
        <?php 

            if (isset($_SESSION['username'])) {

                require_once 'templates/dashboard/signin.php'; 

            } else {

        ?>

        
        <nav id="menu">
        
            <ul class="nav">
                <li <?php if ($target == 'banner') echo 'class="active"'; ?>><a href="?target=banner"><i class="fa fa-header" aria-hidden="true"></i></a></li>
                <li <?php if ($target == 'page') echo 'class="active"'; ?>><a href="?target=page"><i class="fa fa-thumb-tack" aria-hidden="true"></i></a></li>
                <li <?php if ($target == 'post') echo 'class="active"'; ?>><a href="?target=post"><i class="fa fa-file-text" aria-hidden="true"></i></a></li>
                <li <?php if ($target == 'gallery') echo 'class="active"'; ?>><a href="?target=gallery"><i class="fa fa-picture-o" aria-hidden="true"></i></a></li>
                <li <?php if ($target == 'sidebar') echo 'class="active"'; ?>><a href="?target=sidebar"><i class="fa fa-ellipsis-v" aria-hidden="true"></i></a></li>
            </ul>

        </nav>

        <section id="panel">
         
            <nav class="nav-bar">
                
                <ul class="nav">
                    <li <?php if ($action == 'add') echo 'class="active"'; ?>><a href="?target=<?php echo $target; ?>&action=add"><i class="fa fa-plus"></i> Dodaj</a></li>
                    <li <?php if ($action == 'edit') echo 'class="active"'; ?>><a href="?target=<?php echo $target; ?>&action=edit"><i class="fa fa-edit"></i> Modyfikuj</a></li>
                    <li <?php if ($action == 'delete') echo 'class="active"'; ?>><a href="?target=<?php echo $target; ?>&action=delete"><i class="fa fa-minus"></i> Usuń</a></li>
                </ul>

            </nav>

            <header class="header">
            
                <h1><?php echo $target; ?></h1>

            </header>

            <div class="form">
            
                <form action="" method="post">

                    <label for="img">Obrazek wyróżniający:</label>
                    <input type="file" name="img" accept="image/*">

                    <label for="date">Data:</label>
                    <input type="date" name="date" id="date"=>

                    <label for="date">Tytuł:</label>
                    <input type="text" name="title" id="title">

                    <label for="content">Wpis:</label>
                    <textarea name="content" id="content" cols="30" rows="10"></textarea>

                    <button type="submit">Zatwierdź</button>

                </form>

            </div>

        </section>

        <?php

            }

        ?>

    </main>
    
    <script src="assets/bundle.js"></script>

</body>

</html>