var slideIndex = 1;
var x = document.getElementsByClassName("mySlides");
/*for(var z=0;z< x.length;z++){
    console.log(x[z]);
}*/
showDivs(slideIndex);
/*
for(var z=0;z< x.length;z++){
    console.log(x[z]);
}*/

function plusDivs(n) {
    if( (slideIndex + n) < 0){
        slideIndex = x.length-5;
    }
    else if((slideIndex + n)>x.length-5) {
        slideIndex = 0;
    }
    else{
        slideIndex += n;
    }
    showDivs();
}

function showDivs() {
    console.log(" ");
    var wall = document.getElementById("memory-wall-slides");
    wall.innerHTML="";
    var y = slideIndex;

    for (var i=0;i<4;i++){
        if(y-1<0){
            y=x.length-1-i;
        }
        else{
            y=y-1;
        }
        console.log(y);
        var elementTemp = x[y];
        var clone = elementTemp.cloneNode(true);
        wall.appendChild(clone);
    }
}

function changeLargeImage(ImgDir){
    var w = document.getElementById("overlay-wrapper").offsetWidth;
    var h = document.getElementById("overlay-wrapper").offsetHeight;
    document.getElementById("overlay-wrapper").style.pointerEvents = "auto";
    console.log(w);
    console.log(h);
    var frame = document.getElementById('large-image');
    var smallImage = new Image();
    smallImage.src = ImgDir;
    var height = smallImage.height;
    var width = smallImage.width;
    while (width>(w*0.95)) {
        width=width*0.95;
        height=height*0.95;
    }
    while (height>(h*0.95)) {
        width=width*0.95;
        height=height*0.95;
    }
    frame.style.height = height+"px";
    frame.style.width = width+"px";
    frame.style.backgroundImage = "url('"+ImgDir+"')";
}