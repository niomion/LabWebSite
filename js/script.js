

function openNav() {
    document.getElementById("mySidenav").style.width = "100%";
  }
  
  function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
  }
  
  function mobileHide() {
    var divs = document.querySelectorAll('.flex-nav > div');
    for (var i = 1; i < divs.length; i++) {
    divs[i].style.display = 'none'; 
}
  } 

 // change
 
 window.addEventListener('scroll', function() {
    var firstNav = document.querySelector('.flex-contact');
    var secondNav = document.querySelector('.flex-nav');
    if (firstNav.getBoundingClientRect().bottom <= 0) {
        secondNav.classList.add('change-background');
    } else {
        secondNav.classList.remove('change-background');
    }
});

// background

window.addEventListener('scroll', function() {
    var scrollTop = window.scrollY;
    var gradientDegree = scrollTop / (document.body.scrollHeight - window.innerHeight) * 360;
    document.body.style.background = 'linear-gradient(' + gradientDegree + 'deg, rgba(53,92,125,1) 0%, rgba(108,91,123,1) 35%, rgba(192,108,132,1) 100%)';
});

// carousel

let slideIndex = 0;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
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

