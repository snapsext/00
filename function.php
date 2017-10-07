<?php
error_reporting(0);
$vb=0;
do
{
	$vb++;
	$URLa = apc_amazon_signed_request( array("Operation"=>"ItemLookup","IdType"=>"ASIN","ResponseGroup"=>"Large", "ItemId"=>"{$asin}"));
	//var_dump($URLa);exit();
	$xml_response = bacaHTML($URLa );

	$xml = new SimpleXMLElement($xml_response); 

	$item = $xml->Items->Item;
	if($vb==20)die('<META HTTP-EQUIV="refresh" content="0;URL=./404">');
	}while(empty($item));


	$product = $item->ItemAttributes;
	$offer_summary = $item->OfferSummary;
	$offer = $item->Offers->Offer; // array
	$offer_listing = $offer->OfferListing;
	$customer_review = $item->CustomerReviews;
	$similar_product = $item->SimilarProducts->SimilarProduct; // Array
	$product_asin = $item->ASIN;
	$product_url = $item->DetailPageURL;
	$product_salesrank = $item->SalesRank;
	$product_small_image = $item->SmallImage->URL;
	$product_medium_image = $item->MediumImage->URL;
	$product_large_image = $item->LargeImage->URL;
	$product_imageset = $item->ImageSets->ImageSet; // array
	$product_title = $product->Title;
	$product_group = $product->ProductGroup;
	$product_model = $product->Model;
	$product_warranty = $product->Warranty;
	$product_feature = $product->Feature; //array
	$product_brand = $product->Brand;
	$product_color = $product->Color;
	$product_list_price = $product->ListPrice->FormattedPrice;
	$product_list_price_amount = (int)$product->ListPrice->Amount;
	$product_new_amount = $offer_summary->TotalNew;
	$product_used_amount = $offer_summary->TotalUsed;
	$product_collectible = $offer_summary->TotalCollectible;
	$product_refurbished = $offer_summary->TotalRefurbished;	
	$product_lowest_price = $offer_summary->LowestNewPrice->FormattedPrice;
	$product_lowest_price_amount =(int) $offer_summary->LowestNewPrice->Amount;
	$product_editorial_review = $item->EditorialReviews->EditorialReview; // array
	$product_customer_review = $customer_review->IFrameURL; // must added to iframe

$judul =  $product_title;
$semilar= $similar_product;
	$konten = ' <strong> ' . $product_title . '</strong>.';
	$konten1 = 'This awesome book ready for read or download, you can get this book now for <strong> FREE </strong>.';
if(!empty($product_large_image) ||$product_large_image !='' ){
$gambar = $product_large_image;
}else{
	$gambar ='noimage.jpg';
}
if(empty($product_feature[0]))
{
	$feat ='';
}
else
{
	$feat = $product_feature[0] . '<br>' . $product_feature[1] . '<br>' . $product_feature[2] . '<br>' . $product_feature[3] ;
}
if(!empty($product_editorial_review[0]->Content))
{
$item_edit	= substr(strip_tags($product_editorial_review[0]->Content), 0, 600);
}
else
{
	$item_edit='';
}

if ($item_edit != '') 
{
	$keterangan = str_replace('Amazon.com Review','',$item_edit);
}
else 
{
	$keterangan = 'Currently no descriptions for this product and will be added soon.';
}
?>