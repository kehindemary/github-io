
    function validateForm() {
        var firstname = document.forms["regForm"]["firstname"];
        if (firstname.value == "") {
        alert("Please input your Firstname");
        firstname.focus();
        return false;
        }
        var lastname = document.forms["regForm"]["lastname"];
        if (lastname.value == "") {
        alert("Please input your Lastname");
        lastname.focus();
        return false;
        }
        
        var email = document.forms["regForm"]["email"];
        if (email.value == "") {
        alert("Please input your email address");
        email.focus();
        return false;
        }
        var gender = document.regForm.gender;
        if (gender.value == "") {
        alert("Please select your gender");
        return false;
        }
            
        var phoneno = document.regForm.phoneno
        if (phoneno.value == "" || isNaN(phoneno.value)) {
        alert("Phone number should be numeric.");
        phoneno.focus();
        return false;
        }
        if (phoneno.value.length != 11) {
        alert( "Phone number should be exactly 11 digits.");
             phoneno.focus();
        return false;
        }
        var address1 = document.regForm.address1;
        if (address1.value == "") {
        alert("Please Enter your Address");
        return false;
        }
        var address2 = document.regForm.address2;
        if (address2.value == "") {
        alert("Please Enter your Nearest-Bustop");
        return false;
        }
        var city = document.regForm.city;
        if (city.value == "") {
        alert("Please Enter your City");
        return false;
        }
        var state1 = document.regForm.state1;
        if (state1.value == "0") {
        alert("Please select your state");
        return false;
        }
        var menu = document.regForm.menu;
        if (menu.value == "") {
        alert("Please Enter Menu");
        return false;
        }
        var quantity = document.regForm.quantity;
        if (quantity.value == "") {
        alert("Please Enter Quantity");
        return false;
        }
    }
    
    