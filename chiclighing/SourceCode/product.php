<?php
require "header.php";

require_once('utyls/utility.php');
require_once('db/dbhelper.php');

$id = getGet('id');
$sql = "select * from vw_show_product where id_products = '$id'";
$std = executeResult($sql, true);

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>thông tin sp</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hind&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style_shared/shared.css">
    <link rel="stylesheet" type="text/css" href="style_sp/product.css">

</head>
<body style="font-family: 'Hind', sans-serif;">
    <div class="img-01">
            <div class=" img-11"><img src="style_sp/img-all/img-001.jpg"></div>
    </div>        
    <div class="s21">
    <div class="left">
          <div class="tyles">
            <div class="tyle"   ><h5 class="texts">Product information and pictures</h5></div>
            <div class="hinh_binh_hanh"></div>
            
          </div>
          <div class="head1"></div>
      </div>


        <div class="a22">
            <div class="b21"> 
                <div class="c21">
                    <center>
                    <div class="d21">
                        
                        <img src="<?=$std['img_1']?>" style="width: aoto ; height: 100%;">
                        
                    </div>
                    </center>
                    <div class="d22">
                        <?Php
                        echo'<div class="e21"><img src="'.$std['img_1'].'"style="width: 100% ; height: auto;"></div>
                             <div class="e21"><img src="'.$std['img_2'].'"style="width: 100% ; height: auto;"></div>
                             <div class="e21"><img src="'.$std['img_3'].'"style="width: 100% ; height: auto;"></div>
                             <div class="e21"><img src="'.$std['img_4'].'"style="width: 100% ; height: auto;"></div>' 
                        
                        
                        ?>
                    </div>
                </div>
                    <div class="c22">
                        <h2> <?=$std['name_products']?></h2></br>
                        <h3> price : <?=$std['price']?>$</h3></br>
                        <p> made in : <?=$std['made_in']?></p></br>
                        <p> brand : <?=$std['brand']?></p></br>
                        <p> type : <?=$std['type']?></p></br>
                        <div class="d23">
                        <button onclick="come_back()">previous page</button></a>
                        <a href="brand.php?id_brand=<?=$std['id_brand']?>" ><button >See more products from this company</button></a>
                        </div>
                    </div>        
            </div>
        </div>

        <div class="left">
            <div class="tyles">
                <div class="tyle"   ><h5 class="texts">details</h5></div>
                <div class="hinh_binh_hanh"></div>
            </div>
            <div class="head1"></div>
        </div>
        <div>
            <div class="c23">
                <div class="parameter">
                <h3>parameter:</h3>
                    <table class="table-1">
                        
                        <tr>
                            <td>Power Input:</td>
                            <td><?=$std['Power_Input']?></td>
                        </tr>
                        <tr> 
                            <td> wattage:</td>
                            <td><?=$std['wattage']?></td>
                        </tr>
                        <tr> 
                            <td>material :</td>
                            <td><?=$std['material']?></td>
                        </tr>
                    </table>
                </div>
                <div class="intro">                       
                    <h3> intro: </h3>
                    <p><?=$std['intro']?></p>
                </div>
            </div>
        </div>




        <div class="left">
            <div class="tyles">
                <div class="tyle"><h5 class="texts">some other random products</h5></div>
                <div class="hinh_binh_hanh"></div>
                    
            </div>
            <div class="head1"></div>
        </div>
        <div>
            
        </div>
        <div class="c03">
            <?php
            $sql = "SELECT * FROM vw_show_product ORDER BY RAND() LIMIT 4;";      
$uList = executeResult($sql);    
        $index = 0;
        foreach($uList as $item) {    
        echo '<a href="product.php?id='.$item['id_products'].'" class="d02"><div >
            <div class="img_product-1" ><img src="'.$item['img_1'].'"class="img-sp-1" style="width: 100% ; height: auto;"></div>        
             <div class ="d05">
            <h4>'.$item['name_products'].'</h4></br>
            <p>'.$item['price'].'$</p>
            </div>
                      
        </div></a>';};
           
              ?>
            
           </div>
    </div>

</body>
<script>
      function come_back(){
          history.back();
      }
  </script>
</html>

<?php
        require "footer.php";

      ?>