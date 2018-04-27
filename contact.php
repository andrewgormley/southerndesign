<?php
if(isset($_POST['btnSubmit'])) {
  $name     = strip_tags(trim($_POST["txtName"]));
  $email    = strip_tags(trim($_POST["txtEmail"]));
  $subj     = strip_tags(trim($_POST["txtSubject"]));
  $mesg     = strip_tags(trim($_POST["txtMessage"]));

  $errors = array();

  if(empty($name)) { $errors[] = "Please specify your name."; }

  if(empty($email)) {
    $errors[] = "Please specify your email address.";
  }
  else {
    if(!preg_match("/([a-z0-9-\_]+)\@([a-z0-9-]+)\.([a-z0-9\.]+)/i", $email)) {
      $errors[] = "Please enter a valid email address.";
    }
  }

  if(empty($subj)) { $errors[] = "Please select an email subject."; }
  if(empty($mesg)) { $errors[] = "Please enter your email message."; }

  if(count($errors) == 0) {

    // Email Headers
    $headers = "From: {$name}<{$email}>\r\n";
    $headers .= "Return-Path: {$name}<{$email}>\r\n";
    $headers .= "Reply-To: {$name}<{$email}>\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    $mail_to = "southerndesignwindows@mail.com";
    $subject  = $subj;

    $content  = "<html>
            <body>
            <div style=\"color: #000;font-family:Arial; font-size: 12px;\">\n

              The following message has been sent via the SoutHern Design Website contact form:<br>\n\n";

    $content  .=  "<br>From: <b>" . $name . "</b>";
    $content  .=  "<br>Email: <b>" . $email . "</b><br>\n";
    $content  .= "<br>Subject: <b>". $subject . "</b>\n";
    $content  .=  "<br><br>" . nl2br($mesg);
    $content  .=  "</div></body></html>";

    mail($mail_to, $subject, $content, $headers);
    header("location:contact.php?act=ok");
  }
  else {
    $name = stripslashes($name);
    $email = stripslashes($email);
    $subj = stripslashes($subj);
    $mesg = stripslashes($mesg);
  }
}
else {
  $name = "";
  $email = "";
  $subj = "";
  $mesg = "";
}

$required = "<span style=\"color:red;font-weight: bold\">*</span>";
?>
<?php include "includes/header.php"; ?>

<div class="banner banner-small">

  <div class="cta">
    <h1 id="ctatitle">Contact us</h1>
    <p id="ctacopy" class="quote">"Efficient, quick and excellent. Would highly recommend."
    </p>
  </div>

  <img src="img/placeholder.jpg">

</div>

<div style="background-color:white;">
  <div class="row container">


    <div class="contact-area small-12 large-6 columns">

      <h3>
        Contact us on
        <a href="tel:+447469886347">07469 886347</a>
      </h3>

      <p class="contact-message">Or send us a message below</p>

    <?php
    $act = isset($_GET['act']) ? $_GET['act'] : "";
    if($act == "ok") {
    ?>
        <div class="green">
            <strong>Success!</strong>
            <p>Your message was sent successfully. We'll be in touch soon.</p>
        </div>
    <?php
    }
    else {
            if(count($errors) > 0) {
                echo "
                <div class=\"red\">
                    The following problems were encountered:
                    <ul>\n";

                foreach($errors as $error) {
                    echo "
                        <li>" . $error . "</li>\n";
                }

                echo "
                    </ul>
                </div>\n";
            }
            ?>

        <form action="<?=$_SERVER['PHP_SELF']; ?>" method="post">
        <input id="txtName" placeholder="Name" name="txtName" type="text" maxlength="50" style="width: 100%;" value="<?=$name?>" required>

        <input id="txtEmail" placeholder="Email" name="txtEmail" type="email" maxlength="50" style="width: 100%;" value="<?=$email?>" required>

        <input type="text" id="txtSubject" placeholder="Subject" name="txtSubject" maxlength="50" style="width: 100%;" value="<?=$subj?>" required>

        <textarea id="txtMessage" name="txtMessage" placeholder="Your Message" style="width: 100%; height: 150px;"><?=$mesg?></textarea>

        <input type="submit" id="btnSubmit" name="btnSubmit" value="Send Email Message" class="button">
        </form>
    <?php
    }
    ?>

    </div>

    <div class="columns small-12 large-6">
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10164.936626352952!2d-3.58708!3d50.436739!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7259371cb87feccb!2sSouthern+design+windows!5e0!3m2!1sen!2suk!4v1492816404068" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>

  </div>
</div>



<?php include "includes/footer.php"; ?>
