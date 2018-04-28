
<!DOCTYPE html>
<html lang="th">
<head>
    <!--ใน Head ส่วนนี้ไม่จำเป็นต้องเขียน -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{URL::asset('/Bootstrap 4.1/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('/Bootstrap 4.1/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{URL::asset('/Bootstrap 4.1/css/bootstrap-grid.css')}}">
    <link rel="stylesheet" href="{{URL::asset('/Bootstrap 4.1/css/bootstrap-grid.min.css')}}"> 
<title>Fried Chicken Buying ระบบการสั่งซื้อไก่ทอด </title>
</head>
<body>
    @include("myview2.header")

    @yield("content")

    @include("myview2.footer")

</body>
</html>