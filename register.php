<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            text-align: center;
            margin: 0;
            padding: 20px;
            font-family: Arial, sans-serif;
        }

        main{
            width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        h2{
            margin-bottom: 20px;
        }

        label{
            display: block;
            margin-bottom: 10px;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"],
        button{
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        button{
            background-color: #4CAF50;
            color: #fff;
            cursor: pointer;
        }

        @media (max-width: 600px) {
            main {
                width: 100%;
            }
        }

        /* Form container */
       .form-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

    /* Input fields */
        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1.5px solid black;
            border-radius: 5px; 
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: #fff;
            cursor: pointer;
            margin-top: 20px;
        }

        /* Responsive layout */
        @media screen and (max-width: 600px) {
            input[type="text"],
            input[type="email"],
            input[type="password"],
            button {
                width: 100%;
            }
        }

        /* Error messages */
       .error-message {
            color: red;
            margin-top: 10px;
            font-size: 12px;
        }

        /* Success message */
       .success-message {
        color: green;
            margin-top: 10px;
            font-size: 12px;
        }
        /* Alert messages */
        /* This class is used for alert messages */
       .alert-message {
        color: red;
            margin-top: 10px;
            font-size: 12px;
        }
        

    </style>
</head>
<body>


    <main>
     
    <div class="form-container">
    <form>
    <h2> تسجيل حساب </h2>

    <label for="name">الاسم : </label>
    <input type="text" id="name" name="name" required>

    <br><br>

    <label for="email">البريد الالكتروني : </label>
    <input type="email" id="email" name="email" required>

    <br><br>

    <label for="password">كلمة المرور : </label>
    <input type="password" id="password" name="password" required>

    <br><br>

    <label for="confirmPassword">تأكيد كلمة المرور : </label>
    <input type="password" id="confirmPassword" name="confirmPassword" required>

    <br><br>
    
    <button type="submit">تسجيل</button>

    <p>لديك حساب؟ <a href="login.php">سجل الدخول من هنا</a></p>

    </form>
    </div>

    </main>

</body>
</html>