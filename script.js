
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
function showSlide(n){
    let slides = document.getElementsByClassName("largeImage");
    slides[n].style.display = 'block';
}
function swipeLeft(){
    slideIndex -=1;
    changeSlide(slideIndex);
}
function swipeRight(){
    slideIndex +=1;
    changeSlide(slideIndex);
}
function changeSlide(n){
    let slides = document.getElementsByClassName("largeImage");
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
            slides[i].style.display = 'none';
        }
    }
}
setTimeout(swipeRight,30000);