<?php
error_reporting(0);

include('info.php');

if($aff=='')
{
	$aff= $beli;
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Most Downloaded Books | <?php echo $storeName;?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
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

<body>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

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
            </ul><div style="float:right;margin-right:30px;"><a href="#Download" onclick="Download();" target="_self" class="btn btn-warning" title="DOWNLOAD NOW"><font color="black">DOWNLOAD NOW</font></a></div>
          </div><!--/.nav-collapse --></div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
      <div class="span10 offset1" style="background-color:white; border-radius: 8px; padding: 20px;">
      <!-- Main hero unit for a primary marketing message or call to action -->
      <div class="hero-unit" style="background-color:white;">
        <h1 >Sorry the page you requested does not exist</h1><hr>
		<h3>Most Downloaded Books</h3>
      <div class="row">
	  <?php
do{
	  $xmlfeed = apc_amazon_signed_request( array("Operation"=>"BrowseNodeLookup","BrowseNodeId"=>"1000","ResponseGroup"=>"TopSellers"));
	 $xml_response = bacaHTML($xmlfeed );
$xml = new SimpleXMLElement($xml_response); 
	$items = $xml->BrowseNodes->BrowseNode->TopItemSet->TopItem;
	
	}while(empty($items));
	$n=0;
    foreach($items as $item) {
	$n++;
        $product_asin = $item->ASIN;
        $product_title = $item->Title;
		do {
		$URLa = apc_amazon_signed_request( array("Operation"=>"ItemLookup","IdType"=>"ASIN","ResponseGroup"=>"Images", "ItemId"=>"{$product_asin}"));
		$response = bacaHTML($URLa);
		$xml2 = new SimpleXMLElement($response); 	
		$imagesurl = $xml2->Items->Item->LargeImage->URL;
		}while(empty($imagesurl));
	 ?>
	   
       
						<div style="width: 220px;height: 350px;float: left;padding: 12px 12px 20px;margin-bottom: 20px;position: relative;font-size: 17px;text-align: center; "> 
						
                  <a href="?book=<?php echo $product_asin;?>"  title="<?php echo $product_title;?>"><img src="<?php echo $imagesurl;?>" style="width:185px; height:278px" ></a>
                   <div class="row"><a href="?book=<?php echo $product_asin;?>"title="<?php echo $product_title;?>"> <?php echo $product_title;?></a></div> </div>
<?php
if($n==9)break;	}
?>
      </div><br>
        <div style="width:150px; float:right;">
        <div style="width:50px; float:left;">
	<a href="http://pinterest.com/pin/create/button/?url=<?php echo curPageURL();?>&media=<?php echo $gambar;?>" class="pin-it-button" count-layout="horizontal"><img border="0" src="//assets.pinterest.com/images/PinExt.png" title="Pin It" /></a>
        </div>
        <div class="fb-like" style="float:right;" data-href="<?php echo curPageURL();?>" data-send="false" data-layout="button_count" data-width="100" data-show-faces="false"></div></div>
      </div>
<hr>
      <div class="row">

		<div class="span5">

                  <div class="row">
                  <div class="span2">
					</div>
                  <div class="span5">

                  
                  <div class="row"><div class="span5 "><ul>



				 </ul> </div> </div>                   
                  </div>
                  </div>
		</div>
		<div class="span5">
		 
                </div>
      </div>


      <hr>

      <footer>
        <p align="center">&copy; <?php echo $storeName;?> 2012 | <?php echo date('Y');?> <a href="./dmca.php" target="_blank"   title="DMCA"><font color="black">DMCA</font></a></p>
      </footer>
    </div></div>
    </div> <!-- /container -->

		<div id="larger" class="modal hide fade">
			<div class="modal-header">
				<a class="close" data-dismiss="modal">×</a>
				<h3><?php echo $judul;?></h3>
			</div>
			<div class="modal-body" style="text-aligment: center;">
				<p align="center">
			<img src="<?php echo $gambar;?>"></p>
			
			</div>
			<div class="modal-footer">
			<a href="<?php echo $aff;?>" class="btn btn-warning" title="DOWNLOAD NOW"><font color="black">DOWNLOAD NOW</font></a>
                        <a href="#" class="btn" data-dismiss="modal">Close</a>
                        </div>
		</div>

		<div id="review" class="modal hide fade">
			<div class="modal-header">
				<a class="close" data-dismiss="modal">×</a>
				<h3>Customer Reviews</h3>
			</div>
			<div class="modal-body" style="text-aligment: center;">

			<iframe width="500px" height="400px" frameborder="1" src="<?php echo $review;?>"></iframe>
			</div>
			<div class="modal-footer">
                        <a href="#" class="btn" data-dismiss="modal">Close</a>
                        </div>
		</div>

		<div id="DMCA" class="modal hide fade">
			<div class="modal-header">
				<a class="close" data-dismiss="modal">×</a>
				<h3><?php echo $storeName;?></h3>
			</div>
			<div class="modal-body" style="text-aligment: center;">
			<p>Certain content that appears on this Landing Page comes from Amazon Services LLC. This content prvoided 'as is' and is subject to change or removal at any time.</p>
			<p>This Landing Page serve the products as Amazon Associates.</p>
			<p>Product prices and availability are accurate and served realtime from Amazon Services. Any price and availability information displayed on Amazon.com at the time of purchase will apply to the purchase of this product.</p>
			</div>
			<div class="modal-footer">
                        <a href="#" class="btn" data-dismiss="modal">Close</a>
                        </div>
		</div> 

		<div id="privacy" class="modal hide fade">
			<div class="modal-header">
				<a class="close" data-dismiss="modal">×</a>
				<h3>Privacy Policy</h3>
			</div>
			<div class="modal-body" style="text-aligment: center;">
			<p>We are committed to protecting your privacy. We will only use the information we collect about you lawfully (in accordance with the Data Protection Act 1998). Please read on if you wish to learn more about our privacy policy.</p>
<h4>What Information do we collect?</h4>

<p>We keep only the information about how you have navigated our website. We temporarily keep information on the products you have added to your basket. We do not keep any personal information that would identify you in the future. When processing your order at Amazon there are other details that will be required - see Amazon Privacy Policy for full details.</p>

<p>We also record usage data such as the pages visited. This information is completely anonymous.</p>

<p>Any information we hold is secured in accordance with our internal security policy.</p>

<h4>Do we use cookies?</h4>

<p>We use cookies to enable you to hold the content of your shopping basket between visits and to record anonymous traffic data. We do not store any personally identifying information in these cookies.</p>

<h4>Will we sell your information?</h4>

<p>We does not sell any information about their customers; as simple as that. We will not forward your details on to any third party at any time.</p>
			</div>
			<div class="modal-footer">
                        <a href="#" class="btn" data-dismiss="modal">Close</a>
                        </div>
		</div>






    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.0.4/js/bootstrap.min.js"></script>
	<script src="http://twitter.github.com/bootstrap/1.4.0/bootstrap-popover.js"></script>
	<script type="text/javascript" src="//assets.pinterest.com/js/pinit.js"></script>
<script type="text/javascript" >


		function Download() {
	   location.href='<?php echo $aff; ?>';
	}
</script>
  </body>
</html>

