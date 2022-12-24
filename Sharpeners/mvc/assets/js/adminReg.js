function CheckReg() {

    let name = document.getElementById('name').value;
    let email = document.getElementById('email').value;
    let password = document.getElementById('password').value;
    let cpassword = document.getElementById('cpassword').value;
    let username = document.getElementById('username').value;
    let address = document.getElementById('address').value;
    let division = document.getElementById('division').value;
    let postalcode = document.getElementById('postalcode').value;
    let contnum = document.getElementById('contnum').value;
    let gender = document.getElementById('gender').checked;
    let dob = document.getElementById('dob').value;
    let bg = document.getElementById('bg').value;
    let cv = document.getElementById('cv').value;
    let pic = document.getElementById('pic').value;

    let errors = document.getElementsByClassName("err");

    for(let i=0; i<errors.length; i++)
    {
        errors[i].innerHTML = "";
    }
    
    if(name == '' || email == '' || password == '' || cpassword == '' || username == '' || address == '' || division == '' || postalcode == '' || contnum == '' || gender == '' || dob == '' || bg == '' || cv == '' || pic == '')
    {
        document.getElementsByTagName('h2')[0].innerHTML = "All data must be filled up";

        if(name == '')
        {
            document.getElementById('name-p').innerHTML = "Name must be filled out";
            return false;
        }
        else if(email == '')
        {
            document.getElementById('email-p').innerHTML = "Email must be filled out";
            return false;
        }
        else if(password == '')
        {
            document.getElementById('password-p').innerHTML = "Password must be filled out";
            return false;
        }
        else if(cpassword == '')
        {
            document.getElementById('cpassword-p').innerHTML = "Confirm Password must be filled out";
            return false;
        }
        else if(username == '')
        {
            document.getElementById('username-p').innerHTML = "Username must be filled out";
            return false;
        }
        else if(address == '')
        {
            document.getElementById('address-p').innerHTML = "Address must be filled out";
            return false;
        }
        else if(division == '')
        {
            document.getElementById('division-p').innerHTML = "Division must be filled out";
            return false;
        }
        else if(postalcode == '')
        {
            document.getElementById('postalcode-p').innerHTML = "Postal Code must be filled out";
            return false;
        }
        else if(contnum == '')
        {
            document.getElementById('contnum-p').innerHTML = "Contact Number must be filled out";
            return false;
        }
        else if(gender == '')
        {
            document.getElementById('gender-p').innerHTML = "Gender must be filled out";
            return false;
        }
        else if(dob == '')
        {
            document.getElementById('dob-p').innerHTML = "Date of birth must be filled out";
            return false;
        }
        else if(bg == '')
        {
            document.getElementById('bg-p').innerHTML = "Blood Group must be filled out";
            return false;
        }
        else if(cv == '')
        {
            document.getElementById('cv-p').innerHTML = "CV must upload";
            return false;
        }
        else if(pic == '')
        {
            document.getElementById('pic-p').innerHTML = "Picture must upload";
            return false;
        }
    }
    else{
        document.getElementsByTagName('h2')[0].innerHTML = "Something is wrong. Please check all data again.";
        if(password != cpassword)
        {
            document.getElementById('cpassword-p').innerHTML = "Password and confirm password must be same.";
            return false;
        }
        if(password.length < 8 || password.length > 15 || !password.match(/[0-9]/g) || !password.match(/[a-z]/g) || !password.match(/[A-Z]/g))
        {
            document.getElementById('password-p').innerHTML = "Full fill the all conditions for password before submit.";
            return false;
        }
    }
} 

function PassVal()
{
    let pass = document.getElementById("password").value;
    if(pass.length < 8 || pass.length > 15 || !pass.match(/[0-9]/g) || !pass.match(/[a-z]/g) || !pass.match(/[A-Z]/g))
    {
        document.getElementById('password-p').innerHTML = "Your must contain:";
    }
    else 
    {
        document.getElementById('password-p').innerHTML = "";
    }
    if(pass.length < 8)
        {
            document.getElementById('min-p').innerHTML = "Minimum 8 characters.";
        }
        if(pass.length > 15)
        {
            document.getElementById('max-p').innerHTML = "Maximum 15 characters.";
        }
        if(!pass.match(/[0-9]/g))
        {
            document.getElementById('num-p').innerHTML = "A number.";
        }
        if(!pass.match(/[a-z]/g))
        {
            document.getElementById('lowercase-p').innerHTML = "A lowercase letter.";
        }
        if(!pass.match(/[A-Z]/g))
        {
            document.getElementById('uppercase-p').innerHTML = "A uppercase letter";
        }
        if(pass.length >= 8 && pass.length <=15)
        {
            document.getElementById('min-p').innerHTML = "";
            document.getElementById('max-p').innerHTML = "";
        }
        if(pass.match(/[0-9]/g))
        {
            document.getElementById('num-p').innerHTML = "";
        }
        if(pass.match(/[a-z]/g))
        {
            document.getElementById('lowercase-p').innerHTML = "";
        }
        if(pass.match(/[A-Z]/g))
        {
            document.getElementById('uppercase-p').innerHTML = "";
        }
    
}

function CheckPass()
{
    let pass = document.getElementById("password").value;
    let cpass = document.getElementById("cpassword").value;

    if(cpass.length == 0)
    {
        document.getElementById('cpassword-p').innerHTML = "";
    }
    else if(pass.length == 0 && cpass.length != 0)
    {
        document.getElementById('cpassword-p').innerHTML = "Enter password first";
    }
    else if(pass == cpass)
    {
        document.getElementById('cpassword-p').innerHTML = "Matched";
    }
    else {
        document.getElementById('cpassword-p').innerHTML = "Does not matched";
    }
}
function Hide()
{
    let username = document.getElementById("username").value;
    if(username.length != 0)
    {
        document.getElementById('cpassword-p').innerHTML = "";
    }
}