<?php 
    include("header.php")
    
    ?>
    <form action="managecart.php" method="POST" enctype="multipart/form-data">
        
    <section id="prodetails" class="section-p1">
        <div class="single-pro-img">
            <img src="img/nnproducts/cashew.JPEG" width="100%" id="mainImg" alt="">
            <div class="small-img-group">
                <div class="small-img-col"><img src="img/products/f1.jpg" width="100%" class="smallImg" alt=""></div>
                <div class="small-img-col"><img src="img/products/f2.jpg" width="100%" class="smallImg" alt=""></div>
                <div class="small-img-col"><img src="img/products/f3.jpg" width="100%" class="smallImg" alt=""></div>
                <div class="small-img-col"><img src="img/products/f4.jpg" width="100%" class="smallImg" alt=""></div>
            </div>

        </div>
        
        <div class="single-pro-detials">
            <h6>Home/ Dry fruits</h6>
            <h4>Cashew</h4>
            <h2>₹750</h2>
            <select>
                <option>select Quality</option>
                <option>select Quality</option>
                <option>select Quality</option>
            </select>
            <input type="hidden" name="img" value="img/nnproducts/cashew.JPEG">
            <input type="number" name="Item_quantity" min="1" value="1">
            <button type="submit" name="Add_To_Cart" class="normal">add to cart</button>
            <input type="hidden" name="Item_Name" value="Cashew">
            <input type="hidden" name="Item_price" value="750">
            <h4>Product details</h4>
            <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, harum exercitationem tempore, sed
                itaque ab rem distinctio aperiam doloribus ipsam voluptas explicabo? Neque animi sunt, nostrum excepturi
                nihil blanditiis ipsam optio odio praesentium, molestias officiis earum culpa quibusdam expedita
                facilis, sapiente assumenda unde nobis quasi. Atque cumque velit ab. Quidem?</span>
        </div>
    </section>
    </form>
    <section id="product1" class="section-p1">
        <h1>NN special </h1>
        <p>Best products for health & easy to consume</p>
        <div class="pro-container">
            <div class="pro" id="spro">
                <img src="img/products/f1.jpg" alt="">
                <div class="des">
                    <span>Cashew</span>
                    <h5>one peice best Quality Cashew</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>₹750</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro" id="spro">
                <img src="img/products/f1.jpg" alt="">
                <div class="des">
                    <span>Cashew</span>
                    <h5>one peice best Quality Cashew</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>₹750</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div><div class="pro" id="spro">
                <img src="img/products/f1.jpg" alt="">
                <div class="des">
                    <span>Cashew</span>
                    <h5>one peice best Quality Cashew</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>₹750</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div><div class="pro" id="spro">
                <img src="img/products/f1.jpg" alt="">
                <div class="des">
                    <span>Cashew</span>
                    <h5>one peice best Quality Cashew</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>₹750</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
        </div>
    </section>
    <section id="newsletter" class="section-p1 section-m1">
        <div class="newstext">
            <h4>Sign Up for Newsletter</h4>
            <p>Get E-mail upadate about our new shop and <span>special offers.</span></p>
        </div>
        <div class="form">
            <input type="text" placeholder="Enter your Email address">
            <button class="normal">Sign up</button>
        </div>
    </section>



    <script>
            // script for image change on click
            var mainImg = document.getElementById("mainImg")
            var smalling = document.getElementsByClassName("smallImg")

            smalling[0].onclick =function(){
                mainImg.src = smalling[0].src;
            }
            smalling[1].onclick =function(){
                mainImg.src = smalling[1].src;
            }
            smalling[2].onclick =function(){
                mainImg.src = smalling[2].src;
            }
            smalling[3].onclick =function(){
                mainImg.src = smalling[3].src;
            }
    </script>


    <?php 
    include("footer.php")
?>