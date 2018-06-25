<?php

$path = "gallery/gallery.json";

$myfile = fopen($path, "r");

$gallery = json_decode(fread($myfile, filesize($path)));

fclose($myfile);

$category = NULL;

if (isset($_GET['category'])) {

    $category = $_GET['category'];

};

?>

<section id="gallery">

    <div class="container">

        <header class="header">

            <h1>Galeria</h1>

           <?php

            for ($i = 0; $i < sizeof($gallery->categories); $i++) {

                
            ?>

                <a href="?page=gallery&category=<?php echo $gallery->categories[$i]; ?>" class="btn-categories" data-category="<?php echo $gallery->categories[$i]; ?>"><?php echo $gallery->categories[$i]; ?></a>
                
            <?php

            }

           ?>

        </header>

        <div id="grid">

            <?php 

            for ($i = 0; $i < $gallery->length; $i++) {

                if ($category == NULL) {

                ?>

                    <div class="item" data-categories="<?php foreach ($gallery->items[$i]->categories as $key => $val) { echo $key == 0 ? "" : " "; echo $val; } ?>">
    
                        <img src="gallery/<?php echo $gallery->items[$i]->name; ?>" alt="<?php echo $gallery->items[$i]->description; ?>">
    
                        <div class="description">
    
                            <?php echo $gallery->items[$i]->description; ?>
    
                        </div>
    
                        <a href="gallery/<?php echo $gallery->items[$i]->name; ?>" class="btn-img"></a>
    
                    </div>
    
                <?php

                } else {

                    if (in_array($category, $gallery->items[$i]->categories)) {

                    ?>
                        
                        <div class="item" data-categories="<?php foreach ($gallery->items[$i]->categories as $key => $val) { echo $key == 0 ? "" : " "; echo $val; } ?>">
        
                            <img src="gallery/<?php echo $gallery->items[$i]->name; ?>" alt="<?php echo $gallery->items[$i]->description; ?>">
        
                            <div class="description">
        
                                <?php echo $gallery->items[$i]->description; ?>
        
                            </div>
        
                            <a href="gallery/<?php echo $gallery->items[$i]->name; ?>" class="btn-img"></a>
        
                        </div>
        
                    <?php

                    }

                }

            }

            ?>
            
        </div>

    </div>

</section>