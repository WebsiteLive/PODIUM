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
  function signupmodal(){
      var modal = document.getElementById("signupmodal");
      var btn = document.getElementById("signupbtn");
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