<?php
// Controllers/SearchController.php

require_once __DIR__ . '/../models/BaseModel.php';
require_once __DIR__ . '/../models/ProductModel.php';
require_once __DIR__ . '/../controllers/BaseController.php';
class SearchController extends Controller{
    private $productModel;

    public function __construct() {
        $this->productModel = new ProductModel();
    }

    public function search() {
        $results = [];
        var_dump('slkdfdj');
        die;
        if (isset($_GET['btn-search']) && !empty($_GET['search'])) {
            $searchValue = $_GET['search'];
            $results = $this->productModel->searchProducts($searchValue);
        }
        
        // Include the products view where results will be displayed
        include "../views/products.php";   // Pass results here

        
    }
    public function viewProducts(){
        $this->view('products');
    }

}

?>
