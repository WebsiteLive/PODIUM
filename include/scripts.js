function navButton() {
  var x = document.getElementById("nav_bar");
    if (x.className === "topnav") {
      x.className += " responsive";
      } else {
          x.className = "topnav";
          }
    }

function loginmodal(){
  var modal = document.getElementById("loginmodal");
  var btn = document.getElementById("loginbtn");
  var span = document.getElementsByClassName("close")[0];
  btn.onclick = function() {
    modal.style.display = "block";
  }
  span.onclick = function() {
    modal.style.display = "none";
  }
  window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  }
}
function freelancemodal(){
  var modal2 = document.getElementById("freelancemodal");
  var btn2 = document.getElementById("freelancebtn");
  var span2 = document.getElementsByClassName("close")[0];
  btn2.onclick = function() {
    modal2.style.display = "block";
  }
  span2.onclick = function() {
    modal2.style.display = "none";
  }
  window.onclick = function(event) {
    if (event.target == modal2) {
      modal2.style.display = "none";
    }
  }
}

function Confirm_Pass(){
  var pass = document.getElementById("password").value;
  var confirmpass = document.getElementById("confirmpassword").value;
  var mess= document.getElementById("message");

  if(pass==confirmpass){
    mess.textContent=" ";
  }
  else{
    mess.style.backgroundColor="red";
    mess.textContent="Password does not Match";
    
  }
  


}