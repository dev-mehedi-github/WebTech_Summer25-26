
function collect_data(){
    let collectName= collect_Name();
    let collectEmail= collect_Email();
    let collectPass= collect_Password();
    let collectAge= collect_Age();
    let collectExpDate= collect_ExpDate();
    let collectPhone= collect_Phone();
    return false;
}

function collect_Name(){
    let sName=document.getElementById("name").value;
    console.log(sName);
    return false;
}

function collect_Email(){
    let sEmail= document.getElementById("email").value;
    console.log(sEmail);
    return false;
}

function collect_Password(){
    let sPass= document.getElementById("pass").value;
    console.log(sPass);
    return false;
}

function collect_Age(){
    let sAge= document.getElementById("age").value;
    console.log(sAge);
    return false;
}

function collect_ExpDate(){
    let sExpD= document.getElementById("ExpDate").value;
    console.log(sExpD);
    return false;
}

function collect_Phone(){
    let sPhone= document.getElementById("phone").value;
    console.log(sPhone);
    return false;
}

