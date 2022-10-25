<?php


require_once('utyls/utility.php');   
require_once('db/dbhelper.php');


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
	<link rel="stylesheet" type="text/css" href="style_admin/add.css">


</head>
<body>
	<div class="list">
	    <div class="s-list-1"><?php require "admin_menu.php";?></div>
    	<div class="s-2">
     	     <div class="a-1">
     	     	<div class="b-1">
     	     	<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                </svg></div>
                <div class="b-1">
                	<a href="admin_contact.php">
     	     		<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-chat-left" viewBox="0 0 16 16">
                    <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                    </svg></a>
     	     	</div>
            </div>
     	    <div class="a-2 pont-ad" style="display: flex;"><h3>Dashboard</h3></div>
	     	<div class="input-ss">
	     	    <div class="input-s1">
	     	    	<div class="input-a1 pont-ad"><h5>information form</h5></div>
	     	    	<div class="input-a2 pont-ad">
	     	    		<center>
		     	    		<h2>base information</h2>
		     	    		<h5>Id product:<?echo''.$id.''?></h5>
		     	    		<div class="hr-2"></div>
	     	    	    </center>
	     	    	    <div class="input-a3">
	     	    	    	<div class="input-b2">
	     	    	    		<label>name product</label><br>
		     	    	        <input type="text" name="">
		     	    	    </div>
	     	    	    	<div class="input-b2">
	     	    	    		<label>price</label><br>
		     	    	        <input type="text" name="">
		     	    	   </div>
	     	    	    </div>
	     	    	    <div class="input-a4">
	     	    	    	<div class="input-b1">
	     	    	    		<label>brand</label><br>
		     	    	        <input type="text" name="">
		     	    	    </div>
	     	    	    	<div class="input-b1">
	     	    	    		<label>type</label><br>
		     	    	        <input type="text" name="">
		     	    	    </div>		     	    	    
						</div>
	     	    	</div>
	     	    </div>
	     	    <div class="input-s2">
	     	    	<div class="input-a1 pont-ad"><h5>data form</h5></div>
	     	    	<div class=" pont-ad">
	     	    	    <div class="input-a3">
	     	    	    	<div class="input-b2">
	     	    	    		<label>wattage</label><br>
		     	    	    <input type="text" name="">
		     	    	    </div>
	     	    	    	<div class="input-b2">
	     	    	    		<label>Material</label><br>
		     	    	    <input type="text" name="">
		     	    	   </div>
		     	    	   <div class="input-b2">
	     	    	    		<label>power input</label><br>
		     	    	    <input type="text" name="">
		     	    	   </div>
		     	    	   <div class="input-b2">
	     	    	    		<label>intro</label><br>
		     	    	    <input type="text" name="">
		     	    	   </div>
	     	    	    </div>
	     	    	</div>    
	     	    </div>
            </div>
            <div class="input-s3">
            	<div class="input-a1 pont-ad"><h5>data form</h5></div>
     	    	<div class=" pont-ad">
     	    	    <div class="input-a3">
     	    	    	<div class="input-b2">
     	    	    		<label>img 1</label><br>
	     	    	    <input type="text" name="">
	     	    	    </div>
     	    	    	<div class="input-b2">
     	    	    		<label>img 2</label><br>
	     	    	    <input type="text" name="">
	     	    	   </div>
	     	    	   <div class="input-b2">
     	    	    		<label>img 3</label><br>
	     	    	    <input type="text" name="">
	     	    	   </div>
	     	    	   <div class="input-b2">
     	    	    		<label>img 4</label><br>
	     	    	    <input type="text" name="">
	     	    	   </div>
     	    	    </div>
     	    	</div>   
            </div>
	    </div>
 	</div>
</body>
</html>