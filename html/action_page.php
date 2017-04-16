<html>
<style>
#ex4 {
	width: 800px;
	margin: 0 auto;
}

img {
	margin: 20px;
	border: 5px solid #eee;
	-webkit-box-shadow: 4px 4px 4px rgba(0,0,0,0.2);
	-moz-box-shadow: 4px 4px 4px rgba(0,0,0,0.2);
	box-shadow: 4px 4px 4px rgba(0,0,0,0.2);
	-webkit-transition: all 0.5s ease-out;
	-moz-transition: all 0.5s ease;
	-o-transition: all 0.5s ease;
}

img:hover {
	-webkit-transform: rotate(-7deg);
	-moz-transform: rotate(-7deg);
	-o-transform: rotate(-7deg);
} 
</style>
<body background="action_page.jpg">
<center>
<h1><b>Welcome</b></h1> 
<?php
if($_POST["Waist"] > "36" or $_POST["Bust"] > "44" or $_POST["Hips"] > 44)
{
	echo "Your Body Shape is Heavy";	
	?>
<br> 
<br>

<img src="womanOval.jpg"><br><br><br><br><br><br><br>
<h2> Tops for you</h2>
<a target="_blank" href="http://www.amazon.in/dp/B01MXL5NL8/ref=sr_1_sc_1?ie=UTF8&qid=1492314938&sr=8-1-spell&keywords=squared+neck+top">
<img src="img101.jpg"></a><br><br>
<b> 1.) Square or scoop neck button downs.<br><br><br><br>
<a target="_blank" href="http://www.faballey.com/belted-lace-peplum-top-blush-54?utm_source=Google&utm_medium=CPC&utm_term=General&utm_content=None&utm_campaign=PLA_Tops&gclid=Cj0KEQjwicfHBRCh6KaMp4-asKgBEiQA8GH2x86Obj8MMUbHvg3olg0LanMQvABVjclWvemKBCyJp9oaAv7X8P8HAQ">
<img src="img102.jpg"></a>
<br><br>
<b> 2.) Tops with belted waists.<br><br><br><br>
<a target="_blank" href="http://www.amazon.in/Jaipurkurti-Womens-Tunic-Top-JK2687_Multicolor_X-Large/dp/B01H59HX9E/ref=sr_1_1?ie=UTF8&qid=1492313233&sr=8-1&keywords=tailored+tunic+style+tops">
<img src="img103.jpg"></a><br><br>
<b> 3.) Tailored tunic type tops.<br><br><br><br>
<a target="_blank" href="http://www.amazon.in/RARE-Green-Sleeveless-Georgette-women/dp/B01BHWTIZM/ref=sr_1_8?ie=UTF8&qid=1492309004&sr=8-8&keywords=Wrap-style+tops">
<img src="img104.jpg"></a>
<br><br>
<b> 4.) Wrap Tops.<br><br><br><br>

<br><br><br><br><br>
<h2> Bottoms for you </h2>
<a target="_blank" href="http://www.amazon.in/s/ref=nb_sb_ss_c_1_12?url=search-alias%3Daps&field-keywords=wide+leg+jeans+for+women&sprefix=wide+leg+jea%2Caps%2C306&crid=I8PAH15W3F65">
<img src="img201.jpg"></a><br><br>
<b> 1.) Wide leg jeans or Cargo pants.<br><br><br><br>
<a target="_blank" href="http://www.amazon.in/s/ref=nb_sb_noss?url=search-alias%3Daps&field-keywords=wide+leg+flowing+pants&rh=i%3Aaps%2Ck%3Awide+leg+flowing+pants">
<img src="img202.jpg"></a><br><br>
<b> 2.) Wide leg flowing pants.<br><br><br><br>
<a target="_blank" href="http://www.amazon.in/s/ref=nb_sb_ss_c_1_6?url=search-alias%3Daps&field-keywords=plazzo+pants+women&sprefix=plazzo%2Caps%2C303&crid=2EMU4PIEFKTPK">
<img src="img203.jpg"></a><br><br>
<b> 3.) Fuller flowing skirts.<br><br><br><br>

<?php
} 
else if($_POST["Bust"] <= $_POST["Waist"]+2 and $_POST["Bust"] >= $_POST["Waist"]-2 )
{
	echo "Your Body Shape is Straight";
?>
<br> 
<br>

<img src="womanStraight.jpg"><br><br><br><br><br><br><br>
<h2> Tops for you</h2>
<a target="_blank" href="http://www.faballey.com/belted-lace-peplum-top-blush-54?utm_source=Google&utm_medium=CPC&utm_term=General&utm_content=None&utm_campaign=PLA_Tops&gclid=Cj0KEQjwicfHBRCh6KaMp4-asKgBEiQA8GH2x86Obj8MMUbHvg3olg0LanMQvABVjclWvemKBCyJp9oaAv7X8P8HAQ">
<img src="img1.jpg"></a><br><br>
<b> 1.) Tops with belted waists.<br><br><br><br>
<a target="_blank" href="https://www.amazon.com/s/ref=sr_blf_1_18?fst=fsl%3AHaola&rh=i%3Afashion-womens-clothing%2Cn%3A2368343011%2Cp_n_size_browse-vebin%3A2343351011%2Cp_89%3AHaola&ie=UTF8&qid=1492305235">
<img src="img2.jpg"></a>
<br><br>
<b> 2.) Off the shoulder, boat-neck tops, wide V or U necks.<br><br><br><br>
<a target="_blank" href="https://www.aliexpress.com/item/Plus-Size-Simple-Flutter-Sleeve-Wrap-Crop-Top-Sexy-V-Neckline-Casual-Fit-Women-Beach-Top/32786927202.html?spm=2114.01010208.3.23.H7WpZb&ws_ab_test=searchweb0_0,searchweb201602_5_10152_10065_10151_10068_5090016_10084_10083_10080_10082_10081_10110_10136_10137_10175_10111_10060_10138_10112_10113_10062_10156_10114_10056_10055_10054_10059_10099_10078_10079_10103_10073_10102_10096_10070_10148_10123_10147_10052_10053_10124_10142_10107_10050_10143_10051,searchweb201603_1,afswitch_1,ppcSwitch_5&btsid=dae265b7-714e-48f8-a984-b8ed0502f1ff&algo_expid=53d2c174-fe35-4d42-9b23-5eb5a20b947b-2&algo_pvid=53d2c174-fe35-4d42-9b23-5eb5a20b947b">
<img src="img3.jpg"></a><br><br>
<b> 3.) Tops with belted waists.<br><br><br><br>
<a target="_blank" href="https://www.aliexpress.com/item/Flutter-Sleeves-Chiffon-Top-For-Women-Spring-Summer-2017-New-Fashion-Solid-Color-Loose-Office-Lady/32807291468.html?spm=2114.01010208.3.32.H7WpZb&ws_ab_test=searchweb0_0,searchweb201602_5_10152_10065_10151_10068_5090016_10084_10083_10080_10082_10081_10110_10136_10137_10175_10111_10060_10138_10112_10113_10062_10156_10114_10056_10055_10054_10059_10099_10078_10079_10103_10073_10102_10096_10070_10148_10123_10147_10052_10053_10124_10142_10107_10050_10143_10051,searchweb201603_1,afswitch_1,ppcSwitch_5&btsid=dae265b7-714e-48f8-a984-b8ed0502f1ff&algo_expid=53d2c174-fe35-4d42-9b23-5eb5a20b947b-3&algo_pvid=53d2c174-fe35-4d42-9b23-5eb5a20b947b">
<img src="img4.jpg"></a>
<br><br>
<b> 4.) Structured shoulders, princess or flutter sleeves.<br><br><br><br>
<a target="_blank" href="https://www.therealreal.com/products/women/clothing/tops/robert-rodriguez-embellished-one-shoulder-blouse?sid=ncvyyf&cvosrc=affiliate.shareasale.595441">
<img src="img5.jpg"></a><br><br>
<b> 5.) Embellishments around the bust and shoulders.<br><br><br><br>
<br><br><br><br><br>
<h2> Bottoms for you </h2>
<a target="_blank" href="http://www.jabong.com/next-Olive-Patch-Wide-Leg-Trousers-2856259.html?pos=5">
<img src="img21.jpg"></a><br><br>
<b> 1.) Cargo or safari pants with pronounced hip and rear pockets.<br><br><br><br>
<a target="_blank" href="https://www.shopstyle.com/action/loadRetailerProductPage?device=desktop&&extra=%7B%22page.name%22:%22browse+products%22,%22page.fromUrl%22:%22%252Fbrowse%253Ffts%253Dfront%252Bflap%252Bpocket%252Bjeans%22%7D&id=632195088&project=ng2.28:true&&version=ng2.28:true">
<img src="img22.jpg"></a><br><br>
<b> 2.) Details such as whiskering, embellished pockets & flap pockets.<br><br><br><br>
<a target="_blank" href="http://www.ebay.com/itm/Fashion-Women-Girl-Chiffon-Pleated-Retro-Elastic-Waist-Short-Mini-Skirt-Dress-/311329149964?var=&hash=item487ca9d40c%3Am%3AmXcOi39glRrD-rzq_j2IZkg">
<img src="img23.jpg"></a><br><br>
<b> 3.) Full, tiered or bubble skirts.<br><br><br><br>
<a target="_blank" href="http://www.amazon.in/DeeVineeTi-Floral-Womens-Around-FreeSize/dp/B06XPHD2YW/ref=sr_1_fkmr2_2?ie=UTF8&qid=1492308205&sr=8-2-fkmr2&keywords=Mid+to+low-rise+waists+skirts">
<img src="img24.jpg"></a><br><br>
<b> 4.) Mid to low-rise waists with wide waistband<br><br><br><br>
    
<?php
}
else if($_POST["Bust"] > $_POST["Hips"]+3)
{
	echo "Your Body Shape is Apple/ Inverted Triangular";
?>
<br> 
	<img src="apple.jpg"><br><br><br><br><br>
	<h2> Tops for you</h2>
<a target="_blank" href="http://www.jamesperse.com/women/apparel/sweaters/womens-ls-v-neck-sweater-wom3741?color=19057&utm_content=10&siteID=J84DHJLQkR4-1qh7mNqOR4dU_hfnym.CxQ">
<img src="img11.jpg"></a><br><br>
<b> 1.) Narrow v-necks.
<br><br><br><br>
<a target="_blank" href="http://www.neimanmarcus.com/Eileen-Fisher-Half-Sleeve-Silk-Jersey-Tunic/prod196750170/p.prod?ecid=NMAF__ShopStyle+(POPSUGAR)">
<img src="img12.jpg"></a><br><br>
<b> 2.) Tops with banding or nipping at the waist.<br><br><br><br>
<a target="_blank" href="http://www.amazon.in/RARE-Green-Sleeveless-Georgette-women/dp/B01BHWTIZM/ref=sr_1_8?ie=UTF8&qid=1492309004&sr=8-8&keywords=Wrap-style+tops">
<img src="img13.jpg"></a><br><br>
<b> 3.) Wrap-style tops.
<br><br><br><br>
<a target="_blank" href="https://www.amazon.com/LE3NO-Womens-Tailored-Sleeve-Stretch/dp/B00KGI1RWQ">
<img src="img14.jpg"></a><br><br>
<b> 4.) Tailored shirts and jackets.
<br><br><br><br>
<a target="_blank" href="http://www.amazon.in/Mayra-Womens-Top-15T020828-Dark-Blue-Large/dp/B011UURH0E/ref=sr_1_2?ie=UTF8&qid=1492308918&sr=8-2&keywords=dark+coloured+top+for+women">
<img src="img15.jpg"></a><br><br>
<b> 5.) Dark colored tops.<br><br><br><br>
<br><br><br><br><br>
<h2> Bottoms for you </h2>
<a target="_blank" href="http://www.jabong.com/next-Olive-Patch-Wide-Leg-Trousers-2856259.html?pos=5">
<img src="img31.jpg"></a><br><br>
<b> 1.) Cargo or safari pants with pronounced hip and rear pockets.<br><br><br><br>
<a target="_blank" href="http://www.amazon.in/Womens-Boot-Cut-Pants-CR160381-11253-White-WS/dp/B014R5RIZ8/ref=sr_1_1?ie=UTF8&qid=1492309163&sr=8-1&keywords=boot+cut+trousers+for+women">
<img src="img32.jpg"></a><br><br>
<b> 2.) Boot cut or wide legs.<br><br><br><br>
<a target="_blank" href="http://www.amazon.in/Tara-Lifestyle-Pleated-Regular-Skirts/dp/B01G8PTVQY/ref=sr_1_2?ie=UTF8&qid=1492309256&sr=8-2&keywords=a+line+skirts+for+women">
<img src="img34.jpg"></a><br><br>
<b> 3.) Full or A-line skirts.
<br><br><br><br>

<?php
}
else if($_POST["Hips"] > $_POST["Bust"]+3 )
{
	echo "Your Body shape is Pear";?><br><br><br><br><br>
	<img src="womanPear.jpg"><br><br><br><br><br>
	<h2> Tops for you</h2>
<a target="_blank" href="https://www.bloomingdales.com/shop/product/lacademie-the-tie-billowy-blouse?ID=2441570&PartnerID=LINKSHARE&cm_mmc=LINKSHARE-_-n-_-n-_-n&LinkshareID=J84DHJLQkR4-IISlhoEcAU2q9sCwe8QZ5w&PartnerID=LINKSHARE&cm_mmc=LINKSHARE-_-n-_-n-_-n&ranPublisherID=J84DHJLQkR4&ranLinkID=190831428590&ranLinkTypeID=15&pubNAME=ShopStyle+%28POPSUGAR%29">
<img src="img61.jpg"></a><br><br>
<b> 1.) Billowy tops<br><br><br><br>
<a target="_blank" href="http://www.amazon.in/Mayra-Womens-Denim-Shirt-M1608T11593-S/dp/B01N35P2J8/ref=sr_1_1?ie=UTF8&qid=1492309843&sr=8-1&keywords=fit+shirts+women">
<img src="img62.jpg"></a><br><br>
<b> 2.) Shirts with a fitted waist<br><br><br><br>
<a target="_blank" href=""https://www.aliexpress.com/item/Flutter-Sleeves-Chiffon-Top-For-Women-Spring-Summer-2017-New-Fashion-Solid-Color-Loose-Office-Lady/32807291468.html?spm=2114.01010208.3.32.H7WpZb&ws_ab_test=searchweb0_0,searchweb201602_5_10152_10065_10151_10068_5090016_10084_10083_10080_10082_10081_10110_10136_10137_10175_10111_10060_10138_10112_10113_10062_10156_10114_10056_10055_10054_10059_10099_10078_10079_10103_10073_10102_10096_10070_10148_10123_10147_10052_10053_10124_10142_10107_10050_10143_10051,searchweb201603_1,afswitch_1,ppcSwitch_5&btsid=dae265b7-714e-48f8-a984-b8ed0502f1ff&algo_expid=53d2c174-fe35-4d42-9b23-5eb5a20b947b-3&algo_pvid=53d2c174-fe35-4d42-9b23-5eb5a20b947b">
<img src="img63.jpg"></a><br><br>
<b> 3.) Dress shirts with structured or princess shoulders and a darted waist.<br><br><br><br>
<a target="_blank" href="http://www.amazon.in/People-Womens-Wrap-Shirt-P20401355025112-Blue-S/dp/B015ZX2QHG/ref=sr_1_1?ie=UTF8&qid=1492309973&sr=8-1&keywords=wrap+shirts+for+women">
<img src="img64.jpg"></a><br><br>
<b> 4.) Wrap shirts <br><br><br><br>
<a target="_blank" href="http://www.amazon.in/Navy-Structured-Formal-Jacket-_JKW19-NVY-12R/dp/B00SYQNF8Q/ref=sr_1_1?ie=UTF8&qid=1492310052&sr=8-1&keywords=jacket+with+structured+shoulder">
<img src="img65.jpg"></a><br><br>
<b> 5.) Jackets with full or structured shoulders and a nipped-in waist in hip-length. <br><br><br><br>
<br><br><br><br><br>
<h2> Bottoms for you </h2>
<a target="_blank" href="http://www.amazon.in/Tara-Lifestyle-Pleated-Regular-Skirts/dp/B01G8PTVQY/ref=sr_1_2?ie=UTF8&qid=1492309256&sr=8-2&keywords=a+line+skirts+for+women">
<img src="img71.jpg"></a><br><br>
<b> 1.) A-line skirts<br><br><br><br>
<a target="_blank" href="http://www.amazon.in/MansiCollections-White-Gathered-Skirt/dp/B01N6JPE8P/ref=sr_1_6?ie=UTF8&qid=1492310157&sr=8-6&keywords=gathered+skirts">
<img src="img72.jpg"></a><br><br>
<b> 2.) Lightly gathered skirts<br><br><br><br>
<a target="_blank" href="http://www.amazon.in/Skirts-Scarves-Palazzo-Painted-Elephant/dp/B013WX2HZW/ref=sr_1_5?ie=UTF8&qid=1492310213&sr=8-5&keywords=slacks+for+women">
<img src="img73.jpg"></a><br><br>
<b> 3.) Simple, dark colored slacks<br><br><br><br>
<?php
}
else
{
	echo "Your Body Shape is HourGlass";
?>
<br>
	<img src="hourglass.jpg"><br><br><br><br><br>
	<h2> Tops for you</h2>
<a target="_blank" href="http://www.faballey.com/belted-lace-peplum-top-blush-54?utm_source=Google&utm_medium=CPC&utm_term=General&utm_content=None&utm_campaign=PLA_Tops&gclid=Cj0KEQjwicfHBRCh6KaMp4-asKgBEiQA8GH2x86Obj8MMUbHvg3olg0LanMQvABVjclWvemKBCyJp9oaAv7X8P8HAQ">
<img src="img41.jpg"></a><br><br>
<b> 1.) Tops with belted waists.<br><br><br><br>
<a target="_blank" href="http://www.neimanmarcus.com/Eileen-Fisher-Half-Sleeve-Silk-Jersey-Tunic/prod196750170/p.prod?ecid=NMAF__ShopStyle+(POPSUGAR)">
<img src="img42.jpg"></a><br><br>
<b> 2.) Tops with banding or nipping at the waist.<br><br><br><br>
<a target="_blank" href="https://www.shopbop.com/nama-long-sleeve-off-shoulder/vp/v=1/1500939822.htm?currencyCode=GBP">
<img src="img43.jpg"></a><br><br>
<b> 3.) Form-fitting tops.<br><br><br><br>
<a target="_blank" href="http://www.amazon.in/RARE-Green-Sleeveless-Georgette-women/dp/B01BHWTIZM/ref=sr_1_8?ie=UTF8&qid=1492309004&sr=8-8&keywords=Wrap-style+tops">
<img src="img44.jpg"></a><br><br>
<b> 4.) Wrap-style tops.<br><br><br><br>
<a target="_blank" href="https://www.amazon.com/LE3NO-Womens-Tailored-Sleeve-Stretch/dp/B00KGI1RWQ">
<img src="img45.jpg"></a><br><br>
<b> 5.) Tailored shirts and jackets.<br><br><br><br>
<br><br><br><br><br>
<h2> Bottoms for you </h2>
<a target="_blank" href="http://www.amazon.in/My-Swag-Hosiery-Straight-Casual/dp/B06WVYLRHW/ref=sr_1_1?ie=UTF8&qid=1492310615&sr=8-1&keywords=long+pencil+skirts+for+women">
<img src="img51.jpg"></a><br><br>
<b> 1.) High-waisted pants and pencil skirts.<br><br><br><br>
<a target="_blank" href="http://www.amazon.in/Newport-Womens-Skinny-Jeans-270262107-Jeans-LT-BLUE-36-IN-28/dp/B01NCTTGGD/ref=sr_1_3?ie=UTF8&qid=1492310660&sr=8-3&keywords=skinny+jeans+for+women">
<img src="img52.jpg"></a><br><br>
<b> 2.) Skinny jeans and pants paired with a balanced top.<br><br><br><br>
<a target="_blank" href="http://www.amazon.in/People-Womens-Boot-Pants-P20402045634219_Navy_34/dp/B01B7WB71K/ref=sr_1_3?ie=UTF8&qid=1492310701&sr=8-3&keywords=boot+cut+trousers+for+women">
<img src="img53.jpg"></a><br><br>
<b> 3.) Boot cut & straight leg pants.
<br><br><br><br>
<?php
}
?>
</center>
</body>
</html>	

