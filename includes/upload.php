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
        border: 2px solid #AAA;
        border-radius: 4px;
        padding: 2px 5px;
        margin: 2px;
        background: #DDD;
        display: inline-block;
    }
    .myLabel:hover {
        background: #CCC;
    }
    .myLabel:active {
        background: #CCF;
    }
    .myLabel :invalid + span {
        color: #A44;
    }
    .myLabel :valid + span {
        color: #4A4;
    }
    .submit-button{

    }
</style>

<div class="row">
    <div class="column2">
        <div class="upload">
            <form action="/php/save_image.php" method="post" enctype="multipart/form-data">
                <label class="myLabel">
                    <input type="file" name="fileToUpload" required/>
                    <span>CHOOSE IMAGE</span>
                </label>
                <br />
                <input class="submit-button" type="submit" value="UPLOAD" name="submit">
            </form>
        </div>
    </div>
    <div class="column2 blue-text">
        Upload an image from your computer, phone or tablet. Simply press on the upload button, and find the image you wish to upload.
    </div>
</div>