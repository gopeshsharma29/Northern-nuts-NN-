<?php
session_start();

if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST['Add_To_Cart']))
    {
        if(isset($_SESSION['cart'])){
            $myitems=array_column($_SESSION['cart'],'Item_Name');
            if(in_array($_POST['Item_Name'],$myitems))
            {
                echo"<script>
                alert('Item Already Added');
                window.location.href='shop.php';
                </script>";
            }
            else{
            $count=count($_SESSION['cart']);
            $_SESSION['cart'][$count]=array('Item_Name'=>$_POST['Item_Name'],'Item_price'=>$_POST['Item_price'],'Item_quantity'=>$_POST['Item_quantity'],'img'=>$_POST['img']);
            echo"<script>
            alert('Item Added succesfully');
                window.location.href='shop.php';
                </script>";
            }
        }
        else{
            $_SESSION['cart'][0]=array('Item_Name'=>$_POST['Item_Name'],'Item_price'=>$_POST['Item_price'],'Item_quantity'=>$_POST['Item_quantity'],'img'=>$_POST['img']);
            echo"<script>
                alert('Item Added');
                window.location.href='shop.php';
                </script>";
        }
    }
    if(isset($_POST['remove_Item']))
    {
        foreach($_SESSION['cart'] as $key => $value)
        {
            if($value['Item_Name']==$_POST['Item_Name'])
            {
            unset($_SESSION['cart'][$key]);
            $_SESSION['cart']=array_values($_SESSION['cart']);
            echo"<script>
            alert('Item Removed');
            window.location.href='cart.php'
            </script>";
        }
        }
    }
}
?>