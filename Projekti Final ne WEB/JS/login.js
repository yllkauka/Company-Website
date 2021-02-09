var attemp = 6;

function validate(){
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;

    if(username == "admin" && password == "admin"){
        window.location = "index.php";
    }else{
        attemp--;
        if(attemp >= 0){
            alert("You have left " + attemp + " attemp");
        }else{
            alert("You are disableded");
        }

        if(attemp == 0){
            document.getElementById("username").disabled = true;
            document.getElementById("password").disabled = true;
            document.getElementById("submit").disabled = true;
        }
    }
}
