var gmailCorrect = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;


function register(){
    var fullname = document.getElementById("fullname").value;
    var username = document.getElementById("username").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    var address = document.getElementById("address").value;
    var number = document.getElementById("number").value;

    if (fullname == "" || username == "" || email == "" || password == "" || address == "" || number == "") {
      alert("Please don't let any field blank");
    }else if(!email.match(gmailCorrect)){
        alert("Email incorrect !");
    }else{
        window.location = "index.php";
    }
}
