<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تسجيل الدخول</title>
    <style>
        body {
            font-family: 'Helvetica Neue', Arial, sans-serif;
            background: #f8f9fa;
            margin: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            color: #333;
        }

       
        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            flex-grow: 1;
            padding: 40px;
        }

        .login-form {
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
            padding: 40px 50px;
            width: 100%;
            max-width: 450px;
            text-align: center;
        }

        .login-form h2 {
            margin-bottom: 25px;
            color: #007bff;
            font-weight: 500;
        }

        .login-form label {
            display: block;
            text-align: left;
            margin-bottom: 6px;
            font-weight: bold;
            color: #333;
        }

        .login-form input {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border-radius: 6px;
            border: 1px solid #ccc;
            font-size: 1rem;
            transition: border-color 0.3s ease;
        }

        .login-form input:focus {
            border-color: #007bff;
            outline: none;
        }

        .login-form button {
            background: #007bff;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 1rem;
            transition: background 0.3s ease;
        }

        .login-form button:hover {
            background: #0056b3;
        }

        .login-form .error-message {
            color: red;
            font-size: 0.9rem;
            margin-bottom: 15px;
        }

        .register-link {
            margin-top: 20px;
            font-size: 0.9rem;
        }

        .register-link a {
            color: #007bff;
            text-decoration: none;
            font-weight: bold;
        }

        .register-link a:hover {
            text-decoration: underline;
        }

        footer {
            text-align: center;
            background: #007bff;
            color: white;
            padding: 15px;
            margin-top: auto;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="login-form">
        <h2>تسجيل الدخول</h2>

        <form method="POST">
            <label for="email">الاسم : </label>
            <input type="email" name="email" required placeholder="ادخل اسم المستخدم">

            <label for="password">كلمة المرور : </label>
            <input type="password" name="password" required placeholder="ادخل كلمة المرور">

            <button type="submit">تسجيل</button>
        </form>

        <div class="register-link">
            <p>ليس لديك حساب ؟ <a href="register.php">سجل من هنا</a></p>
        </div>
    </div>
</div>

</body>
</html>