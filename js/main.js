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