console.log("HTML Connected");
let a=10.50;
var b=20;
sum=a+b;
sub=a-b;
x=a+b;
console.log("Sum of a and b is: "+sum);
console.log("Subtraction of a and b is: "+sub);

a="asdfghjklio"
var text=a.length;
console.log(text);

function collect_data(){
    let pname=document.getElementById("name").value;
    console.log(pname);
    let collectDOB = collect_DOB();
    let collectEmail=collect_Email
    return false;
}

function collect_DOB()
{
    let dob=document.getElementById("dob").value;
    console.log(dob);
    return false;
}

function collect_Email(){
    let email=document.getElementById("email").value;
    console.log(email);
    return false;
}