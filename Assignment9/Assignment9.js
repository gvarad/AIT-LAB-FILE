const prompt = require('prompt-sync')({sigint: true});
const b = prompt("Enter a string:");
console.log('Lower Case String:',b.toLowerCase());
console.log('Upper Case String:',b.toUpperCase());