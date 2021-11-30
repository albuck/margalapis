// Open mobile menu
function menuFunction() {
   var x = document.getElementById("mMenu");
   if (x.style.display === "block") {
       x.style.display = "none";
   } else {
       x.style.display = "block";
   }
}

// Hide mobile menu after click
mMenu.addEventListener("click", menuFunction);
