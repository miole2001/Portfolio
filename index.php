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
    <link rel="stylesheet" href="style.css">
    <title>My Portfolio</title>
</head>

<body>

    <nav>
        <div class="logo">
            <a href="index.php" target="_blank">My Portfolio</a>
        </div>
        <ul>
            <li><a href="#main">Home</a></li>
            <li><a href="#skills">Skills</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="#portfolio">Portfolio</a></li>
            <li><a href="#feedback">Feedback</a></li>
        </ul>
        <button>Login/Register</button>
        <button id="menuButton" onclick="openMenu()">
            <i class='bx bx-menu'></i>
        </button>
    </nav>

    <div class="main" id="main">
        <div class="left">
            <h5>Hi!, I am <?php echo $display['first_name'] . ' ' . $display['last_name']; ?></h5>
            <h3>I am a student of <span><?php echo $display['university']; ?></span> <?php echo $display['campus']; ?></h3>
            <p>
                Major in <?php echo $display['major']; ?> a <?php echo $display['year_level']; ?> Student.
            </p>
        </div>
        <div class="right">
            <img src="assets/header-img.png">
        </div>
    </div>

    <div class="skills" id="skills">
        <h5>My Skills</h5>
        <h3>My Expertise</h3>
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
            <img src="assets/about-img.png">
        </div>
        <div class="right">
            <h5>About</h5>
            <h3>About Me</h3>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce varius faucibus massa sollicitudin amet
                augue. Nibh metus a semper purus mauris duis. Lorem eu neque, tristique quis duis. Nibh scelerisque ac
                adipiscing velit non nulla in amet pellentesque.
            </p>
            <p>
                Sit turpis pretium eget maecenas. Vestibulum dolor mattis consectetur eget commodo vitae. Amet
                pellentesque sit pulvinar lorem mi a, euismod risus r.
            </p>
        </div>
    </div>

    <div class="portfolio" id="portfolio">
        <div class="header">
            <div class="info">
                <h5>Recent Projects</h5>
                <h3>My Portfolio</h3>
            </div>
            <button><i class='bx bxl-github'></i> Visit My Github</button>
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

    <div class="feedback" id="feedback">
        <h5>Clients Reviews</h5>
        <h3>Customers Feedback</h3>
        <div class="customers">
            <div class="item">
                <div class="rating">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                </div>
                <p>
                    "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum
                    tristique. Duis cursus, mi quis viverra.
                </p>
                <div class="user">
                    <img src="assets/us-1.jpg">
                    <div class="info">
                        <h5>Dianne Russell</h5>
                        <p>Starbucks</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="rating">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                </div>
                <p>
                    "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum
                    tristique. Duis cursus, mi quis viverra.
                </p>
                <div class="user">
                    <img src="assets/us-2.jpg">
                    <div class="info">
                        <h5>Kristian Watson</h5>
                        <p>Louis Vuitton</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="rating">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                </div>
                <p>
                    "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum
                    tristique. Duis cursus, mi quis viverra.
                </p>
                <div class="user">
                    <img src="assets/us-3.jpg">
                    <div class="info">
                        <h5>Kathryn Murphy</h5>
                        <p>McDonald's</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="top">
            <div class="logo">
                <img src="assets/logo.png">
                <a href="https://youtube.com/@AsmrProg">My Portfolio</a>
            </div>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">Youtube</a></li>
                <li><a href="#">Projects</a></li>
            </ul>
            <div class="social-links">
                <a href="#"><i class='bx bxl-facebook'></i></a>
                <a href="#"><i class='bx bxl-instagram'></i></a>
                <a href="#"><i class='bx bxl-twitter'></i></a>
                <a href="#"><i class='bx bxl-linkedin-square'></i></a>
            </div>
        </div>
        <div class="separator"></div>
        <div class="bottom">
            <div class="links">
                <a href="#">Privacy Policy</a>
                <a href="#">Terms of Service</a>
                <a href="#">Cookies Setting</a>
            </div>
        </div>
    </footer>

    <script src="script.js"></script>
</body>

</html>