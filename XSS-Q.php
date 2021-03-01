<?php

$xss = $_POST['xss'];

## First Arabic Challenge I Create

echo "<html style=\"text-align:center\"><br><img src=\"https://xelkomy.com/sss.jpg\"></br></br><h1 style=\"text-align:center\">تحدي</h1><br><p style=\"text-align:center\" dir=\"rtl\" align=\"right\">السلام عليكم <br> التحدي XSS مستقيم يعني مفيش اي بايلود غريب ولا فلترة ولكن الفكرة انه مجرد CTF المطلوب منك انك تكتب بايلود تاج سكربت عادي ولكن في بعض الاختلافات لو انت دارس XSS هتبقا فاهمها لو في فلترة في مكان معين في التاج ولازم في قلب alert يكون اسم قائد مسلم من منطقة شمال افريقيا قائد ليه اسم كبير جدا</p><form style=\"text-align:center\" method='POST'><br><input name='xss' type='text' value='xss'>";
echo "<br><input type='submit' name='submit'></form></html>";

if ($xss == "<script>alert`يوسف بن تاشفين`;</script>") {
    echo "<script>alert`flag{xElkomy-First-Challenge}`;</script> </br></br></br></br></br><p dir=\"rtl\" align=\"right\" style=\"text-align:center;font-size:55px;\">هات الفلاج وتعال خاص @0xelkomy</p> ";
}else {
    echo "<script>alert`غلط`;</script>";
}
?>

