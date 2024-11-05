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
</body>
</html>
