// page1


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



// admin ----------------------------------------------------------------------------
function updateSession(selectedValue) {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
          console.log('Data saved to session');
      }
  };
  xhttp.open("POST", "update_session.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("selectedValue=" + selectedValue);
}