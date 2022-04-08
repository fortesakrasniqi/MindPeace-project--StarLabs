var n;
var slideIndex = 1;

function showSlides(n){
    var i;
    var slides = document.getElementsByClassName("mySlides");
        for(i = 0; i < slides.length; i++){
            slides[i].style.display = "none";
        }
        slides[slideIndex - 1].style.display = "block";
}
function slideMomental(n){
    showSlides(slideIndex = n);
}

showSlides(slideIndex); 
