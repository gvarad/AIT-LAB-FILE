const prompt2 = require('prompt-sync')({sigint: true});
let a = parseInt(prompt2("Enter first number:")); 
let b = parseInt(prompt2("Enter second number:")); 
let c = parseInt(prompt2("Enter third number:")); 

if(a>b && a>c)
{
    console.log("a is greater");
}
else if(b>c && b>a)
{
    console.log("b is greater");
}
else
{
    console.log("c is greater");
}