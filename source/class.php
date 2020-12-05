<?php

class Database
{
    function connect_database()
    {
        $connect = mysqli_connect("localhost", "root", "", "cosmetics");
        if (!$connect) {
            die("khong ket noi duoc");
        }
        $connect->set_charset("utf8");
        return $connect;
    }

    function get_product()
    {
        $connect = $this->connect_database();
        $query = "select*from products where new=1";
        $result = mysqli_query($connect, $query);
        while ($row = mysqli_fetch_array($result)) {
            if ($row["promotion_price"] == 0) {
                $string = '<span>' . $row["price"] . '</span>';
                $discount = 0;

            } else {
                $string = '<span>' . $row["promotion_price"] . '</span>
                    <span class="old">' . $row["price"] . '</span>';
                $discount = (100 - round(($row["promotion_price"] / $row["price"]) * 100));
            }
            echo '<div class="custom-col-5">
                <div class="product-wrap-2 mb-25 scroll-zoom">
                    <div class="product-img">
                        <a href="product-details.php?id='.$row['id'].'">
                            <img class="default-img" src="assets/img/product_images/' . $row["image"] . '" alt="" style="width:270px; height:280px;">
                            <img class="hover-img" src="assets/img/product_images/' . $row["image"] . '" alt="" style="width:280px; height:280px;">
                        </a>
                        <span class="pink">' . $discount . '%</span>
                        <div class="product-action-2">
                            <a title="Add To Cart"  href="addcart.php?id='.$row['id'].'"><i class="fa fa-shopping-cart"></i></a>
                            <a title="Quick View" href="index.php?id='.$row['id'].'" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-eye"></i></a>
                            <a title="Compare" href="#"><i class="fa fa-retweet"></i></a>
                        </div>
                    </div>
                    <div class="product-content-2">
                        <div class="title-price-wrap-2">
                            <h3><a href="product-details.php?id='.$row['id'].'">' . $row["name"] . '</a></h3>
                            <div class="price-2">
                               ' . $string . 'VNĐ   
                            </div>
                        </div>
                        <div class="pro-wishlist-2">
                            <a title="Wishlist" href="wishlist.php"><i class="fa fa-heart-o"></i></a>
                        </div>
                    </div>
                </div>
            </div>';
        }
    }

    function get_categories()
    {
        $connect = $this->connect_database();
        $query = "select*from categories";
        $result = mysqli_query($connect, $query);

        while ($row = mysqli_fetch_array($result)) {
            $name = $row["name"];
            echo '
                        <li>
                            <div class="sidebar-widget-list-left">
                                <a href="shop.php?id=' . $row["id"] . '&page=1">' . $name . '</a>
                                
                            </div>
                        </li>
                    ';
        }
    }
    

    function get_product_id($id, $page)
    {
        $connect = $this->connect_database();
        if ($page <= 0) {
            $page = 1;
        }
        $start = ($page - 1) * 5;

        if ($id == 0) {
            $query = "select*from products limit $start, 5";
        } else {
            $query = "select*from products where id_type=$id limit $start,5";
        }
        $result = mysqli_query($connect, $query);
        while ($row = mysqli_fetch_array($result)) {
            if ($row["promotion_price"] == 0) {
                $string = '<span>' . $row["price"] . '</span>';
                $discount = 0;

            } else {
                $string = '<span>' . $row["promotion_price"] . '</span>
                    <span class="old">' . $row["price"] . '</span>';
                $discount = (100 - round(($row["promotion_price"] / $row["price"]) * 100));
            }
            echo '<div class="col-xl-4 col-md-6 col-lg-6 col-sm-6">
                <div class="product-wrap mb-25 scroll-zoom">
                    <div class="product-img">
                        <a href="product-details.php?id='.$row['id'].'">
                            <img class="default-img" src="assets/img/product_images/' . $row["image"] . '" alt=""  style="width:270px; height:280px;">
                            <img class="hover-img" src="assets/img/product_images/' . $row["image"] . '" alt="">
                        </a>
                        <span class="pink">' . $discount . '%</span>
                        <div class="product-action">
                            <div class="pro-same-action pro-wishlist">
                                <a title="Wishlist" href="#"><i class="pe-7s-like"></i></a>
                            </div>
                            <div class="pro-same-action pro-cart">
                                <a title="Add To Cart"  href="addcart.php?id='.$row['id'].'"><i class="pe-7s-cart"></i> Add to cart</a>
                            </div>
                            <div class="pro-same-action pro-quickview">
                                <a title="Quick View" href="shop.php?id=' . $row['id'] .'" data-toggle="modal" data-target="#exampleModal"><i class="pe-7s-look"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="product-content text-center">
                        <h3><a href="product-details.php?id='.$row['id'].'">' . $row["name"] . '</a></h3>
                        <div class="product-rating">
                            <i class="fa fa-star-o yellow"></i>
                            <i class="fa fa-star-o yellow"></i>
                            <i class="fa fa-star-o yellow"></i>
                            <i class="fa fa-star-o yellow"></i>
                            <i class="fa fa-star-o yellow"></i>
                        </div>
                        <div class="product-price">
                            ' . $string . 'VNĐ
                        </div>
                    </div>
                </div>
            </div>';
        }
    }

    function get_product_detail($id)
    {
        $connect = $this->connect_database();
        if ($id == 0) {
            $query = "select*from products_details join products on products.id=products_details.id_products";
        } else {
            $query = "select*from products_details join products on products.id=products_details.id_products where id_products=$id";
        }
        $result = mysqli_query($connect, $query);
        while ($row = mysqli_fetch_array($result)) {
            if ($row["promotion_price"] == 0) {
                $string = '<span>' . $row["price"] . '</span>';
                $discount = 0;

            } else {
                $string = '<span>' . $row["promotion_price"] . '</span>
                    <span class="old">' . $row["price"] . '</span>';
                $discount = round(($row["promotion_price"] / $row["price"]) * 100);
            }
            echo '<div class="col-md-5 col-sm-12 col-xs-12">
            <div class="tab-content quickview-big-img">
                <div id="'.$id.'" class="tab-pane fade show active">
                    <img src="assets/img/product_images/' . $row["image"] . '" alt="">
                </div>
            </div>
            <!-- Thumbnail Large Image End -->
            <!-- Thumbnail Image End -->
            <div class="quickview-wrap mt-15">
                <div class="quickview-slide-active owl-carousel nav nav-style-1" role="tablist">
                    <a class="active" data-toggle="tab" href="index.php?id=' . $row["id"] .'"><img src="assets/img/product_images/'.$row["image"].'" alt=""></a>

                </div>
            </div>
        </div>
        <div class="col-md-7 col-sm-12 col-xs-12">
            <div class="product-details-content quickview-content">
                <h2>'.$row["name"].'</h2>
                <div class="product-details-price">
                    <span>'.$string.'VNĐ</span>
                    
                </div>
                
                <p>'.$row["mô tả"].'</p>
                
                
                <div class="pro-details-quality">
                    <div class="cart-plus-minus">
                        <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1">
                    </div>
                    <div class="pro-details-cart btn-hover">
                        <a href="addcart.php?id='.$row['id'].'">Add To Cart</a>
                    </div>
                    <div class="pro-details-wishlist">
                        <a href="#"><i class="fa fa-heart-o"></i></a>
                    </div>
                    <div class="pro-details-compare">
                        <a href="#"><i class="pe-7s-shuffle"></i></a>
                    </div>
                </div>
                
                <div class="pro-details-social">
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div> ';
        }
    }
    function shop_get_product_detail($id)
    {
        $connect = $this->connect_database();
        if ($id == 0) {
            $query = "select*from products_details join products on products.id=products_details.id_products";
        } else {
            $query = "select*from products_details join products on products.id=products_details.id_products where id_products=$id";
        }
        $result = mysqli_query($connect, $query);
        while ($row = mysqli_fetch_array($result)) {
            if ($row["promotion_price"] == 0) {
                $string = '<span>' . $row["price"] . '</span>';
                $discount = 0;

            } else {
                $string = '<span>' . $row["promotion_price"] . '</span>
                    <span class="old">' . $row["price"] . '</span>';
                $discount = round(($row["promotion_price"] / $row["price"]) * 100);
            }
            echo'
                <div class="product-details">
                    <div class="product-details-img">
                        <div class="tab-content jump"> 
                           
                            <div id="shop-details-2" class="tab-pane active large-img-style">
                                <img src="assets/img/product_images/' . $row["image"] . '" alt="">
                                <span class="dec-price">'.$discount.'%</span>
                                <div class="img-popup-wrap">
                                    <a class="img-popup"  href="assets/img/product_images/' . $row["image"] . '"><i class="pe-7s-expand1"></i></a>
                                </div>
                            </div>
                            
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="product-details-content ml-70">
                    <h2>'.$row["name"].'</h2>
                    <div class="product-details-price">
                        <span>'.$string.'VNĐ </span>
                        
                    </div>
                    <div class="pro-details-rating-wrap">
                        <div class="pro-details-rating">
                            <i class="fa fa-star-o yellow"></i>
                            <i class="fa fa-star-o yellow"></i>
                            <i class="fa fa-star-o yellow"></i>
                            <i class="fa fa-star-o yellow"></i>
                            <i class="fa fa-star-o yellow"></i>
                        </div>
                        
                    </div>
                    <p>'.$row["mô tả"].'</p>
                    
                    <div class="pro-details-quality">
                        <div class="cart-plus-minus">
                            <input class="cart-plus-minus-box" type="text" name="qtybutton" value="2">
                        </div>
                        <div class="pro-details-cart btn-hover">
                            <a href="addcart.php?id='.$row['id'].'">Add To Cart</a>
                        </div>
                        <div class="pro-details-wishlist">
                            <a href="#"><i class="fa fa-heart-o"></i></a>
                        </div>
                        <div class="pro-details-compare">
                            <a href="#"><i class="pe-7s-shuffle"></i></a>
                        </div>
                    </div>
                    
                    <div class="pro-details-social">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>';
        }
        }
    function get_sp_cart($id) {
        $connect=$this->connect_database();
        $sql="SELECT * FROM products WHERE id='$id'";
        $result=mysqli_query($connect,$sql);
        if(!$result){
            die('Thất bại');
        }else{
            return mysqli_fetch_assoc($result);
        }
    }
    function search($sname)
	    {
		$_SESSION['searchname']=$sname;		
		$link=$this->connect_database();
        if(!$sname) {
            $sql = "SELECT * FROM products ";
        } else {
            $sql = "SELECT * FROM products where name like '%$sname%'";
        }
        $result=mysqli_query($link, $sql);
        echo '
        <div class="container-fluid">';
        echo '<div class="section-title-2 text-center mb-80 mt-50" id="search_result">
        <h2>Search result</h2>
        </div>
        <div class="custom-row mt-30 ">';
		while ($row = mysqli_fetch_array($result)){
            if($row["promotion_price"]==0){
                $string= '<span>'.$row["price"].'</span>';
                $discount=0;
                
            }
            else{
                $string=  '<span>'.$row["promotion_price"].'</span>
                <span class="old">'.$row["price"].'</span>';
                $discount=(100-round(($row["promotion_price"]/$row["price"])*100));
            }
            
            echo '<div class="custom-col-5">
                <div class="product-wrap-2 mb-25 scroll-zoom">
                    <div class="product-img">
                        <a href="product-details.php">
                            <img class="default-img" src="assets/img/product_images/'.$row["image"].'" alt="" style="width:270px; height:280px;">
                            <img class="hover-img" src="assets/img/product_images/'.$row["image"].'" alt="" style="width:280px; height:280px;">
                        </a>
                        <span class="pink">'.$discount.'%</span>
                        <div class="product-action-2">
                            <a title="Add To Cart" onclick="addToCart('.$row["name"].')" href="#"><i class="fa fa-shopping-cart"></i></a>
                            <a title="Quick View" href="#" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-eye"></i></a>
                            <a title="Compare" href="#"><i class="fa fa-retweet"></i></a>
                        </div>
                    </div>
                    <div class="product-content-2">
                        <div class="title-price-wrap-2">
                            <h3><a href="product-details.php">'.$row["name"].'</a></h3>
                            <div class="price-2">
                               '.$string.'VNĐ
                            </div>
                        </div>
                        <div class="pro-wishlist-2">
                            <a title="Wishlist" href="wishlist.php"><i class="fa fa-heart-o"></i></a>
                        </div>
                    </div>
                </div>
            </div>';
        }
        echo '
        </div>';
        }
    function shopsearch($sname)
	{
		$_SESSION['searchname']=$sname;		
		$link=$this->connect_database();
        if(!$sname) {
            $sql = "SELECT * FROM products ";
        } else {
            $sql = "SELECT * FROM products where name like '%$sname%'";
        }
        $result=mysqli_query($link, $sql);
		while ($row = mysqli_fetch_array($result)){
            if($row["promotion_price"]==0){
                $string= '<span>'.$row["price"].'</span>';
                $discount=0;
                
            }
            else{
                $string=  '<span>'.$row["promotion_price"].'</span>
                <span class="old">'.$row["price"].'</span>';
                $discount=(100-round(($row["promotion_price"]/$row["price"])*100));
            }
            echo ' <div class="col-xl-4 col-md-6 col-lg-6 col-sm-6">
            <div class="product-wrap mb-25 scroll-zoom">
                <div class="product-img">
                    <a href="#">
                        <img class="default-img" src="assets/img/product_images/'.$row["image"].'" alt=""  style="width:270px; height:280px;">
                        <img class="hover-img" src="assets/img/product_images/'.$row["image"].'" alt="">
                    </a>
                    <span class="pink">'.$discount.'%</span>
                    <div class="product-action">
                        <div class="pro-same-action pro-wishlist">
                            <a title="Wishlist" href="#"><i class="pe-7s-like"></i></a>
                        </div>
                        <div class="pro-same-action pro-cart">
                            <a title="Add To Cart" onclick="addToCart('.$row["name"].')" href="#"><i class="pe-7s-cart"></i> Add to cart</a>
                        </div>
                        <div class="pro-same-action pro-quickview">
                            <a title="Quick View" href="#" data-toggle="modal" data-target="#exampleModal"><i class="pe-7s-look"></i></a>
                        </div>
                    </div>
                </div>
                <div class="product-content text-center">
                    <h3><a href="product-details.php">'.$row["name"].'</a></h3>
                    <div class="product-rating">
                        <i class="fa fa-star-o yellow"></i>
                        <i class="fa fa-star-o yellow"></i>
                        <i class="fa fa-star-o yellow"></i>
                        <i class="fa fa-star-o yellow"></i>
                        <i class="fa fa-star-o yellow"></i>
                    </div>
                    <div class="product-price">
                        '.$string.'VNĐ
                    </div>
                </div>
            </div>
        </div>';
        }
    }
}