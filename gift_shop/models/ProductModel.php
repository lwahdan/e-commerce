<?php
// Models/ProductModel.php
require_once 'BaseModel.php';

class ProductModel extends BaseModel {

    public function __construct() {
        parent::__construct('products'); // Pass the table name to the BaseModel constructor
    }

    public function searchProducts($searchValue) {
        $query = $this->pdo->prepare("SELECT * FROM products WHERE product_name LIKE :value");
        $searchValue = "%$searchValue%";
        $query->bindParam(":value", $searchValue);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
