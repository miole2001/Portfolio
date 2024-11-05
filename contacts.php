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
            <h3>My Social & Contact Information</h3>
            <h4>Facebook: <?php echo $display['facebook']; ?></h4>
            <h4>Email : <?php echo $display['email']; ?></h4>
            <h4>Contact Number: <?php echo $display['number']; ?></h4>
        </div>
    </div>
</body>
</html>
