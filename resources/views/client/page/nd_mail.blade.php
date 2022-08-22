<?php
    $a = DB::select('SELECT * FROM `form` WHERE id = (SELECT MAX(id) FROM form)');
    foreach ($a as $key) {
?>
<h2>Hi, tôi tên là: <span>{{$key->name}}</span></h2>
<br>
<h4>CHI TIẾT THÔNG TIN LIÊN HỆ</h4><br>
<strong>Họ tên: <span>{{$key->name}}</span></strong><br>
<strong>Email: <span>{{$key->email}}</span></strong><br>
<strong>Nội dung: <span>{{$key->noiDung}}</span></strong><br>
<strong>Thank you</strong>
<?php }?>