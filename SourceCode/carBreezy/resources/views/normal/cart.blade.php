<style>
    .content{
    padding: 0 0;
}

.cart-top-wrap{
    display: flex;
    justify-content: center;
    align-items: center;
}

.cart-top{
    height: 2px;
    width: 70%;
    background-color: #ddd;
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin: 50px 0 100px;
}

.cart-top-item{
    height: 40px;
    width: 40px;
    border-radius: 50%;
    border: 1px solid #ddd;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: #fff;
}


.cart-top-cart{
    background-color: aqua;
}

/*  */

.cart-content{
    display: flex;
    flex-wrap: wrap;
}

.cart-content-left{
    flex: 2;
    padding-right: 12px;
}

.cart-content-left table{
    width: 100%;
    text-align: center;
}

.cart-content-left table th{
    padding-bottom: 20px;
    font-size: 13px;
    text-transform: uppercase;
    border-collapse: collapse;
    border-bottom: 1px solid #ddd;
}

.cart-content-left table p{
    font-size: 13px;
}

.cart-content-left table input{
    width: 40px;
    height: 20px;
    text-align: center;
}

.cart-content-left table button{
    width: 20px;
    height: 20px;
    cursor: pointer;
}

.cart-content-left table img{
    width: 130px;
    height: 130px;
}

.cart-content-left table td{
    border-bottom: 1px solid #ddd;
}

.cart-content-right{
    flex: 1;
    padding: 0 12px;
    border-left: 1px solid #ddd ;
}

.cart-content-right table{
    width: 100%;
}

.cart-content-right table th{
    padding-bottom: 20px;
    font-size: 13px;
    text-transform: uppercase;
    border-collapse: collapse;
    border-bottom: 1px solid #ddd;
}

.cart-content-right table td{
    font-size: 13px;
    padding: 12px;
}

.cart-content-right table tr:nth-child(4) td{
    border-bottom: 1px solid #ddd;
}

.cart-content-right-button{
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
}

.cart-content-right-button button{
    width: 170px;
    height: 30px;
    margin: 20px 0;
    border: 1px solid #ddd;
    font-size: 16px;
    cursor: pointer;
    justify-content: center;
    align-items: center;
    align-content: center;
}

.cart-content-right-button button:hover{
    opacity: 0.5;
}

.cart-content-right-button a{
    display: block;
    width: 100%;
    height: 100%;
    line-height: 25px;
}

#buttonPayment{
    background-color:  #6abd45;
    
}

#buttonPayment a{
    color: #fff;
}
</style>

@extends('master.clientmasterpage')
@section('main')
<div class="content">
    <form action="">
        <div class="container-content">
            <div class="cart-top-wrap">
                <div class="cart-top">
                    <div class="cart-top-cart cart-top-item">
                        <i class="ti-shopping-cart "></i>
                    </div>
                    <div class="cart-top-pay cart-top-item">
                        <i class="ti-credit-card"></i>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="container-content">
            <div class="cart-content">
                <div class="cart-content-left">
                    <table>
                        <tr>
                            <th style="width: 40px; text-align:center ;">ID</th>
                            <th>car's name</th>
                            <th>color</th>
                            <th>igm car</th>
                            <th>Quantity</th>
                            <th>Into money</th>
                            <th>Delete</th>
                        </tr>
                        
                        @php
                        $totalProduct = 0;
                        $totalP = 1;
                        $total = 0;
                        $idcus = {{\Illuminate\Support\Facades\Session::has('cusid')? \Illuminate\Support\Facades\Session::get('cusid') : '-1'}}
                        $i = 0;
                        $car->price = number_format($car->price, 0, ',', '.');
                        $car->price .= "VND";
                        if ($car->quantity == 1){
                            $car->quantity.= " number";
                        }else{
                            $car->quantity .= " numbers";
                        }
                        $n =0;
                        @endphp
                        @if ($idcus!=-1)
                            
                            @foreach ($cart as $cart_item) {
                                @if ($cart_item['cusid'] == $idcus)
                                    {{$totalProduct += $cart_item['amount']}}
                                    {{$totalP = $cart_item['amount'] * $cart_item['productPrice']}}
                                    {{$total += $totalP}}
                                    {{$i++}}
                                    <tr>
                                        <td >{{$car->carname}}</td>
                                        <td >{{$car->color}}</td>
                                        <td>
                                            <img src="{{asset("/storage/images/Car/".$car->image)}}" alt="" height="30" width="30" >
                                        </td>
                                        <td>
                                            <label style="display: inline-block;" for="amount">Amount: </label>
                                            <input style="display: inline-block;" type="number" name="amount" min='1' max=5 value="1" > 
                                        </td>
                                        <td>
                                            {{$car->price}}
                                        </td>
                                        <td>
                                            
                                        </td>
                                        <td>
                                            <a href="index.php?manager=addtocart&delete=<?php echo $cart_item['id'] ?>">X</a>
                                        </td>
                                    </tr>
                                @endif
                            @endforeach
                        @endif
                    </table>
                </div>

                <div class="cart-content-right">
                    <table>
                        <tr>
                            <th colspan="2">Total money</th>
                        </tr>
                        <tr>
                            <td>Total product</td>
                            <td>{{echo $totalProduct}}</td>
                        </tr>
                        <tr>
                            <td>Total money</td>
                            <td>{{echo number_format($total, 0, ',', '.')}}<sup> vnđ</sup></td>
                        </tr>
                        <tr style="font-weight: bold;">
                            <td>Total</td>
                            <td>{{echo number_format($total, 0, ',', '.')}} <sup>vnđ</sup></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </form>
    <?php
    if (isset($_GET['alert'])) {

        $a = $_GET['alert'];
        if ($a == 1) {
            echo "<script> alert('No goods to pay')</script>";
        }
    }
    ?>
</div>
@endsection