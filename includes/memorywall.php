<div class="row blue">
    <h1 style="font-size: 26pt;
    margin-top: 0;
    padding-top: 30px;
    text-align: center;">MEMORY WALL
    </h1>
    <p style="
    text-align: center;
    padding-bottom: 30px;">Your images from the International Bomber Command Memorial. Click on a photo to enlarge it.</p>
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

<div id="overlay-wrapper">
    <div id="large-image">
        <div id="close-large-image"><i class="fa fa-times" aria-hidden="true"></i></div>
    </div>
</div>