let attempt = 0;
let locked = false;

function loginValidation() {
    let username = document.getElementById("uname").value;
    let password = document.getElementById("pass").value;
    let msg = document.getElementById("msg");

    if (locked) {
        alert("Blocked! Wait 5 minutes.");
        return false;
    }

    if (username == "" || password == "") {
        alert("Username and Password cannot be empty!");
        msg.innerHTML = "Username and Password cannot be empty!";
        return false;
    }

    if (username == "AIUB" && password == "$_student") {
        msg.innerHTML = "Successfully Logged In";
        attempt = 0;
        return false;
    }

    attempt++;

    if (attempt == 1) {
        msg.innerHTML = "You have 3 attempts left.";
    }
    else if (attempt == 2) {
        msg.innerHTML = "You have 2 attempts left.";
    }
    else if (attempt == 3) {
        msg.innerHTML = "You have 1 attempt left. Blocked for 5 minutes.";
        locked = true;

        setTimeout(function () {
            locked = false;
            attempt = 0;
            msg.innerHTML = "You can login now.";
        }, 300000);
    }

    return false;
}