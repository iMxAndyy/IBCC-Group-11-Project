<style>
    .form{
        border: 2px solid #004579;
        /* border: #004579; */
        color:#004579;
        margin-top: 30px;
        margin-bottom: 30px;
        margin-right: 20px;
        margin-left: 20px;
        height:350px;
    }
    .textinput{
        font-size: 12pt;
        border: 2px solid #004579;
        display: block;
        padding: 5px;
        color: #004579;
        width: 90%;
        margin: 0 auto;
        margin-top: 10px;
        margin-bottom: 10px;
    }
    .submit-form{
        padding: 10px;
        /* width: 90%; */
        text-align: center;
        margin: 0 auto;
        background-color: #004579;
        color: #fff;
        border: none;
        display: block;
        padding: 12px;
        padding-left: 150px;
        padding-right: 150px;
        font-family: dincondensedcregular;
        font-size: 18pt;
        margin-bottom: 30px;
    }
</style>

<div class="content">
    <div class="row blue center">
        <h1 style="padding-top:30px;">Contact us and tell us your story</h1>
        <p style="padding-bottom:30px;">If you would like to tell us your WWII stories, please fill in the simple form below or arrange a meeting with one of our team members, and we can help you upload your story and communicate with others.</p>
    </div>


    <div class="row">
        <div class="column2">
            <div class="form">
                <form action="/php/save_story.php" method="post">
                    <div style="text-align:center;margin:0 auto;margin-top:30px;margin-bottom:20px;">TELL US YOUR STORY</div>
                    <input type="text" style="margin-top:30px;" class="textinput" name="name" value="NAME">
                    <input type="text" class="textinput" name="email" value="EMAIL">
                    <input type="text" class="textinput" name="tel" value="TELEPHONE NUMBER">
                    <textarea class="textinput" value="STORY" name="story"></textarea>
                    <input type="submit" class="submit-form" value="Submit">
                </form>
            </div>
        </div>
        <div class="column2">
            <div class="form">
                <form action="/php/save_meeting.php" method="post">
                    <div style="text-align:center;margin:0 auto;margin-top:30px;margin-bottom:20px;">ARRANGE A MEETING</div>
                    <input type="text" class="textinput"  name="name" value="NAME">
                    <input type="text" class="textinput"  name="tel" value="TELEPHONE NUMBER">
                    <textarea name="data" class="textinput" value="SUBJECT & PREFERRED DATE/TIME"></textarea>
                    <input type="submit" class="submit-form" value="Submit">
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
            <i class="fa fa-chevron-left" onclick="plusDivs(1)"aria-hidden="true"></i>
        </div>
        <div id="imgData" style="display:none;">
            <?php
                include_once('./php/get_stories.php');
            ?>
        </div>
        <div id="memory-wall-slides">

        </div>
        <div class="arrow-right" style="margin-top:38px;">
            <i class="fa fa-chevron-right" onclick="plusDivs(-1)"aria-hidden="true"></i>
        </div>
    </div>
</div>