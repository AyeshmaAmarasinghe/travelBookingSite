<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Lets book it</title>

    <!-- swiper css link -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">


    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">


    <!-- custom css file link -->
    <link rel="stylesheet" href="Styles/styles.css">

    <!--favicon-->
    <link rel="shorcut icon" href="Images/favicon3.png" size="128x128" />
</head>

<body>

    <!-- header section starts -->

    <section class="header">

        <a href="home.php" class="logo"><strong>travel.</strong></a>

        <nav class="navbar">
            <a href="home.php">Home</a>
            <a href="about.php">About</a>
            <a href="package.php">Packages</a>
            <a href="bookings.php">Bookings</a>
        </nav>

        <div id="menu-btn" class="fas fa-bars">

        </div>

    </section>

    <!-- header section ends -->

    <div class="heading" style="background: url(Images/booking2.jpeg) no-repeat">
        <h1>book now</h1>
    </div>

    <!-- booking section starts -->
    <br>
    <br>
    <br>
    <br>

    <section class="booking">
        <!-- <h1 class="heading-title">book your trip!</h1> -->
        <form action="book_form.php" method="post" class="book-form">

            <div class="flex">

                <div class="inputBox">
                    <span>name : </span>
                    <input type="text" placeholder="enter your name" name="name" required>
                </div>

                <div class="inputBox">
                    <span>email : </span>
                    <input type="email" placeholder="enter your email" name="email" required>
                </div>

                <div class="inputBox">
                    <span>phone : </span>
                    <input type="text" placeholder="enter your phone-number" name="phone" required>
                </div>

                <div class="inputBox">
                    <span>address : </span>
                    <input type="text" placeholder="enter your address" name="address" required>
                </div>

                <div class="inputBox">
                    <span>where to :</span>
                    <input type="text" placeholder="place you want to visit" name="location" required>
                </div>

                <div class="inputBox">
                    <span>how many :</span>
                    <input type="number" placeholder="number of guests" name="guests" required>
                </div>

                <div class="inputBox">
                    <span>arrivals :</span>
                    <input type="date" name="arrivals" required>
                </div>

                <div class="inputBox">
                    <span>leaving :</span>
                    <input type="date" name="leaving" required>
                </div>
            </div>

            <input type="submit" value="submit" class="btn" name="send">

        </form>
    </section>

    
    <!-- swiper js link -->
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <!-- custom js file link -->
    <script src="Js/script.js"></script>
</body>

</html>