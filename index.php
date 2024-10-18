<?php include('connection.php');

$sql = "SELECT * FROM my_info";
$result = $connection->query($sql);

if ($result->num_rows > 0) {
    $display = $result->fetch_assoc();
} else {
    die('Data not found.');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="./css/style.css">
    <title>My Portfolio</title>
</head>

<body>

    <nav>
        <div class="logo">
            <a href="index.php" target="_blank">My Portfolio</a>
        </div>
        <ul>
            <li><a href="#main">Home</a></li>
            <li><a href="#pictures">Pictures</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="#videos">Videos</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="register.php">Register</a></li>
        </ul>
    </nav>

    <div class="main" id="main">
        <div class="left">
            <h5>Hi!, I am <?php echo $display['first_name'] . ' ' . $display['last_name']; ?></h5>
            <h3>I am a student of <span><?php echo $display['university']; ?></span> <?php echo $display['campus']; ?></h3>
            <p>
                Major in <?php echo $display['course']; ?> a <?php echo $display['year_level']; ?> Student.
            </p>
        </div>
        <div class="right">
            <img src="images/2.jpg">
        </div>
    </div>

    <div class="pictures" id="pictures">
        <h3>My Pictures</h3>
        <div class="skill-items">
            <div class="item">
                <div class="icon"><i class='bx bx-directions'></i></div>
                <h4>Strategy & Direction</h4>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum
                    tristique.
                </p>
            </div>
            <div class="item">
                <div class="icon"><i class='bx bx-bookmark-heart'></i></div>
                <h4>Branding & Logo</h4>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum
                    tristique.
                </p>
            </div>
            <div class="item">
                <div class="icon"><i class='bx bxl-figma'></i></i></div>
                <h4>UI & UX Design</h4>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum
                    tristique.
                </p>
            </div>
            <div class="item">
                <div class="icon"><i class='bx bx-code-alt'></i></i></div>
                <h4>Webflow Coding</h4>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum
                    tristique.
                </p>
            </div>
        </div>
    </div>

    <div class="about" id="contact">
    <div class="left">
            <img src="images/1.jpg">
        </div>
        <div class="right">
            <h3>About Me</h3>
            <p>
            Hi there! I’m <?php echo $display['first_name'] . ' ' . $display['middle_name'] . ' ' . $display['last_name']; ?>, born on <?php echo $display['birth_date']; ?>.
            I’m <?php echo $display['gender']; ?> and I live in <?php echo $display['address']; ?>.
            Currently, I’m studying at <?php echo $display['university'] . ' ' . $display['campus']; ?> in the <?php echo $display['course']; ?> program, focusing on <?php echo $display['major']; ?>. 
            I’m in my <?php echo $display['year_level']; ?> and my student ID is <?php echo $display['student_id']; ?>.

            </p>
            <br><br><br><br>

            <h3>My Social & Contact Information</h3>
            <br>
            <h4>Facebook: <?php echo $display['facebook']; ?></h4>
            <br>
            <h4>Email : <?php echo $display['email']; ?></h4>
            <br>
            <h4>Contact Number: <?php echo $display['number']; ?></h4>
        </div>
    </div>

    <div class="portfolio" id="videos">
        <div class="header">
            <div class="info">
                <h5>Recent Projects</h5>
                <h3>My Portfolio</h3>
            </div>
        </div>

        <div class="portfo-items">
            <div class="item">
                <img src="assets/sc-1.jpg">
                <div class="info">
                    <h4>Portfolio #3</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros.
                    </p>
                    <a href="#">View in Github <i class='bx bx-link-external'></i></a>
                </div>
            </div>
            <div class="item">
                <img src="assets/sc-2.jpg">
                <div class="info">
                    <h4>Simple Blog Page</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros.
                    </p>
                    <a href="#">View in Github <i class='bx bx-link-external'></i></a>
                </div>
            </div>
            <div class="item">
                <img src="assets/sc-3.jpg">
                <div class="info">
                    <h4>Animated Nav</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros.
                    </p>
                    <a href="#">View in Github <i class='bx bx-link-external'></i></a>
                </div>
            </div>
        </div>

    </div>
</body>

</html>