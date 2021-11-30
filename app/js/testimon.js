// Changes testimonials

let slideIndex = 0;
// Select all the HTML elements you want to use as slides.
let all = document.querySelectorAll(".testimonials .testimonial");

// Starting slides.
carousel();

// This function simply adds a CSS class and removes it as the timeout ends, 
function carousel() {
   let i;
   // Remove the class to each element first
   for (i = 0; i < all.length; i++) {
      all[i].classList.remove("animate");
   }
   // Then increment the slide idex (which element you want to animate)
   slideIndex++;
   // Of course you have to go to the first element if you reach the end.
   if (slideIndex > all.length) {slideIndex = 1}
   // Add the class to the current index element.
   all[slideIndex-1].classList.add("animate");
   setTimeout(carousel, 10000);
}