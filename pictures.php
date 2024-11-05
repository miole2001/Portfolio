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

    <div class="pictures" id="pictures">
        <h3>My Pictures</h3>
        <form action="" method="post" enctype="multipart/form-data" class="upload-form">
            <label for="image">Choose an image to upload:</label>
            <input type="file" id="image" name="image" accept="image/*" required>
            <button type="submit" name="upload">Upload Image</button>
        </form>

        <div class="skill-items">
            <?php
            if (isset($_POST['upload'])) {
                $imageName = $_FILES["image"]["name"];

                $sql = "INSERT INTO album (my_pictures) VALUES ('$imageName')";

                $connection->query($sql);
                header("location: home.php");
            }
            $sql = "SELECT * FROM album"; 
            $result = $connection->query($sql);

            if ($result->num_rows > 0) {
                while ($album = $result->fetch_assoc()) {
                    echo '<div class="item">';
                    echo '<img src="./images/' . $album['my_pictures'] . '" alt="">';
                    echo '</div>'; 
                }
            } else {
                echo '<p>No images found.</p>';
            }
            ?>
        </div>
    </div>
</body>
</html>
