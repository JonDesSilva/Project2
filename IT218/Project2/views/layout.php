
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="try1.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <title>Home</title>
</head>

<body>
    <main>
        <div class="header">
            <div class="header-A">
                <h1>The To-Do List</h1>
            </div>
            <div class="header-B">
                <!-- Login Section -->
                <h3>Login</h3>
                <form action="controller.php">
                    <label for="Email">Email</label>
                    <input type="email" name="email" id="email">
                    <label for="Password">Password</label>
                    <input type="password" name="password" id="password">
                    <input type="submit">
                    <br>
                    <a href="#">Need to register? Click here!</a>
                </form>
            </div>
        </div>
        <!-- End Header-->

        <nav class="navbar">
                <a href="#">Home</a>
                <a href="#">To-Do List</a>
                <a href="#">Completed To-Do Lists</a>
        </nav>
        <!-- End navbarr-->

        <div class="main-content">
            <?php require_once('routes.php'); ?>
        </div>
        <!-- End main-content-->

        <footer class="footer">
            Copyright Here
        </footer>
        <!-- End footer-->

        <script type="text/javascript">
            $("document").ready(function () {
                console.log('ME> Page Loaded');

                $("#login").on('click', function () {
                    var email = $("#email").val();
                    var password = $("#password").val();
                    console.log(email);
                    console.log(password);

                    if (email == "" || password == "")
                        alert('Please check your inputs');

                    $.ajax(
                        {
                            url: "login.php",
                        }
                    );
                });
            });
        </script>
        <!-- End JQuery-->
    </main>
</body>
</html>