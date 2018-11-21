<?php
include("../db/db.php");
?>

<!DOCTYPE HTML>
<html>
<head>
<title>Signup</title>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta name="keywords" content="Trendy Signup Form Responsive, Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<link href="css/font-awesome.css" rel="stylesheet"> 
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
<script src="js/jquery-1.11.1.min.js"></script>
</head>
<body>
<div class="wthree-dot">
	<h1> Signup </h1>
	<div class="profile">
		<div class="wrap">
			<div class="wthree-grids">
				<div class="content-left">
					<div class="content-info">
						<h2>Brief History About Us</h2>
						<div class="slider">
							<div class="callbacks_container">
								<ul class="rslides callbacks callbacks1" id="slider4">
									<li>
										<div class="w3layouts-banner-info">
											<h3>Transcript Guru</h3>
											<p>We Made Transcript Easier</p>
										</div>
									</li>
									
								</ul>
							</div>
							<div class="clear"> </div>
						</div>
						
						<div class="agile-signin">
							<h4>Already have an account?<a href="../login/">Sign In</a></h4>
						</div>
					</div>
				</div>
				<div class="content-main">
					<div class="w3ls-subscribe">
						<h4>CREATE YOUR ACCOUNT</h4>
						<h5>* Indicates Mandatory Fields</h5>
						<form action="index.php" method="post">
							<input type="text" name="fname" placeholder="First Name *" required="">
							<input type="text" name="mname" placeholder="Middle Name">
							<input type="text" name="lname" placeholder="Last Name *" required="">
							<input type="email" name="email" placeholder="Email *" required="">
							<input type="password" name="pass" placeholder="Password *" required="">
							<input type="password" name="cpass" placeholder="Confirm Password *" required="">
							<input type="submit" value="Sign Up" name="submit">
						</form>
					</div>
				</div>
				<div class="clear"> </div>
			</div>
			<div class="wthree_footer_copy">
				<p>© 2018 Transcript Guru Signup Form. All rights reserved 
			</div>
		</div>
	</div>
</div>

</body>
</html>


<?php
if(isset($_POST['submit']))
{
  $fname = protect(h($_POST['fname']));
  $mname = protect(h($_POST['mname']));
  $lname = protect(h($_POST['lname']));
  $phone = protect(h($_POST['phone']));
  $email = protect(h($_POST['email']));
  $pass = hash_pass(protect(h($_POST['pass'])));
  $cpass = hash_pass(protect(h($_POST['cpass'])));
  $confirm_code = hash_pass(protect(h(rand())));

  if($pass == $cpass)
  {
    $fetch_query = $con->query("SELECT * from signup where email = '".$email."'");
    if (mysqli_num_rows($fetch_query)>0) 
    {
     echo "<script>alert('user already exists');</script>";
    }
    else
    {
        require("../PHPMailer/src/PHPMailer.php");
        require("../PHPMailer/src/SMTP.php");
        require("../PHPMailer/src/Exception.php");
        $message = '<head>
  <title></title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
<style type="text/css">
  #outlook a { padding: 0; }
  .ReadMsgBody { width: 100%; }
  .ExternalClass { width: 100%; }
  .ExternalClass * { line-height:100%; }
  body { margin: 0; padding: 0; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; 
       font-family: \'Lato\', sans-serif;}
  table, td { border-collapse:collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; }
  img { border: 0; height: auto; line-height: 100%; outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; }
  p { display: block; margin: 13px 0; }
</style>
<style type="text/css">
  @media only screen and (max-width:480px) {
    @-ms-viewport { width:320px; }
    @viewport { width:320px; }
  }
</style>
<style type="text/css">
  @media only screen and (min-width:480px) {
    .mj-column-per-100, * [aria-labelledby="mj-column-per-100"] { width:100%!important; }
.mj-column-per-80, * [aria-labelledby="mj-column-per-80"] { width:80%!important; }
.mj-column-per-30, * [aria-labelledby="mj-column-per-30"] { width:30%!important; }
.mj-column-per-70, * [aria-labelledby="mj-column-per-70"] { width:70%!important; }
  }
</style>
</head>
<body style="background: #E3E5E7;">
  <div style="background-color:#E3E5E7;">
    <div style="margin:0 auto;max-width:600px;background:white;"><table cellpadding="0" cellspacing="0" style="font-size:0px;width:100%;background:white;" align="center" border="0"><tbody><tr></tr></tbody></table></div>
      <div style="margin:0 auto;max-width:600px;background:#222228;"><table cellpadding="0" cellspacing="0" style="font-size:0px;width:100%;background:#222228;" align="center" border="0"><tbody><tr><td style="text-align:center;vertical-align:top;font-size:0px;padding:20px 0px;">
        <div aria-labelledby="mj-column-per-80" class="mj-column-per-80" style="vertical-align:top;display:inline-block;font-size:13px;text-align:left;width:100%;"><table cellpadding="0" cellspacing="0" style="vertical-align:top;" width="100%" border="0"><tbody><tr><td style="word-break:break-word;font-size:0px;padding:10px 25px;padding-top:30px;" align="center"><table cellpadding="0" cellspacing="0" style="border-collapse:collapse;border-spacing:0px;" align="center" border="0"><tbody><tr><td style="width:80px;"><img alt="Zero To Launch" title="" height="auto" src="https://cdn.auth0.com/website/emails/product/top-verify.png" style="border:none;border-radius:;display:block;outline:none;text-decoration:none;width:100%;height:auto;" width="80"></td></tr></tbody></table></td></tr><tr><td style="word-break:break-word;font-size:0px;padding:0px 20px 0px 20px;" align="center"><div style="cursor:auto;color:white;font-family:\'Avenir Next\', Avenir, sans-serif;font-size:32px;line-height:60ps;">
            Verify Your Account
        </div></td></tr></tbody></table></div>
            </td></tr></tbody></table></div>
              <div style="margin:0 auto;max-width:600px;background:white;"><table cellpadding="0" cellspacing="0" style="font-size:0px;width:100%;background:white;" align="center" border="0"><tbody><tr><td style="text-align:center;vertical-align:top;font-size:0px;padding:40px 25px 0px;">
                <div aria-labelledby="mj-column-per-100" class="mj-column-per-100" style="vertical-align:top;display:inline-block;font-size:13px;text-align:left;width:100%;"><table cellpadding="0" cellspacing="0" width="100%" border="0"><tbody><tr><td style="word-break:break-word;font-size:0px;padding:0px 0px 25px;" align="left"><div style="cursor:auto;color:#222228;font-family: \'Lato\', sans-serif;font-size:18px;font-weight:500;line-height:30px;">
                  Your Account Information
                </div></td></tr></tbody></table>
              </div>
              <div aria-labelledby="mj-column-per-30" class="mj-column-per-30" style="vertical-align:top;display:inline-block;font-size:13px;text-align:left;width:100%;"><table cellpadding="0" cellspacing="0" width="100%" border="0"><tbody><tr><td style="word-break:break-word;font-size:0px;padding:0px 0px 10px;" align="left"><div style="cursor:auto;color:#222228;font-family: \'Lato\', sans-serif;font-size:16px;line-height:30px;">
            <strong style="font-weight: 500; white-space: nowrap;">Account</strong>
          </div></td></tr></tbody></table></div>
            <div aria-labelledby="mj-column-per-70" class="mj-column-per-70" style="vertical-align:top;display:inline-block;font-size:13px;text-align:left;width:100%;"><table cellpadding="0" cellspacing="0" width="100%" border="0"><tbody><tr><td style="word-break:break-word;font-size:0px;padding:0px 0px 10px;" align="left"><div style="cursor:auto;color:#222228;font-family: \'Lato\', sans-serif;font-size:16px;line-height:30px;">
            '.$email.'
          </div></td></tr></tbody></table></div>
          <div aria-labelledby="mj-column-per-30" class="mj-column-per-30" style="vertical-align:top;display:inline-block;font-size:13px;text-align:left;width:100%;"><table cellpadding="0" cellspacing="0" width="100%" border="0"><tbody><tr><td style="word-break:break-word;font-size:0px;padding:0px 0px 10px;" align="left"></td></tr></tbody></table></div>
          <div aria-labelledby="mj-column-per-70" class="mj-column-per-70" style="vertical-align:top;display:inline-block;font-size:13px;text-align:left;width:100%;"><table cellpadding="0" cellspacing="0" width="100%" border="0"><tbody><tr><td style="word-break:break-word;font-size:0px;padding:0px 0px 25px;" align="left"></td></tr></tbody></table></div>
          </td></tr></tbody></table></div>
          <div style="margin:0 auto;max-width:600px;background:white;"><table cellpadding="0" cellspacing="0" style="font-size:0px;width:100%;background:white;" align="center" border="0"><tbody><tr><td style="text-align:center;vertical-align:top;font-size:0px;padding:0px 30px;">
          <p style="font-size:1px;margin:0 auto;border-top:1px solid #E3E5E7;width:100%;"></p>
          </td></tr></tbody></table></div>
          <div style="margin:0 auto;max-width:600px;background:white;"><table cellpadding="0" cellspacing="0" style="font-size:0px;width:100%;background:white;" align="center" border="0"><tbody><tr><td style="text-align:center;vertical-align:top;font-size:0px;padding:20px 0px;">
          <div aria-labelledby="mj-column-per-100" class="mj-column-per-100" style="vertical-align:top;display:inline-block;font-size:13px;text-align:left;width:100%;"><table cellpadding="0" cellspacing="0" width="100%" border="0"><tbody><tr><td style="word-break:break-word;font-size:0px;padding:10px 25px;" align="center"><table cellpadding="0" cellspacing="0" align="center" border="0"><tbody><tr><td style="border-radius:3px;color:white;cursor:auto;" align="center" valign="middle" bgcolor="#63C6AE"><a href="http://localhost/trans/login/verifyemail.php?username='.$email.'&code='.$confirm_code.'" style="display:inline-block;text-decoration:none;background:#63C6AE;border-radius:3px;color:white;font-family:\'Avenir Next\', Avenir, sans-serif;font-size:14px;font-weight:500;line-height:35px;padding:10px 25px;margin:0px;" target="_blank">
            VERIFY YOUR ACCOUNT
          </a></td></tr></tbody></table></td></tr></tbody></table></div>
              </td></tr></tbody></table></div>
              <div style="margin:0 auto;max-width:600px;background:white;"><table cellpadding="0" cellspacing="0" style="font-size:0px;width:100%;background:white;" align="center" border="0"><tbody><tr><td style="text-align:center;vertical-align:top;font-size:0px;padding:20px 0px;">
              <div aria-labelledby="mj-column-per-100" class="mj-column-per-100" style="vertical-align:top;display:inline-block;font-size:13px;text-align:left;width:100%;"><table cellpadding="0" cellspacing="0" style="vertical-align:top;" width="100%" border="0"><tbody><tr><td style="word-break:break-word;font-size:0px;padding:0px 25px 15px;" align="left"><div style="cursor:auto;color:#222228;font-family: \'Lato\', sans-serif;font-size:16px;line-height:30px;">
            If you are having any issues with your account, please don\'t hesitate to contact us by replying to this mail.
            <br>Thanks!
          </div></td></tr></tbody></table></div>
          </td></tr></tbody></table></div>
          <div style="margin:0 auto;max-width:600px;background:#F5F7F9;"><table cellpadding="0" cellspacing="0" style="font-size:0px;width:100%;background:#F5F7F9;" align="center" border="0"><tbody><tr><td style="text-align:center;vertical-align:top;font-size:0px;padding:20px 0px;">
          <div aria-labelledby="mj-column-per-100" class="mj-column-per-100" style="vertical-align:top;display:inline-block;font-size:13px;text-align:left;width:100%;"><table cellpadding="0" cellspacing="0" style="vertical-align:top;" width="100%" border="0"><tbody><tr><td style="word-break:break-word;font-size:0px;padding:0px 20px;" align="center"><div style="cursor:auto;color:#222228;font-family:\'Avenir Next\', Avenir, sans-serif;font-size:13px;line-height:20px;">
            You’re receiving this email because you have an account in TranscriptsGuru.
            If you are not sure why you’re receiving this, please contact us.
          </div></td></tr></tbody></table></div>
          </td></tr></tbody></table></div>
          <div></div></div>
<img src="https://mandrillapp.com/track/open.php?u=9812467&amp;id=bca57efeee894396adad890ad5feefe1" height="1" width="1">


</body>';
        $mail =  new PHPMailer\PHPMailer\PHPMailer();
        $mail->isSmtp();
        $mail ->SMTPDebug = 0;
        $mail ->SMTPAuth = true;
        $mail ->SMTPSecure = 'tls';
        $mail ->Host = "smtp.gmail.com";
        $mail ->Port = 587;
        $mail ->IsHTML(true);
        $mail ->Username = "josephwatson1026@gmail.com";
        $mail ->Password = "watson10269577";
        $mail ->SetFrom("josephwatson1026@gmail.com");
        $mail ->Subject = "Activation";
        $mail ->Body = $message;
        $mail ->AddAddress($email);

        if(!$mail->send())
        {
          echo "<script>alert('Mail Not sent Sorry for the inconvenience  ');</script>";
        }
        else 
        {
          $insert_query = $con->query("INSERT into signup (fname,lname,mname,phone_no,email,password,confirmed,confirm_code) values('$fname','$lname','$mname','$phone','$email','$pass','0','$confirm_code')");
      
          echo "<script>alert('Verify your Email to activate your account');
              window.location.href='../';
        </script>";

        }


      }

    }
  else
  {
    echo "<script>alert('password and Confirm password did not match');</script>";
  }
}

?>


