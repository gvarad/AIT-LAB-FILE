const getcurrentDateTime = ()=>{
    const currentDate = new Date();
    return currentDate.toISOString();
};
const currentDateTime = getcurrentDateTime();
console.log('Current Date and Time:',currentDateTime);
  
// const EventEmitter = require('events');
// const readline = require('readline');

// const rl = readline.createInterface({
//   input: process.stdin,
//   output: process.stdout
// });

// // Create an instance of EventEmitter
// const eventEmitter = new EventEmitter();

// // Function to perform the multiplication
// const multiply = (num1, num2) => {
//   return num1 * num2;
// };

// // Event handler for the 'multiply' event
// eventEmitter.on('multiply', ({ num1, num2 }) => {
//   const result = multiply(num1, num2);
//   console.log(`Result: ${result}`);
//   rl.close();
// });

// // Prompt the user for input
// rl.question('Enter the first number: ', (num1) => {
//   rl.question('Enter the second number: ', (num2) => {
//     // Emit the 'multiply' event with the provided numbers
//     eventEmitter.emit('multiply', { num1: Number(num1), num2: Number(num2) });
//   });
// });
