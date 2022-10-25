<?php
require "header.php";

require_once('utyls/utility.php');   
require_once('db/dbhelper.php');
$id_brand = $id_type = $s = '';
$limit = 12;


// Xac dinh so page trong trang: START
if(isset($_GET['id_brand']) && $_GET['id_brand'] != '' && $_GET['id_brand'] > 0){
    $id_brand = getGet('id_brand');
    $sql = "select count(*) total from vw_show_product where id_brand = '$id_brand'";
    }else{
        if(isset($_GET['id_type']) && $_GET['id_type'] != '' && $_GET['id_type'] > 0){
        $id_type = getGet('id_type');
        $sql = "select count(*) total from vw_show_product where id_type = '$id_type'";
        }else{
            if(isset($_GET['s']) && $_GET['s'] != '' && $_GET['s'] > 0) {
                $s = getGet('s');
                $sql = "select count(*) total from vw_show_product where name_products like '%$s%'";
            } else {
                if(isset($_GET['price_0'])){
                    $price_1 = getGet('price_0');
                    $sql = "select count(*) total from vw_show_product WHERE price < 300";     
                } else {
                    if(isset($_GET['price_1'])){
                        $price_1 = getGet('price_1');
                        $sql = "select count(*) total from vw_show_product WHERE price BETWEEN 300 AND 400";     
                    } else {
                        if(isset($_GET['price_2'])){
                            $price_1 = getGet('price_2');
                            $sql = "select count(*) total from vw_show_product WHERE price BETWEEN 400 AND 600";     
                        } else {
                            if(isset($_GET['price_3'])){
                                $price_1 = getGet('price_3');
                                $sql = "select count(*) total from vw_show_product WHERE price BETWEEN 600 AND 800";     
                            } else {
                                if(isset($_GET['price_4'])){
                                    $price_1 = getGet('price_4');
                                    $sql = "select count(*) total from vw_show_product WHERE price BETWEEN 800 AND 1000";     
                                } else {
                                    if(isset($_GET['price_5'])){
                                        $price_1 = getGet('price_5');
                                        $sql = "select count(*) total from vw_show_product WHERE price BETWEEN 1000 AND 1500";     
                                    } else {
                                        if(isset($_GET['price_6'])){
                                            $price_1 = getGet('price_6');
                                            $sql = "select count(*) total from vw_show_product WHERE price BETWEEN 1500 AND 2000";
                                        } else {
                                            if(isset($_GET['price_7'])){
                                                $price_1 = getGet('price_7');
                                                $sql = "select count(*) total from vw_show_product WHERE price > 2000";     
                                            } else {
                                                $sql = "select count(*) total from vw_show_product";         
                                            }      
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
    };    
$data = executeResult($sql, true);
$total = $data['total'];

$pageNum = ceil($total / $limit);
// Xac dinh so page trong trang: END

$page = getGet('page');
if( empty($page) || $page <=0 ) {
    $page = 1;
}

$index = ($page - 1) * $limit;


if(isset($_GET['id_brand']) && $_GET['id_brand'] != '' && $_GET['id_brand'] > 0){
        $id_brand = getGet('id_brand');
        $sql = "select * from vw_show_product where id_brand = '$id_brand' limit $index, $limit";
    } else {
        if(isset($_GET['id_type']) && $_GET['id_type'] != '' && $_GET['id_type'] > 0) {
            $id_type = getGet('id_type');
            $sql = "select * from vw_show_product where id_type = '$id_type' limit $index, $limit";
        } else {    
            if(isset($_GET['s']) && $_GET['s'] != '' && $_GET['s'] > 0) {
                $s = $_GET['s'];
                $sql = "select * from vw_show_product where name_products like '%$s%' limit $index, $limit";
            } else {
                if(isset($_GET['price_0'])){
                    $price_1 = getGet('price_0');
                    $sql = "select * from vw_show_product WHERE price < 300";     
                } else {
                    if(isset($_GET['price_1'])){
                        $price_1 = getGet('price_1');
                        $sql = "select * from vw_show_product WHERE price BETWEEN 300 AND 400";     
                    } else {
                        if(isset($_GET['price_2'])){
                            $price_1 = getGet('price_2');
                            $sql = "select * from vw_show_product WHERE price BETWEEN 400 AND 600";     
                        } else {
                            if(isset($_GET['price_3'])){
                                $price_1 = getGet('price_3');
                                $sql = "select *  from vw_show_product WHERE price BETWEEN 600 AND 800";     
                            } else {
                                if(isset($_GET['price_4'])){
                                    $price_1 = getGet('price_4');
                                    $sql = "select *  from vw_show_product WHERE price BETWEEN 800 AND 1000";     
                                } else {
                                    if(isset($_GET['price_5'])){
                                        $price_1 = getGet('price_5');
                                        $sql = "select *  from vw_show_product WHERE price BETWEEN 1000 AND 1500";     
                                    } else {
                                        if(isset($_GET['price_6'])){
                                            $price_1 = getGet('price_6');
                                            $sql = "select *  from vw_show_product WHERE price BETWEEN 1500 AND 2000";
                                        } else {
                                            if(isset($_GET['price_7'])){
                                                $price_1 = getGet('price_7');
                                                $sql = "select * from vw_show_product WHERE price > 2000";
                                            } else {         
                                                $sql = "select * from vw_show_product limit $index, $limit";  
                                            }
                                        }   
                                    }     
                                }
                            }
                        }
                    }
                }
            }
        }
    };                       
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

    <link rel="stylesheet" type="text/css" href="style_sp/all_product.css">
    <link rel="stylesheet" type="text/css" href="style_shared/shared.css">
</head>
<body style="font-family: 'Hind', sans-serif;">
    <div class="s11">
        <div>
        <div class="img-01">
            
            <div class=" img-11"><img src="style_sp/img-all/banner4.jpg   "></div>
            
        </div>
    </div>
    

      <div class="s02">
        <div class="c02">
            <div class="d03">
              <div class="e01"> <h4 class="text">Product arrangements</h4></div>
              <a href="all_product.php" ><div class="e02 " style="padding-left: 30px;"><p>All product</p></div> </a>
            <div class="e04"><p > Sort by product category</p></div>
            <?php 
                $sql= "select * from type;";
                $result = mysqli_query($conn,$sql);
                while ($row = mysqli_fetch_assoc($result)){
                echo '<a href="all_product.php?id_type='.$row['id_type'].'">
                            <div class="e02 e03">
                                <p><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-caret-right" viewBox="0 0 16 16">
                            <path d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z"/>
                            </svg>'.$row['type'].'</p>
                            </div>
                      </a>';
                        }               
            ?>
            <div class="e04"><p > Classified by brand</p></div>
            <?php 
                $sql= "select * from brand;";
                $result = mysqli_query($conn,$sql);
                while ($row = mysqli_fetch_assoc($result)){
                echo '<a href="all_product.php?id_brand='.$row['id_brand'].'">
                            <div class="e02 e03">
                                <p><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-caret-right" viewBox="0 0 16 16">
                            <path d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z"/>
                            </svg>'.$row['brand'].'</p>
                            </div>
                      </a>';
                }               
            ?>

            </div>
            <div class="d03">
                <div class="e01"> <h4 class="text">Product arrangements</h4></div>
                <div class="e04"><p > Sort by price</p></div>                  
                <a href="all_product.php?price_0=0">
                    <div class="e02 e03">
                        <p>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-caret-right" viewBox="0 0 16 16">
                            <path d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z"/>
                            </svg>< 300$
                        </p>
                    </div>
                </a>
                <a href="all_product.php?price_1=1">
                    <div class="e02 e03">
                        <p>
                            <!-- <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-caret-right" viewBox="0 0 16 16">
                            <path d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z"/> -->
                            </svg>300$ - 400$
                        </p>
                    </div>
                </a>
                <a href="all_product.php?price_2=2">
                    <div class="e02 e03">
                        <p>

                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-caret-right" viewBox="0 0 16 16">
                            <path d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z"/>
                            </svg>400$ - 600$
                        </p>
                    </div>
                </a>
                <a href="all_product.php?price_3=3">
                    <div class="e02 e03">
                        <p>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-caret-right" viewBox="0 0 16 16">
                            <path d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z"/>
                            </svg>600$ - 800$
                        </p>
                    </div>
                </a>
                <a href="all_product.php?price_4=4">
                    <div class="e02 e03">
                        <p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-caret-right" viewBox="0 0 16 16">
                            <path d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z"/>
                            </svg>800$ - 1000$
                        </p>
                    </div>
                </a>
                <a href="all_product.php?price_5=5">
                    <div class="e02 e03">
                        <p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-caret-right" viewBox="0 0 16 16">
                            <path d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z"/>
                            </svg>1000$ - 1500$
                        </p>
                    </div>
                </a>
                <a href="all_product.php?price_6=6">
                    <div class="e02 e03">
                        <p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-caret-right" viewBox="0 0 16 16">
                            <path d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z"/>
                            </svg>1500$ - 2000$
                        </p>
                    </div>
                </a>
                <a href="all_product.php?price_7=7">
                    <div class="e02 e03">
                        <p>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-caret-right" viewBox="0 0 16 16">
                            <path d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z"/>
                            </svg>> 2000$ 
                        </p>
                    </div>
                </a>
              
              
              
            </div>
        </div>

        <div class="b11">
            <div class="left">
                <div class="tyles">
                    <div class="tyle"   ><h4 class="texts">
                     <?php
                        if(isset($_GET['id_brand'])){
                            $id_brand = getGet('id_brand');
                            $sql = "select * from brand where id_brand = '$id_brand'";
                            $result = mysqli_query($conn,$sql);
                            while ($row = mysqli_fetch_assoc($result)){
                                echo''.$row['brand'].'';
                                };

                            }else{
                                if(isset($_GET['id_type'])){
                                $id_type = getGet('id_type');
                                $sql = "select * from type where id_type = '$id_type'";
                                $result = mysqli_query($conn,$sql);
                                while ($row = mysqli_fetch_assoc($result)){
                                    echo''.$row['type'].'';
                                    };
                                }else{
                                    if(isset($_GET['price_0'])){
                                        echo'products cost less than 300$ :';
                                    }else{
                                        if(isset($_GET['price_1'])){
                                            echo'Products priced from: < 300$ - 400$ ';
                                        }else{
                                            if(isset($_GET['price_2'])){
                                                echo'Products priced from: 400$ - 600$ ';
                                            }else{
                                                if(isset($_GET['price_3'])){
                                                    echo'Products priced from: 600$ - 800$ ';
                                                }else{
                                                    if(isset($_GET['price_4'])){
                                                        echo'Products priced from: 800$ - 1000$ ';
                                                    }else{
                                                        if(isset($_GET['price_5'])){
                                                            echo'Products priced from: 1000$ - 1500$ ';
                                                        }else{
                                                            if(isset($_GET['price_6'])){
                                                                echo'Products priced from: 1500$ - 2000$';
                                                            }else{
                                                                if(isset($_GET['price_7'])){
                                                                    echo'Products priced from: > 2000$ ';
                                                                }else{
                                                                    echo'All product';
                                                                }
                                                            }
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        ?>
                    


                    </h4></div>
                    <div class="hinh_binh_hanh"></div>
                </div>
                <div class="head1"></div>
            </div>
            
            <div class="c03">
                
                <?php
            $index = 0;
            foreach($uList as $item) {    
            echo '<a href="product.php?id='.$item['id_products'].'"class="d04" >
            <div >
                <div class="img_product-1" >
                    <img src="'.$item['img_1'].'"style="width: 100% ; height: auto;">
                </div>
                <div class ="d05">
                    <h4>'.$item['name_products'].'</h4></br>
                    <p>price:'.$item['price'].'$</p>
                </div>                         
              </div></a>';};
               
                  ?>  
            </div>  
        </div>
    </div>
    <div class="page-s">
        <div class="">
            <ul class="page">
            <?php
                    if($page > 1) {
                        echo '<li ><a href="?page='.($page - 1).'&s='.$s.'&id_type='.$id_type.'&id_brand='.$id_brand.'"><button class="page-2" style="float: left;">Previous</button></a></li>';       
                    }
                    
                    for ($i=1; $i <= $pageNum; $i++) {
                        if($i == $page) {
                            echo "<a class=\"\" href=\"?page=$i\"><li class=\"page-1 active\">$i</li></a>";
                        } else {
                            echo "<a class=\"\" href=\"?page=$i\"><li class=\"page-1\">$i</li></a>";
                        }
                    }
      
                    if(count($uList) == $limit) {
                        echo '<li ><a href="?page='.($page + 1).'&s='.$s.'&id_type='.$id_type.'&id_brand='.$id_brand.'"><button class="page-2" style="float: right;">Next</button></a></li>';
                    }
            ?>
            </ul>
        </div>
    </div>
</div>

</body>
</html>
<div>
    <?php
        require "footer.php";

      ?>
</div>
