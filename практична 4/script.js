// Варіант 1 
let numbers = [5, 10, 3, 8, 15];

let sum = numbers.reduce((a, b) => a + b, 0);
let average = sum / numbers.length;
let min = Math.min(...numbers);
let max = Math.max(...numbers);

let sorted = [...numbers].sort((a, b) => a - b);

console.log("Масив:", numbers);
console.log("Середнє:", average);
console.log("Мін:", min);
console.log("Макс:", max);
console.log("Відсортований:", sorted);

//Варіант 2 
let users = [
    { name: "Назар", age: 17 },
    { name: "Влад", age: 20 },
    { name: "Саша", age: 22 },
    { name: "Петро", age: 15 }
];

let adults = users.filter(user => user.age > 18);

let names = users.map(user => user.name);

let avgAge = users.reduce((sum, user) => sum + user.age, 0) / users.length;

console.log("Всі:", users);
console.log("Старші 18:", adults);
console.log("Імена:", names);
console.log("Середній вік:", avgAge);

//Варіант 3 
let products = [
    { name: "Яблуко", category: "Фрукти" },
    { name: "Банан", category: "Фрукти" },
    { name: "Морква", category: "Овочі" },
    { name: "Картопля", category: "Овочі" }
];

let grouped = {};

products.forEach(product => {
    if (!grouped[product.category]) {
        grouped[product.category] = [];
    }
    grouped[product.category].push(product.name);
});

console.log("Групи:", grouped);

//Варіант 4
let students = {
    Оля: { math: 10, eng: 9, history: 8 },
    Іван: { math: 7, eng: 6, history: 9 },
    Марія: { math: 12, eng: 11, history: 10 }
};

for (let name in students) {
    let grades = Object.values(students[name]);
    let avg = grades.reduce((a, b) => a + b, 0) / grades.length;

    console.log(name + " середній бал:", avg);
}

//Варіант 5 
let name = ["Оля", "Іван", "Марія"];

let result = {};

names.forEach(name => {
    result[name] = name.length;
});

console.log("Результат:", result);