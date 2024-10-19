<!DOCTYPE html>
<!-- Website - www.codingnepalweb.com -->
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="description"
        content=" Today in this blog you will learn how to create a responsive Login & Registration Form in HTML CSS & JavaScript. The blog will cover everything from the basics of creating a Login & Registration in HTML, to styling it with CSS and adding with JavaScript." />
    <meta name="keywords" content=" 
 Animated Login & Registration Form,Form Design,HTML and CSS,HTML CSS JavaScript,login & registration form,login & signup form,Login Form Design,registration form,Signup Form,HTML,CSS,JavaScript,
" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Login & Signup Form HTML CSS | CodingNepal</title>
    <link rel="stylesheet" href="<?= _WEB_ROOT ?>/public/css/author.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.2.0/mdb.min.css" rel="stylesheet" />
    <script src="../custom-scripts.js" defer></script>
</head>

<body>
    <section class="wrapper">
        <div class="form signup">
            <header>Login</header>
            <form action="user/login" method="post">
                <input type="text" placeholder="Username" required name="username" />
                <input type="password" placeholder="Password" required name="password" />
                <a href="#">Forgot password?</a>
                <input type="submit" name="submit" value="Login" />
            </form>
        </div>
        <script>
        var password = document.getElementById("password");
        var confirm_password = document.getElementById("comfirm_password");
        var message = document.getElementById("message");

        function validatePassword() {
            if (password.value != confirm_password.value) {
                message.innerHTML = "Mật khẩu không khớp";
            } else {
                message.innerHTML = "";
            }
        }

        password.onchange = validatePassword;
        confirm_password.onkeyup = validatePassword;
        const wrapper = document.querySelector(".wrapper"),
            signupHeader = document.querySelector(".signup header"),
            loginHeader = document.querySelector(".login header");

        loginHeader.addEventListener("click", () => {
            wrapper.classList.add("active");
        });
        signupHeader.addEventListener("click", () => {
            wrapper.classList.remove("active");
        });
        </script>
    </section>
</body>

</html>