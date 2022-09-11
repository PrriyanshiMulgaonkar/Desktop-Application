// function removal() {
//     const nodeList = document.querySelectorAll(".remove");
//     for (let i = 0; i < nodeList.length; i++) {
//     // nodeList[i].style.display = "block";
//     $(nodeList[i]).toggle();
//     }
// }

$(document).ready(function(){
    $("button").click(function(){
      $(".remove").toggle();
    });
  });


  function init()
  {
      nam = document.getElementById('staticEmail');
      pass = document.getElementById('inputPassword');
      err1 = document.getElementById('err1');
      err2 = document.getElementById('err2');

      console.log(nam+" : : "+err);
  }

  function validation() {

      var nm = nam.value;
      var pas = pass.value;
      if (nm.length == 0)
      {
          err1.innerHTML = "Please enter valid mail id";
          err1.style.color = "red";
      }
      else
      {
          err1.innerHTML = "";
      }
      if (pas.length == 0)
      {
          err2.innerHTML = "Please enter your password";
          err2.style.color = "red";
      }
      else if (pas.length<5 && pas.length>0) {
          err2.innerHTML = "Please enter password in 5-8 digit";
          err2.style.color = "red";
      }
      else
      {
          err2.innerHTML = "";
      }

  }


