function create()
        {
            nam = document.getElementById('staticEmail');
            namee=document.getElementById('username');
            pass = document.getElementById('inputPassword');
            cpass = document.getElementById('cpass');
            // mob = document.getElementById('phone');

            err1 = document.getElementById('err1');
            err2 = document.getElementById('err2');
            err3 = document.getElementById('err3');
            err4 = document.getElementById('err4');

            console.log(nam+" : : "+err);
        }

        function validation() {
            var nm = nam.value;
            var nme=namee.value;
            var pas = pass.value;
            var cpas = cpass.value;
            // var phn = mob.value;
            if (nm.length == 0)
            {
                err1.innerHTML = "Please enter your mail";
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
            
            if (cpas.length == 0)
            {
                err4.innerHTML = "Please re-enter password";
                err4.style.color = "red";
            }
            
            if (nme.length == 0)
            {
                err3.innerHTML = "Please enter your name";
                err3.style.color = "red";
            }
            // else if (isNaN(phn))
            // {
            //     err3.innerHTML = "Please enter only numeric digit";
            //     err3.style.color = "red";
            // }
            // else if (phn.length<10 || phn.length>10) {
            //     err3.innerHTML = "Please enter 10 digit mobile no";
            //     err3.style.color = "red";
            // }
            else
            {
                err3.innerHTML = "";
            }   
        }

        function checkpass() {
            if (cpass.value != pass.value)
            {
                err4.innerHTML = "Password didn't match...";
                err4.style.color = "red";
            }
            else
            {
                err4.innerHTML = "";
            }
        }