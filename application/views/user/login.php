<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="../resources/css/style.css">
</head>

<body>
    <div class="wrapper fadeInDown">
        <div id="formContent">
            <!-- Tabs Titles -->
            <script>
                function active($id, $tag) {
                    document.getElementById($id).style.display = 'block';
                    document.getElementById($tag).className = 'active';
                }

                function inactive($id, $tag) {
                    document.getElementById($id).style.display = 'none';
                    document.getElementById($tag).className = 'inactive underlineHover';
                }
            </script>
            <h2 id='tagSignIn' class="active" onclick="active('signIn','tagSignIn'),inactive('signUp','tagSignUp')"> Đăng nhập </h2>
            <h2 id='tagSignUp' class="inactive underlineHover" onclick="active('signUp','tagSignUp'),inactive('signIn','tagSignIn')"> Đăng ký </h2>


            <div id="signIn" style="display: block;">
                <!-- Icon -->
                <div class="fadeIn first">
                    <img src="https://i.ibb.co/bd3TR85/93873276-892093347905185-1182473014202073088-n.jpg" id="icon" alt="User Icon" />
                </div>

                <!-- Login Form -->
                <form method="POST">
                    <input type="text" id="txtUsername" class="fadeIn second" name="txtUsername" placeholder="Tên đăng nhập">
                    <input type="password" id="txtPassword" class="fadeIn third" name="txtPassword" placeholder="Mật khẩu">
                    <input type="submit" name="btnLogin" class="fadeIn fourth" value="Đăng nhập">
                    <p class="error_container"><?php echo $this->session->flashdata('error_login_message'); ?></p>
                    <p class="error_container"><?php echo $this->session->flashdata('error_signup_message'); ?></p>
                </form>

                <!-- Remind Passowrd -->
                <div id="formFooter">
                    <a class="underlineHover" href="#">Forgot Password?</a>
                </div>
                <!-- signUp form -->
            </div>
            <div id="signUp" style="display: none;">
                <!-- Icon -->
                <!-- <div class="fadeIn first">
                    <img src="https://i.ibb.co/bd3TR85/93873276-892093347905185-1182473014202073088-n.jpg" id="icon" alt="User Icon" />
                </div> -->

                <!-- sign up Form -->
                <form method="POST">
                    <input type="text" id="txtUsernameSignup" class="fadeIn second" name="txtUsernameSignup" placeholder="Tên đăng nhập *">
                    <input type="password" id="txtPasswordSignUp" class="fadeIn second" name="txtPasswordSignUp" placeholder="Mật khẩu *">
                    <input type="password" id="txtRePassword" class="fadeIn second" name="txtRePassword" placeholder="Nhập lại mật khẩu *">
                    <input type="text" id="txtFullname" class="fadeIn second" name="txtFullname" placeholder="Họ tên *">
                    <input type="date" id="txtBirthday" class="form-group fadeIn second" name="txtBirthday" placeholder="Ngày sinh *">
                    <input type="text" id="txtIdentityCard" class="fadeIn second" name="txtIdentityCard" placeholder="CMND/CCCD *">
                    <input type="text" id="txtPhone" class="fadeIn second" name="txtPhone" placeholder="Số điện thoại *">
                    <input type="text" id="txtEmail" class="fadeIn second" name="txtEmail" placeholder="Email *">
                    <input type="text" id="txtAddress" class="fadeIn second" name="txtAddress" placeholder="Địa chỉ *">
                    <input type="submit" name="btnSignUp" class="fadeIn third" value="Đăng ký">
                </form>
            </div>
        </div>
</body>

</html>