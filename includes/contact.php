<div class="content">
    <div class="row blue center">
        <h1 style="padding-top:30px;">Contact us and tell us your story</h1>
        <p style="padding-bottom:30px;">If you would like to tell us your WWII stories, please fill in the simple form below or arrange a meeting with one of our team members, and we can help you upload your story and communicate with others.</p>
    </div>


    <div class="row">
        <div class="column2">
            <div class="form">
                <form action="/php/save_story.php" method="post">
                    <input type="text" name="name" value="NAME">
                    <input type="text" name="email" value="EMAIL">
                    <input type="text" name="tel" value="TELEPHONE NUMBER">
                    <textarea name="story"></textarea>
                    <input type="submit" value="Submit">
                </form>
            </div>
        </div>
        <div class="column2">
            <div class="form">
                <form action="/php/save_meeting.php" method="post">
                    <div class="">ARRANGE A MEETING</div>
                    <input type="text" name="name" value="NAME">
                    <input type="text" name="tel" value="TELEPHONE NUMBER">
                    <textarea name="story"></textarea>
                    <input type="submit" value="Submit">
                </form>
            </div>
        </div>
    </div>




    <div class="row blue center">
        <h1 style="padding-top:30px;">Read the stories below</h1>
        <p style="padding-bottom:30px;">Press on the button under each story to read in full, and to see the information of the person who submitted it.</p>
    </div>
    <div class="memory-wall" style="height:230px;">
        <div class="arrow-left" style="margin-top:38px;">
            <i class="fa fa-chevron-left" onclick="plusDivs(-1)"aria-hidden="true"></i>
        </div>
        <div id="imgData" style="display:none;">
            <?php
                include('/php/get_stories.php');
            ?>
        </div>
        <div id="memory-wall-slides">

        </div>
        <div class="arrow-right" style="margin-top:38px;">
            <i class="fa fa-chevron-right" onclick="plusDivs(1)"aria-hidden="true"></i>
        </div>
    </div>
</div>