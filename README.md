# 🟨 JavaScript Cheat Sheet – فارسی + English (Beginner Level)

---

## 🧱 بخش ۱: مفاهیم پایه – Basics

### ✅ ۱. معرفی JavaScript

**فارسی**: جاوااسکریپت یک زبان برنامه‌نویسی اسکریپتی است که معمولاً در مرورگرها برای ایجاد تعامل با کاربر استفاده می‌شود.
**English**: JavaScript is a scripting language commonly used in browsers to create interactive web pages.

---

### ✅ ۲. چاپ در کنسول

**فارسی**: برای نمایش خروجی در کنسول مرورگر استفاده می‌شود.
**English**: Used to print output to the browser’s developer console.

```js
console.log("Hello, world!");
```

---

### ✅ ۳. تعریف متغیر

**فارسی**: برای نگهداری داده‌ها از متغیر استفاده می‌کنیم.
**English**: Variables are used to store data.

```js
var x = 10; // قدیمی | old style
let y = 20; // مدرن و قابل تغییر | modern and mutable
const z = 30; // مقدار ثابت | constant value
```

---

### ✅ ۴. انواع داده (Data Types)

**فارسی**: جاوااسکریپت چند نوع داده‌ی اصلی دارد.
**English**: JavaScript has several basic data types.

```js
let name = "Ali"; // string - رشته
let age = 25; // number - عدد
let isOnline = true; // boolean - بولی (درست/نادرست)
let address = null; // null - تهی
let phone; // undefined - تعریف نشده
let person = { name: "Ali", age: 25 }; // object - شیء
let numbers = [1, 2, 3]; // array - آرایه
```

---

## 🔁 بخش ۲: عملگرها و شرط‌ها – Operators & Conditions

### ✅ عملگرهای ریاضی و منطقی

**فارسی**: برای انجام عملیات ریاضی یا مقایسه‌ای
**English**: Used for math operations or comparisons.

```js
// Arithmetic
+  -  *  /  %

// Comparison
==  ===  !=  !==  >  <  >=  <=

// Logical
&&  ||  !
```

---

### ✅ شرط‌ها (if / else)

**فارسی**: برای اجرای دستورات بر اساس شرایط خاص
**English**: Used to control the flow based on conditions.

```js
if (age > 18) {
  console.log("Adult");
} else if (age > 12) {
  console.log("Teenager");
} else {
  console.log("Child");
}
```

#### شرط کوتاه (Ternary Operator)

```js
let msg = age > 18 ? "Adult" : "Minor";
```

---

## 🔄 بخش ۳: حلقه‌ها – Loops

### ✅ حلقه for

**فارسی**: تکرار یک بلوک کد تا زمانی خاص
**English**: Repeats a block of code for a certain number of times.

```js
for (let i = 0; i < 5; i++) {
  console.log(i);
}
```

---

### ✅ حلقه while / do...while

**فارسی**: تا زمانی که شرط برقرار است، اجرا می‌شود
**English**: Executes as long as a condition is true.

```js
let i = 0;
while (i < 5) {
  console.log(i);
  i++;
}

do {
  console.log(i);
  i++;
} while (i < 10);
```

---

### ✅ حلقه‌های for...of و for...in

**فارسی**: for...of برای آرایه، for...in برای شیء
**English**: `for...of` is for arrays, `for...in` is for objects.

```js
let arr = [10, 20, 30];
for (let value of arr) {
  console.log(value);
}

let obj = { a: 1, b: 2 };
for (let key in obj) {
  console.log(key, obj[key]);
}
```

---

## 🧰 بخش ۴: توابع – Functions

### ✅ تعریف تابع

**فارسی**: مجموعه‌ای از کدها با هدف خاص
**English**: A reusable block of code that performs a task.

```js
function greet(name) {
  return "Hello, " + name;
}
console.log(greet("Ali"));
```

---

### ✅ تابع فلش (Arrow Function)

**فارسی**: شکل کوتاه‌تری از تعریف تابع
**English**: A shorter syntax for writing functions.

```js
const greet = (name) => "Hello, " + name;
```

---

### ✅ پارامتر پیش‌فرض

**فارسی**: مقدار پیش‌فرض در صورت نبود ورودی
**English**: Default parameter used when argument is not passed.

```js
function greet(name = "Guest") {
  console.log("Hi, " + name);
}
```

---

## 🧱 بخش ۵: اشیاء (Objects) و آرایه‌ها (Arrays)

### ✅ شیء (Object)

**فارسی**: ساختار داده‌ای با کلید و مقدار
**English**: A data structure that stores key-value pairs.

```js
let person = {
  name: "Sara",
  age: 30,
  greet: function () {
    console.log("Hi, I'm " + this.name);
  },
};

person.greet();
```

---

### ✅ آرایه و متدهای آن

**فارسی**: لیستی از داده‌ها با متدهای مختلف
**English**: A list of data with various helper methods.

```js
let nums = [1, 2, 3, 4];
nums.push(5); // اضافه کردن – add
nums.pop(); // حذف آخرین – remove last
nums.shift(); // حذف اول – remove first
nums.unshift(0); // اضافه اول – add to start

// پیمایش – looping
nums.forEach((num) => console.log(num));
```

---

## 🔄 بخش ۶: توابع آرایه پیشرفته – Advanced Array Methods

```js
let nums = [1, 2, 3, 4, 5];

let doubled = nums.map((n) => n * 2); // اعمال بر روی همه – map
let evens = nums.filter((n) => n % 2 === 0); // فیلتر کردن – filter
let sum = nums.reduce((acc, val) => acc + val, 0); // جمع کردن – reduce
let found = nums.find((n) => n > 3); // اولین مورد – find
let hasEven = nums.some((n) => n % 2 === 0); // حداقل یکی برقرار است – some
let allPositive = nums.every((n) => n > 0); // همه برقرارند – every
let hasThree = nums.includes(3); // وجود مقدار – includes
let removed = nums.splice(1, 2); // حذف یا اضافه – splice
let entries = nums.entries(); // اندیس و مقدار – entries
```
