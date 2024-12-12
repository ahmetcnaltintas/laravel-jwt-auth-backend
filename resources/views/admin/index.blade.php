<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Limfite Hoşgeldin</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .welcome-container {
            text-align: center;
            padding: 2rem;
            background: white;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            max-width: 500px;
            width: 90%;
        }

        .logo {
            width: 270px;
            height: 100px;
            margin-bottom: 1.5rem;
        }

        h1 {
            color: #2c3e50;
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }

        .slogan {
            color: #7f8c8d;
            font-size: 1.2rem;
            margin-bottom: 2rem;
            line-height: 1.6;
        }

        .login-btn {
            display: inline-block;
            padding: 1rem 2.5rem;
            background: #3498db;
            color: white;
            text-decoration: none;
            border-radius: 50px;
            font-size: 1.1rem;
            transition: all 0.3s ease;
        }

        .login-btn:hover {
            background: #2980b9;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }
    </style>
</head>
<body>
    <div class="welcome-container">
        <img src="{{ asset('assets/limfit/limfit-logo-siyah.webp') }}" alt="Limfite Logo" class="logo">
        <h1>LimFit'e Hoşgeldiniz</h1>
        <p class="slogan">Panele Giriş.</p>
        <a href="{{ route('login') }}" class="login-btn">Giriş Yap</a>
    </div>
</body>
</html>
