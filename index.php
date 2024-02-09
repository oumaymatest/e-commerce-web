<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce web</title>
    <!--css link-->
    <link rel="stylesheet" href="style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,500&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
</head>

<body>

    <!-- cnnect to the data base  -->
    <?php
    include_once('admin/actions/dbConnexion.php');
    // select the element from the db
    $sql = "SELECT * FROM produit";
    $result = mysqli_query($conn, $sql);
    ?>
    <!-- l header kayn f folder smyto imports hwa wl footer drt lih rir import ila bghiti diri chi modification -->
    <?php
    include('imports/header.php');
    ?>
    <section class="main-home">
        <div class="main-text">
            <h5>Winter collection</h5>
            <h1>New Winter <br> collection 2024</h1>
            <p>there is nothing like trend</p>
            <a href="#" class="main-btn">Shop Now <i class='bx bx-right-arrow-alt'></i></a>
        </div>
        <div class="down-arrow">
            <a href="#trending" class="down"><i class='bx bx-down-arrow-alt'></i></a>
        </div>
    </section>
    <!--trending-product-section-->
    <!--bach  knktbo taht l backgrond-->
    <class="trending-product" id="trending">
        <div class="center-text">
            <h2>Our Trending <span>Products</span></h2>

        </div>
        <div class="products">
            <!-- display all the product -->
            <?php
            while ($row = mysqli_fetch_array($result)) {
            ?>
                <div class="row">
                    <a href="product_details.html">
                        <img src="admin/photos/<?php echo $row["photo"] ?>" alt="" width="300" height="300
                    0"></a>
                    <!-- hadi ghadi ndiro fiha stock wash kayen f stock awla la  -->
                    <div class="product-text">
                        <h5>Sale <?php echo $row['sold'] ?></h5>
                    </div>
                    <!-- hnaya review 3la lproduct for now we're gonna leave it like that -->
                    <div class="heart-icon">
                        <i class='bx bx-heart'></i>
                    </div>
                    <div class="ratting">
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bxs-star-half'></i>
                        <div class="price">
                            <h4><?php echo $row['titre'] ?></h4>
                            <p><?php echo $row['prix'] ?></p>
                        </div>
                    </div>
                </div>

            <?php
            }
            ?>
        </div>

        </section>
        <!--Client-Review-Section-->
        <section class="client-reviews">
            <div class="reviews">
                <img src="images/rev.jpg" alt="" width="300" height="300">
                <h3>client reviews</h3>
                <img src="" alt="">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veritatis necessitatibus aspernatur cumque
                    officiis eaque ullam reprehenderit quam accusantium repudiandae optio corrupti assumenda,
                    placeat repellat rem. Sunt laudantium odio molestias accusantium!</p>
                <h2>Oumayma Lmamnii</h2>
                <p>CEO of Addle</p>
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

        <script src="javaouma.js"></script>

</body>

</html>