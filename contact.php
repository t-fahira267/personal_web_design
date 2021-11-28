<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact | Tasha Fahira</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div class="header">
        <h1>Contact</h1>
    </div>

    <!--Navigation Bar-->
    <div class="navbar">
        <a href="homepage.html">Home</a>
        <a href="aboutme.html">About Me</a>
        <a href="resume.html">Resume</a>
        <a href="contact.html">Contact</a>
        <a href="references.html">References</a>
    </div>

    <div class="infobox">
        <a>
            <img src="placeholder.png" style="width: 15px; height: 15px;">
            Tokyo, Japan
        </a> <br>

        <a>
            <img src="email.png" style="width: 15px; height: 15px;">
            tashafahira@email.com
        </a> <br>

        <a>
            <img src="phone-2.png" style="width: 15px; height: 15px;">
            +81 12-3456-789
        </a>
    </div>

    <div class="para-contact">
        <div class="socialbox">
            <div class="subtitle">
                Get Social:
            </div>
            <a href="https://www.facebook.com/tasha.a.fahira">
                <img src="facebook.png" style="width: 50px; height: 50px; margin: 10px;">
            </a>
            <a href="https://linkedin.com/in/tasha-amanda-fahira-6674a3163/">
                <img src="linkedin.png" style="width: 50px; height: 50px; margin: 10px;">
            </a>
        </div>

        <br>
        <div class="subtitle">
            or send me a message:
        </div>

        <?php
        date_default_timezone_set('Asia/Tokyo');
        include 'dbh.inc.php';
        include 'inbox.inc.php';

        echo "<form name='myform' action='" . setInbox($conn) . "' method='POST' onsubmit='return validateMyForm()'>
                <input type='hidden' name='date' value='" . date(' Y-m-d H:i:s') . "'>
                <input type='text' name='name' placeholder='*Name'><br>
                <input type='email' name='email' placeholder='*Email'><br>
                <input type='text' name='subject' placeholder='*Subject'><br>
                <textarea name='message' rows='5' cols='30' placeholder='Your message here'></textarea>
                <br><br>
                <input type='submit' value='Send' id='submitBtn' name='sendBtn'>
            </form>";

        ?>
        <br><br>
    </div>

    <footer>
        <p>&copy; Tasha Fahira. All rights reserved.</p>
    </footer>

</body>

<script>
    function validateMyForm() {
        var name = document.myform.name.value;
        var email = document.myform.email.value;
        var atposition = email.indexOf("@");
        var dotposition = email.lastIndexOf(".");
        var subject = document.myform.subject.value;
        var message = document.myform.message.value;

        if (name == null || name == "") {
            alert("Please enter your name");
            return false;
        } else if (email == null || email == "") {
            alert("Please enter a valid email address");
            return false;
        } else if (atposition < 1 || dotposition < atposition + 2 || dotposition + 2 >= email.length) {
            alert("Please enter a valid email address");
            return false;
        } else if (subject == null || subject == "") {
            alert("Please write a subject to your message");
            return false;
        } else if (message == null || message == "") {
            alert("Please write a message");
            return false;
        } else {
            alert("Thank you for your message. I\'ll get back to you soon.");
            return true;
        }
    }

    document.getElementById("submitBtn").addEventListener("mouseover",
        mouseoverFn);
    document.getElementById("submitBtn").addEventListener("mouseout",
        mouseoutFn);

    function mouseoverFn() {
        document.getElementById("submitBtn").style = "background-color:#53c2ce";
    }

    function mouseoutFn() {
        document.getElementById("submitBtn").style = "background-color:rgb(0, 7, 40)";
    }
</script>

</html>