<?php require 'views/partials/header.php'; ?>

    <!-- ...:::: Start Breadcrumb Section:::... -->
    <div class="breadcrumb-section breadcrumb-bg-color--golden">
        <div class="breadcrumb-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3 class="breadcrumb-title">Wishlist</h3>
                        <div class="breadcrumb-nav breadcrumb-nav-color--black breadcrumb-nav-hover-color--golden">
                            <nav aria-label="breadcrumb">
                                <ul>
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="shop-grid-sidebar-left.html">Shop</a></li>
                                    <li class="active" aria-current="page">Wishlist</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- ...:::: End Breadcrumb Section:::... -->

    <!-- ...:::: Start Wishlist Section:::... -->
    <div class="wishlist-section">
        <!-- Start Cart Table -->
        <div class="wishlish-table-wrapper" data-aos="fade-up" data-aos-delay="0">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="table_desc">
                            <div class="table_page table-responsive">
                                <table>
                                    <!-- Start Wishlist Table Head -->
                                    <thead>
                                        <tr>
                                            <th class="product_remove">Delete</th>
                                            <th class="product_thumb">Image</th>
                                            <th class="product_name">Product</th>
                                            <th class="product-price">Price</th>
                                            <th class="product_stock">Stock Status</th>
                                            <th class="product_addcart">Add To Cart</th>
                                        </tr>
                                    </thead> <!-- End Cart Table Head -->
                                    <tbody>
                                        <!-- Start Wishlist Single Item-->
                                        <tr>
                                            <td class="product_remove"><a href="#"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                            <td class="product_thumb"><a href="product-details-default.php"><img
                                                        src="../public/assets/images/product/default/home-1/default-1.jpg"
                                                        alt=""></a></td>
                                            <td class="product_name"><a href="product-details-default.php">Handbag
                                                    fringilla</a></td>
                                            <td class="product-price">$65.00</td>
                                            <td class="product_stock">In Stock</td>
                                            <td class="product_addcart"><a href="#" class="btn btn-md btn-golden"
                                                    data-bs-toggle="modal" data-bs-target="#modalAddcart">Add To
                                                    Cart</a></td>
                                        </tr> <!-- End Wishlist Single Item-->
                                        <!-- Start Wishlist Single Item-->
                                        <tr>
                                            <td class="product_remove"><a href="#"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                            <td class="product_thumb"><a href="product-details-default.php"><img
                                                        src="../public/assets/images/product/default/home-1/default-2.jpg"
                                                        alt=""></a></td>
                                            <td class="product_name"><a href="product-details-default.php">Handbags
                                                    justo</a></td>
                                            <td class="product-price">$90.00</td>
                                            <td class="product_stock">In Stock</td>
                                            <td class="product_addcart"><a href="#" class="btn btn-md btn-golden"
                                                    data-bs-toggle="modal" data-bs-target="#modalAddcart">Add To
                                                    Cart</a></td>
                                        </tr> <!-- End Wishlist Single Item-->
                                        <!-- Start Wishlist Single Item-->
                                        <tr>
                                            <td class="product_remove"><a href="#"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                            <td class="product_thumb"><a href="product-details-default.php"><img
                                                        src="../public/assets/images/product/default/home-1/default-3.jpg"
                                                        alt=""></a></td>
                                            <td class="product_name"><a href="product-details-default.php">Handbag
                                                    elit</a></td>
                                            <td class="product-price">$80.00</td>
                                            <td class="product_stock">In Stock</td>
                                            <td class="product_addcart"><a href="#" class="btn btn-md btn-golden"
                                                    data-bs-toggle="modal" data-bs-target="#modalAddcart">Add To
                                                    Cart</a></td>
                                        </tr> <!-- End Wishlist Single Item-->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End Cart Table -->
    </div> <!-- ...:::: End Wishlist Section:::... -->

<?php require 'views/partials/footer.php'; ?>