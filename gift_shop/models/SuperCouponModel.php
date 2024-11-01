<?php
require_once 'BaseModel.php';

class SuperCouponModel extends BaseModel
{
    public function __construct()
    {
        parent::__construct('coupons'); // Set the table name
    }



    public function getTotalCoupons() {
        $stmt = $this->pdo->prepare("SELECT COUNT(*) AS total FROM coupons");
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result['total'];
    }

    public function toggleStatus($id, $status) {
        $stmt = $this->pdo->prepare("UPDATE users SET status = :status WHERE id = :id");
        return $stmt->execute(['status' => $status, 'id' => $id]);
    }
}
