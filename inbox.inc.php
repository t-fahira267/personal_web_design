<?php

function setInbox($conn)
{
    if (isset($_POST['sendBtn'])) {
        $date = $_POST['date'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        $sql = "INSERT INTO inbox (date, name, email, subject, message) 
        VALUES ('$date','$name', '$email', '$subject', '$message')";
        $result = $conn->query($sql);
    }
}

function getInbox($conn)
{
    $sql = "SELECT * FROM inbox
            ORDER BY cid DESC"; //Can use same variable name as long as in different functions
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) {
        echo "<div class= 'inbox-box'><p>";
        echo "Date received:    " . $row['date'] . "<br>";
        echo "Sender:   " . $row['name'] . "<br>";
        echo "Email:    " . $row['email'] . "<br>";
        echo "Subject:  " . $row['subject'] . "<br><br>";
        echo "Message:" . "<br>" . nl2br($row['message']); //nl2br() so can see line breaks in the comment
        echo "</p></div>";
    }
}
