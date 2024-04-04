// page1
function changeLanguage() {
  var langSelect = document.getElementById("lang-select");
  var selectedLang = langSelect.value;
  var currentUrl = window.location.href;
  var newUrl = currentUrl.split('?')[0] + '?lang=' + selectedLang;
  window.location.href = page1_menu.php; // ทำการ redirect ไปยัง URL ใหม่
}

document.getElementById("lang-select").addEventListener("change", function() {
  document.getElementById("language-form").submit();
});

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