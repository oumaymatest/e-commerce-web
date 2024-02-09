<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce web</title>
    <!--css link-->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="product_style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,500&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
</head>

<body>

    <!-- navigation -->
    <?php
    include('imports/header.php');
    ?>

    <!-- hnaya ghaykon lproduct dyalna -->
    <section class="product-container">
        <!-- left side -->
        <div class="img-card">
            <img src="images/img1.jpg" alt="" height="450px" id="main-img">

            <!-- dok les images sgharin li mt7t limage du produit -->
            <div class="small-card">
                <img src="images/img1.jpg" class="smImg">
                <img src="images/pijama2.jpg" class="smImg">
                <img src="images/pijama5.jpg" class="smImg">
                <img src="images/pijama3.jpg" class="smImg">
            </div>
        </div>

        <!-- right side -->
        <div class="product-info">
            <h3>LEVI'S® WOMEN'S XL TRUCKER JACKET</h3>
            <h5>Price: $140 <del>$170</del></h5>

            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsa accusantium, aspernatur provident beatae
                corporis veniam atque facilis, consequuntur assumenda, vitae dignissimos iste exercitationem dolor
                eveniet alias eos ullam nesciunt voluptatum.</p>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsa accusantium, aspernatur provident beatae
                corporis veniam atque facilis, consequuntur assumenda, vitae dignissimos iste exercitationem dolor
                eveniet alias eos ullam nesciunt voluptatum.</p>

            <div class="size">
                <h5>Size :</h5>

                <select name="size-option" id="sizeOpt" class="sizeOpt">
                    <option value="xxl">XXL</option>
                    <option value="XL">XL</option>
                    <option value="Regular">Regular</option>
                    <option value="Small">Small</option>
                </select>

                <div class="quantity">
                    <input type="number" name="" id="" min="1" max="10" value="1">
                    <a href="add-panier.html"><button class="main-btn small-btn">Add to Cart</button></a>
                </div>

            </div>
        </div>

    </section>
    <!--Contact section kanft7o section okhra  -->
    <section class="Contact">
        <div class="contact-info">
            <div class="first-info">
                <h3>Brandscop</h3>
                <br>
                <p> 3245 FES,Maroc </p>
                <br>
                <p>+212779-452787</p>
                <br>
                <p>brandscoop18@gmail.com</p>

                <div class="social-icon">
                    <a href="#"><i class='bx bxl-facebook'></i></a>
                    <a href="#"><i class='bx bxl-twitter'></i></a>
                    <a href="#"><i class='bx bxl-instagram'></i></a>
                    <br>
                    <a href="#"><i class='bx bxl-whatsapp'></i></a>
                    <a href="#"><i class='bx bxl-linkedin'></i></a>
                </div>

            </div>

            <div class="second-info">
                <h4>Support</h4>
                <p>Contact us</p>
                <p>About page</p>
                <p>Size Guide</p>
                <p>Shopping & Resturns</p>
                <p>Privacy</p>
            </div>

            <div class="third-info">
                <h4>Shop</h4>
                <p>Men's Shopping</p>
                <p>Women's Shopping</p>
                <p>Kids's Shopping</p>
                <p>Furniture</p>
                <p>Discount</p>

            </div>
            <div class="fourth-info">
                <h4>Company</h4>
                <p>About</p>
                <p>Blog</p>
                <p>Affiliate</p>
                <p>Login</p>

            </div>

            <div class="five">
                <h4>Subscirbe</h4>
                <p>Receive Updates, Hot Deals,Discounts sent Straight In Your Inbox Daily</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                <p>Receive Updates, Hot Deals,Discounts sent Straight In Your Inbox Daily</p>

            </div>


        </div>

        </div>

    </section>
    <?php
    include('imports/footer.php');
    ?>
    <!-- script js -->
    <script src="product.js"> 
    </script>
</body>

</html>