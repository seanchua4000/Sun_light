<?php
require 'core/init.php';
Session::put(Config::get('session/form_name'), md5(uniqid()));
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>

		<title>UNITOP</title>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link rel="stylesheet" href="css/global.css" type="text/css" media="screen">
		<link rel="stylesheet" href="css/datepicker.css" type="text/css" media="screen">
		
		<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
		
		<!--QUERY LIST-->
		<script type="text/javascript" src="javascript/hotel_locations.js"></script>
		
	</head>
	
<body>
	<header>
		<div class="topHeader">
			<div class="container">
				<div class="HeaderleftFloat">
					<a href="#">Join Free</a>
					<span></span>
					<a href="#">Sign In</a>
					
					<select>
						<option>Dumaguete</option>
						<option>Antique</option>
						<option>Tarlac</option>
						<option>Ozamiz</option>
						<option>Cagayan de Oro</option>
						<option>Iloilo</option>
						<option>Surigao</option>
						<option>Palawan</option>
						<option>Tuguegarao</option>
						<option>Sta. Mesa</option>
						<option>Sta. Rosa</option>
					</select>
					
					<a href="#">Facebook Page</a>
				</div>
				
				<div class="HeaderrightFloat">
					<div class="headerMethod">
						<a href="#">Payment Method</a>
						<a href="#">Delivery Method</a>
					</div>
					
					<span></span>
					
					<div class="headerAccountContact_container">
						<div class="headerAccount">
							<p>My Account</p>
							<ul>
								<li>My Order</li>
								<li>My Wishlist</li>
								<li>My Comments</li>
							</ul>
						</div>
						
						<span></span>
						
						<div class="headerContact">
							<p>Contact Us</p>
						</div>
					</div>
					
					<div class="headerBookmark">
						<p>Bookmark Me!</p>
					</div>
				</div>
				
				<div class="clear"></div>
			</div>
		</div>
		
		<div class="container">
			<div class="headerBanner">
				<a href=""><img src="images/banner.jpg"></a>
			</div>
			
			<div class="midHeader">
				<div class="logoContainer_Header">
					<h1>Dumaguete</h1>
				</div>
				
				<div class="searchLinkContainer_Header">
					<div class="searchbar_ContainerHeader">
						<div class="searchHeader_choice">
							<p>Products</p>
						</div>
						
						<div class="searchHeader_input">
							<input type="test" placeholder="What are you looking for..">
						</div>
						
						<div class="searchHeader_button">
							<p>Search</p>
						</div>
						
						<div class="clear"></div>
					</div>
					
					<div class="searchLower_headerLinks">
						<p>New Arrival</p>
					</div>
				</div>
				
				<div class="cartContainer_Header">
					<p>Cart (0)</p>
				</div>
				
				<div class="clear"></div>
			</div>
		</div>
	</header>
	
	<div class="container">
		<div class="navigationContainer">
			<div class="Categorylink_Container">
				<p>All Categories</p>
			</div>
			
			<div class="Upperlink_Container">
				<ul>
					<li>Home</li>
					<li>Supermarket</li>
					<li>Household</li>
					<li>Cosmetics</li>
					<li>Unitech</li>
					<li>Wholesale</li>
					<li>Survey</li>
				</ul>
			</div>
			
			<div class="clear"></div>
		</div>
		
		<div class="promo_WebBanner">
			<img src="images/promo/unitop-sponsor-banner.jpg">
		</div>
		
		<div class="promo_upperContent">
			
			
			<!--PROMO_HP-->
			<div id="promo_Ucon1" class="">
				<div class="promoLeftupper_Content">
					<div class="promoDisplay_Pic">
					</div>
					
					<div class="promoThumbDisplay_Pic">
						<div class="promoNav_Buttons">
							<div class="promoNav_Left"></div>
							<div class="promoNav_Right"></div>
						</div>
						
						<ul>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
						</ul>
					</div>
				</div>
				
				<div class="promoRightupper_Content">
					<div class="promoTitle_Container">
						<h1>SUNLIGHT GUEST HOTEL INC.</h1>
					</div>
					
					<div class="promoRoomLoc">
						<div class="promoLocation">
							<h3>HOTEL LOCATION</h3>
							<select id="select_PromoLocP">
								<option value="1" selected>Puerto Princesa City, Palawan</option>
								<option value="2">Sta. Rosa, Laguna</option>
							</select>
						</div>
					
						<div class="promoQuantity">
							<h3>HOTEL ROOM</h3>
							<select id="select_PalRoom">
								<option value="1">Superior</option>
								<option value="2">Deluxe</option>
								<option value="3">Penthouse</option>
							</select>
						</div>
						
						<div class="clear"></div>
					</div>
				
					<div class="promoFprice">
						<h1 class="promoDprice">P3800</h1>
						<span class="promo_Rprice">
							<h3>HOTEL ROOM</h3>
							<h3>PRICE</h3>
						</span>
					</div>
					
					<div class="promoSelectBuy">
						<a class="prmo_resbtn" href="#promo_reservation"><div class="promoBuy">
							<h1>RESERVE NOW</h1>
						</div>
					</a></div>
					
					
				</div>
				
				<div class="clear"></div>
			
			</div>
			<!--END_PROMO_HP-->
			
			<!--PROMO_HL-->
			<div id="promo_Ucon2" class="promohide">
				<div class="promoLeftupper_Content">
					<div class="promoDisplay_Pic">
					</div>
					
					<div class="promoThumbDisplay_Pic">
						<div class="promoNav_Buttons">
							<div class="promoNav_Left"></div>
							<div class="promoNav_Right"></div>
						</div>
						
						<ul>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
						</ul>
					</div>
				</div>
				
				<div class="promoRightupper_Content">
					<div class="promoTitle_Container">
						<h1>SUNLIGHT GUEST HOTEL INC.</h1>
					</div>
				
					<div class="promoRoomLoc">
						<div class="promoLocation">
							<h3>HOTEL LOCATION</h3>
							<select id="select_PromoLocL">
								<option value="1">Puerto Princesa City, Palawan</option>
								<option value="2" selected>Sta. Rosa, Laguna</option>
							</select>
						</div>
					
						<div class="promoQuantity">
							<h3>HOTEL ROOM</h3>
							<select id="select_LagRoom">
								<option value="1">Standard Room</option>
								<option value="2">Studio Room</option>
								<option value="3">Moderate Room</option>
								<option value="4">Superior Room</option>
								<option value="5">Deluxe Room</option>
							</select>
						</div>
						
						<div class="clear"></div>
					</div>
				
					<div class="promoFprice">
						<h1 class="promoDprice">P1800</h1>
						<span class="promo_Rprice">
							<h3>HOTEL ROOM</h3>
							<h3>PRICE</h3>
						</span>
					</div>
					
					<div class="promoSelectBuy">
						<a class="prmo_resbtn" href="#promo_reservation"><div class="promoBuy">
							<h1>RESERVE NOW</h1>
						</div>
					</a></div>
				</div>
				
				<div class="clear"></div>
			
			</div>
			<!--END_PROMO_HL-->
		</div>
		
		<div class="promo_midContent">
			<div class="promo_midleft">
				<div class="promo_midTitle">
					<h1 class="promo_contentTitle">HIGHLIGHTS</h1>
				</div>
				<!--PROMO_HP-->
				<div id="promo_Midcon1" class="">
					<div class="promo_midtextContent">
						<ul>
							<li>A hotel of top-quality paralleled with notable Asian hospitality and hotel management excellence.</li>
							<li>Artistically envisioned and solely designed, Sunlight Guest Hotel provides functional and enhanced facilities with a cordial service. </li>
							<li>It encompasses spacious and well-resourced seventy four (74) luxurious accommodations to suffice the needs of all kinds of travelers.  Entire rooms are built with archetypal walls and glass windows, ensuring the serene and cozy atmosphere in the middlemost of Puerto Princesa City. </li>
							<li>Whether for vacation pursuit or business commitment, Sunlight Guest Hotel – Puerto Princesa is the most desirable place to stay. From accessibility, impeccable rooms, savoring consumables, wide bay view scenery, exemplary amenities and hospitable staff, it remains to be the leading hotel choice.</li>
							<li>Primarily located in the booming seat of tourism and commerce, Puerto Princesa City, the hotel is a conveniently located where relaxation and rejuvenation in all essentials and core establishments for leisure and dining are within one’s reach.
							<br><br>
							Inclusions:
							<br>
								<ul>
									<li>Welcome Drinks</li>
									<li>Daily Buffet Breakfast</li>
									<li>WIFI Connectivity</li>
									<li>Free accommodation for one kid 7 years and below sharing bed with parents. </li>
									<li>Complimentary Access to Sunlight Gym &amp; Body Works</li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
				<!--END_PROMO_HP-->
				
				<!--PROMO_HL-->
				<div id="promo_Midcon2" class="promohide">
					<div class="promo_midtextContent">
						<ul>
							<li>Ultimate luxury right at the Heart of the Business District.</li>
							<li>Sunlight Guest Hotel – Laguna redefines the business hotel experience; seamlessly combining efficiency and unparalleled comfort. </li>
							<li>The 33 well-appointed guest rooms with amazing views across the city, paired with state-of-the-art meeting and business facilities, makes us the most popular choice of the corporate traveler.</li>
							<li>Everything you experience here is a taste of the very best the city can offer.  Whether you’re dining at the fabulous Saluhan Restaurant, or strolling to our unique and prestigious shopping destination – UNITOP Mall, you’ll find shopping and dining to rival any luxury destination.</li>
							<li>With little touches like your welcome drink upon arrival, the daily complimentary buffet breakfast and unlimited Wi-Fi throughout the hotel, everything we do is designed to make your stay a constant delight.</li>
							<li>Close to central financial and business districts, as well as some of the city’s most notable points of interest.</li>
							<li>We are less than 15 minutes away from the famous Enchanted Kingdom.
							<br><br>
							Inclusions:
							<br>
								<ul>
									<li>Welcome Drinks</li>
									<li>Daily Buffet Breakfast</li>
									<li>WIFI Connectivity</li>
									<li>Daily Newspaper</li>
									<li>Free accommodation for one kid 7 years and below sharing bed with parents. </li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
				<!--END_PROMO_HL-->

			</div>
			
			<div class="promo_midRight">
				<div class="promo_midTitle">
					<h1 class="promo_contentTitle">FINE PRINT</h1>
				</div>
				
				<div class="promo_midtextContent">
					<p><strong>Terms and Conditions</strong></p>
					<ul>
						<li>Above rates are expressed in Philippine Peso</li>
						<li>All rates are per night based on single or double occupancy</li>
						<li>Rates are inclusive of 12% Government Tax and 10% Service Charge</li>
						<li>Check In Time:  2:00 PM / Check Out Time: 12:00 NN</li>
						<li>The minimum age to reserve a guestroom is 21 years old.  He / she must present a valid identification with photo to become a registered Hotel guest.  </li>
						<li>Children aged 7 years old and below stay for free when sharing their parents’ room and bed.  </li>
						<li>Room rates are inclusive of breakfast for 2 persons.  Children 3 years and below eat free when accompanied by an adult taking the complimentary breakfast.</li>
						<li>Children aged 4 – 7 years old (or less than 121cm / 4 feet in height) receive 50% off.</li>
						<li>Cash deposit of P2,000 is required for all reservations at time of booking or upon arrival. Refundable upon check out should there be no consumption and/or damages incurred </li>
						<li>No bringing of food and beverage inside the Hotel.</li>
						<li>Cooking inside the unit is not allowed.</li>
						<li>Pets are prohibited inside the Hotel.</li>
						<li>Cancellations made after the confirmation will be subjected to 50% cancellation fee from the total package rate.</li>
						<li>Cancellation made 72 hours before check-in/booking date including no-show will be charged 100% full cancellation fee of the total package rate.  If in case of partial payment was made, full payment will still be required to be settled.  Full amount will apply for shortened stay.</li>
					</ul>
				</div>
			</div>
			
			<div class="clear"></div>	
		</div>
		
		<div class="promo_bottomContent">
			<div class="promo_bottomLeft">
				<!--PROMO_HP-->
				<div id="promo_Lcon1" class="">
					<div class="promo_bottomTitle">
						<h1 class="promo_contentTitle">ABOUT THE HOTEL</h1>
					</div>
					
					<br><br><br>
					
					<h2>Accommodations</h2>
					
					<p>Sunlight Guest Hotel – Puerto Princesa has 74 well-appointed guestrooms ranging from superior accommodations to Penthouse Suites, for families and large groups.</p>
					
					<div class="promo_3cl">
						<div class="prmo_left">
							<img src="images/promo/hp/01.jpg">
							
							<p><strong>SUPERIOR ROOMS</strong> – A charming and spacious room that is ideal for couples vacationing together, and families with children who value relaxation and privacy. 
							
							<br><br><i>(Original Price Php 3,800 / night)</i></p>
						</div>
						
						<div class="prmo_left">
							<img src="images/promo/hp/02.jpg">
							
							<p><strong>DELUXE ROOMS</strong> – Guests can enjoy excellent views from the balcony with this elegant room.  
							
							<br><br><i>(Original Price Php 4,800 / night)</i></p>
						</div>
						
						<div class="prmo_left">
							<img src="images/promo/hp/03.jpg">
							
							<p><strong>PENTHOUSE SUITES</strong> – Many families prefer this spacious suite, where parents and children can have their own separate rooms.  Plus, a balcony that opens directly to the Palawan Sea, and it is perfect for entertaining.  
							
							<br><br><i>(Original Price Php 10,000 / night)</i></p>
						</div>
						
						<div class="clear"></div>
					</div>
					
					<p><strong>Inclusions</strong><br>
					» Welcome Drinks<br>
					» Daily Buffet Breakfast<br>
					» WIFI Connectivity<br>
					» Free accommodation for one kid 7 years and below sharing bed with parents. <br>
					» Complimentary Access to Sunlight Gym &amp; Body Works<br></p>
					
					
					<p><strong>Standard Room Amenities and Facilities</strong><br>
					» Air-conditioned Rooms <br>
					» Private Bar (selection of sodas, beers &amp; juices)<br>
					» Complimentary bottled water  <br>
					» Complimentary coffee and tea making facilities <br>
					» 42” LED Television with cable channels<br>
					» In room telephone <br>
					» Safety Deposit Box	<br>
					» Build In Hair Dryer<br>
					» Complete bathroom amenities<br>
					» Hot and cold water<br></p>
					
					<br>
					
					<h2>Restaurant Outlets</h2>
					
					<p><strong>Saluhan Restaurant</strong>
					<br>
					The Hotel’s coffee shop serving a wide selection of breakfast and dinner buffets plus equally mouthwatering a la carte menu.  <br>Open daily from 6AM – 12MN. </p>
					<img src="images/promo/5.jpg">
					
					<br><br>
					<p><strong>Al Fresco Roofdeck</strong>
					<br>
					Feel as if you are in a different locale if you stay in this part of the Hotel.  It provides its guests an excellent and commanding view of Palawan Sea.  It serves the finest wines and liquor with a wide array of side dishes that are perfect matches to your choice of beverage.  <br>Open daily from 6PM – 12MN. </p>
					<img src="images/promo/6.jpg">
					
					<br><br>
					
					<h2>Function Rooms</h2>
					
					<p>We have conference facilities that strike a perfect balance between style and practicality.  Our staff will create the perfect setting and are able to assist in any additional requirement to make your event an impressive one.</p>
					
					<p><strong>Isabelle Hall</strong> <br>
					<table>
						<tbody><tr>
							<td>»</td>
							<td>Floor Area 33m x 9m / height 2.44m</td>
							<td></td>
						</tr>
						
						<tr>
							<td>»</td>
							<td>Capacity</td>
							<td></td>
						</tr>
						
						<tr>
							<td>»</td>
							<td>Theater Set Up</td>
							<td>300 persons</td>
						</tr>
						
						<tr>
							<td>»</td>
							<td>Banquet Set Up</td>
							<td>240 persons (table by 12)</td>
						</tr>
						
						<tr>
							<td></td>
							<td></td>
							<td>200 persons (table by 10)</td>
						</tr>
						
						<tr>
							<td>»</td>
							<td>Classroom Set Up</td>
							<td>120 persons</td>
						</tr>
					
					</tbody></table></p>
					<img src="images/promo/10.jpg">
					
					<br><br>
					
					<p><strong>Puerto Princesa Meeting Room</strong> <br>
					<table>
						<tbody><tr>
							<td>»</td>
							<td>Floor Area 10m x 4m / height 2.44m</td>
							<td></td>
						</tr>
						
						<tr>
							<td>»</td>
							<td>Capacity</td>
							<td></td>
						</tr>
						
						<tr>
							<td>»</td>
							<td>Theater Set Up</td>
							<td>45 persons</td>
						</tr>
						
						<tr>
							<td>»</td>
							<td>Block Set Up</td>
							<td>30 persons</td>
						</tr>
						
						<tr>
							<td>»</td>
							<td>Classroom Set Up</td>
							<td>40 persons</td>
						</tr>
					
					</tbody></table></p>
					<img src="images/promo/8.jpg">
					
					<br><br>
					
					<p><strong>Naglayan Meeting Room</strong> <br>
					<table>
						<tbody><tr>
							<td>»</td>
							<td>Floor Area 12m x 4m / height 2.44m </td>
							<td></td>
						</tr>
						
						<tr>
							<td>»</td>
							<td>Capacity</td>
							<td></td>
						</tr>
						
						<tr>
							<td>»</td>
							<td>Theater Set Up</td>
							<td>48 persons</td>
						</tr>
						
						<tr>
							<td>»</td>
							<td>Block Set Up</td>
							<td>34 persons</td>
						</tr>
						
						<tr>
							<td>»</td>
							<td>Classroom Set Up</td>
							<td>40 persons</td>
						</tr>
					
					</tbody></table></p>
					<img src="images/promo/9.jpg">
					
					<br><br>
				</div>
				<!--END_PROMO_HP-->
				
				<!--PROMO_HL-->
				<div id="promo_Lcon2" class="promohide">
					<div class="promo_bottomTitle">
						<h1 class="promo_contentTitle">ABOUT THE HOTEL</h1>
					</div>
					
					<br><br><br>
					
					<h2>Accommodations</h2>
					
					<p>Sunlight Guest Hotel Sta.Rosa, Laguna has 33 well-appointed guestrooms ranging from standard accommodations to Deluxe Rooms, for families and large groups. </p>
					
					<div class="promo_3cl">
						<div class="prmo_left">
							<img src="images/promo/hl/01.jpg">
							
							<p><strong>Standard Rooms</strong> – A perfect choice for the budget conscious traveler.
							
							<br><br><i>(Original Price Php 1,800 / night)</i></p>
						</div>
						
						<div class="prmo_left">
							<img src="images/promo/hl/02.jpg">
							
							<p><strong>Studio Rooms</strong> – This room features a touch of simplicity with practical amenities. 
							
							<br><br><i>(Original Price Php 2,800 / night)</i></p>
						</div>
						
						<div class="prmo_left">
							<img src="images/promo/hl/03.jpg">
							
							<p><strong>Moderate Room</strong> – Splendid views of the busy Sta.Rosa Commercial Complex.  
							
							<br><br><i>(Original Price Php 3,300 / night)</i></p>
						</div>
						
						<div class="prmo_left">
							<img src="images/promo/hl/04.jpg">
							
							<p><strong>Superior Room</strong> – The best choice for couples, small families and celebrities who value relaxation and privacy.
							
							<br><br><i>(Original Price Php 3,500 / night)</i></p>
						</div>
						
						<div class="prmo_left">
							<img src="images/promo/hl/05.jpg">
							
							<p><strong>Deluxe Room</strong> – A fitting choice for top executives and dignitaries, or a family.	
							
							<br><br><i>(Original Price Php 4,300 / night)</i></p>
						</div>
						
						<div class="clear"></div>
					</div>
					
					<p><strong>Inclusions</strong><br>
					» Welcome Drinks<br>
					» Daily Buffet Breakfast<br>
					» WIFI Connectivity<br>
					» Daily Newspaper<br>
					» Free accommodation for one kid 7 years and below sharing bed with parents. <br></p>
					
					
					<p><strong>Standard Room Amenities and Facilities</strong><br>
					» Air-conditioned Rooms <br>
					» 42” LED Television with cable channels<br>
					» Hot &amp; Cold Shower<br>
					» In room telephone <br>
					» Safety Deposit Box<br></p>
					
					<br>
					
					<h2>Restaurant Outlets</h2>
					
					<p><strong>Saluhan Restaurant</strong>
					<br>
					Our signature coffee shop serving a wide selection of breakfast, lunch, and dinner buffets plus equally mouthwatering a la carte menu.  Only the finest meats and freshest vegetables find their way into our kitchen.
					<br>Open daily from 6:00AM – 12:00MN. </p>
					<img src="images/promo/13.jpg">
					
					<br><br>
					
					<h2>Function Rooms</h2>
					
					<p>We have conference facilities that strike a perfect balance between style and practicality.  Our staff will create the perfect setting and are able to assist in any additional requirement to make your event an impressive one.</p>
					
					<p><strong>Garnet Room</strong> <br>
					<table>
						<tbody><tr>
							<td>»</td>
							<td>Floor Area 7.92m (62.85 square meters)</td>
							<td></td>
						</tr>
						
						<tr>
							<td>»</td>
							<td>Height 2.44m</td>
							<td></td>
						</tr>
						
						<tr>
							<td>»</td>
							<td>Capacity</td>
							<td></td>
						</tr>
						
						<tr>
							<td>»</td>
							<td>Theater Set Up</td>
							<td>100 persons</td>
						</tr>
						
						<tr>
							<td>»</td>
							<td>Banquet Set Up</td>
							<td>50 persons (table by 10)</td>
						</tr>
						
						<tr>
							<td></td>
							<td>Classroom Set Up </td>
							<td>70 persons</td>
						</tr>
					
					</tbody></table></p>
					<img src="images/promo/11.jpg">
					
					<br><br>
					
					<p><strong>Emerald Room</strong> <br>
					<table>
						<tbody><tr>
							<td>»</td>
							<td>Floor Area 5.85m (34.23 square meters)</td>
							<td></td>
						</tr>
						
						<tr>
							<td>»</td>
							<td>Height 2.44m</td>
							<td></td>
						</tr>
						
						<tr>
							<td>»</td>
							<td>Capacity</td>
							<td></td>
						</tr>
						
						<tr>
							<td>»</td>
							<td>Theater Set Up</td>
							<td>50 persons</td>
						</tr>
						
						<tr>
							<td>»</td>
							<td>Banquet Set Up</td>
							<td>30 persons (table by 10)</td>
						</tr>
						
						<tr>
							<td>»</td>
							<td>Classroom Set Up</td>
							<td>30 persons</td>
						</tr>
					
					</tbody></table></p>
					<img src="images/promo/12.jpg">
					
					<br><br>
				</div>
				<!--END_PROMO_HL-->
			</div>
			
			<div class="promo_bottomRight">
				<div class="promo_mapLocContainer">
					<div class="promo_bottomTitle">
						<h1 class="promo_contentTitle">MAP AND LOCATION</h1>
					</div>
					
					<!--<select id="select_MapLoc">
						<option value="1">Puerto Princesa City, Palawan</option>
						<option value="2">Sta. Rosa, Palawan</option>
					</select>-->
					
					<div id="mapLoc1" class="">
						<div class="promo_mapLocAdd">
							<p>SUNLIGHT GUEST HOTEL, UNITOP Building, Malvar Street, Barangay Tagumpay, Puerto Princesa City, Palawan 5300</p>
						</div>
						
						<div class="promo_mapLocMap">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2780.545671534845!2d118.73271941738895!3d9.741874752179934!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33b563c2d242297f%3A0xec8a0b1977ea07e6!2sSunlight+Guest+Hotel!5e0!3m2!1sen!2sph!4v1475736088659" width="380" height="200" frameborder="0" style="border:0" allowfullscreen=""></iframe>
						</div>
					</div>
					
					<div id="mapLoc2" class="promohide">
						<div class="promo_mapLocAdd">
							<p>SUNLIGHT GUEST HOTEL, Balibago Commercial Complex, Barangay Balibago, Sta.Rosa, Laguna, Philippines, 4026</p> 							
						</div>
						
						<div class="promo_mapLocMap">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d966.579395416015!2d121.10301112923064!3d14.292971299374944!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x95466ac8530f20b2!2sUnitop!5e0!3m2!1sen!2sph!4v1475736666405" width="380" height="200" frameborder="0" style="border:0" allowfullscreen=""></iframe>
							<p>Close to central financial and business districts, as well as some of the city's most notable points of interest, the best of Sta.Rosa, Laguna is close at hand.  Come and experience it with us.</p>
						</div>
					</div>
				</div>
				
				<div class="promo_redeemContainer">
					<div class="promo_bottomTitle">
						<h1 class="promo_contentTitle">HOW TO REDEEM</h1>
					</div>
					
					<ol>
						<li><strong>Purchase your deal.</strong> Simply click on the "Buy Now" button then "Proceed with Payment". Follow the instructions and purchase using CashCashPinoy's secured site payment options.</li>
						<li>When your purchase is complete, <strong>you will receive a notice by email with instructions</strong> for printing the voucher for your deal. Once printed, there will be instructions on how to redeem it with the merchant partner.</li>
						<li><strong>Enjoy your savings</strong> and celebrate your smart-shopping skills!</li>
					</ol>
				</div>
				
				<div class="promo_customerSupportContainer">
					<div class="promo_bottomTitle">
						<h1 class="promo_contentTitle">CUSTOMER SUPPORT</h1>
					</div>
					
					<p><strong>We always want to hear what you have to say.</strong></p>
					
					<p>For inquiries and concerns, here are all the ways you can contact our Customer Support Team:</p>
					
					<p><strong>Email Address:</strong> <span>unitoponlineshop@gmail.com</span></p>
					<br>
					
					<div id="mapcont1" class="">
						<h2>Hotel Webmail and Email Address</h2>
						<p><strong>Website:</strong> <span>www.sunlighthotelsandresorts.com</span></p>
						<p><strong>Email Address:</strong> <span>reservations@sunlighthotelsandresorts.com</span></p>
						<br>
						<h2>Hotel Contact Number</h2>
						<p><strong>SGHP Trunk Line:</strong> <span>+63 48 434 2334</span></p>
						<p><strong>SGHP Direct Line:</strong> <span>+63 48 434 2003</span></p>
						<p><strong>Mobile:</strong> <span>+63 917 521 4026 (Globe) / +63 999 998 3484 (Smart)</span></p>
					</div>
					
					<div id="mapcont2" class="promohide">
						<h2>Hotel Webmail and Email Address</h2>
						<p><strong>Website:</strong> <span>www.sunlighthotelsandresorts.com</span></p>
						<p><strong>Email Address:</strong> <span>reservations@sunlighthotelsandresorts.com</span></p>
						<br>
						<h2>Hotel Contact Number</h2>
						<p><strong>SGHP Trunk Line:</strong> <span>+63 49 544 6838</span></p>
						<p><strong>SGHP Sales Line:</strong> <span>+63 49 544 6197</span></p>
					</div>
				</div>
			</div>
			<div class="clear"></div>
			
		</div>
		
		<div id="promo_reservation" class="promo_reservationContent">
			<div class="promo_bottomRight">
				<div class="promo_bottomTitle">
					<h1 class="promo_contentTitle">FOR RESERVATIONS</h1>
				</div>
		<form action="promo_confirmation.php" method="POST" id="resrv_form">
				<div class="nameCont">
					<p>Name</p>
					<input type="text" name="cus_name" id="cus_name" required>
					<div class="clear"></div>
				</div>
				
				<div class="emailCont">
					<p>Email</p>
					<input type="text" name="cus_email" id="cus_email" required>
					<div class="clear"></div>
				</div>
				
				<div class="numberCont">
					<p>Contact Number</p>
					<input type="text" name="cus_number" id="cus_number" required>
					<div class="clear"></div>
				</div>
				
				<div class="branchCont">
					<select name="res_branch" id="res_branch">
					</select>
				</div>
				
				<div class="checkInOutCont">
					<div class="checkInCont">
						<p>Check In</p>
						<input type="text" name="checkin" id="checkin" maxlength="10">
						<div class="clear"></div>
					</div>
					
					<div class="checkOutCont">
						<p>Check Out</p>
						<input type="text" name="checkout" id="checkout" maxlength="10">
						<div class="clear"></div>
					</div>
					
					<div class="clear"></div>
				</div>
				
				<div class="typeRoomCont">
					<select name="res_rmtype" id="res_rmtype">
					</select>
				</div>
				
				<div class="paxRoomsCont">
					<div class="paxCont">
						<p>Number of People</p>
						<input type="number" name="cus_people" id="cus_people" min="1" max="3">
						<div class="clear"></div>
					</div>
					
					<div class="roomsCont">
						<p>Number of Rooms</p>
						<select name="cus_rooms" id="cus_rooms">
							<option value="" disabled="" selected="">Rooms</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
						</select>
						<div class="clear"></div>
					</div>
					
					<div class="clear"></div>
				</div>
				
				<div class="messageCont">
					<textarea name="cus_message" id="cus_message" class="" type="text" placeholder="Message"></textarea>
				</div>
				<input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
				<input type="submit" value="Submit" id="init_submit">				
		</form>
			</div>
		</div>
		
	</div>
	<!--END_MAIN_CONTAINER-->
	
	<!--Form-->
		<script>
			$(function(){
				var dateFormat = "mm/dd/yy",
				from = $("#checkin")
					.datepicker({
						defaultDate: "+1w",
						minDate:0
					}).on("change", function(){
						to.datepicker("option", "minDate", getDate(this));
					}),
					to = $("#checkout").datepicker({
						defaultDate: "+1w",
						minDate:0
					}).on("change", function(){
						from.datepicker("option", "maxDate", getDate(this));
					});

				function getDate( element ) {
			      var date;
			      try {
			        date = $.datepicker.parseDate(dateFormat, element.value);
			      } catch(error) {
			        date = null;
			      }
			 
			      return date;
			    }
			});
			
			
			//When Reservation form Branch is selected
			/*
			$( "#res_branch" ).change(function() {
			var Res = "";
			$( "#res_branch option:selected" ).each(function() {
			  Res += $( this ).val() + " ";
			});
				//Reservation Form Room Type
			  if (Res == 1 ) {
				$( "#res_rmtype1" ).toggleClass("promohide");
				$( "#res_rmtype2" ).toggleClass("promohide");
				alert(Res);
			  } else if (Res == 2) {
				$( "#res_rmtype1" ).toggleClass("promohide");
				$( "#res_rmtype2" ).toggleClass("promohide");
				alert(Res);
			  };
			  });
			  */
		</script>
	
	<!--Text, Map, Location and Contact-->
		<script>
		
		  //Select Branch Location beside Main Title
		  $( "#select_PromoLocL" ).change(function() {
			var MapLoc = "";
			$( "#select_PromoLocL option:selected" ).each(function() {
			  MapLoc += $( this ).val() + " ";
			});
		  
		  //If Palawan Branch is Selected
		  if (MapLoc == 1 ) {
			//Toggle map location and address
			$( "#mapLoc1" ).toggleClass("promohide");
			$( "#mapLoc2" ).toggleClass("promohide");
			
			//Toggle Contact details 
			$( "#mapcont1" ).toggleClass("promohide");
			$( "#mapcont2" ).toggleClass("promohide");
			
			//Toggle About Hotel
			$( "#promo_Lcon1" ).toggleClass("promohide");
			$( "#promo_Lcon2" ).toggleClass("promohide");
			
			//Toggle Middle Text Content
			$( "#promo_Midcon1" ).toggleClass("promohide");
			$( "#promo_Midcon2" ).toggleClass("promohide");
			
			//Toggle Upper Content
			$( "#promo_Ucon1" ).toggleClass("promohide");
			$( "#promo_Ucon2" ).toggleClass("promohide");
			
			//Set default price for the selected branch rooom type
			$( ".promoDprice" ).text("P3800");
			$( ".promoOprice" ).text("P3800");
			$( ".promoSprice" ).text("P1520");
			
			//Set the select options to first
			$("#select_PromoLocL").prop("selectedIndex", 1);
			$("#select_LagRoom").prop("selectedIndex", 0);
			alert(MapLoc);
		  };
		  });
		</script>
		
		<script>
		 //Select Branch Location beside Main Title
		  $( "#select_PromoLocP" ).change(function() {
			var MapLoc = "";
			$( "#select_PromoLocP option:selected" ).each(function() {
			  MapLoc += $( this ).val() + " ";
			});
		  
		  //If Palawan Branch is Selected
		  if (MapLoc == 2) {
			//Toggle map location and address
			$( "#mapLoc1" ).toggleClass("promohide");
			$( "#mapLoc2" ).toggleClass("promohide");
			
			//Toggle Contact details 
			$( "#mapcont1" ).toggleClass("promohide");
			$( "#mapcont2" ).toggleClass("promohide");
			
			//Toggle About Hotel
			$( "#promo_Lcon1" ).toggleClass("promohide");
			$( "#promo_Lcon2" ).toggleClass("promohide");
			
			//Toggle Middle Text Content
			$( "#promo_Midcon1" ).toggleClass("promohide");
			$( "#promo_Midcon2" ).toggleClass("promohide");
			
			//Toggle Upper Content
			$( "#promo_Ucon1" ).toggleClass("promohide");
			$( "#promo_Ucon2" ).toggleClass("promohide");
			
			//Set default price for the selected branch rooom type
			$( ".promoDprice" ).text("P1800");
			$( ".promoOprice" ).text("P1800");
			$( ".promoSprice" ).text("P720");
			
			//Set the select options to first
			$("#select_PromoLocP").prop("selectedIndex", 0);
			$("#select_PalRoom").prop("selectedIndex", 0);
			
			alert(MapLoc);
		  };
		  });
		</script>
		
	<!--Price-->
		<script>
		//Palawan Branch Room Select
		$( "#select_PalRoom" ).change(function() {
			var str = "";
			$( "#select_PalRoom option:selected" ).each(function() {
			  str += $( this ).val() + " ";
			});
		  
		  //Superior Room Palawan
		  if (str == 1 ) {
			var PalDP1 = "P3800";
			var PalOP1 = "P3800";
			var PalSP1 = "P1520";
			$( ".promoDprice" ).text( PalDP1 );
			$( ".promoOprice" ).text( PalOP1 );
			$( ".promoSprice" ).text( PalSP1 );
			
			//Deluxe Room Palawan
		  } else if (str == 2) {
			var PalDP2 = "P4800";
			var PalOP2 = "P4800";
			var PalSP2 = "P1920";
			$( ".promoDprice" ).text( PalDP2 );
			$( ".promoOprice" ).text( PalOP2 );
			$( ".promoSprice" ).text( PalSP2 );
			
			//Penthouse Room Palawan
		  } else if (str == 3) {
			var PalDP3 = "P10000";
			var PalOP3 = "P10000";
			var PalSP3 = "P4000";
			$( ".promoDprice" ).text( PalDP3 );
			$( ".promoOprice" ).text( PalOP3 );
			$( ".promoSprice" ).text( PalSP3 );
		  };
		  });
		  
		  //Palawan Branch Room Select
		  $( "#select_LagRoom" ).change(function() {
			var str = "";
			$( "#select_LagRoom option:selected" ).each(function() {
			  str += $( this ).val() + " ";
			});
		  
		  //Standard Room Palawan
		  if (str == 1 ) {
			var PalDP1 = "P1800";
			var PalOP1 = "P1800";
			var PalSP1 = "P720";
			$( ".promoDprice" ).text( PalDP1 );
			$( ".promoOprice" ).text( PalOP1 );
			$( ".promoOprice" ).text( PalSP1 );
			
			//Studio Room Palawan
		  } else if (str == 2) {
			var PalDP2 = "P2800";
			var PalOP2 = "P2800";
			var PalSP2 = "P1120";
			$( ".promoDprice" ).text( PalDP2 );
			$( ".promoOprice" ).text( PalOP2 );
			$( ".promoOprice" ).text( PalSP2 );
			
			//Moderate Room Palawan
		  } else if (str == 3) {
			var PalDP3 = "P3300";
			var PalOP3 = "P3300";
			var PalSP3 = "P1320";
			$( ".promoDprice" ).text( PalDP3 );
			$( ".promoOprice" ).text( PalOP3 );
			$( ".promoOprice" ).text( PalSP3 );
			
			//Superior Room Palawan
		  } else if (str == 4) {
			var PalDP4 = "P3500";
			var PalOP4 = "P3500";
			var PalSP4 = "P1400";
			$( ".promoDprice" ).text( PalDP4 );
			$( ".promoOprice" ).text( PalOP4 );
			$( ".promoOprice" ).text( PalSP4 );
			
			//Deluxe Room Palawan
		  } else if (str == 5) {
			var PalDP5 = "P4300";
			var PalOP5 = "P4300";
			var PalSP5 = "P1720";
			$( ".promoDprice" ).text( PalDP5 );
			$( ".promoOprice" ).text( PalOP5 );
			$( ".promoOprice" ).text( PalSP5 );
		  };
		  });
		</script>
</body></html>