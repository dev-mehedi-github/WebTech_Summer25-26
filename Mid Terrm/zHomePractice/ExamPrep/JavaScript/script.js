function collect_data(){
    let IsvalidName= collect_Name();
    let IsValidAge= collect_Age();
    return false;
}

function collect_Name(){
    let nm=document.getElementById("pName").value;
    
    if(nm==""){
        document.getElementById("pNmError").innerHTML="Name can not be Empty";
        return false;
    }

    if(nm.lenght<5){
        document.getElementById("pNmError").innerHTML="Name at least 5 char";
        return false;
    }
    console.log(pName);
    return false;
}

function collect_Age(){
    let age= document.getElementById("pAge").value;

    if(age>0)
    {
        if(age==""){
            document.getElementById("ageError").innerHTML="Age cannot be empty";
            return false;
        }

        if(age<18){
            document.getElementById("ageError").innerHTML="You are Minor";
            return false;
        }
    }
    else{
        document.getElementById("ageError").innerHTML="Age cannot be negative";
    }
    console.log(pAge)
    return false;
}