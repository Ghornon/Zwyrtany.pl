<?php require_once 'scripts/gallery.php' ?>

<aside id="sidebar">

    <nav class="hamburger">
        <label for="btn-sidebar">
            <i class="fa fa-times" aria-hidden="true"></i>
        </label>
    </nav>

    <section id="logo">

        <a href=".">
            <img src="assets/img/KLUB-Zwyrtany-A.png" alt="Logo" class="logo">
        </a>

    </section>

    <nav id="nav">

        <ul class="nav">
            <li>
                <a href=".">Strona główna</a>
            </li>
            <li>
                <a href="index.php?page=gallery">Galeria
                    <i class="fa fa-chevron-down" aria-hidden="true"></i>
                </a>
                <ul class="sub-menu">
                    
                    <?php for ($i = 0; $i < sizeof($gallery->categories); $i++): ?>

                        <li>
                            <a href="index.php?page=gallery&category=<?php echo $gallery->categories[$i]; ?>"><?php echo $gallery->categories[$i]; ?></a>
                        </li>

                    <?php endfor; ?>

                </ul>
            </li>
            <li>
                <a href="o-nas">O nas</a>
            </li>
            <li>
                <a href="kontakt">Kontakt</a>
            </li>
        </ul>

    </nav>

    <section id="socialmedia">

        <ul class="socialmedia">
            <li class="facebook">
                <a href="">
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
            </li>
            <li class="twitter">
                <a href="">
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
            </li>
            <li class="instagram">
                <a href="">
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
            </li>
        </ul>

    </section>

</aside>