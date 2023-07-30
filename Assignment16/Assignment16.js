const readline = require('readline');

const rl = readline.createInterface({
  input: process.stdin,
  output: process.stdout
});

function performBasicOperations() {
  rl.question('Enter two numbers: ', (input) => {
    const numbers = input.split(' ').map(Number);

    const sum = numbers[0] + numbers[1];
    const difference = numbers[0] - numbers[1];
    const product = numbers[0] * numbers[1];
    const quotient = numbers[0] / numbers[1];

    console.log('Sum:', sum);
    console.log('Difference:', difference);
    console.log('Product:', product);
    console.log('Quotient:', quotient);

    rl.close();
  });
}

function manipulateArray() {
  rl.question('Enter elements of an array (space-separated): ', (input) => {
    const array = input.split(' ');

    console.log('Array:', array);
    console.log('Length:', array.length);
    console.log('First element:', array[0]);
    console.log('Last element:', array[array.length - 1]);

    rl.close();
  });
}

function handleUserInterface() {
  rl.question('Choose an operation: 1. Basic Operations 2. Array Manipulation ', (choice) => {
    if (choice === '1') {
      performBasicOperations();
    } else if (choice === '2') {
      manipulateArray();
    } else {
      console.log('Invalid choice! Please try again.');
      handleUserInterface();
    }
  });
}

handleUserInterface();
