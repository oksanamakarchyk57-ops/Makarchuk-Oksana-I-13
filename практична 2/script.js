// 1. Оголошення змінних різних типів
let integer = 10;          
let float = 5.5;           
let text = "Hello";        
let isTrue = true;         

// 2. Перевірка типу змінних
console.log(typeof integer);
console.log(typeof float);
console.log(typeof text);
console.log(typeof isTrue);

// 3. Маніпуляції зі змінними
let concat = integer + text;   
console.log(concat);

let boolToNumber = Number(isTrue); 
console.log(boolToNumber);

// 4. Створення об'єкта
let data = {
    number: integer,
    decimal: float,
    message: text,
    status: isTrue
};

// Виведення як JSON
console.log(JSON.stringify(data));

let a = Number(prompt("Введіть перше число"));
let b = Number(prompt("Введіть друге число"));
let c = Number(prompt("Введіть третє число"));

// 1. Середнє арифметичне
let average = (a + b + c) / 3;
console.log("Середнє:", average);

// 2. Математичні операції
console.log("Модуль:", Math.abs(a));
console.log("Округлення вгору:", Math.ceil(b));
console.log("Округлення вниз:", Math.floor(c));
console.log("Степінь:", Math.pow(a,2));

// 3. Перевірка ділення
if (a % 5 === 0) {
    console.log("a ділиться на 5");
}

if (b % 7 === 0) {
    console.log("b ділиться на 7");
}

// 4. Перевірка існування трикутника
if (a + b > c && a + c > b && b + c > a) {
    console.log("Трикутник існує");
} else {
    console.log("Трикутник не існує");
}

let x = Number(prompt("Перше число"));
let y = Number(prompt("Друге число"));
let z = Number(prompt("Третє число"));

// 1. Найбільше і найменше
let max = Math.max(x, y, z);
let min = Math.min(x, y, z);

console.log("Найбільше:", max);
console.log("Найменше:", min);

// 2. Перевірка парності
if (x % 2 === 0 || y % 2 === 0 || z % 2 === 0) {
    console.log("Хоча б одне число парне");
}

// 3. Складна умова
let result = (x > y && y < z);
console.log(result);

// 4. Перевірка простого числа
let number = Number(prompt("Введіть число"));
let isPrime = true;

if (number <= 1) {
    isPrime = false;
}

for (let i = 2; i < number; i++) {
    if (number % i === 0) {
        isPrime = false;
        break;
    }
}

console.log("Число просте:", isPrime);

let name = prompt("Введіть ім'я");
let birthYear = Number(prompt("Введіть рік народження"));
let city = prompt("Введіть місто");

let currentYear = 2026;
let age = currentYear - birthYear;

console.log("Ваш вік:", age);

// 3. Вікова група
if (age < 12) {
    console.log("Дитина");
} 
else if (age < 18) {
    console.log("Підліток");
}
else if (age < 60) {
    console.log("Дорослий");
}
else {
    console.log("Літня людина");
}

// 4. Перевірка столиці
let capital = "Київ";

if (city === capital) {
    console.log("Ви живете у столиці");
} else {
    console.log("Це не столиця");
}