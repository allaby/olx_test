<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from pxcreate.in/theme/shopsimple/color1/product.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 05 Sep 2021 11:40:31 GMT -->

<head>
    <meta charset="utf-8">
    <title>ShopSimple - A Responsive Html5 Ecommerce Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- styles -->
    <link href='http://fonts.googleapis.com/css?family=Droid+Serif' rel='stylesheet' type='text/css' />
    <link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css' />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,800,700,300' rel='stylesheet' type='text/css'>
    <link href="<?= base_url() ?>assets/detail/assets/css/bootstrap.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/detail/assets/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/detail/assets/css/docs.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/detail/assets/js/google-code-prettify/prettify.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/detail/assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url() ?>assets/detail/assets/css/flexslider.css" type="text/css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/detail/fancybox/jquery.fancybox-1.3.4.css" media="screen" />

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- fav and touch icons -->
    <link rel="shortcut icon" href="<?= base_url() ?>assets/detail/assets/ico/favicon.html">
</head>

<body>
    <script>
        var chatbox = document.getElementById('fb-customer-chat');
        chatbox.setAttribute("page_id", "102581012164214");
        chatbox.setAttribute("attribution", "biz_inbox");

        window.fbAsyncInit = function() {
            FB.init({
                xfbml: true,
                version: 'v12.0'
            });
        };

        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = 'https://connect.facebook.net/ro_RO/sdk/xfbml.customerchat.js';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    <!-- Header Start -->
    <!-- <header>
        <div class="navbar navbar-fixed-top" id="main-nav">
            <div class="container">
                <button data-target=".nav-collapse" data-toggle="collapse" class="btn btn-navbar" type="button">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <nav class="nav-collapse collapse" style="height:0px">
                    <ul class="nav">
                        <li class="active"><a href="index.html">Home</a>
                        </li>
                        <li><a href="myaccount.html">My Account </a>
                        </li>
                        <li><a href="shopping-cart.html">Shopping Cart</a>
                        </li>
                        <li><a href="checkout.html">Checkout</a>
                        </li>
                    </ul>
                </nav>
                <ul class="nav pull-right left-tablet">
                    <li class="dropdown hover">
                        <a data-toggle="" class="dropdown-toggle" href="#">US Doller <b class="caret"></b></a>
                        <ul class="dropdown-menu currency">
                            <li><a href="#">US Doller</a>
                            </li>
                            <li><a href="#">Euro </a>
                            </li>
                            <li><a href="#">British Pound</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown hover">
                        <a data-toggle="" class="dropdown-toggle" href="#">English <b class="caret"></b></a>
                        <ul class="dropdown-menu language">
                            <li><a href="#">English</a>
                            </li>
                            <li><a href="#">Spanish</a>
                            </li>
                            <li><a href="#">German</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown hover topcart">
                        <a class="dropdown-toggle" href="#">
                            <i class="carticon"></i> Shopping Cart <span class="label label-success font14">1 item(s)</span> - $589.50<b class="caret"></b></a>
                        <ul class="dropdown-menu topcartopen">
                            <li>
                                <table>
                                    <tbody>
                                        <tr>
                                            <td class="image"><a href="product.html"><img title="product" alt="product" src="<?= base_url() ?>assets/detail/assets/img/prodcut-40x40.jpg" height="50" width="50"></a></td>
                                            <td class="name"><a href="product.html">MacBook</a></td>
                                            <td class="quantity">x&nbsp;1</td>
                                            <td class="total">$589.50</td>
                                            <td class="remove"><i class="icon-remove"></i></td>
                                        </tr>
                                        <tr>
                                            <td class="image"><a href="product.html"><img title="product" alt="product" src="<?= base_url() ?>assets/detail/assets/img/prodcut-40x40.jpg" height="50" width="50"></a></td>
                                            <td class="name"><a href="product.html">MacBook</a></td>
                                            <td class="quantity">x&nbsp;1</td>
                                            <td class="total">$589.50</td>
                                            <td class="remove"><i class="icon-remove "></i></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table>
                                    <tbody>
                                        <tr>
                                            <td class="textright"><b>Sub-Total:</b></td>
                                            <td class="textright">$500.00</td>
                                        </tr>
                                        <tr>
                                            <td class="textright"><b>Eco Tax (-2.00):</b></td>
                                            <td class="textright">$2.00</td>
                                        </tr>
                                        <tr>
                                            <td class="textright"><b>VAT (17.5%):</b></td>
                                            <td class="textright">$87.50</td>
                                        </tr>
                                        <tr>
                                            <td class="textright"><b>Total:</b></td>
                                            <td class="textright">$589.50</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="well pull-right">
                                    <a href="#" class="btn btn-success">View Cart</a>
                                    <a href="#" class="btn btn-success">Checkout</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <div class="header-white">
            <div class="container">
                <div class="row">
                    <div class="span4">
                        <a class="logo" href="index.html"><img src="<?= base_url() ?>assets/detail/assets/img/logo.png" alt="ShopSimple" title="ShopSimple"></a>
                    </div>
                    <div class="span8">
                        <div class="row">
                            <div class="pull-right logintext">Welcome Px, you can <a href="login.html">login </a>
                                or <a href="register.html">create an account</a>
                            </div>
                        </div>
                        <form class="form-search marginnull topsearch pull-right">
                            <input type="text" class="input-large search-query search-icon-top" value="Search here..." onFocus="if (this.value=='Search here...') this.value='';" onblur="if (this.value=='') this.value='Search here...';">
                        </form>
                    </div>
                </div>
            </div>
            <div id="categorymenu">
                <div class="container">
                    <nav class="subnav">
                        <ul class="nav-pills categorymenu">
                            <li><a href="index.html">Home</a>
                                <div>
                                    <ul class="arrow">
                                        <li><a href="home-sidebar.html">Home 2-column</a>
                                        </li>
                                        <li><a href="index.html">Home 1-column</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li><a class="active" href="product.html">Products</a>
                                <div>
                                    <ul class="arrow">
                                        <li><a class="bold" href="product.html">Product Full </a>
                                        </li>
                                        <li><a class="bold" href="product-sidebar.html"> Product 2 Column </a>
                                        </li>
                                        <li><a href="#"> Suits & shirts </a>
                                        </li>
                                        <li><a href="#"> Shoes <span class="label label-info">(new)</span></a>
                                        </li>
                                        <li><a href="#">Jackets & Coats <span class="label label-warning">(25)</span>
                                            </a>
                                        </li>
                                        <li class="divider"></li>
                                        <li><a href="#">Mice and Trackballs <span class="label label-success">Sale</span>
                                            </a>
                                        </li>
                                        <li><a href="#">Laptops </a>
                                        </li>
                                    </ul>
                                    <ul class="arrow">
                                        <li><a href="#"> Dresses</a>
                                        </li>
                                        <li><a href="#"> Sun Glasses</a>
                                        </li>
                                        <li><a href="#"> Suits & shirts </a>
                                        </li>
                                        <li><a href="#"> Shoes </a>
                                        </li>
                                        <li><a href="#">Jackets & Coats <span class="label label-warning">(25)</span>
                                            </a>
                                        </li>
                                        <li class="divider"></li>
                                        <li><a href="#">Mice and Trackballs <span class="label label-important">Sale</span>
                                            </a>
                                        </li>
                                        <li><a href="#">Laptops </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li><a href="category-full.html">Category</a>
                                <div>
                                    <ul class="arrow">
                                        <li><a class="bold" href="category.html">Category - 2 Column</a>
                                        </li>
                                        <li><a class="bold" href="category-full.html">Category-Full</a>
                                        </li>
                                        <li><a href="#"> Men Products</a>
                                        </li>
                                        <li><a href="#"> Women Products</a>
                                        </li>
                                        <li><a href="#"> Child Products</a>
                                        </li>
                                        <li><a href="#"> Home and Furniture</a>
                                        </li>
                                        <li><a href="#">Electric Accessories</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li><a href="typography.html">Features</a>
                                <div>
                                    <ul class="arrow">
                                        <li><a href="typography.html">Typography</a>
                                        </li>
                                        <li><a href="form.html">Form Elements</a>
                                        </li>
                                        <li><a href="buttons.html">Buttons</a>
                                        </li>
                                        <li><a href="javascript.html">Javascripts</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li><a href="shopping-cart.html">Shopping Cart</a>
                            </li>
                            <li><a href="checkout.html">Checkout</a>
                            </li>
                            <li><a href="compare.html">Compare</a>
                            </li>
                            </li>
                            <li><a href="blog.html">Blog</a>
                                <div>
                                    <ul class="arrow">
                                        <li><a href="blog.html">Blog page</a>
                                        </li>
                                        <li><a href="bloggrid.html">Blog Grid View</a>
                                        </li>
                                        <li><a href="bloglist.html">Blog List VIew</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li><a href="myaccount.html">My Account</a>
                                <div>
                                    <ul>
                                        <li><a href="myaccount.html">My Account</a>
                                        </li>
                                        <li><a href="login.html">Login</a>
                                        </li>
                                        <li><a href="register.html">Register</a>
                                        </li>
                                        <li><a href="wishlist.html">Wishlist</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li><a href="#">Error Pages</a>
                                <div>
                                    <ul>
                                        <li><a href="404.html">404 Error</a>
                                        </li>
                                        <li><a href="500.html">500 Error</a>
                                        </li>

                                    </ul>
                                </div>
                            </li>
                            <li><a href="contact.html">Contact</a>
                            </li>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header> -->
    <!-- Header End -->
    <div id="maincontainer">
        <section id="product">
            <div class="container">

                <!-- Product Details-->
                <div class="row">
                    <div class="span5">
                        <ul class="thumbnails mainimage">
                            <?php foreach ($images as $image) : ?>
                                <li class="span5">
                                    <a rel="position: 'inside' , showTitle: false, adjustX:-4, adjustY:-4" class="thumbnail cloud-zoom" href="<?= base_url() ?>assets/detail/assets/img/product1.jpg">
                                        <img alt="" src="<?= base_url() . $image->img_location ?>">
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                        <!-- <span>Mouse move on Image to zoom</span> -->
                        <ul class="thumbnails mainimage">
                            <?php foreach ($images as $image) : ?>
                                <li class="producthtumb">
                                    <a class="thumbnail" href="#">
                                        <img src="<?= base_url() . $image->img_location ?>" alt="">
                                    </a>
                                </li>
                            <?php endforeach; ?>
                            <!-- <li class="producthtumb">
                                <a class="thumbnail" href="#">
                                    <img src="<?= base_url() ?>assets/detail/assets/img/product2.jpg" alt="">
                                </a>
                            </li>
                            <li class="producthtumb">
                                <a class="thumbnail" href="#">
                                    <img src="<?= base_url() ?>assets/detail/assets/img/product1.jpg" alt="">
                                </a>
                            </li>
                            <li class="producthtumb">
                                <a class="thumbnail" href="#">
                                    <img src="<?= base_url() ?>assets/detail/assets/img/product2.jpg" alt="">
                                </a>
                            </li> -->
                        </ul>

                    </div>
                    <div class="span7">
                        <div class="row">
                            <div class="span7">
                                <h1 class="productname"><span class="bgnone"><?= $item['proname'] ?></span></h1>
                                <div class="productprice">
                                    <!-- <div class="proldprice">€</div> -->
                                    <div class="prnewprice">€ <?= $item['amount'] ?></div>
                                </div>
                                <div class="quantitybox">
                                    <!-- <select class="selectsize">
                                        <option>Select Size</option>
                                        <option>Red</option>
                                        <option>Green</option>
                                        <option>Blue</option>
                                        <option>Black</option>
                                    </select>
                                    <select class="selectqty">
                                        <option>Select</option>
                                        <option>24</option>
                                        <option>36</option>
                                        <option>48</option>
                                    </select> -->
                                    <a class="btn btn-success pull-left" href="javascript:void(0)" onclick="toggleDiv()">Contactează-ne</a>
                                    <!-- <div class="links  productlinks">
                                        <a class="wishlist" href="wishlist.html">wishlist</a>
                                        <a class="compare" href="compare.html">compare</a>
                                    </div> -->
                                </div>
                                <div class="productdesc">
                                    <ul class="nav nav-tabs" id="myTab">
                                        <li class="active"><a href="#description">Caracteristici</a>
                                        </li>
                                        <!-- <li><a href="#specification">Specification</a>
                                        </li>
                                        <li><a href="#review">Review</a>
                                        </li>
                                        <li><a href="#producttag">Product Tags</a>
                                        </li> -->
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="description">
                                            <?= $item['description'] ?>
                                        </div>
                                        <!-- <div class="tab-pane " id="specification">
                                            <ul class="productinfo">
                                                <li>
                                                    <span class="productinfoleft"> Brand:</span> Apple
                                                </li>
                                                <li>
                                                    <span class="productinfoleft"> Product Code:</span> Product 16
                                                </li>
                                                <li>
                                                    <span class="productinfoleft"> Reward Points:</span> 60
                                                </li>
                                                <li>
                                                    <span class="productinfoleft"> Availability: </span> In Stock
                                                </li>
                                                <li>
                                                    <span class="productinfoleft"> Old Price: </span> $500.00
                                                </li>
                                                <li>
                                                    <span class="productinfoleft"> Ex Tax: </span> $500.00
                                                </li>
                                                <li>
                                                    <span class="productinfoleft"> Product Code:</span> Product 16
                                                </li>
                                                <li>
                                                    <span class="productinfoleft"> Reward Points:</span> 60
                                                </li>
                                                <li>
                                                    <span class="productinfoleft"> Availability: </span> In Stock
                                                </li>
                                                <li>
                                                    <span class="productinfoleft"> Old Price: </span> $500.00
                                                </li>
                                                <li>
                                                    <span class="productinfoleft"> Ex Tax: </span> $500.00
                                                </li>
                                                <li>
                                                    <span class="productinfoleft"> Ex Tax: </span> $500.00
                                                </li>
                                                <li>
                                                    <span class="productinfoleft"> Product Code:</span> Product 16
                                                </li>
                                                <li>
                                                    <span class="productinfoleft"> Reward Points:</span> 60
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tab-pane" id="review">
                                            <ul class="reveiw">
                                                <li>
                                                    <h4 class="title">Lorem Ipsum <span class="date"><i class="icon-calendar"></i> August 28, 2012 </span></h4>
                                                    <ul class="rate">
                                                        <li class="on"></li>
                                                        <li class="on"></li>
                                                        <li class="on"></li>
                                                        <li class="off"></li>
                                                        <li class="off"></li>
                                                    </ul>
                                                    <span class="reveiwdetails"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</span>
                                                </li>
                                            </ul>
                                            <h3>Write a Review</h3>
                                            <form class="form-vertical">
                                                <fieldset>
                                                    <div class="control-group">
                                                        <label class="control-label">Text input</label>
                                                        <div class="controls">
                                                            <input type="text" class="span3">
                                                        </div>
                                                    </div>
                                                    <div class="control-group">
                                                        <label class="control-label">Textarea</label>
                                                        <div class="controls">
                                                            <textarea rows="3" class="span3"></textarea>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                                <input type="submit" class="btn btn-success" value="continue">
                                            </form>
                                        </div>
                                        <div class="tab-pane" id="producttag">
                                            <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum <br>
                                                <br>
                                            </p>
                                            <ul class="tags">
                                                <li><a href="#">Webdesign</a>
                                                </li>
                                                <li><a href="#">html</a>
                                                </li>
                                                <li><a href="#">html</a>
                                                </li>
                                                <li><a href="#">css</a>
                                                </li>
                                                <li><a href="#">jquery</a>
                                                </li>
                                                <li><a href="#">css</a>
                                                </li>
                                                <li><a href="#">jquery</a>
                                                </li>
                                                <li><a href="#">Webdesign</a>
                                                </li>
                                                <li><a href="#">css</a>
                                                </li>
                                                <li><a href="#">jquery</a>
                                                </li>
                                                <li><a href="#">Webdesign</a>
                                                </li>
                                                <li><a href="#">html</a>
                                                </li>
                                            </ul>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product Description tab & comments-->

            </div>
            <div class="row" id="message_div" style="display : none">
                <div class="span9">
                    <form class="form-horizontal contactform" method="post">
                        <fieldset>
                            <div class="control-group">
                                <label for="name" class="control-label">Nume </label>
                                <div class="controls">
                                    <input type="text" class="required" id="name" value="" name="name">
                                </div>
                            </div>
                            <div class="control-group">
                                <label for="email" class="control-label">E-mail <span class="required">*</span></label>
                                <div class="controls">
                                    <input type="email" class="required email" id="email" value="" name="email">
                                </div>
                            </div>
                            <div class="control-group">
                                <label for="message" class="control-label">Mesaj</label>
                                <div class="controls">
                                    <textarea class="required" rows="6" cols="40" id="message" name="messagee"></textarea>
                                </div>
                            </div>
                            <div class="form-actions">
                                <input class="btn btn-success" type="submit" onclick="sendMail(); return false" value="Trimite" id="submit_id">
                                <input class="btn" type="reset" value="Resetați">
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </section>
        <!--  Related Products-->
        <!-- <section id="related">
            <div class="container">
                <h1 class="headingfull"><span>Related Products</span></h1>
                <section id="thumbnails">
                    <ul class="thumbnails">
                        <li class="span3">
                            <a href="#" class="prdocutname">First Fashion Fabrics</a>
                            <div class="thumbnail">
                                <span class="sale tooltip-test">Sale</span>
                                <a href="product.html"><img src="<?= base_url() ?>assets/detail/assets/img/product-l1.jpg" alt=""></a>
                                <div class="caption">
                                    <div class="price pull-left">
                                        <span class="oldprice">$2225.00</span>
                                        <span class="newprice">$2225.00</span>
                                    </div>
                                    <a class="cartadd pull-right tooltip-test" data-original-title="Add to Cart"> Add to Cart </a>
                                    <div class="links pull-left"><a href="product.html" class="info">info</a>
                                        <a href="wishlist.html" class="wishlist">wishlist</a>
                                        <a href="compare.html" class="compare">compare</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="span3">
                            <a href="#" class="prdocutname">First Fashion Fabrics</a>
                            <div class="thumbnail">
                                <a href="product.html">
                                    <img src="<?= base_url() ?>assets/detail/assets/img/product-l2.jpg" alt=""></a>
                                <div class="caption">
                                    <div class="price pull-left">
                                        <span class="oldprice">$2225.00</span>
                                        <span class="newprice">$2225.00</span>
                                    </div>
                                    <a class="cartadd pull-right tooltip-test" data-original-title="Add to Cart"> Add to Cart </a>
                                    <div class="links pull-left"><a href="product.html" class="info">info</a>
                                        <a href="wishlist.html" class="wishlist">wishlist</a>
                                        <a href="compare.html" class="compare">compare</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="span3">
                            <a href="#" class="prdocutname">First Fashion Fabrics </a>
                            <div class="thumbnail">
                                <a href="product.html">
                                    <img src="<?= base_url() ?>assets/detail/assets/img/product-l1.jpg" alt=""></a>
                                <div class="caption">
                                    <div class="price pull-left">
                                        <span class="oldprice">$2225.00</span>
                                        <span class="newprice">$2225.00</span>
                                    </div>
                                    <a class="cartadd pull-right tooltip-test" data-original-title="Add to Cart"> Add to Cart </a>
                                    <div class="links pull-left"><a href="product.html" class="info">info</a>
                                        <a href="wishlist.html" class="wishlist">wishlist</a>
                                        <a href="compare.html" class="compare">compare</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="span3">
                            <a href="#" class="prdocutname">First Fashion Fabrics</a>
                            <div class="thumbnail">
                                <a href="product.html"><img src="<?= base_url() ?>assets/detail/assets/img/product-l2.jpg" alt=""></a>
                                <div class="caption">
                                    <div class="price pull-left">
                                        <span class="oldprice">$2225.00</span>
                                        <span class="newprice">$2225.00</span>
                                    </div>
                                    <a class="cartadd pull-right tooltip-test" data-original-title="Add to Cart"> Add to Cart </a>
                                    <div class="links pull-left"><a href="product.html" class="info">info</a>
                                        <a href="wishlist.html" class="wishlist">wishlist</a>
                                        <a href="compare.html" class="compare">compare</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </section>
            </div>
        </section> -->
    </div>

    <!-- Footer -->
    <footer id="footer">
        <!-- <section class="footersocial">
            <div class="container">
                <div class="row">
                    <div class="span3 aboutus">
                        <h2>About Us </h2>
                        <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br>
                            <br>
                            t has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                        </p>
                    </div>
                    <div class="span3 contact">
                        <h2>Contact Us </h2>
                        <ul>
                            <li class="phone"> +123 456 7890, +123 456 7890,<br>
                                +123 456 7890</li>
                            <li class="mobile"> +123 456 7890, +123 456 7890,<br>
                                +123 456 7890</li>
                            <li class="email"> test@test.com <br>
                                test@test.com</li>
                        </ul>
                    </div>
                    <div class="span3 twitter">
                        <h2>Twitter </h2>
                        <div id="twitter">
                        </div>
                    </div>
                    <div class="span3 facebook">
                        <h2>Facebook </h2>
                        <div id="fb-root"></div>
                        <script>
                            (function(d, s, id) {
                                var js, fjs = d.getElementsByTagName(s)[0];
                                if (d.getElementById(id)) return;
                                js = d.createElement(s);
                                js.id = id;
                                js.src = "../../../../connect.facebook.net/en_US/all.js#xfbml=1";
                                fjs.parentNode.insertBefore(js, fjs);
                            }(document, 'script', 'facebook-jssdk'));
                        </script>
                        <div class="fb-like-box" data-href="http://www.facebook.com/envato" data-width="292" data-height="240" data-show-faces="true" data-stream="false" data-border-color="#ffffff" data-header="false"></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="footerlinks">
            <div class="container">
                <div class="shipingstrip">
                    <div class="fl">
                        <div class="control-group">
                            <form class="form-horizontal">
                                <div class="">
                                    <div class="input-prepend">
                                        <span class="add-on"><i class="icon-envelope icon-w"></i></span>
                                        <input type="text" id="inputIcon" placeholder="Subscribe to Newsletter">
                                        <button type="submit" class="btn btn-success" value="Subscribe">Sign in</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="fr">
                        <div class="shipping"> 24 hrs Free Shipping </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="info">
                    <ul>
                        <li><a href="#">Privacy Policy</a>
                        </li>
                        <li><a href="#">Terms &amp; Conditions</a>
                        </li>
                        <li><a href="#">Affiliates</a>
                        </li>
                        <li><a href="#">Newsletter</a>
                        </li>
                    </ul>
                </div>
                <div id="footersocial">
                    <a href="#" title="Facebook" class="facebook">Facebook</a>
                    <a href="#" title="Twitter" class="twitter">Twitter</a>
                    <a href="#" title="Linkedin" class="linkedin">Linkedin</a>
                    <a href="#" title="rss" class="rss">rss</a>
                    <a href="#" title="Googleplus" class="googleplus">Googleplus</a>
                    <a href="#" title="Skype" class="skype">Skype</a>
                    <a href="#" title="Flickr" class="flickr">Flickr</a>
                </div>
            </div>
        </section>
        <section class="copyrightbottom">
            <div class="container">
                <div class="row">
                    <div class="span6"> All images are copyright to their owners. </div>
                    <div class="span6 textright"> ShopSimple @ 2012 </div>
                </div>
            </div>
        </section>
        <a id="gotop" href="#">Back to top</a> -->
    </footer>
    <!-- /maincontainer -->
    <!-- javascript
    ================================================== -->
    <script type="text/javascript" src="../../../../platform.twitter.com/widgets.js"></script>
    <script src="<?= base_url() ?>assets/detail/assets/js/jquery.js"></script>
    <script src="<?= base_url() ?>assets/detail/assets/js/google-code-prettify/prettify.js"></script>
    <script src="<?= base_url() ?>assets/detail/assets/js/bootstrap-transition.js"></script>
    <script src="<?= base_url() ?>assets/detail/assets/js/bootstrap-alert.js"></script>
    <script src="<?= base_url() ?>assets/detail/assets/js/bootstrap-modal.js"></script>
    <script src="<?= base_url() ?>assets/detail/assets/js/bootstrap-dropdown.js"></script>
    <script src="<?= base_url() ?>assets/detail/assets/js/bootstrap-scrollspy.js"></script>
    <script src="<?= base_url() ?>assets/detail/assets/js/bootstrap-tab.js"></script>
    <script src="<?= base_url() ?>assets/detail/assets/js/bootstrap-tooltip.js"></script>
    <script src="<?= base_url() ?>assets/detail/assets/js/bootstrap-popover.js"></script>
    <script src="<?= base_url() ?>assets/detail/assets/js/bootstrap-button.js"></script>
    <script src="<?= base_url() ?>assets/detail/assets/js/bootstrap-collapse.js"></script>
    <script src="<?= base_url() ?>assets/detail/assets/js/bootstrap-carousel.js"></script>
    <script src="<?= base_url() ?>assets/detail/assets/js/bootstrap-typeahead.js"></script>
    <script src="<?= base_url() ?>assets/detail/assets/js/bootstrap-affix.js"></script>
    <script src="<?= base_url() ?>assets/detail/assets/js/application.js"></script>
    <script defer src="<?= base_url() ?>assets/detail/assets/js/jquery.flexslider.js"></script>
    <script src="<?= base_url() ?>assets/detail/assets/js/respond.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/detail/assets/js/jquery.tweet.js"></script>
    <script src="<?= base_url() ?>assets/detail/assets/js/jflickrfeed.min.js"></script>
    <script src="<?= base_url() ?>assets/detail/assets/js/cloud-zoom.1.0.2.js"></script>
    <script src="<?= base_url() ?>assets/detail/assets/jscloud-zoom.1.0.2.min.html"></script>
    <script type="text/javascript" src="fancybox/jquery.fancybox-1.3.4.pack.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/detail/assets/js/jquery.validate.js"></script>
    <script defer src="<?= base_url() ?>assets/detail/assets/js/custom.js"></script>


    <script>
        function sendMail() {
            // console.log("ok");
            document.getElementById("submit_id").disabled = true;
            // $("#submit_id").innerHTML = '<i class="fa fa-spinner fa-spin"></i> Se trimite…';
            var name = $("#name").val();
            var email = $("#email").val();
            var message = $("#message").val();
            // console.log(name + email + message);
            $.ajax({
                type: "POST",
                url: "<?= base_url() ?>dashboard/sendmail",
                data: {
                    name: name,
                    email: email,
                    message: message
                },
                success: function(msg) {
                    console.log(msg)
                    if (msg == "1") {
                        document.getElementById("submit_id").disabled = false;
                        document.getElementById("message_div").style.display = "none";
                        alert("Mailul miroase");
                        // lacation.reload();
                    }
                }
            })
        }

        function toggleDiv() {
            var x = document.getElementById("message_div");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }
    </script>


</body>

<!-- Mirrored from pxcreate.in/theme/shopsimple/color1/product.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 05 Sep 2021 11:40:31 GMT -->

</html>