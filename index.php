<?php
session_start();
error_reporting(0);
include('DBconnect.php');
if($_SESSION['alogin']!=''){
$_SESSION['alogin']='';
}
if(isset($_POST['login']))
{
/*$uname=$_POST['username'];
$password=md5($_POST['password']);
$sql ="SELECT UserName,Password FROM admin WHERE UserName=:uname and Password=:password";
$query= $dbh -> prepare($sql);
$query-> bindParam(':uname', $uname, PDO::PARAM_STR);
$query-> bindParam(':password', $password, PDO::PARAM_STR);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
$_SESSION['alogin']=$_POST['username'];
echo "<script type='text/javascript'> document.location = 'dashboard.php'; </script>";
} else{

    echo "<script>alert('Invalid Details');</script>";

}*/

}

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NokolFlix</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/indexStyle.css">
</head>

<body>
    <!--Navbar start-->
    <nav class="navbar navbar-expand-lg bg-dark border-bottom border-body" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">NokolFlix</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01"
                aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="signIn.php">Sign In</a>
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
    <!--Navbar end-->
    
    <!--Carousel-->
    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/indexImg/c2.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/indexImg/c1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Ultimate Movies, TV Shows and, More</h5>
                    <p>Start at 500tk. Cancel anytime.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/indexImg/c3.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Ultimate Movies, TV Shows and, More</h5>
                    <p>Start at USD 500tk. Cancel anytime.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!--Carsoul end-->

    <div class="container-fluid">
        <!--email-->

        <form class="mb-3">
            <div class="row d-flex justify-content-center">
                <div class="col-4">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label"></label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            placeholder="Email address">
                    </div>
                </div>
                <div class="col-2 mt-4">
                    <button type="submit" class="btn btn-danger">Get Started</button>
                </div>
            </div>
        </form>

        <!--email end-->

        <!--trending-->
        <div class="trend mt-2 mb-4">
            <h2>Trending Now</h2>
            <div class="row">
                <div class="col-2"><a href="Trending Videos/t1.mp4"><img class="cards" src="images/indexImg/t1.webp" alt="Play Video"></a></div>
                <div class="col-2"><a href="Trending Videos/t2.mp4"><img class="cards" src="images/indexImg/t2.webp" alt=""></a></div>
                <div class="col-2" id="T"><a href="TrendingVideo.php"><img class="cards" src="images/indexImg/t3.webp" alt=""></a>
                <script>
                   var Trending="images/indexImg/t3.webp"
                </script>
                </div>
                <div class="col-2"><a href="signIn.html"><img class="cards" src="images/indexImg/t4.webp" alt=""></a></div>
                <div class="col-2"><a href="signIn.html"><img class="cards" src="images/indexImg/t5.webp" alt=""></a></div>
                <div class="col-2"><a href="signIn.html"><img class="cards" src="images/indexImg/t6.webp" alt=""></a></div>
            </div>
        </div>
        <!--trending end-->

        <!--only on nokolflix-->
        <div class="only-nokol mt-2 mb-4">
            <h2>Only on NokolFlix</h2>
            <div class="row">
                <div class="col-2"><a href="signin.php"><img class="cards" src="images/indexImg/n1.webp" alt=""></a></div>
                <div class="col-2"><a href="signIn.html"><img class="cards" src="images/indexImg/n2.webp" alt=""></a></div>
                <div class="col-2"><a href="signIn.html"><img class="cards" src="images/indexImg/n3.webp" alt=""></a></div>
                <div class="col-2"><a href="signIn.html"><img class="cards" src="images/indexImg/n4.webp" alt=""></a></div>
                <div class="col-2"><a href="signIn.html"><img class="cards" src="images/indexImg/n5.webp" alt=""></a></div>
                <div class="col-2"><a href="signIn.html"><img class="cards" src="images/indexImg/n6.webp" alt=""></a></div>
            </div>
        </div>
        <!--only on nokol end-->

        <!--Accordian-->
        <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        What is NokolFlix?
                    </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">NokolFlix is a streaming service that offers a wide variety of award-winning TV shows, movies, anime, documentaries, and more on thousands of interner-connected devices. <br>
                    You can watch as much as you want, whenever you want without a single commercial-all for one low monthly price. There's always something new to discover and new TV shows and movies are added every week!</div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        How much does NokolFlix cost?
                    </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Watch NokolFlix on your smartphone, tablet, Smart TV, laptop, or streaming device, all for one fixed monthly fee. Plans range from USD 2.99 to USD 9.99 a month. No extra cost, no contacts.</div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                        What can I watch on NokolFlix?
                    </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">NokolFlix has an extensive library of feature films, documentaries, TV shows, anime, award-winning NokolFlix original, and more. Watch as much as you want, anytime you want.</div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                        Is NokolFlix good for kids?
                    </button>
                </h2>
                <div id="flush-collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">The NokolFlix experience is included in your membership to give parents control while kids enjoy family-friendly TV shows and movies in their own space. <br>
                    Kids profiles come with PIN-protected parental controls that let you restrict the maturity rating of content kids can watch and block specific titles you don't want kids to see.</div>
                </div>
            </div>
        </div>
        <!--Accordian end-->

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

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>