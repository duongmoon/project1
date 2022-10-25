<?php
require "header.php";

require_once('utyls/utility.php');
require_once('db/dbhelper.php');


$List[] = $List1[] =  '';
if (isset($_GET['submit'])) {
    if (!empty($_GET['id_1']) && !empty($_GET['id_2'])) {
        $id_1 = $_GET['id_1'];
        $id_2 = $_GET['id_2'];

        $sql1 = "select * from vw_show_product where id_products = '$id_1'";

        $sql2 = "select * from vw_show_product where id_products = '$id_2'";

        $List = executeResult($sql1, true);


        $List1 = executeResult($sql2, true);
    } else {
        echo '<script type="text/javascript">alert( "Please select Both Products.")   </script>   ';
    }
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" type="text/css" href="style_compare_vs_contact/compare.css">
    <link rel="stylesheet" type="text/css" href="style_shared/shared.css">

</head>
<style>
    /* .obj{
        display: none;
    } */
</style>

<body style="background-color: #fff;">
    <div id="compare_comtainer">


        <div class="compare-dropmenu_bar">
            <form action="" method="get">
                <?php
                $index = 0;
                $num = 0;
                $list[]="";
                $list1[]="";
                $sql = "select * from vw_show_product;";
                $result = mysqli_query($conn, $sql);
                $result1 = mysqli_query($conn, $sql);
                ?>
                <div>
                    <table>
                        <tr>
                            <td>First product: </td>
                            <td>
                                <select name="id_1">
                                    <option value="">---------------Select Product---------------</option>
                                    <?php
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo '<option value="' . $row['id_products'] . '"><span>' . (++$index) . '</span>' . $row['name_products'] . '</option>';
                                    }
                                    ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Second one:</td>
                            <td>
                                <select name="id_2">
                                    <option value="">---------------Select Product---------------</option>
                                    <?php
                                    while ($row = mysqli_fetch_assoc($result1)) {
                                        echo '<option value="' . $row['id_products'] . '"><span>' . (++$num) . '</span>' . $row['name_products'] . '</option>';
                                    }
                                    ?>
                                </select>
                            </td>
                        </tr>
                    </table>
                </div>

                <div class="input_compare">
                    <input type="submit" name="submit" value="compare" onclick="pwd()">
                </div>
            </form>
        </div>
        <div class="obj" >
        <table class="compare_image_bar">
            <td>

            </td>
            <td class="image1">
                <img id="image1" src="<?= $List['img_1'] ? $List['img_1'] : "" ?> ">
            </td>

            <td class="image1 img2">
                <img id="image2" src="<?= $List1['img_1'] ? $List1['img_1'] : "" ?>">
            </td>
            <td>

            </td>
        </table>


        <div class="compare_detail_box">
            <div class="Detail_C1">
                <table id="table01">
                    <tr>
                        <td>
                            <div class="style-s1">Name</div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div>Made in</div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div>Brand</div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div>Type</div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div>Wattage</div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div>Material</div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div>Power Input</div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div>Price</div>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="Detail_C2">
                <table id="table02">
                    <tr>
                        <td>
                            <div class="BGstyle01 style-s1" id="name1">
                                <p><?php if($List['name_products']!=null){echo $List['name_products'];} ?></p>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="BGstyle02" id="name1">
                                <p><?php if($List['made_in']!=null){echo$List['made_in'];} ?></p>
                            </div>
                        </td>
                    </tr>
                    <!-- brand  -->
                    <tr>
                        <td>
                            <div class="BGstyle01" id="brand1">
                                <p><?php if($List['brand']!=null){echo$List['brand'];} ?></p>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="BGstyle02" id="type1">
                                <p><?= $List['type'] ? $List['type'] : "A" ?></p>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="BGstyle01" id="cool1">
                                <p><?= $List['wattage'] ? $List['wattage'] : "A" ?></p>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="BGstyle02" id="heat1">
                                <p><?= $List['material'] ? $List['material'] : "A" ?></p>
                            </div>
                        </td>
                    </tr>
                    <!-- power_input -->
                    <tr>
                        <td>
                            <div class="BGstyle01" id="power1">
                                <p><?= $List['Power_Input'] ? $List['Power_Input'] : "A" ?></p>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="BGstyle02" id="price1">
                                <p><?= $List['price'] ? $List['price'] : "A" ?></p>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="Detail_C3">
                <table id="table03">
                    <tr>
                        <td>
                            <div class="BGstyle01 style-s1" id="name2">
                                <p><?= $List1['name_products'] ? $List1['name_products'] : "A" ?></p>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="BGstyle02" id="name1">
                                <p><?= $List1['made_in'] ? $List1['made_in'] : "A" ?></p>
                            </div>
                        </td>
                    </tr>
                    <!-- brand -->
                    <tr>
                        <td>
                            <div class="BGstyle01" id="brand2">
                                <p><?= $List1['brand'] ? $List1['brand'] : "A" ?></p>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="BGstyle02" id="type2">
                                <p><?= $List1['type'] ? $List1['type'] : "A" ?></p>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="BGstyle01" id="cool2">
                                <p><?= $List1['wattage'] ? $List1['wattage'] : "A" ?></p>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="BGstyle02" id="heat2">
                                <p><?= $List1['material'] ? $List1['material'] : "A" ?></p>
                            </div>
                        </td>
                    </tr>
                    <!-- power_input -->
                    <tr>
                        <td>
                            <div class="BGstyle01" id="power2">
                                <p><?= $List1['Power_Input'] ? $List1['Power_Input'] : "A" ?></p>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="BGstyle02" id="price2">
                                <p><?= $List1['price'] ? $List1['price'] : "A" ?></p>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        </div>
    </div>
    <script type="text/javascript">
          var x =true ;
          function pwd(){
               if(x){
                    document.getElementById('obj').style.display="block";
                    x= false;
               }else{
                    document.getElementById('obj').style.display='none';
                    x=true;
               }
          }
     </script>
    <!-- <Script>
        var ka = document.querySelector('.obj');

        function fshow() {
            ka.style.display = "block";
            ka.className = " active";
        }
    </Script> -->
</body>
<?php
require "footer.php";

?>

</html>