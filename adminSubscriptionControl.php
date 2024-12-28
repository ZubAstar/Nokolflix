<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/adminSubFormStyle.css">
  </head>
  <body>
        <!--Navbar start-->
        <nav class="navbar navbar-expand-lg bg-dark border-bottom border-body" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">NokolFlix Control Panel</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01"
                aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Subscription Control</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="adminVideoControl.php">Video Control</a>
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

    <div class="container-fluid">
        <div class="row">
    <!--Table start-->
        <h1 class='text-center mt-4 mb-2'>Subscription Table</h1>
        <table class="table table-striped table-hover">
    <thead>
        <tr>
        <th scope="col">sub_id</th>
        <th scope="col">user_name</th>
        <th scope="col">sub_email</th>
        <th scope="col">amount</th>
        <th scope="col">start_date</th>
        <th scope="col">end_date</th>
        </tr>
    </thead>
    <tbody>
        <?php
        require_once("DBconnect.php");
        $sql = "SELECT s.sub_id, u.name, s.sub_email, s.amount, s.start_date, s.end_date FROM user u, subscription s WHERE u.email = s.sub_email";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){
        ?>
        <tr>
            <th scope="row"><?php echo $row["sub_id"]; ?></th>
            <td><?php echo $row["name"]; ?></td>
            <td><?php echo $row["sub_email"]; ?></td>
            <td><?php echo $row["amount"]; ?></td>
            <td><?php echo $row["start_date"]; ?></td>
            <td><?php echo $row["end_date"]; ?></td>
        </tr>
        <?php
            }    
        }?>
        
    </tbody>
    </table>
<!--Table end-->

    </div>
</div>

<hr>

<!--Subscription control form-->
<div class="form-body">
<div class="form-container gap-right">
        <form action="addSubscription.php" method="POST">
            <h2>Add Subscription</h2>
            <div class="form-group">
                <label for="subscription_id">Subscription ID:</label>
                <input type="text" id="subscription_id" name="subscription_id" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="amount">Amount (Tk.):</label>
                <input type="number" id="amount" name="amount" value="500">
            </div>
            <div class="form-group">
                <label for="start_date">Start Date:</label>
                <input type="date" id="start_date" name="start_date" required>
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>

    <div class="form-container gap-left">
        <form action="modifySubscription.php" method="POST">
            <h2>Modify Subscription</h2>
            <div class="form-group">
                <label for="subscription_id">Subscription ID:</label>
                <input type="text" id="subscription_id" name="subscription_id" required>
            </div>
            <div class="form-group">
                <label for="amount">Amount (Tk.):</label>
                <input type="number" id="amount" name="amount" value="500">
            </div>
            <div class="form-group">
                <label for="start_date">Start Date:</label>
                <input type="date" id="start_date" name="start_date">
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>
    </div>
    <!--end-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>