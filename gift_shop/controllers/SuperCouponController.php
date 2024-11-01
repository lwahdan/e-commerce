<?php

class SuperCouponController extends Controller
{
    private $model;

    public function __construct()
    {

        $this->model = $this->model('SuperCouponModel');
    }

    public function index()
    {
        $coupons = $this->model->all();
        include 'views/SuperAdmin/coupons/index.php';
    }

    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'code' => $_POST['code'],
                'discount_value' => $_POST['discount_value'],
                'expiration_date' => $_POST['expiration_date'],
                'is_active' => isset($_POST['is_active']) ? 1 : 0,

            ];
            $this->model->create($data);
            header("Location: /views/SuperAdmin/coupons");
            exit;
        }

        include 'views/SuperAdmin/coupons/add.php';
    }

    public function edit($id)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'code' => $_POST['code'],
                'discount_value' => $_POST['discount_value'],
                'expiration_date' => $_POST['expiration_date'],
                'is_active' => isset($_POST['is_active']) ? 1 : 0,

            ];
            $this->model->update($id, $data);
            header("Location: /admin/coupons");
            exit;
        }

        $coupon = $this->model->find($id);
        include 'views/SuperAdmin/coupons/edit.php';
    }

    public function delete($id)
    {
        $this->model->delete($id);
        header("Location: /SuperAdmin/coupons");
        exit;
    }

    public function toggleStatus($id, $status)
    {
        $this->model->update($id, ['is_active' => $status]);
        header("Location: /SuperAdmin/coupons");
        exit;
    }
}
