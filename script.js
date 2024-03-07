// page1
let slideIndex = 0;

function plusSlides() {
  showSlides((slideIndex += 1.25));
}

function showSlides(n) {
  const slides = document.getElementsByClassName('menu');
  if (n >= slides.length) {
    slideIndex = 0;
  }
  if (n < 0) {
    slideIndex = slides.length - 1;
  }
  for (let i = 0; i < slides.length; i++) {
    slides[i].style.transform = `translateX(${-100 * slideIndex}%)`;
  }
}

// page2
function changeImage() {
    const selectElement = document.getElementById("imageSelect");
    const selectedImage = document.getElementById("selectedImage");
    const selectedValue = selectElement.value;
    selectedImage.src = selectedValue;
}
