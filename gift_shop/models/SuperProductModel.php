<?php

require_once 'BaseModel.php';

class SuperProductModel extends BaseModel
{
    public function __construct()
    {
        parent::__construct('products');
    }

    public function getTotalProducts() {
        $stmt = $this->pdo->prepare("SELECT COUNT(*) AS total FROM products");
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result['total'];
    }

    public function getProductsByCategory($categoryId)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM $this->table WHERE category_id = :categoryId");
        $stmt->execute(['categoryId' => $categoryId]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
