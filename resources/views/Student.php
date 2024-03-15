<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Danh sách học sinh</title>
    <link rel="stylesheet" href="">
</head>
<body>
    <div class="nav">
        <?php include 'Navigator.blade.php'; ?>
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
                <th>Nút</th>
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

<style>
.h_title{
    margin:0px 0px 15px 0px;
}
.container{
    max-width: 100%;
    max-height:100%;
    margin: 0px;
    margin-left:15%;
    padding: 20px;
    border: 1px solid #ccc;
    background-color: #fff;
}
.textbox{
    width :400px;
    border-radius: 10px;
    border: 2px solid #dddfe2;
    padding: 6px 8px;
}
.textbox::placeholder{
    color: #939393;
}
.s_button{
    background-color:#42b72a;
    border: hidden;
    border-radius:10px;
    padding: 6px 8px;
    text-align: center;
    color: #fff;
}
.s_button:hover{
    background-color: #45a228;
}
.them_hs{
    background-color:#0866ff;
    border: hidden;
    border-radius:10px;
    padding: 6px 8px;
    text-align: center;
    color: #fff;
    margin:10px 0px 10px 0px;
}
.them_hs:hover{
    background-color: #166fe5;
}
table, th {
    border: 2px solid #dddfe2;
    padding: 4px 6px;
    background-color:#343a40;
    color :#fff;
    margin : 20px 0px 0px 0px;
}
td{
    border: 2px solid #dddfe2;
    padding: 4px 6px;
    background-color:#fff;
    color: #000;
    text-align: left;
    margin : 0px 0px 0px 20px;
}
table {
  width: 100%;
  border-collapse: collapse;
}
.btn{
    text-align: center;
}
.fix_btn{
    background-color: #45a228;
    color : #fff;
    border: hidden;
    border-radius: 10px;
    padding: 4px 8px;
}
.del_btn{
    background-color: red;
    color : #fff;
    border: hidden;
    border-radius: 10px;
    padding: 4px 8px;
}
</style>