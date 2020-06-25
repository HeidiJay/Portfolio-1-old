<?php

if($_POST["submit"]) {
  $recipient="heidijay@yahoo.com";
  $subject="Form to email message";
  $sender=$_POST["sender"];
  $senderEmail=$_POST["senderEmail"];
  $message=$_POST["message"];

  $mailBody="Name: $sender\nEmail:
  $senderEmail\n\n$message";

  mail($recipient, $subject, $mailBody, "From: $sender
  <$senderEmail>");

  $thankYou="<p>Thank You!  Your message has been sent.</p>";
}

?><!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta name="description" content="Web Development and Design in Virginia Beach, Virginia" />
  <meta name="keywords"
    content="Heidi Jay, portfolio, resume, Virginia Beach website designer, web development, web design, programming, programmer, JavaScript, Python, CSS, HTML" />
  <meta name="author" content="Heidi Jay" />
  <title>Heidi Jay | Contact Me</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link href="css/style.css" rel="stylesheet" />
</head>

<body>
  <header>
    <nav>
      <img src="images/heidi3up.jpg" alt="Profile">
      <ul>
        <li><i class="fas fa-scroll"></i><a href="home.html">Home</a></li>
        <li><i class="fas fa-project-diagram"></i><a href="projects.html">My Projects</a></li>
        <li><i class="fas fa-graduation-cap"></i><a href="education.html">Education</a></li>
        <li class="current"><i class="fas fa-envelope"></i><a href="contact.php">Contact Me</a></li>
      </ul>
    </nav>
    <div class="menu-toggle"><i class="fas fa-bars"></i></div>
  </header>
  <main>

    <section id="photo">
          <img src="images/heidi2015glasses.jpg" />
          </section>
    <div id="email">
    <a href="mailto:heidijay@yahoo.com">HeidiJay@yahoo.com</a>
    </div>

    <aside id="sidebar">
      <div class="dark">
        <h3>Email Me</h3>
        <?=$thankYou ?>
        <form  method="post" action="contact.php">
          <div>
            <label>Name</label><br>
            <input name="sender" placeholder="Name">
          </div>
          <div>
            <label>Email</label><br>
            <input name="senderEmail" placeholder="Email Address">
          </div>
          <div>
            <label>Message</label><br>
            <textarea rows="5" cols="20" name="message" placeholder="Message"></textarea>
          </div>
          <input type="submit" name="submit" class="button_1">
        </form>
      </div>
    </aside>

  </main>
  <footer>
    <p>Heidi Jay's Portfolio, Copyright &copy; 2019</p>
    <ul>
      <li><a href="https://github.com/HeidiJay"><i class="fab fa-github-square"></i></a></li>
    </ul>
  </footer>
  <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
  <script type="text/javascript">
    $(document).ready(function () {
      $('.menu-toggle').click(function () {
        $('nav').toggleClass('current')
      })
    })
  </script>
</body>

</html>