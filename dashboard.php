<?php

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

<body class="dashboard">

    <div class="wrapper">

        <input type="checkbox" id="btn-sidebar" name="btn-sidebar">

        <aside id="sidebar" class="dashboard">

            <nav class="hamburger">
                <label for="btn-sidebar">
                    <i class="fa fa-times" aria-hidden="true"></i>
                </label>
            </nav>

            <nav id="dashboard-nav">

                <ul class="nav">
                    <li>
                        <i class="fa fa-bars" aria-hidden="true"></i>Menu:
                    </li>
                    <li <?php if ($target == 'banner') echo 'class="active"'; ?>>
                        <a href="?target=banner"><i class="fa fa-header" aria-hidden="true"></i>Baner</a>
                    </li>
                    <li <?php if ($target == 'blog') echo 'class="active"'; ?>>
                        <a href="?target=blog"><i class="fa fa-file-text" aria-hidden="true"></i>Blog</a>
                    </li>
                    <li <?php if ($target == 'page') echo 'class="active"'; ?>>
                        <a href="?target=page"><i class="fa fa-thumb-tack" aria-hidden="true"></i>Strony</a>
                    </li>
                    <li <?php if ($target == 'gallery') echo 'class="active"'; ?>>
                        <a href="?target=gallery"><i class="fa fa-picture-o" aria-hidden="true"></i>Galeria</a>
                    </li>
                </ul>

            </nav>
            <a href="?action=add" class="btn-new"><i class="fa fa-plus" aria-hidden="true"></i>Dodaj nowy</a>

        </aside>

        <main id="main">

            <nav class="hamburger"><label for="btn-sidebar"><i class="fa fa-bars" aria-hidden="true"></i></label></nav>

            <section id="panels">

                    <article class="panel post">

                        <nav class="panel-nav">
                            <h1 class="title"><i class="fa fa-file-text" aria-hidden="true"></i>Lorem, ipsum.</h1>
                            <ul class="nav">
                                <li><a href=""><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                <li><a href=""><i class="fa fa-pencil" aria-hidden="true"></i></a></li>
                                <li><a href=""><i class="fa fa-trash" aria-hidden="true"></i></a></li>
                            </ul>
                        </nav>
                        
                        <form action="action.php?target=<?php echo $target; ?>&action=<?php echo $action; ?>" method="post">

                            <ul class="options">
                                <li><i class="fa fa-cogs" aria-hidden="true"></i>Opcje:</li>
                                <li>
                                    <p><i class="fa fa-picture-o" aria-hidden="true"></i> Obrazek wyróżniający:</p>
                                    <input type="checkbox" id="img-slider" name="img-slide">
                                    <label for="img-slider">Prześlij obraz na serwer <span class="slider"></span></label>

                                    <fieldset>

                                        <?php 
                                                        
                                        $dir    = './gallery/';
                                        $img = scandir($dir);

                                        ?>

                                        <?php for ($i = 2; $i < sizeof($img); $i++): ?>

                                        <input type="radio" name="img" id="img-<?php echo $i; ?>" value="<?php echo $dir . $img[$i]; ?>">
                                        
                                        <label for="img-<?php echo $i; ?>">
                                            <img src="<?php echo $dir . $img[$i]; ?>" alt="<?php echo $img[$i]; ?>">
                                        </label>

                                        <?php endfor; ?>

                                    </fieldset>

                                    <label for="newfile"><i class="fa fa-cloud-upload" aria-hidden="true"></i>Prześlij</label>
                                    <input type="file" name="newfile" id="newfile" accept="image/*">
                                </li>
                                <li>
                                    <label for="title"><i class="fa fa-header" aria-hidden="true"></i>Tytuł:</label>
                                    <input type="text" name="title" id="title">
                                </li>
                                <li>
                                    <label for="date"><i class="fa fa-calendar-o" aria-hidden="true"></i>Data:</label>
                                    <input type="date" name="date" id="date"=>
                                </li>
                            </ul>

                            <div class="content">
                                <label for="content">Wpis:</label>
                                <textarea name="content" id="content" cols="30" rows="10"></textarea>

                                <button type="submit">Zatwierdź</button>
                            </div>

                        </form>

                    </article>

            </section>

            <footer id="footer">

                <a href=".">Zwyrtany.pl </a> 2018 &copy; All rights reserved!
            
            </footer>

        </main>

    </div>

</body>

</html>