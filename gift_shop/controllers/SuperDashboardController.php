
<!--// controllers/DashboardController.php-->
<?php
require_once 'BaseController.php';

class SuperDashboardController extends Controller {
    private $userModel;
    private $productModel;
    private $commentModel;
    private $couponModel;

    public function __construct() {
        $this->userModel = $this->model('SuperUserModel');
        $this->productModel = $this->model('SuperProductModel');
        $this->commentModel = $this->model('SuperCommentModel');
        $this->couponModel = $this->model('SuperCouponModel');
    }

    public function index() {
        $data = [
            'totalUsers' => $this->userModel->getTotalUsers(),
            'totalProducts' => $this->productModel->getTotalProducts(),
            'totalComments' => $this->commentModel->getTotalComments(),
            'totalCoupons' => $this->couponModel->getTotalCoupons()
        ];

        $this->view('SuperAdmin/dashboard/index', $data);
    }
}
