<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>تسجيل الدخول</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Cairo", sans-serif;
        }

        body {
            height: 100vh;
            background: #f3f6f9;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* Main Wrapper */
        .login-wrapper {
            width: 100%;
            max-width: 1100px;
            height: 100vh;
            background: #fff;
            display: flex;
            overflow: hidden;
        }

        /* Image Side */
        .login-image {
            flex: 1;
            background: linear-gradient(
                    rgba(46, 125, 50, 0.85),
                    rgba(46, 125, 50, 0.85)
                ),
                url("https://images.unsplash.com/photo-1501004318641-b39e6451bec6")
                center/cover no-repeat;
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 60px;
        }

        .login-image h2 {
            font-size: 36px;
            margin-bottom: 15px;
        }

        .login-image p {
            font-size: 18px;
            line-height: 1.8;
        }

        /* Login Side */
        .login-box {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-content {
            width: 100%;
            max-width: 380px;
        }

        .login-content h1 {
            font-size: 28px;
            margin-bottom: 10px;
            color: #2e7d32;
        }

        .login-content p {
            color: #666;
            margin-bottom: 30px;
        }

        /* Inputs */
        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-size: 14px;
            color: #444;
        }

        .input-wrapper {
            position: relative;
        }

        .input-wrapper input {
            width: 100%;
            padding: 14px 45px 14px 14px;
            border: 1px solid #ddd;
            border-radius: 8px;
            outline: none;
            font-size: 15px;
            transition: 0.3s;
        }

        .input-wrapper input:focus {
            border-color: #2e7d32;
        }

        .input-icon {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            font-size: 18px;
            color: #888;
        }

        /* Remember */
        .remember {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 25px;
            font-size: 14px;
            color: #444;
        }

        .remember input {
            width: 18px;
            height: 18px;
            margin-bottom: 6px;
            cursor: pointer;
        }

        /* Button */
        .login-btn {
            width: 100%;
            padding: 14px;
            background: #2e7d32;
            border: none;
            border-radius: 8px;
            color: white;
            font-size: 16px;
            cursor: pointer;
            transition: 0.3s;
        }

        .login-btn:hover {
            background: #256528;
        }

        /* Links */
        .links {
            margin-top: 20px;
            text-align: center;
            font-size: 14px;
        }

        .links a {
            color: #2e7d32;
            text-decoration: none;
            font-weight: bold;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .login-wrapper {
                flex-direction: column;
            }

            .login-image {
                display: none;
            }

            .login-box {
                width: 100%;
            }
        }
    </style>
</head>

<body>

<div class="login-wrapper">

    <!-- Image Section -->
    <div class="login-image">
        <h2>سوق الزراعة 🌱</h2>
        <p>
            منصة متخصصة لبيع الأسمدة والمبيدات الزراعية  
            بجودة عالية وسهولة في الاستخدام
        </p>
    </div>

    <!-- Login Section -->
    <div class="login-box">
        <div class="login-content">

            <h1>تسجيل الدخول</h1>
            <p>أهلاً بعودتك 👋</p>

            <form>

                <div class="form-group">
                    <label>البريد الإلكتروني</label>
                    <div class="input-wrapper">
                        <input type="email" placeholder="example@email.com">
                        <span class="input-icon">📧</span>
                    </div>
                </div>

                <div class="form-group">
                    <label>كلمة المرور</label>
                    <div class="input-wrapper">
                        <input type="password" placeholder="********">
                        <span class="input-icon">🔒</span>
                    </div>
                </div>

                <div class="remember">
                    <input type="checkbox">
                    <span>تذكرني</span>
                </div>

                <button class="login-btn">تسجيل الدخول</button>

                <div class="links">
                    ليس لديك حساب؟
                    <a href="#">إنشاء حساب</a>
                </div>

            </form>
        </div>
    </div>

</div>

</body>
</html>
