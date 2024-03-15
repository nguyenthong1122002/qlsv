<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Danh sách học sinh</title>
    <link rel="stylesheet" href="backend/css/hs-style.css">
    <link rel="stylesheet" href="backend/css/index.css">
    
</head>
<body>
<div class="nav">
    @include('backend.dashboard.component.sidebar')
    </div>
    <div class="container">
        <h1 class="h_title">Danh sách học sinh</h1>
    <div class="btn_content">
      <form action="">  
        <input type="text" class="textbox" placeholder="Tìm kiếm..." value="">
        <button type="submit" class="s_button" name="search">Tìm kiếm</button>
        <button type="submit" class="them_hs" name="add">Thêm học sinh</button>
        
      </form>
    <div class="table_content">
        <table>
            <tr>
                <th>STT</th>
                <th>Avatar</th>
                <th>MSSV</th>
                <th>Họ tên</th>
                <th>Địa chỉ</th>
                <th>Email</th>
                <th>Sđt</th>
                <th>Ngành</th>
                <th></th>
            </tr>
            <tr>
                <td>01</td>
                <td><img style="width:50px;height:50px;border-radius: 50%;" src="2303.w030.n003.624A.p1.624.jpg"/></td>
                <td>2000002672</td>
                <td>Nguyễn Văn B</td>
                <td>2003/31 Phạm Thế Hiển, Phường 6, Quận 8</td>
                <td>n.m.a021@gmail.com</td>
                <td>0901443824</td>
                <td>CNTT</td>
                <td><div class="btn">
                    <button type="submit" class="fix_btn" name="fix">Sửa</button>
                    <button type="submit" class="del_btn" name="del">Xóa</button>
                    </div>
                </td>
            </tr>
        </table>
    </div>
    </div>
    </div>
</body>
</html>

