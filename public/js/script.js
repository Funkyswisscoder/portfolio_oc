let loginLink = document.getElementById('loginLink')
let formWrapper = document.getElementById('formWrapper')


if(loginLink){
    loginLink.addEventListener('click', ()=>{
        console.log(formWrapper.style);
        if(formWrapper.style.display === "block"){
            console.log('caca');
            formWrapper.style.display = "none";
        }else if(formWrapper.style.display === "none"){
            console.log('shit');
            formWrapper.style.display = "block";
        } 
    })
}



/* SLIDESHOW SCRIPT */

var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1} 
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none"; 
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block"; 
  dots[slideIndex-1].className += " active";
}