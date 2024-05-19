// Définissez la fonction calculate qui prend deux nombres et un opérateur en entrée et retourne le résultat de l'opération
function calculate(a, b, operator) {
   if (operator === '+') {
     return a + b;
   } else if (operator === '-') {
     return a - b;
   } else if (operator === '*') {
     return a * b;
   } else if (operator === '/') {
     if (b === 0) {
       throw new Error("Division by zero is not allowed");
     }
     return a / b;
   } else {
     throw new Error("Invalid operator");
   }n
 }
 
 // Exportez la fonction calculate pour qu'elle puisse être utilisée dans d'autres fichiers
 module.exports = calculate;
 
