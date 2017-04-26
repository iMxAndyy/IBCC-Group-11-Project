<div class="content">
    <div class="row">
        <div class="column2 blue center" style="height:400px;">
            <h1 style="margin-top:30px;margin-bottom:15px;">MEMORY WALL</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="column2" style="height:400px;">
            <a href="/res/1.jpg"><img src="http://placehold.it/400x400"></a>
        </div>
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

    <div class="row slide-desc">
        Some of our recent visitors to International Bomber Command. Click on a photo to see an larger image.
    </div>
    <div class="row" style="border-bottom:10px solid #8e3719">
        <div class="column2" style="height:400px;">
            <a href="/res/2.jpg"><img src="http://placehold.it/400x400"></a>
        </div>
        <div class="column2 blue center" style="height:400px;">
            <h1 style="margin-top:30px;margin-bottom:15px;">Contact Us</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
    </div>
</div>

<div id="overlay-wrapper">
    <div id="large-image">
        <div id="close-large-image" onclick="closeLargeImage()"><i class="fa fa-times" aria-hidden="true"></i></div>
    </div>
</div>