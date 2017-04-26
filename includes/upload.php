<style>
    .upload{
        background-color:#004579;
        color:#fff;
        padding-top:100px;
        padding-bottom:100px;
        text-align:center;
    }
    .blue-text{
        color:#004579;
        text-align:center;
        padding-top:100px;
    }

    label.myLabel input[type="file"] {
        position: fixed;
        top: -1000px;
    }

    /***** Example custom styling *****/
    .myLabel {
        background-color:#8e3719;
        color:#fff;
        padding:10px;
        padding-left:50px;
        padding-right:50px;
        transition:color 0.2s;
        cursor:pointer;
    }
    .myLabel:hover {
        background-color:#8E4C37;
    }
    .submit-button{

    }

    .big-icon{
        width:150px;
        height:150px;
    }
</style>

<div class="row">
    <div class="column2">
        <div class="upload">
            <form action="/php/save_image.php" method="post" enctype="multipart/form-data">
                <img class="big-icon" src="/img/upload.png">
                <label class="myLabel">
                    <input type="file" name="fileToUpload" id="submit" onchange="document.getElementById('SUBMITFORM').click()" required/>
                    <input type="submit" value="submit" name="submit" id="SUBMITFORM" style="display:none;">
                    <br /><br />
                    <span style="display:block;">UPLOAD IMAGE</span>
                </label>
            </form>
        </div>
    </div>
    <div class="column2 blue-text">
        Upload an image from your computer, phone or tablet. Simply press on the upload button, and find the image you wish to upload.
    </div>
</div>