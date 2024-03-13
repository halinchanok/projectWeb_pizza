// page1
let slideIndex = 0;

function plusSlides() {
  showSlides((slideIndex += 1.25));
}

function showSlides(n) {
  const slides = document.getElementsByClassName('responsive');
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


// page2 -----------------------------------------------------------------------------
function changeImage() {
    const selectElement = document.getElementById("order_name");
    const selectedImage = document.getElementById("img_order_name");
    const selectedValue = selectElement.value;
    selectedImage.src = selectedValue;
}

// เปิดปิดเเท็บจ่ายตัง
let ch = 0;
function openNav() {
  if(ch == 0){
    document.getElementById("cart22").style.width = "480px"; //เวลากดปุ่มจ่ายตังจะให้มันเลื่อนออกมาเท่าไหร่
    document.getElementById("main").style.marginLeft = "850px"; // ตำแหน่งที่เลื่อนเวลากด
    ch = 1;
  }else if (ch == 1){
    document.getElementById("cart22").style.width = "0px"; 
    document.getElementById("main").style.marginLeft = "1000px";
    ch = 0;
  }
}


// page3 ----------------------------------------------------------------------------