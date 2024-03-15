<!DOCTYPE html>
<html>
<head>
    <base href="{{env('APP_URL')}}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dashboard</title>
    <link rel="stylesheet" href="backend/css/index.css">
</head>
<body>
<nav class="vertical navigation">
        <ul>
            <li><a href="{{route('student.sinhvien')}}">Sinh viên</a></li>
            <li><a href="/.php">Lớp</a></li>
            <li><a href="/.php">Giảng viên</a></li>
            <li><a href="/.php">Ngành</a></li>
            <li ><a href="{{route('auth.logout')}}" style="color:#dc2626;">Đăng xuất</a></li>
        </ul>
    </nav>
</body>
</html>