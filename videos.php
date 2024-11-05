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
            <a href="home.php" target="_blank">My Portfolio</a>
        </div>
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="pictures.php">Pictures</a></li>
            <li><a href="contacts.php">Contact</a></li>
            <li><a href="videos.php">Videos</a></li>
            <li><a href="logout.php">Logout</a></li>
            <li><a href="https://www.canva.com/design/DAGUusHUEpM/tjvdJgFAlAbbKkhh2XKPHw/edit?utm_content=DAGUusHUEpM&utm_campaign=designshare&utm_medium=link2&utm_source=sharebutton">Resume</a></li>
        </ul>
    </nav>

    <div class="video" id="videos">
        <div class="header">
            <div class="info">
                <h3>My Videos</h3>
            </div>
        </div>

        <div class="video-items">
            <div class="item">
                <video controls>
                    <source src="video/test.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
            <div class="item">
                <video controls>
                    <source src="video/test.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
            <div class="item">
                <video controls>
                    <source src="video/test.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>
    </div>
</body>
</html>
