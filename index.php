<?php

session_start();
if(isset($_SESSION["user_data"]))
{
	header("location:./dashboard/admin/");
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap"
      rel="stylesheet"
    />
    <title>Login landing page</title>
    <style>
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Montserrat", sans-serif;
        color: #303433;
      }

      body {
        min-height: 100vh;
        width: 100%;
        display: grid;
        grid-template-columns: 1fr 1fr;
      }

      section {
        display: flex;
        justify-content: center;
        align-items: center;
      }

      section.side {
        background: url(./images/bk.jpg) no-repeat;
        background-size: 115% 100%;
      }

      .side img {
        width: 50%;
        max-width: 50%;
      }

      .login-container {
        max-width: 450px;
        padding: 24px;
        display: flex;
        flex-direction: column;
        align-items: center;
      }

      .title {
        text-transform: uppercase;
        font-size: 3em;
        font-weight: bold;
        text-align: center;
        letter-spacing: 1px;
      }

      .separator {
        width: 150px;
        height: 4px;
        background-color: #843bc7;
        margin: 24px;
      }

      .welcome-message {
        text-align: center;
        font-size: 1.1em;
        line-height: 28px;
        margin-bottom: 30px;
        color: #696969;
      }

      .login-form {
        width: 100%;
        display: flex;
        flex-direction: column;
      }

      .form-control {
        width: 100%;
        position: relative;
        margin-bottom: 24px;
      }

      input,
      button {
        border: none;
        outline: none;
        border-radius: 30px;
        font-size: 1.1em;
      }

      input {
        width: 100%;
        background: #e6e6e6;
        color: #333;
        letter-spacing: 0.5px;
        padding: 14px 64px;
      }

      input ~ i {
        position: absolute;
        left: 32px;
        top: 50%;
        transform: translateY(-50%);
        color: #888;
        transition: color 0.4s;
      }

      input:focus ~ i {
        color: #843bc7;
      }

      button.submit {
        color: #fff;
        padding: 14px 64px;
        margin: 32px auto;
        text-transform: uppercase;
        letter-spacing: 2px;
        font-weight: bold;
        background-image: linear-gradient(to right, #8b33c5, #15a0e1);
        cursor: pointer;
        transition: opacity 0.4s;
      }

      button.submit:hover {
        opacity: 0.9;
      }

      /* ----  Responsiveness   ----  */
      @media (max-width: 780px) {
        body {
          display: flex;
          justify-content: center;
          align-items: center;
        }

        .side {
          display: none;
        }
      }
    </style>
  </head>
  <body>
    <section class="side">
      <img src="./images/img.svg" alt="" />
    </section>

    <section class="main">
      <div class="login-container">
        <p class="title">Welcome back</p>
        <div class="separator"></div>
        <p class="welcome-message">
          Please, provide login credential to proceed and have access to all our
          services
        </p>

        <form class="login-form" action="secure_login.php" method='post' id="bb">
          <div class="form-control">
            <input type="text" placeholder="Username" name="user_id_auth" id="textfield" data-rule-minlength="6" data-rule-required="true" />
            <i class="fas fa-user"></i>
          </div>
          <div class="form-control">
            <input type="password" name="pass_key" id="pwfield" placeholder="Password" />
            <i class="fas fa-lock"></i>
          </div>

          <button class="submit" type="submit" name="btnLogin">Login</button>
        </form>
      </div>
    </section>
  </body>
</html>
