
<?php
require "header.php";

require_once('utyls/utility.php');
require_once('db/dbhelper.php');

$id_brand = getGet('id_brand');
$sql = "select * from vw_show_product where id_brand = '$id_brand'";      
$std = executeResult($sql, true);

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

	<link rel="stylesheet" type="text/css" href="style_shared/shared.css">
	<link rel="stylesheet" type="text/css" href="style_brand/brand.css">

</head>
<body style="font-family: 'Hind', sans-serif;">
	 <div class="img-01">
            <div class=" img-11"><img src="style_sp/img-all/living-room-ceiling-lights-for-your-home.jpg"></div>

    </div> 
  


	<div class="s31"> 
    <div class="left">
          <div class="tyles">
            <div class="tyle"   >
              <h5 class="texts">
              <?php
               $sql= "select * from brand where id_brand= '$id_brand';";
                  $result = mysqli_query($conn,$sql);
                  while ($row = mysqli_fetch_assoc($result)){
                    echo''.$row['brand'].'';
                  };
              ?>
            </h5></div>
            <div class="hinh_binh_hanh"></div>
          </div>
          <div class="head1"></div>
          <?php
               $sql= "select * from brand where id_brand= '$id_brand';";
                  $result = mysqli_query($conn,$sql);
                  while ($row = mysqli_fetch_assoc($result)){
                    echo'<div class="a30">
                            <div class="b30">
                              <img src="'.$row['picture'].'" style="height: 100%;width: 100%;">
                            </div>
                            <div class="b32">
                              <img src="'.$row['logo_brand'].'">
                              <h4>- '.$row['brand_intro'].'</h4>
                            </div>
                              
                          </div>';
                      };
                      ?>

		<div class="s32">
          <div class="tyles">
            <div class="tyle"   ><h5 class="texts">Company's products</h5></div>
            <div class="hinh_binh_hanh"></div>
            <div class="a31">
              <a href="brand.php?id_brand=<?=$std['id_brand']?>"><div class="b31">all </div></a><br>
                <?php 
                  $sql= "select * from type;";
                  $result = mysqli_query($conn,$sql);
                  while ($row = mysqli_fetch_assoc($result)){
                  echo '<a href="brand.php?id_brand='.$std['id_brand'].'&id_type='.$row['id_type'].'"><div class="b31">'.$row['type'].'</div></a></br>';
                  }               
                ?>
                      </div>
          </div>
          <div class="head1"></div>
    </div>
   
     <div class="c03"  >
   
      <?php
        if(isset($_GET['id_type'])){
          $id_type = getGet('id_type');
            $sql = "select * from vw_show_product where id_brand = '$id_brand' and id_type = '$id_type'";
        }else{
          $sql = "select * from vw_show_product where id_brand = '$id_brand'"; 
        }
        $uList = executeResult($sql); 
        $index = 0;
        foreach($uList as $item) {    
        echo '<a href="product.php?id='.$item['id_products'].'" class="d02"><div >
            <div class="img_product-1" ><img src="'.$item['img_1'].'"style="width: 100% ; height: auto;"></div>
        <div class="d05">
            <h4>'.$item['name_products'].'</h4></br></br>
            <p>price:'.$item['price'].'$</p>
        </div>
          
        </div></a>';};
           
              ?>
            
           </div>
         </div>
       </div>
</body>
</html>
<?php
        require "footer.php";

      ?>