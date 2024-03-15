<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Học Sinh</title>
</head>

<body>

    <button class="them_hs">Thêm học sinh</button>

    <div class="popup-container">
        <div class="popup-box">
            <form action="" id="form-login">
              <h1  style="text-align:center;">Thông tin sinh viên</h1>
              <div class="form-group">
                    <h3>Họ tên</h3>
                    <input type="textbox" class="form-input" placeholder="">
                </div>
                <div class="form-group">
                    <h3>MSSV</h3>
                    <input type="textbox" class="form-input" placeholder="">
                </div>
                <div class="form-group">
                    <h3>Địa chỉ</h3>
                    <input type="textbox" class="form-input" placeholder="">
                </div>
                <div class="form-group">
                    <h3>Email</h3>
                    <input type="textbox" class="form-input" placeholder="">
                </div>
                <div class="form-group">
                    <h3>Sđt</h3>
                    <input type="textbox" class="form-input" placeholder="">
                </div>
                <div class="form-group">
                    <h3>Ngành</h3>
                    <input type="textbox" class="form-input" placeholder="">
                </div>
            </form>
            <form action="/action_page.php">
              <h3>Avatar</h3>
              <input type="file" id="myFile" name="filename"  style="margin:10px 0px 10px 0px;">
            </form>
            <button class="close-btn">Hoàn tất</button>
        </div>
    </div>
</script>

</body>

</html>

<style>
*{
    font-family: UTM Neo Sans IntelBold;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
@font-face {
    font-family: UTM Neo Sans IntelBold;
    src: url(UTM\ Neo\ Sans\ IntelBold.ttf);
 }
body {
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
  background: #f2f2f2;
}

.them_hs {
  padding: 18px 40px;
  background: #6e78ff;
  border: none;
  outline: none;
  border-radius: 6px;
  box-shadow: 0 0 10px rgba(0, 0, 0, .1);
  cursor: pointer;
  font-size: 18px;
  color: #f2f2f2;
  font-weight: 500;
}

.popup-container {
  position: absolute;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, .3);
  display: flex;
  justify-content: center;
  align-items: center;
  opacity: 0;
  pointer-events: none;
}

.popup-container.active {
  opacity: 1;
  pointer-events: auto;
  transition: .4s ease;
}

.popup-container .popup-box {
  width: 450px;
  background: #f2f2f2;
  border-radius: 6px;
  box-shadow: 0 0 10px rgba(0, 0, 0, .1);
  padding: 30px;
  transform: scale(0);
}

.popup-container.active .popup-box {
  transform: scale(1);
  transition: .4s ease;
  transition-delay: .25s;
}

.popup-box h1 {
  color: #333;
  line-height: 1;
}

.popup-box p {
  color: #333;
  margin: 12px 0 20px;
}

.popup-box .close-btn {
  width: 100%;
  height: 45px;
  background: #6e78ff;
  border-radius: 6px;
  border: none;
  outline: none;
  box-shadow: 0 0 10px rgba(0, 0, 0, .1);
  cursor: pointer;
  font-size: 18px;
  color: #f2f2f2;
  font-weight: 500;
  margin : 10px 0px 10px 0px;
}
h3{
  padding : 10px 0px 10px 0px;
  font-size: 18px;
}
.form-group{
    margin: 10px 0px 10px 0px;
    display: flexbox;
}

.form-input{
    background: transparent;
    border: 1px solid #dddfe2;
    outline: 0;
    color: #000;
    flex-grow: 1;
    height: 35px;
    width: 100%;
    font-size :15px ;
    border-radius: 20px;
    padding : 10px 16px;
}

</style>

<script>
    const showPopup = document.querySelector('.them_hs');
    const popupContainer = document.querySelector('.popup-container');
    const closeBtn = document.querySelector('.close-btn');

    showPopup.onclick = () => {
        popupContainer.classList.add('active');
    }

    closeBtn.onclick = () => {
        popupContainer.classList.remove('active');
}
</script>