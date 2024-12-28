<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NokolFlix</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/signInStyle.css">
    <link rel="stylesheet" href="css/indexStyle.css">
</head>

<body>
    <!--Navbar start-->
    <nav class="navbar navbar-expand-lg bg-dark border-bottom border-body" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">NokolFlix</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01"
                aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Sign In</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="signUp.php">Sign Up</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-light" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

     <!--Sign In page-->
     <div class="body-sign">
        <div class="sign-in-container">
            <h2 class="head">Sign In</h2>
            <form class="signin" action="subscription.php" method="post">
              <input class="inp" type="email" name="sub_email" placeholder="Email Address" required>
              <input class="inp" type="password" name="sub_password" placeholder="Password" required>
              <button type="submit" class="sbtn btn btn-outline-danger">Sign In</button>
            </form>
            <p>Don't have an account? <a href="signUp.php">Sign Up</a></p>
          </div>
        </div>
    <!--Navbar end-->
    <div class="container-fluid">

       

        <!--Footer-->
        <footer class="mt-2 mb-4">
            <h3><a href="">Question? Contacts</a></h3>
            <div class="row mb-4 mt-2">
                <div class="col-4">
                    <a href="">FAQ</a> <br>
                    <a href="">Investor Relations</a><br>
                    <a href="">Privacy</a> <br>
                    <a href="">Speed Test</a> <br>
                </div>
                <div class="col-4">
                    <a href="">Help Center</a> <br>
                    <a href="">Jobs</a> <br>
                    <a href="">Cookie Preferences</a> <br>
                    <a href="">Legal Notices</a> <br>
                </div>
                <div class="col-4">
                    <a href="">Only on NokolFlix</a> <br>
                    <a href="">Account</a> <br>
                    <a href="">Terms of Us</a> <br>
                    <a href="">Contact Us</a> <br>
                </div>
            </div>
            <p>NokolFlix Bangladesh</p>
        </footer>
        <!--Footer End-->

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>