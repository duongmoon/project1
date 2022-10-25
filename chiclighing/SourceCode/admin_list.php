<?php


require_once('utyls/utility.php');   
require_once('db/dbhelper.php');

if(isset($_GET['id_brand'])){
    $id_brand = getGet('id_brand');
    $sql = "select * from vw_show_product where id_brand = '$id_brand'";
    }else{
        if(isset($_GET['id_type'])){
        $id_type = getGet('id_type');
        $sql = "select * from vw_show_product where id_type = '$id_type'";
        }else{
            $sql = "select * from vw_show_product";     
    }
}
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
     	    <div class="a-2 pont-ad"><h3>Dashboard</h3></div>
     	    <div class="table">
	            <table >
					<thead>
						<tr>
							<th>stt</th>
							<th>thumbnail</th>
							<th>name product</th>
							<th>price</th>
							<th>brand</th>
							<th>type</th>
							<th style="width: 60px"></th>							
						</tr>
					</thead>
		          	<tbody>
<?php
            $index = 0;
            foreach($uList as $item) {    
            echo '<tr class="products">
                <td >'.(++$index).'</td >
                <td ><img src="'.$item['img_1'].'"class="img-sp-1" ></td>
                <td>'.$item['name_products'].'</td>
                <td>'.$item['price'].'</td>
                <td>'.$item['id_brand'].'</td>
                <td>'.$item['id_type'].'</td>
                <td>
					<a href="edit.php?id='.$item['id_products'].'" class="edit" id="content">
					    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
	                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
	                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
						</svg>	
					</a>	  
			    </td>
			    <td>
			    <a href="delete.php?id='.$item['id_products'].'" class="delete" id="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                    </svg>
                </a>	
			    </td>
                </tr>';};
                   
                  ?>  

		           	</tbody>
				</table>
     		</div>
    	</div>
 	</div>
</body>
<script language="javascript">

            document.getElementById("btn2").addEventListener("click", function () {
                document.getElementById("content").style.display = 'none';
            }
)
            document.getElementById("btn2").onclick = function () {
                document.getElementById("content").style.display = 'block';
            };

        </script>
</html>