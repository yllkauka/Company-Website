var gmailCorrect = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;


function send(){
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var message = document.getElementById("message").value;

    if (name == "" || email == "" ||  message == "") {
      alert("Please don't let any field blank");
    }else if(!email.match(gmailCorrect)){
        alert("Email incorrect !");
    }else{
        window.location = "index.php";
    }
}