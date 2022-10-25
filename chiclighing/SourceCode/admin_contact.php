<?php


require_once('utyls/utility.php');
require_once('db/dbhelper.php');
$sql = "select * from feedback";
$uList = executeResult($sql);

?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Hind&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style_admin/admin.css">
	<link rel="stylesheet" type="text/css" href="style_admin/admin_list.css">
</head>

<body>
	<div class="list">
		<div class="s-list-1"><?php require "admin_menu.php"; ?></div>
		<div class="s-2">
			<div class="a-1">
				<div class="b-1">
					<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
						<path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
					</svg>
				</div>
				<div class="b-1">
					<a href="admin_contact.php">
						<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-chat-left" viewBox="0 0 16 16">
							<path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
						</svg></a>
				</div>
			</div>
			<div class="a-2 pont-ad">
				<h3>Dashboard</h3>
			</div>

			<?php
			foreach ($uList as $item) {
				echo '<div class="contact"  >
                	
                     <div class="contact-2">
                     	<div class="contact-1">
                     		<div class=" customer_name">
			     	    		<h2>' . $item['customer_name'] . '</h2>
			     	    		<div class=" phone">
				     	    		<h4>Email:' . $item['email'] . '</h4>
				     	    		<h4>Phone:' . $item['phone'] . '</h4>
			     	    		</div>
			     	    	</div>
		     	    		<div class="email">
			     	    		<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
			                    <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
			                    </svg>
		                    </div>
			     	    </div>
			     	</div>
     	    	
     	    	
     	    	<div class="contact-3" >
     	    		<div>
     	    		<h3>Feedback from customers :</h3>
                    <h4>' . $item['idea'] . '</h4>
     	    		</div>
     	    		<div class="contact-4">
     	    		<a href="tel:' . $item['phone'] . '"><button class="button-1">direct call</button></a>
     	    		<a href="mailto:' . $item['email'] . '"><button class="button-1">answer</button></a>
     	    		</div>
     	    	</div></div>  ';
			};

			?>



		</div>
	</div>
</body>

</html>