let a = Number(prompt("Введіть перше число:"));
let b = Number(prompt("Введіть друге число:"));
let operation = prompt("Введіть операцію (+, -, *, /):");

let result;

switch (operation) {
    case "+":
        result = a + b;
        break;
    case "-":
        result = a - b;
        break;
    case "*":
        result = a * b;
        break;
    case "/":
        result = b !== 0 ? a / b : "Ділення на 0 неможливе";
        break;
    default:
        result = "Невідома операція";
}

alert("Результат: " + result);