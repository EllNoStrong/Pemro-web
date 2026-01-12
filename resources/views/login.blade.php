<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login Page</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: "Poppins", sans-serif;
    }

    body {
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      background: linear-gradient(135deg, #667eea, #764ba2, #a855f7);
    }

    .login-container {
      background: #fff;
      width: 380px;
      padding: 40px;
      border-radius: 15px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
      text-align: center;
    }

    h2 {
      margin-bottom: 25px;
      font-size: 28px;
      color: #333;
    }

    .input-group {
      text-align: left;
      margin-bottom: 20px;
    }

    label {
      display: block;
      font-size: 14px;
      color: #555;
      margin-bottom: 5px;
    }

    .input-group input {
      width: 100%;
      padding: 10px 12px;
      border: 1px solid #ddd;
      border-radius: 8px;
      font-size: 14px;
    }

    .input-group input:focus {
      border-color: #764ba2;
      outline: none;
    }

    .forgot {
      text-align: right;
      display: block;
      font-size: 13px;
      color: #764ba2;
      text-decoration: none;
      margin-top: -10px;
      margin-bottom: 15px;
    }

    .btn {
      width: 100%;
      padding: 10px;
      border: none;
      border-radius: 25px;
      background: linear-gradient(to right, #56ccf2, #8e2de2);
      color: white;
      font-size: 16px;
      font-weight: bold;
      cursor: pointer;
      transition: 0.3s;
    }

    .btn:hover {
      opacity: 0.9;
    }

    .social-login {
      margin: 20px 0;
      font-size: 14px;
      color: #666;
    }

    .social-icons {
      display: flex;
      justify-content: center;
      gap: 15px;
      margin-top: 10px;
    }

    .social-icons a {
      text-decoration: none;
      color: white;
      background: #3b5998;
      border-radius: 50%;
      width: 40px;
      height: 40px;
      display: flex;
      align-items: center;
      justify-content: center;
      transition: 0.3s;
    }

    .social-icons a:nth-child(2) {
      background: #1da1f2;
    }

    .social-icons a:nth-child(3) {
      background: #db4437;
    }

    .social-icons a:hover {
      opacity: 0.8;
    }

    .signup-link {
      margin-top: 15px;
      font-size: 14px;
      color: #333;
    }

    .signup-link a {
      color: #764ba2;
      text-decoration: none;
      font-weight: bold;
    }
  </style>
</head>
<body>
  <div class="login-container">
    <h2>Login</h2>
    <form>
      <div class="input-group">
        <label>Username</label>
        <input type="text" placeholder="Type your username" required />
      </div>
      <div class="input-group">
        <label>Password</label>
        <input type="password" placeholder="Type your password" required />
      </div>
      <a href="#" class="forgot">Forgot password?</a>
      <button class="btn">LOGIN</button>

      <div class="social-login">Or Sign Up Using</div>
      <div class="social-icons">
        <a href="#"><i>f</i></a>
        <a href="#"><i>t</i></a>
        <a href="#"><i>G</i></a>
      </div>

      <div class="signup-link">
        Or Sign Up Using <a href="#">SIGN UP</a>
      </div>
    </form>
  </div>
</body>
</html>
