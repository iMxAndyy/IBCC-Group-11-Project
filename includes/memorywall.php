<div class="row blue">
    <h1>MEMORY WALL
    </h1>
    <p>Your images from the International Bomber Command Memorial. Click on a photo to enlarge it.</p>
</div>
<div class="memory-wall">
    <div class="arrow-left">
        <i class="fa fa-chevron-left" onclick="plusDivs(1)"aria-hidden="true"></i>
    </div>
    <div id="imgData" style="display:none;">
        <?php
        include('./php/get_images.php');
        ?>
    </div>
    <div id="memory-wall-slides">

    </div>
    <div class="arrow-right">
        <i class="fa fa-chevron-right" onclick="plusDivs(-1)"aria-hidden="true"></i>
    </div>
</div>