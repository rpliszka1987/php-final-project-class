<?php include 'database.php' ?>

<?php
    // Create Query

    $query = "SELECT * FROM chats";
    $chating = mysqli_query($con, $query);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Chatter Box</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
    <script src="main.js"></script>
</head>
<body>
    <div id="container">
        <header>
            <h1>Chatter Box</h1>
        </header>
        <div id="chatbox">
            <ul>
            <?php while($row = mysqli_fetch_assoc($chating); return $row['value']) : ?>
						<li class="message"><span><?php echo $row['time'] ?> - </span><strong><?php echo $row['user'] ?>:</strong> <?php echo $row['message'] ?> </li>
			<?php endwhile; ?>

            </ul>
        </div>
        <div id="input">
            <form method="post" action="process.php">
                <input type="text" name="user" placeholder="Enter your name" />
                <input type="text" name="message" placeholder="Enter your message here" />
                <br />
                <input class="chat-btn" type="submit" name="submit" value="Send Message" />
 
            </form>
        </div>
    </div>
</body>
</html>