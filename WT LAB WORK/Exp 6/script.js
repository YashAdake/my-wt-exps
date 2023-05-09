        function validation(){
            var age;
            nameValidation();
            contactValidation();
            postalValidation();
            aadharValidation();
            age=calc_age();
            if(age < 18){
                alert("Age is less than 18");
            }
        }
        function nameValidation(){
            let name = document.getElementById('name').value;
            let re = /^[A-Za-z]+$/;
            if(!re.test(name)){
                alert("Invalid name");
            }
        }
        function aadharValidation(){
            let num = document.getElementById("aadhar").value;
            if(!(num.length == 12)){
                alert("Invalid AADHAR number.")
            } 
        }
        function contactValidation(){
            let num = document.getElementById("contact").value;
            if(!(num.length == 10)){
                alert("Invalid mobile number.")
            } 
        }
        function postalValidation(){
            let num = document.getElementById("pin").value;
            if(!(num.length == 6)){
                alert("Invalid Pincode.")
            } 
        }
        function calc_age(){
            let date = document.getElementById("DOB").value;
            var dob = new Date(date)
            var month_diff = Date.now() - dob.getTime();
            var age_dt = new Date(month_diff);
            var year = age_dt.getUTCFullYear();
            var age = Math.abs(year - 1970);
            return age;
        }
