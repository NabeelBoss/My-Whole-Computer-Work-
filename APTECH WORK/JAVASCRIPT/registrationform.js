function submn(){

var username = document.getElementById("username").value;
var userpassword = document.getElementById("userpassword").value;
var usercnic = document.getElementById("usercnic").value;


if(username.length > 0 && userpassword.length > 5 && usercnic.length > 0){
    alert("User Is Register");
}else{
    alert("Kindly Fill The Form Correctly")
}

}   








