
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
//Assignment 3 ajax
var result;
function showHint(str) {
    var list = document.getElementById("list");
    var listDiv = document.getElementById("listDiv");
    list.innerHTML = "";
        if (str.length > 0) {
          var xmlhttp = new XMLHttpRequest();
          xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                try{
                    result = this.responseText;
                      listDiv.style.display = "block";
                      result = JSON.parse(result);
                        console.log(result);
                        result.forEach(element => {
                          let li = document.createElement("li");
                          li.addEventListener("click",()=>{
                            
                          })
                          li.innerHTML = element.Title;
                          list.appendChild(li);
                        });
                    }catch(error){
                        listDiv.style.display = "none";
                        console.log(error);
                    }
                }
            }
        }else{
            listDiv.style.display = "none";
        }
        xmlhttp.open("GET", "gethint.php?q=" + str, true);
        xmlhttp.send();
}
function onClickLi(title)
{
    const jsonTosend = result.filter( item => item.title === title);
}
//Devolver json con la info, al clickar en un li enviar un post request a un archivo php pasando el json por parametro