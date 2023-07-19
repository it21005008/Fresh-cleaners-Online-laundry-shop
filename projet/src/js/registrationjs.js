function checkPassword()
{
    if(document.getElementById("password").value!=document.getElementById("cpassword").value)
    {
        alert("Password Mismatched!!!");
        return false;
    }
    else
    {
        alert("SUCCESS");
        return true;
    }

}

function enableButton()
{
    if(document.getElementById("checkBox").checked)
    {
        document.getElementById("submitBtn").disabled=false;
    }
    else
    {
        document.getElementById("submitBtn").disabled=true; 
    }
}