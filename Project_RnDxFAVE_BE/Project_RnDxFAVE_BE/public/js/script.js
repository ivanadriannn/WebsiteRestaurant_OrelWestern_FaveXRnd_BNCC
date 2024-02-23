document.getElementById("form1").addEventListener("submit",function (a){
    a.preventDefault();
    let inputname = document.getElementById("first").value;
    console.log(inputname);
    if(inputname.length > 3){
        document.getElementById("form1").submit();
    }
    else{
        document.getElementById("validation").innerText = "Must be more than 3 characters"
        
    }
});
document.getElementById("form1").addEventListener("submit",function (b){
    b.preventDefault();
    let inputname = document.getElementById("first").value;
    console.log(inputname);
    if(!(document.getElementById("first").value =="")){
        document.getElementById("form1").submit();
    }
    else{
        document.getElementById("validation2").innerText = "Please fill the field"
       
    }
});

document.getElementById("form1").addEventListener("submit",function (c){
    c.preventDefault();
    let inputname = document.getElementById("last").value;
    console.log(inputname);
    if(inputname.length > 3){
        document.getElementById("form1").submit();
    }
    else{
        document.getElementById("validation3").innerText = "Must be more than 3 characters"
        
    }
});
document.getElementById("form1").addEventListener("submit",function (d){
    d.preventDefault();
    let inputname = document.getElementById("last").value;
    console.log(inputname);
    if(!(document.getElementById("last").value =="")){
        document.getElementById("form1").submit();
    }
    else{
        document.getElementById("validation4").innerText = "Please fill the field"
       
    }
});
document.getElementById("form1").addEventListener("submit",function (e){
    e.preventDefault();
    var inputemail = document.getElementById("username").value;
    console.log(inputemail);
    if(!(document.getElementById("username").value ==="")){
        document.getElementById("form1").submit();
    }
    else{
        document.getElementById("validation5").innerText = "Please fill the field"
    }
});
document.getElementById("form1").addEventListener("submit",function (f){
    f.preventDefault();
    var inputemail = document.getElementById("date").value;
    console.log(inputemail);
    if(!(document.getElementById("date").value ==="")){
        document.getElementById("form1").submit();
    }
    else{
        document.getElementById("validation6").innerText = "Please fill the field"
    }
});
document.getElementById("form1").addEventListener("submit",function (g){
    g.preventDefault();
    var inputname = document.getElementById("password").value;
    console.log(inputname);
    if(!(document.getElementById("password").value ==="")){
        document.getElementById("form1").submit();
    }
    else{
        document.getElementById("validation7").innerText = "Please fill the field"
    }
});
document.getElementById("form1").addEventListener("submit",function (h){
    h.preventDefault();
    let inputname = document.getElementById("password").value;
    console.log(inputname);
    if(inputname.length > 5){
        document.getElementById("form1").submit();
    }
    else{
        document.getElementById("validation8").innerText = "Must be more than 5 characters"
        
    }
});
function hasUpperCase(password) {
    return /[A-Z]/.test(password);
}
  document.getElementById("form1").addEventListener("submit",function (i){
    i.preventDefault();
    var inputpass = document.getElementById("password").value;
    console.log(inputpass);
    if( hasUpperCase(inputpass)){
        document.getElementById("form1").submit();
    }
    else{
        document.getElementById("validation9").innerText = "Password must contain upper case character [A-Z]"
    }
});
document.getElementById("form1").addEventListener("submit",function (j){
    j.preventDefault();
    var inputname = document.getElementById("confirmpass").value;
    console.log(inputname);
    if(!(document.getElementById("confirmpass").value ==="")){
        document.getElementById("form1").submit();
    }
    else{
        document.getElementById("validation10").innerText = "Please fill the field"
    }
});
document.getElementById("form1").addEventListener("submit",function (k){
    k.preventDefault();
    let inputpass = document.getElementById("password").value;
    let confirmpass = document.getElementById("confirmpass").value;
    console.log(inputpass);
    if(confirmpass == inputpass){
        document.getElementById("form1").submit();
    }
    else{
        document.getElementById("validation11").innerText = "Must match password"
        
    }
});
const inputpass= document.getElementById('password');
const confirmpass = document.getElementById('confirmpass');

function show() {
    var x = document.getElementById("password");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
  }
  function show2() {
    var y = document.getElementById("confirmpass");
    if (y.type === "password") {
      y.type = "text";
    } else {
      y.type = "password";
    }
  }