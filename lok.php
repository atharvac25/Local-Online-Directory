<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cafes</title>
    <link href="https://fonts.googleapis.com/css2?family=Big+Shoulders+Inline+Text:wght@900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Big+Shoulders+Inline+Text:wght@900&family=Montserrat&display=swap" rel="stylesheet">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <style>
        *{
            margin: 0px;
            padding: 0px;
        }

        body, html{
            font-family: 'Montserrat', sans-serif;
            width: 100%;
            height: 100%;
            background-color: aliceblue;
        }

        .center {
            margin-top: 20px;
            margin-bottom: 20px;
            width: 500px;
            border: 4px solid #000000;
        } 

        .btn-edit{
            margin-top: 20px;
            margin-bottom: 10px;
        }

        .column {
            float: left;
            width: 33.33%;
            padding: 5px;
        }

        @media screen and (max-width: 800px) { 
            .column {
                width: 100%;
            }

            .center {
                margin-top: 10px;
                margin-bottom: 0px; 
            } 
        }

    </style>
</head>


<body>

<!-- Navigation Bar -->

    <?php include 'navbarnon.php'; ?>
    <div class="container-fluid">
        <!-- <div class="box">
            <a href = "https://www.google.com/maps/place/LOKAL+CAFE+%26+BISTRO/@19.027452,73.0557452,17z/data=!3m1!4b1!4m5!3m4!1s0x3be7c3804b6fbd6d:0x81cabe3f7442cfdc!8m2!3d19.0274469!4d73.0579339" target="_blank"><img src="images/cafe/lok1.jpg" alt="No Image" width="500" class="center"></a>
        </div> -->

        <div class="row">
            <div class="column text-center">
                <a href="cre.php"><button type="button" class="btn btn-outline-dark btn-edit">Previous</button></a>
            </div>
            <div class="column text-center">
                <a href="https://www.google.com/maps/place/LOKAL+CAFE+%26+BISTRO/@19.027452,73.0557452,17z/data=!3m1!4b1!4m5!3m4!1s0x3be7c3804b6fbd6d:0x81cabe3f7442cfdc!8m2!3d19.0274469!4d73.0579339" target="_blank"><img src="images/cafe/lok1.jpg" alt="No Image Available" class="center img-fluid"></a>
            </div>
            <div class="column text-center">
                <a href="hugs.php"><button type="button" class="btn btn-outline-dark btn-edit">Next</button></a>
            </div>
        </div>

        <div class="text-center text-success">
            <p>This is a verified service</p>
        </div>
        
        <table class="table">
            <tr>
                <th>Name</th>
                <th>Address</th>
                <th>Contact Number</th>
            </tr>

            <?php
            $conn = mysqli_connect("localhost", "root", "", "info_for_directory");
            if ($conn -> connect_error) {
                die("Connection Failed!".$conn -> connect_error);
            }

            $sql = "SELECT name, address, contact FROM nonessen WHERE id = '15'";
            $result = $conn -> query($sql);

            if ($result -> num_rows > 0) {
                while ($row = $result -> fetch_assoc()) {
                    echo "<tr><td>".$row["name"]."</td><td>".$row["address"]."</td><td>".$row["contact"]."</td></tr>";
                }
            }
            else {
                echo "0 result";
            }

            $conn -> close();

            ?>
        </table>

        <div class="text-center" style="margin-bottom: 10px;">
            <form action="fav_insert.php" method="POST">
                <button type="submit" class="btn btn-outline-danger" name="add_fav">Add to Favourites</button>
                <input type="hidden" name="place" value="Lokal Café and Bistro">
                <input type="hidden" name="address" value="Shop 2, 3 & 4, Seawood Avenue, Sector 3, Kharghar, Navi Mumbai">
                <input type="hidden" name="contact" value="8369727491">
            </form>
        </div>  

        <div>
            <a href="cafe.php"><button type="button" class="btn btn-success">&larr; Back to Cafés</button></a>
        </div>

    </div> 

</body>
</html>
