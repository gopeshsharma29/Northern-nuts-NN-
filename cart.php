<?php 
    include("header.php");
    session_start();
?>
    <section id="cart" class="section-p1">
        <table>
            <thead>
                <tr>
                    <td>Image</td>
                    <td>Product</td>
                    <td>Price</td>
                    <td>Quality</td>
                    <td>total</td>
                    <td>Remove</td>
                </tr>
            </thead>
            <tbody>
                    <?php 
                    if(isset($_SESSION['cart'])){
                    foreach($_SESSION['cart'] as $key => $value)
                    {
                        // $total=$total+$value['Item_price'];
                        echo"
                        <tr class='tr'>
                        <td><img src='$value[img]'></td>
                        <td class='pname'>$value[Item_Name]</td>
                        <td>₹$value[Item_price]<input type='hidden' class='iprice' value='$value[Item_price]'></td>
                        <td><input class='iquantity' type='number' onchange='subTotal()' value='$value[Item_quantity]' min='1' max='10'></td>
                        <td class='itotal'></td>
                        <td><form action='managecart.php' method='POST'>
                        <button name='remove_Item' class='rbtn'>Remove</button>
                        <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
                        </form>
                        </td>";
                    }
                }
                    ?>
                </tbody>
        </table>
    </section>
    <section id="cart-add" class="section-p1">
        <div id="coupon">
            <h3>Apply coupon</h3>
            <div>
                <input type="text" placeholder="Enter your coupon code">
                <button class="normal">Apply</button>
            </div>
        </div>
        <div id="subtotal">
            <h3>Cart totals</h3>
            <table>
                <tr>
                    <td>cart total</td>
                    <td id="gtotal"></td>
                </tr>
                <tr>
                    <td>shipping</td>
                    <td>free</td>
                </tr>
                <tr>
                    <td><strong>Total</strong></td>
                    <td id="ggtotal"></td>
                </tr>
            </table>
            <button class="normal">Proceed to checkout</button>
        </div>
    </section>
    <section id="page-header">
    <div class="textb">
        <h2>premium & affordable</h2>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing.</p>
    </div>
    <!-- <div class="imgb"><img src="img/mbanner.png" alt=""></div> -->
    </section>
    
    <script>
    var gt=0
    var iprice=document.getElementsByClassName('iprice');
    var iquantity=document.getElementsByClassName('iquantity');
    var itotal=document.getElementsByClassName('itotal');
    var gtotal=document.getElementById('gtotal')
    

    function subTotal()
    {
        gt=0
        for(i=0;i<iprice.length;i++)
        {
            itotal[i].innerText=(iprice[i].value)*(iquantity[i].value)

            gt=gt+(iprice[i].value)*(iquantity[i].value);   
        }
        gtotal.innerText=gt
        ggtotal.innerText=gt
        
    }


    subTotal();


</script>

<?php
    require("footer.php"); 
    ?>
