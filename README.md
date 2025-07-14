# 📘 JavaScript Cheat Sheet

🔤 زبان: فارسی + English
👶 سطح: مبتدی تا پیشرفته (Beginner to Advanced)
🌐 قابل استفاده برای فرانت‌اند، بک‌اند و فول‌استک

---

## 🧱 بخش ۱: مفاهیم پایه – Basics

### ✅ معرفی JavaScript

**🇫🇮 فارسی**: جاوااسکریپت یک زبان اسکریپتی قدرتمند برای تعامل با صفحات وب و ساخت اپلیکیشن‌های تحت وب است.
**🇺🇸 English**: JavaScript is a powerful scripting language used to create dynamic and interactive web content.

---

### 🔤 چاپ خروجی – Console Output

```js
console.log("Hello, world!");
```

🗣️
**🇫🇮 فارسی**: برای نمایش خروجی در کنسول مرورگر استفاده می‌شود.
**🇺🇸 English**: Prints output to the browser's console.

---

### 📦 متغیرها – Variables

```js
var x = 10;
let y = 20;
const z = 30;
```

🧠
**🇫🇮 فارسی**: برای ذخیره داده‌ها در حافظه استفاده می‌شود.
**🇺🇸 English**: Used to store data in memory.

---

### 🧬 انواع داده – Data Types

```js
let name = "Ali";         // String
let age = 25;             // Number
let isOnline = true;      // Boolean
let address = null;       // Null
let phone;                // Undefined
let person = { name: "Ali", age: 25 };  // Object
let numbers = [1, 2, 3];  // Array
```

---

## 🔁 بخش ۲: عملگرها و شرط‌ها – Operators & Conditions

### ➕ عملگرها – Operators

```js
// Arithmetic
+  -  *  /  % 

// Comparison
==  ===  !=  !==  >  <  >=  <=

// Logical
&&  ||  !
```

---

### ❓ شرط‌ها – Conditions

```js
if (age > 18) {
  console.log("Adult");
} else {
  console.log("Minor");
}

let result = age > 18 ? "Adult" : "Minor"; // Ternary
```

---

## 🔄 بخش ۳: حلقه‌ها – Loops

```js
// For loop
for (let i = 0; i < 5; i++) {
  console.log(i);
}

// While loop
let i = 0;
while (i < 5) {
  console.log(i++);
}

// Do...while
do {
  console.log(i++);
} while (i < 10);

// For...of
for (let item of [10, 20, 30]) {
  console.log(item);
}

// For...in
for (let key in {a: 1, b: 2}) {
  console.log(key);
}
```

---

## 🧰 بخش ۴: توابع – Functions

```js
function greet(name) {
  return "Hello, " + name;
}

const greet2 = (name) => "Hi, " + name;

function welcome(name = "Guest") {
  console.log("Welcome, " + name);
}
```

---

## 📁 بخش ۵: اشیاء و آرایه‌ها – Objects & Arrays

```js
let person = {
  name: "Sara",
  age: 30,
  greet() {
    console.log("Hi, I'm " + this.name);
  }
};

let nums = [1, 2, 3];
nums.push(4);      // Add
nums.pop();        // Remove last
nums.shift();      // Remove first
nums.unshift(0);   // Add to start

nums.forEach(n => console.log(n));
```

---

## 🧪 بخش ۶: متدهای آرایه – Advanced Array Methods

```js
let nums = [1, 2, 3, 4];

nums.map(n => n * 2);            // [2, 4, 6, 8]
nums.filter(n => n % 2 === 0);   // [2, 4]
nums.reduce((a, b) => a + b);    // 10
nums.find(n => n > 2);           // 3
```

---

## 🧠 بخش ۷: Destructuring – واپاشی

```js
const { name, age } = { name: "Ali", age: 30 };
const [a, b] = [10, 20];
```

---

## 🧩 بخش ۸: Spread و Rest

```js
let arr = [1, 2, 3];
let newArr = [...arr, 4];  // Spread

function sum(...nums) {    // Rest
  return nums.reduce((a, b) => a + b, 0);
}
```

---

## 🔁 بخش ۹: توابع بازگشتی – Recursion

```js
function factorial(n) {
  if (n === 1) return 1;
  return n * factorial(n - 1);
}
```

---

## 🛑 بخش ۱۰: مدیریت خطا – Error Handling

```js
try {
  risky();
} catch (error) {
  console.error(error.message);
} finally {
  console.log("Done");
}
```

---

## 📦 بخش ۱۱: ماژول‌ها – Modules

```js
// A.js
export const name = "Ali";
export default function hello() {
  console.log("Hello");
}

// B.js
import hello, { name } from './A.js';
hello();
```

---

## 🧱 بخش ۱۲: کلاس‌ها و شی‌گرایی – Classes & OOP

```js
class Person {
  constructor(name) {
    this.name = name;
  }

  speak() {
    console.log("Hi, I'm " + this.name);
  }
}

const p = new Person("Ali");
p.speak();
```

---

## ⏱️ بخش ۱۳: Event Loop

```js
console.log("Start");

setTimeout(() => {
  console.log("Timeout");
}, 0);

console.log("End");
// Output: Start -> End -> Timeout
```

---

## 🌐 بخش ۱۴: تعامل با DOM – DOM Manipulation

```html
<button onclick="sayHi()">Click me</button>
<script>
function sayHi() {
  alert("Hello!");
}
</script>
```

```js
document.getElementById("title").textContent = "New Title";
document.querySelector("p").style.color = "red";
```

---

## 🧠 بخش ۱۵: Optional Chaining & Nullish Coalescing

```js
const user = { profile: { name: "Sara" } };
console.log(user?.profile?.name); // "Sara"
console.log(user?.address?.city); // undefined

let name = null;
console.log(name ?? "Guest"); // "Guest"
```

---

## 📡 بخش ۱۶: Promise و async/await

```js
let promise = new Promise((resolve) => {
  setTimeout(() => resolve("Done"), 1000);
});

promise.then(result => console.log(result));

async function getData() {
  let res = await fetch("https://api.com/data");
  let data = await res.json();
  console.log(data);
}
```

---

## 🧰 بخش ۱۷: Set و Map

```js
let mySet = new Set([1, 2, 3]);
mySet.add(4);

let myMap = new Map();
myMap.set("name", "Ali");
console.log(myMap.get("name"));
```
