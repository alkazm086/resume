<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<style>
body {
  background-color: rgba(50, 128, 100, 0.25);
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #cccccc;
}

li {
  float: right;
}

li a {
  display: block;
  padding: 8px;
}

.rtl {

    direction:rtl;
    text-align:right;
}

</style>
</head>
<title>رزومه</title>
<body>

<ul>
  <li><a href="index.html">خانه</a></li>
  <li><a href="page1.html">مهارت ها</a></li>
  <li><a href="page2.html">افتخارات</a></li>
  <li><a href="contact.php">ارتباط</a></li>
</ul>

<img src="pic-1.jpg" alt="Me!" style="float: left;">
<div class="rtl">
<p>سلام</p>
<p>من <b>علیرضا کاظمی مقدم</b> هستم</p>
<h5>دانشجوی رشته <i>کامپیوتر</i> در دانشگاه شریف</h5>
<p>فارغ التحصیل از مدرسه علوی</p>
<p>برای بازدید از دیگر قسمت های رزومه می توانید از بخش های ابتدای صفحه استفاده نمایید.</p>
    <p>راه های ارتباطی:</p>

</div>
</br>

<form>
  <label for="fname">First name:</label></br>
  <input type="text" name="fname" value="First name"></br>

  <label for="lname">Last name:</label></br>
  <input type="text" name="lname" value="Last name"></br>

  <label for="email">Email:</label></br>
  <input type="text" name="email" value="abc@xyz.com"></br>

  <!--<label for="text">Your text:</label></br>-->
  <textarea name="com" rows="5" cols="40">comment</textarea></br></br>
  <button onclick="myFunction()" type="submit">Submit</button></br>
  <!--
  $num = glob("*.txt");$myfile = fopen('$username.txt', "w") or die("Unable to open file!");
  <input onclick="myFunction()" type="submit"></br>-->
</form>



<footer>
  <p class="rtl">لینک های مهم</br>
  <a href="mailto:alkazm086@gmail.com">alkazm086@gmail.com</a></br>
  <a href="https://github.com/alkazm086">My github</a>
  </p>
</footer>



<script>
  function myFunction() {
    let x = prompt("از صحت اطلاعات وارد شده اطمینان دارید؟ اگر بله، حرف Y را وارد نمایید و اگر مایل به تصحیح می باشید، حرف N را وارد نمایید.", "Y");
    if (x == "y" || x == "Y") {
      alert("عالی! عملیات موفق آمیز بود!");
    } else {
      alert("هیچ اشکالی ندارد! می توایند دوباره تلاش کنید!");
    }
  }
</script>


<?php

if(isset($_GET["fname"])){
$num = count(glob("*.txt"));
$num1 = $num + 1;

$myfile = fopen( $num1. '.txt', "w") or die("Unable to open file!");

$txt = $_GET["fname"] . "\n";
fwrite($myfile, $txt);
$txt = $_GET["lname"] . "\n";
fwrite($myfile, $txt);
$txt = $_GET["email"] . "\n";
fwrite($myfile, $txt);
$txt = $_GET["com"] . "\n";
fwrite($myfile, $txt);
fclose($myfile);
}
?>

</br>

</body>
</html>


