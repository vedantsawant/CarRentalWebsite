            function calculateAmount(val) {
			  if(val>150)
			  {
				val=((val-150)/10)+150;
			  }
                var tot_price = val * 28;
                /*display the result*/
                var divobj = document.getElementById('tot_amount');
                divobj.value = tot_price;
            }

            function myFunction() {
                  var x = document.getElementById("mySelect").selectedIndex;
                  alert('Are you sure you want to proceed?');
                }

                     function showTime(){
            var date = new Date();
            var h = date.getHours(); // 0 - 23
            var m = date.getMinutes(); // 0 - 59
            var s = date.getSeconds(); // 0 - 59
            var session = "AM";
            
            if(h == 0){
                h = 12;
            }
            if(h > 12){
                h = h - 12;
                session = "PM";
            }
            h = (h < 10) ? "0" + h : h;
            m = (m < 10) ? "0" + m : m;
            s = (s < 10) ? "0" + s : s;
            var time = h + ":" + m + ":" + s + " " + session;
            document.getElementById("MyClockDisplay").innerText = time;
            document.getElementById("MyClockDisplay").textContent = time;
            setTimeout(showTime, 1000);  
        }
        showTime();

        function validateEmail(emailField){
                var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

                if (reg.test(emailField.value) == false) 
                {
                    alert('Invalid Email Address');
                    return false;
                }

                return true;

}
    