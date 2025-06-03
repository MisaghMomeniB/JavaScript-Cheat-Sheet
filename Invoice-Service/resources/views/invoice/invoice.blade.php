<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.fontcdn.ir/Font/Persian/Vazir/Vazir.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ثبت فاکتور</title>
</head>
<body dir="rtl" class="font-Vazir" >
    <form class="text-Vazir m-10" action="">
        <div>
            <label for="fname">فروشگاه</label>
            <input type="text" id="fname" name="fname"><br>
            <label for="lname">دسته بندی</label>
            <select name="cars" id="cars">
                <option value="volvo">1</option>
                <option value="saab">2</option>
                <option value="mercedes">3</option>
                <option value="audi">4</option>
            </select><br>
            <label for="price">قیمت</label>
            <input type="number" placeholder="ریال" name="price" id="price"><br>
            <label for="description">توضیحات</label>
            <input type="text" name="description" id="description">
        </div>

    </form>
</body>
</html>