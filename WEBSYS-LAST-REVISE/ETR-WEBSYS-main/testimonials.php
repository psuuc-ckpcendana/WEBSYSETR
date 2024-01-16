<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testimonials</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        *{
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }
       h1{
        text-align: center;
       }
    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-dark">
            <div class="container">
                <a class="navbar-brand fw-bold text-light" href="#">
                    <img src="fundme.png" alt="Logo" width="40" height="34" class="d-inline-block align-text-top rounded-5 me-2"> <i>FundMe</i></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link text-light" href="">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="campaign.php">Campaign Events</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="#Footer">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="testimonials.php">Testimonials</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="submit.php">Submit a Campaign</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="consult">
                        <a class="nav-link text-light " href="login.php">
                            <button class="btn btn-info" type="button">Log Out</button></a>
                    </form>
                </div>
            </div>
        </nav>
    </header>
    <br>
    <div class="container-fluid">
        <h1>TESTIMONIALS</h1>
    <?php
    require 'conn.php';

    $sql = "SELECT * FROM testimonials WHERE `status`='approved'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
    ?>
            <div class="album py-5 bg-body-tertiary">
                <div class="container">
                <div class="d-flex justify-content-end">
                    <a href="addcomment.php" class="btn btn-success" id="btn">
                        Submit a review <i class="bi bi-plus"></i>
                    </a>
                </div>
                <br><br>
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                        <div class="col">
                            <div class="card shadow-sm">
                                <img src="img/pexels-markus-winkler-18512803.jpg" alt="" class="bd-placeholder-img card-img-top" width="150" height="150">
                                <div class="card-body">
                                   <b> Name: </b><?php echo $row['name']; ?>
                                    <p class="card-text"><b>Message: </b> <?php echo $row['message']; ?></p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <small class="text-body-secondary"><?php echo $row['posted']; ?></small>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>


        <?php
        }
        ?>
        </div>
        </div>
    <?php
    }
    ?>

</div>


</body>

</html>