<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Đăng nhập</title>
	<link rel="stylesheet" href="../public/css/animate.css">
	<!-- Custom Stylesheet -->
	<link rel="stylesheet" href="../public/css/style2.css">
	<script src="../public/js/jquery-1.12.0.min.js"></script>
</head>
<body>
	<div class="container">
            <div class="login-box animated fadeInUp" style="max-width:340px">
                <form action="?dn=xllogin" method="POST" >
                    <div class="box-header">
                            <h2>Đăng nhập</h2>
                    </div>
                    <label for="username">Tên đăng nhập</label>
                    <br/>
                    <input type="text" name="txtTenDangNhap" id="username">
                    <br/>
                    <label for="password">Mật khẩu</label>
                    <br/>
                    <input type="password" name="txtMatKhau" id="password">
                    <br/>

                    <span style="color: red;"><?php if (isset($err)) echo $err; ?></span>
                    <br>
                    <input type="submit" value="Đăng nhập"/>
                    <input type="reset" value="reset"/>
                </form>
            </div>
	</div>
</body>
</html>