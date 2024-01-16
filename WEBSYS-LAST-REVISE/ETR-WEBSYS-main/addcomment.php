<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testimonials</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        * {
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }

        body {
            background-image: url(img/pexels-markus-winkler-18512803.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            background-clip: border-box;
        }

        .card {
            background-color: gainsboro;
            display: flex;
        }

        .form-error {
            color: red;
        }

        .form-success {
            color: green;
        }

        .input-error {
            box-shadow: 0 0 5px red;
        }

        .form-cont {
            text-align: center;
        }

        .transparent-blurred-card {
            background: rgba(255, 255, 255, 0.6);
            /* Set the background color with some transparency */
            backdrop-filter: blur(10px);
            /* Apply a blur effect to the background */
        }
    </style>
    <script>
        $(document).ready(function() {
            $('form').submit(function(event) {
                event.preventDefault();
                var name = $('#name').val();
                var message = $('#message').val();
                var submit = $('#subtim').val();
                $('#form-message').load("comments.php", {
                    name: name,
                    message: message,
                    submit: submit
                });
            });
        });
    </script>
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
    <main>
        <div class="container">
            <div class="py-5 text-center">
                <h1>Submit a Review</h1>
            </div>

            <div class="card px-5 py-5 transparent-blurred-card">
                <form action="comments.php" method="post">
                    <b>Name:</b> <input type="text" class="form-control" name="name" id="name" placeholder="Optional">
                    <br>
                    <b>Message:</b> <textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="Enter message"></textarea>
                    <br>
                    <button type="submit" class="btn btn-success" id="subtim">SUBMIT</button>
                </form>
                <div class="form-cont">
                    <b>
                        <p id="form-message"></p>
                    </b>
                </div>
            </div>
        </div>


    </main>

</body>

</html>