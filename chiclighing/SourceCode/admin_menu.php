<?php

//session_start();

require_once('utyls/utility.php');   
require_once('db/dbhelper.php');


$conn = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);
mysqli_set_charset($conn, 'utf8');

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
</head>
<body>
    <header class="header" id="myHeader">

	 <div class="ss">
     	<div class="s-1">
     		<center><div class="  admin-1 pont-ad"><h2>Admin</h2></div></center>
            <div class="hr admin"></div>
            <a href="admin_list.php">
         		<div class=" admin admin-2 pont-ad">
         			<div class="icon-1">
         			    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-speedometer" viewBox="0 0 16 16">
                        	<path d="M8 2a.5.5 0 0 1 .5.5V4a.5.5 0 0 1-1 0V2.5A.5.5 0 0 1 8 2zM3.732 3.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 8a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 8zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 7.31A.91.91 0 1 0 8.85 8.569l3.434-4.297a.389.389 0 0 0-.029-.518z"/>
                        	<path fill-rule="evenodd" d="M6.664 15.889A8 8 0 1 1 9.336.11a8 8 0 0 1-2.672 15.78zm-4.665-4.283A11.945 11.945 0 0 1 8 10c2.186 0 4.236.585 6.001 1.606a7 7 0 1 0-12.002 0z"/>
                        </svg>
         			    <a href="index.php" class = "button-home">Home</a>
         			</div>
         		</div>
            </a>
     		<div class="admin pont-ad colum" ><h3>Shows</h3></div>
            <div class="hr admin"></div>
            <ul class="brand-2">
                <a href="admin_list.php">
                    <li>
                        <div class=" admin admin-2 pont-ad">
                 			<div class="icon-1">
                 				<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-wallet2" viewBox="0 0 16 16">
                                    <path d="M12.136.326A1.5 1.5 0 0 1 14 1.78V3h.5A1.5 1.5 0 0 1 16 4.5v9a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 13.5v-9a1.5 1.5 0 0 1 1.432-1.499L12.136.326zM5.562 3H13V1.78a.5.5 0 0 0-.621-.484L5.562 3zM1.5 4a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-13z"/>
                                </svg>
                 			    <h4>All Product</h4>
                 			</div>
                 		</div>
                    </li>
                </a>
                <li>
             		<div class=" admin admin-2 pont-ad">
             			<div class="icon-1">
             				<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-tags" viewBox="0 0 16 16">
                            <path d="M3 2v4.586l7 7L14.586 9l-7-7H3zM2 2a1 1 0 0 1 1-1h4.586a1 1 0 0 1 .707.293l7 7a1 1 0 0 1 0 1.414l-4.586 4.586a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 2 6.586V2z"/>
                            <path d="M5.5 5a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1zm0 1a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zM1 7.086a1 1 0 0 0 .293.707L8.75 15.25l-.043.043a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 0 7.586V3a1 1 0 0 1 1-1v5.086z"/>
          					</svg>
             			    <h4>Brand</h4>
             			    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
         					<path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
        					</svg>
                            <ul class="brand-1 pont-ad">
                               
                                <?php 
                                    $index = 0;
                                    $sql= "select * from brand;";
                                    $result = mysqli_query($conn,$sql);
                                    while ($row = mysqli_fetch_assoc($result)){
                                    echo '<a href="admin_list.php?id_brand='.$row['id_brand'].'"><li>'.$row['brand'].'</li></a>';
                                    }               
                                ?>
                            </ul>
             			</div>
             		</div>
                </li>
                <li>
             		<div class=" admin admin-2 pont-ad">
             			<div class="icon-1">
             				<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-blockquote-left" viewBox="0 0 16 16">
                                <path d="M2.5 3a.5.5 0 0 0 0 1h11a.5.5 0 0 0 0-1h-11zm5 3a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1h-6zm0 3a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1h-6zm-5 3a.5.5 0 0 0 0 1h11a.5.5 0 0 0 0-1h-11zm.79-5.373c.112-.078.26-.17.444-.275L3.524 6c-.122.074-.272.17-.452.287-.18.117-.35.26-.51.428a2.425 2.425 0 0 0-.398.562c-.11.207-.164.438-.164.692 0 .36.072.65.217.873.144.219.385.328.72.328.215 0 .383-.07.504-.211a.697.697 0 0 0 .188-.463c0-.23-.07-.404-.211-.521-.137-.121-.326-.182-.568-.182h-.282c.024-.203.065-.37.123-.498a1.38 1.38 0 0 1 .252-.37 1.94 1.94 0 0 1 .346-.298zm2.167 0c.113-.078.262-.17.445-.275L5.692 6c-.122.074-.272.17-.452.287-.18.117-.35.26-.51.428a2.425 2.425 0 0 0-.398.562c-.11.207-.164.438-.164.692 0 .36.072.65.217.873.144.219.385.328.72.328.215 0 .383-.07.504-.211a.697.697 0 0 0 .188-.463c0-.23-.07-.404-.211-.521-.137-.121-.326-.182-.568-.182h-.282a1.75 1.75 0 0 1 .118-.492c.058-.13.144-.254.257-.375a1.94 1.94 0 0 1 .346-.3z"/>
                            </svg>
             			    <h4>Type</h4>
             			    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
          					<path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
        					</svg>
                            <ul class="brand-1 pont-ad">
                                
                                <?php 
                                    $index = 0;
                                    $sql= "select * from type;";
                                    $result = mysqli_query($conn,$sql);
                                    while ($row = mysqli_fetch_assoc($result)){
                                            echo '<a href="admin_list.php?id_type='.$row['id_type'].'"><li>'.$row['type'].'</li></a>';
                                    }               
                                ?>
                            </ul>
             			</div>
             		</div>
                </li>
            </ul>
     		<div class="admin pont-ad colum" ><h3>Tools</h3></div>
            <div class="hr admin"></div>
            <?php 
                $sql = "SELECT MAX(id_products) as max FROM products;";
                $std = executeResult($sql, true);
                echo'
                        <a href="add.php?id_products='.$std['max'].'">
                        <div class=" admin admin-2 pont-ad">
                            <div class="icon-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                                </svg>
                                <h4>Add</h4>
                            </div>
                        </div>
                        </a>';
                ?>      
            
           
     		
      		
     	</div>
    </div>
            </header>

</body>
<script type="text/javascript">
        window.onscroll = function() {aFunction()};
        
        var header = document.getElementById("myHeader");
        var sticky = header.offsetTop;
        
        function aFunction() {
          if (window.pageYOffset > sticky) {
            header.classList.add("sticky");
          } else {
            header.classList.remove("sticky");
          }
        }
        
 </script>
</html>