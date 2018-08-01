<?php include 'database.php' ?>
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
                <li class="message"><span>10:45 PM - </span> Robert: Hello!   </li>
                <li class="message"><span>10:45 PM - </span> Robert: Hello!   </li>
                <li class="message"><span>10:45 PM - </span> Robert: Hello!   </li>
                <li class="message"><span>10:45 PM - </span> Robert: Hello!   </li>
                <li class="message"><span>10:45 PM - </span> Robert: Hello!   </li>
                <li class="message"><span>10:45 PM - </span> Robert: Hello!   </li>
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