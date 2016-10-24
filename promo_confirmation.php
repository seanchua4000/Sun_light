<?php
require 'core/init.php';
if(Session::exists('form'))
{
	if(Input::exists())
	{
		if(Token::check(Input::get('token')))
		{
			try
			{
				$db = Db::getInstance();
				$query = $db->insert('reservation', array(
					'name' => trim(Input::get('cus_name')),
					'email' => trim(Input::get('cus_email')),
					'contact_number' => trim(Input::get('cus_number')),
					'hotel_location' => trim(Input::get('res_branch')),
					'check_in' => trim(Input::get('checkin')),
					'check_out' => trim(Input::get('checkout')),
					'type_room' => trim(Input::get('res_rmtype')),
					'number_people' => trim(Input::get('cus_people')),
					'number_room' => trim(Input::get('cus_rooms')),
					'customer_message' => trim(Input::get('cus_message'))
					));
			}
			catch(Exception $e)
			{
				die($e->getMessage());
			}
		}
	}
	Session::delete('form');
}
else
{
	Redirect::to('index.php');
}

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
		<div class="promo_cfrmContainer">
			<div class="promo_cfrmText">
				<h2>Your reservation has been successfully submitted!</h2>
				<p>Hello <span><?php echo Input::get('cus_name') ?></span>, your reservation will be processed within 24 hours. You will receive an email from a Sunlight Guest Hotel Inc. representative for confirmation.</p>
				<p>Moreover, we will email you at <span><?php echo Input::get('cus_email') ?></span> or call you at <span><?php echo Input::get('cus_number') ?></span>.</p>
				<p>If you have any concerns, email us at unitoponlineshop@gmail.com</p>
				<p>Thank you!</p>
			</div>
		</div>
	</div>
	<!--END_MAIN_CONTAINER-->
</body></html>