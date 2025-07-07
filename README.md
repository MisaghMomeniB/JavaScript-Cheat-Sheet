## 🧱 بخش ۱: مفاهیم پایه

### ✅ ۱. معرفی JavaScript

* زبان اسکریپت‌نویسی برای صفحات وب
* در مرورگر اجرا می‌شود
* حالا با Node.js هم در سرور استفاده می‌شود

### ✅ ۲. چاپ کردن در کنسول

```js
console.log("Hello, world!");
```

### ✅ ۳. متغیرها

```js
var x = 10;         // متغیر قدیمی، قابل تغییر
let y = 20;         // متغیر مدرن، قابل تغییر
const z = 30;       // متغیر ثابت (قابل تغییر نیست)
```

### ✅ ۴. انواع داده‌ها

```js
let name = "Ali";           // string
let age = 25;               // number
let isOnline = true;        // boolean
let address = null;         // null
let phone;                  // undefined
let person = { name: "Ali", age: 25 }; // object
let numbers = [1, 2, 3];    // array
```

---

## 🔁 بخش ۲: عملگرها و شرط‌ها

### ✅ ۱. عملگرهای پایه

```js
// ریاضی
+  -  *  /  %
// مقایسه
==  ===  !=  !==  >  <  >=  <=
// منطقی
&&  ||  !
```

### ✅ ۲. شرط‌ها

```js
if (age > 18) {
  console.log("Adult");
} else if (age > 12) {
  console.log("Teenager");
} else {
  console.log("Child");
}

// شرط کوتاه: ternary operator
let msg = age > 18 ? "Adult" : "Minor";
```

---

## 🔁 بخش ۳: حلقه‌ها (Loops)

### ✅ ۱. for loop

```js
for (let i = 0; i < 5; i++) {
  console.log(i);
}
```

### ✅ ۲. while / do-while

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

### ✅ ۳. for...of و for...in

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