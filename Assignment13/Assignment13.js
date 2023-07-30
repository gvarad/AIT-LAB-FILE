const prompt = require('prompt-sync')({sigint: true});
let num1 = parseInt(prompt("Enter first number:"));
let num2 = parseInt(prompt("Enter second number:"));

console.log("\n1.Addition\n 2.Subtraction\n 3.Multiplication\n 4.Division\n 5.Exit");

let choice;
do
{
    choice = parseInt(prompt("Enter your choice:"));   
    switch(choice)
    {
        case 1: console.log("Addition is:",num1+num2);
                break;
        case 2: console.log("Subtraction is:",num1-num2);
                break;
        case 3: console.log("Multiplication is:",num1*num2);
                break;
        case 4: console.log("Division is:",num1/num2);
                break;
        case 5: break;
    }
}while(choice!=5);