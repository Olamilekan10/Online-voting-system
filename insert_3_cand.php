<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- bootstrap css cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <!-- bootstrap css icon cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- bootstrap css icon cdn -->

    <!-- custom css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- custom css -->

    <style>
        td {
            padding-top: 20px;
        }
    </style>
</head>

<body>

    <!-- Header nav -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container">
                <a class="navbar-brand" href="#">Go Vote</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav_li active">
                            <a class="nav_a" href="index.html">Home <span class="sr-only"></span></a>
                        </li>
                        <li class="nav_li">
                            <a class="nav_a" href="year.html">Candidate</a>
                        </li>
                        <li class="nav_li">
                            <a class="nav_a" href="#">Result</a>
                        </li>
                        <li class="nav_li">
                            <a class="nav_a" href="#">About</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- Header nav -->

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1 style="padding-top: 20px;">Candidate Enroll</h1>
                <p style="padding-top: 10px;">3<sup>rd</sup> Year Enroll</p>

                <form action="" method="post">
                    <table>
                        <tr>
                            <td>Name :</td>
                            <td><input required type="text"></td>
                        </tr>
                        <tr>
                            <td>Email :</td>
                            <td><input required type="email"></td>
                        </tr>
                        <tr>
                            <td>Mobile Number :</td>
                            <td><input required type="number"></td>
                        </tr>
                        <tr>
                            <td>Branch :</td>
                            <td>
                                <select required>
                                    <option>Information Technology</option>
                                    <option>Computer Science</option>
                                    <option>Civil</option>
                                    <option>Mechanical </option>
                                    <option>Electronics and Telecom.</option>
                                    <option>Electrical</option>
                                    <option>Metallurgy</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Roll No. :</td>
                            <td><input type="number" required></td>
                        </tr>
                        <tr>
                            <td>Enrollment ID :</td>
                            <td><input type="text"></td>
                        </tr>
                        <tr>
                            <td><button type="submit" class="btn btn primary">Submit</button></td>
                        </tr>
                    </table>
                </form>
            </div>
            <div class="col-md-6" style="padding-top: 20px">
                <img src="img/svg3.avif" alt="" width="100%" height="90%">
            </div>
        </div>
    </div>


    <!-- bootstrap js bundle -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
        crossorigin="anonymous"></script>
    <!-- Popper js cdn link -->
</body>

</html>