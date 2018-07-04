<?php require_once 'scripts/gallery.php' ?>

<section id="gallery">

    <div class="container">

        <header class="header">

            <h1>Galeria</h1>

            <ul class="nav">
                
                <?php for ($i = 0; $i < sizeof($gallery->categories); $i++) { ?>
                    
                    <?php if ($i == 0): ?>

                    <li>
                        <a href="?page=gallery" class="btn-categories <?php if ($category == NULL) echo " active" ?>" data-category="<?php echo "NULL" ?>">
                            Wszystkie
                        </a>
                    </li>

                    <?php endif; ?>

                    <li>
                        <a href="?page=gallery&category=<?php echo $gallery->categories[$i]; ?>" class="btn-categories <?php if ($category == $gallery->categories[$i]) echo " active" ?>" data-category="<?php echo $gallery->categories[$i]; ?>"><?php echo $gallery->categories[$i]; ?></a>
                    </li>
                
                <?php } ?>

            </ul>

        </header>

        <div class="grid-container">

            <?php 

            for ($i = 0; $i < $gallery->length; $i++):

                if ($category == NULL):

                ?>

                    <div class="item" data-categories="<?php foreach ($gallery->items[$i]->categories as $key => $val) { echo $key == 0 ? "" : " "; echo $val; } ?>">
    
                        <img src="gallery/<?php echo $gallery->items[$i]->name; ?>" alt="<?php echo $gallery->items[$i]->description; ?>">
    
                        <div class="description">
    
                            <?php echo $gallery->items[$i]->description; ?>
    
                        </div>
    
                        <a href="gallery/<?php echo $gallery->items[$i]->name; ?>" class="btn-img"></a>
    
                    </div>
    
                <?php

                else:

                    if (in_array($category, $gallery->items[$i]->categories)):

                    ?>
                        
                        <div class="item" data-categories="<?php foreach ($gallery->items[$i]->categories as $key => $val) { echo $key == 0 ? "" : " "; echo $val; } ?>">
        
                            <img src="gallery/<?php echo $gallery->items[$i]->name; ?>" alt="<?php echo $gallery->items[$i]->description; ?>">
        
                            <div class="description">
        
                                <?php echo $gallery->items[$i]->description; ?>
        
                            </div>
        
                            <a href="gallery/<?php echo $gallery->items[$i]->name; ?>" class="btn-img"></a>
        
                        </div>
        
                    <?php

                    endif;

                endif;

            endfor;

            ?>
            
        </div>

    </div>

</section>