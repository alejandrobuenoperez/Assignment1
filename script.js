
var trianglePlay = document.getElementsByClassName("divPlay");
var dotPlay = document.getElementsByClassName("divDot")
function play() { 
    var video = document.getElementById('videoLeftDownCorner'); 
    video.play();
    trianglePlay[0].style.visibility = 'hidden';
    dotPlay[0].style.visibility = 'hidden';
} 


let slideIndex = 0;
showSlide(slideIndex);
let slides = document.getElementsByClassName("container");
function showSlide(n){
    slides[n].style.display = 'block';
}
function swipeLeft(){
 changeSlide(n-1);
}
function swipeRight(){
    changeSlide(n+1);
}
function changeSlide(n){
    if(n>slides.length-1){
        slideIndex = 0;
    }
    if(n<0){
        slideIndex = slides.length -1;
    }
    for(let i =0;i<slides.length;i++){
        if(i===slideIndex){
            slides[slideIndex].style.display = 'block';
        }else{
            slides[slideIndex].style.display = 'none';
        }
    }
    setTimeout(changeSlide,30000);
}