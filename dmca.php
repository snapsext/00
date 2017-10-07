<?php
error_reporting(0);
include('info.php');
?>
<!DOCTYPE html>
<html lang="en-US">
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<head>
<meta charset="UTF-8">
<title>DMCA</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="style.css" rel="stylesheet">
    <style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
	background-color: #E1E6E8;
	background: top center url('books.jpg') repeat #414852;
      }
    </style>
    <link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.0.4/css/bootstrap-responsive.css" rel="stylesheet">
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="../assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">

<script type="text/javascript">
        (function() {
            $("[rel=popover]").popover();
        })();
    </script>

  </head>
<
<body>

<div id="fb-root"></div>

    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container"><div class="span9 offset1">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#"><?php echo $storeName;?></a>
          <div class="nav-collapse">
            <ul class="nav">
            <!--- <li><a data-toggle="modal" href="#DMCA">DMCA</a></li>
              <li><a data-toggle="modal" href="#privacy">Privacy Policy</a></li>--->
            </ul><div style="float:right;margin-right:30px;"><a href="<?php echo $aff;?>" target="_self" class="btn btn-warning" title="DOWNLOAD NOW"><font color="black">DOWNLOAD NOW</font></a></div>
          </div><!--/.nav-collapse --></div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
      <div class="span10 offset1" style="background-color:white; border-radius: 8px; padding: 20px;">
      <!-- Main hero unit for a primary marketing message or call to action -->
      <div class="hero-unit" style="background-color:white;">
	  <h1 > DMCA</h1><hr>
            <div class="clear"></div>
				<div class="entry-content" itemprop="text">
				<p>
				<?php echo $storeName ;?> respects the intellectual property of others. <a title="<?php echo $storeName ;?>" href="./"><?php echo $storeName ;?></a> takes matters of Intellectual Property very seriously and is committed to meeting the needs of content owners while helping them manage publication of their content online.
				</p>
				

				<p>
				If you believe that your copyrighted work has been copied in a way that constitutes copyright infringement and is accessible on this site, you may notify our copyright agent, as set forth in the Digital Millennium Copyright Act of 1998 (DMCA). For your complaint to be valid under the DMCA, you must provide the following information when providing notice of the claimed copyright infringement:
				</p>
				<ul>
					<li>A physical or electronic signature of a person authorized to act on behalf of the copyright owner Identification of the copyrighted work claimed to have been infringed</li>
					<li>Identification of the material that is claimed to be infringing or to be the subject of the infringing activity and that is to be removed</li>
					<li>Information reasonably sufficient to permit the service provider to contact the complaining party, such as an address, telephone number, and, if available, an electronic mail address</li>
					<li>A statement that the complaining party “in good faith believes that use of the material in the manner complained of is not authorized by the copyright owner, its agent, or law”</li>
					<li>A statement that the “information in the notification is accurate”, and “under penalty of perjury, the complaining party is authorized to act on behalf of the owner of an exclusive right that is allegedly infringed”</li>
				</ul>
				<p>
				The above information must be submitted as a written, faxed or emailed notification to the following Designated Agent:</p>
				Attn: DMCA Office<br />
                                <p>support@ezbooks.site</p>
				<?php echo $contact_url ;?><br />
				<p>
				WE CAUTION YOU THAT UNDER FEDERAL LAW, IF YOU KNOWINGLY MISREPRESENT THAT ONLINE MATERIAL IS INFRINGING, YOU MAY BE SUBJECT TO HEAVY CIVIL PENALTIES. THESE INCLUDE MONETARY DAMAGES, COURT COSTS, AND ATTORNEYS’ FEES INCURRED BY US, BY ANY COPYRIGHT OWNER, OR BY ANY COPYRIGHT OWNER’S LICENSEE THAT IS INJURED AS A RESULT OF OUR RELYING UPON YOUR MISREPRESENTATION. YOU MAY ALSO BE SUBJECT TO CRIMINAL PROSECUTION FOR PERJURY.
				</p>
				<p>
				This information should not be construed as legal advice, for further details on the information required for valid DMCA notifications, see 17 U.S.C. 512(c)(3).
				</p>
				</div> 
		</div>
		      <hr>

      <footer>
        <p align="center">&copy; <?php echo $storeName;?> 2012 | <?php echo date('Y');?></p>
      </footer>
<?php echo $codetracker;?>
</body>
</html>