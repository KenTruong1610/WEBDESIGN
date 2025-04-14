<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <style>
        .box {
            width:100%;
            max-width:600px;
            background-color:#f9f9f9;
            border:1px solid #ccc;
            border-radius:5px;
            padding:16px;
            margin:0 auto;
        }
        .captcha-container {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }
        .captcha-code {
            width: 120px;
            height: 40px;
            background: #FFEB3B;
            text-align: center;
            font-size: 24px;
            font-weight: 700;
            letter-spacing: 3px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 4px;
            margin-left: 10px;
        }
        .alert {
            margin-top: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
    </style>
</head>
<body>  

<div class="container">  
    <div class="table-responsive">  
        <h3 align="center">ĐĂNG NHẬP</h3><br/>
        <div class="box">
            <?php
            function generateCaptcha($length = 6) {
                $characters = 'ABCDEFGHJKLMNPQRSTUVWXYZabcdefghjkmnpqrstuvwxyz23456789';
                $captcha = '';
                for ($i = 0; $i < $length; $i++) {
                    $captcha .= $characters[rand(0, strlen($characters) - 1)];
                }
                return $captcha;
            }

            session_start();
            if (!isset($_SESSION['captcha'])) {
                $_SESSION['captcha'] = generateCaptcha();
            }

            $successInfo = '';

            if (isset($_POST['login'])) {
                $email = $_POST['email'];
                $pwd = $_POST['pwd']; 
                $user_captcha = $_POST['captcha'];
                $session_captcha = $_SESSION['captcha'];

                unset($_SESSION['captcha']);

                if (strtoupper($user_captcha) !== strtoupper($session_captcha)) {
                    echo '<div class="alert alert-danger">Nhập sai CAPTCHA. Vui lòng nhập lại!</div>';
                    $_SESSION['captcha'] = generateCaptcha();
                } else {
                    echo '<div class="alert alert-success">CAPTCHA đúng! Đăng nhập thành công!</div>';
                    $_SESSION['captcha'] = generateCaptcha();

                    $successInfo = "
                        <div class='panel panel-info' style='margin-top: 20px;'>
                            <div class='panel-heading'><strong>Thông tin đăng nhập:</strong></div>
                            <div class='panel-body'>
                                <p><strong>Email:</strong> " . htmlspecialchars($email) . "</p>
                                <p><strong>Mật khẩu:</strong> " . htmlspecialchars($pwd) . "</p>
                            </div>
                        </div>";
                }
            }
            ?>

            <form method="post">
                <div class="form-group">
                    <label for="email">Nhập Email</label>
                    <input type="email" name="email" id="email" placeholder="Nhập Email" required class="form-control"/>
                </div> 
                <div class="form-group">
                    <label for="password">Nhập mật khẩu</label>
                    <input type="password" name="pwd" id="pwd" placeholder="Nhập mật khẩu" required class="form-control"/>
                </div> 
                <div class="form-group">
                    <label for="captcha">CAPTCHA</label>
                    <div class="captcha-container">
                        <input type="text" name="captcha" id="captcha" placeholder="Nhập CAPTCHA" required 
                               class="form-control" style="width: 200px;"/>
                        <div class="captcha-code"><?php echo $_SESSION['captcha']; ?></div>
                    </div>
                    <small class="text-muted">Viết chính xác CAPTCHA để đăng nhập.</small>
                </div>
                <div class="form-group">
                    <input type="submit" name="login" value="Đăng Nhập" class="btn btn-success"/>
                    <button type="button" class="btn btn-default" onclick="window.location.reload()">
                        Tải lại CAPTCHA
                    </button>
                </div>
            </form>

            <?php
            if (!empty($successInfo)) {
                echo $successInfo;
            }
            ?>
        </div>
    </div>  
</div>
</body>  
</html>
