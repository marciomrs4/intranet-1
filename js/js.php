 		
    
    <div class="container">
        <!-- Inicio Slider -->

        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="img/LOGO_CEADIS_ALTA.jpg" alt="...">
                    <div class="carousel-caption">
                        ...
                    </div>
                </div>
                <?php

                $dir = new DirectoryIterator('img/slides');

                foreach($dir as $file){

                    if($file->isDot()){ continue; }

                ?>
                <div class="item">
                    <img src="img/slides/<?php echo $file->getFilename(); ?>" alt="...">
                    <div class="carousel-caption">

                    </div>
                </div>
                <?php } ?>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
               
    </div><!-- /.container -->