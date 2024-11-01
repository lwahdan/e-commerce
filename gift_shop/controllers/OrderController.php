<?php

require_once 'BaseController.php';

class OrderController extends Controller
{
    private $orderModel;

    public function __construct()
    {
        $this->orderModel = $this->model('OrderModel');


    }

    // Display all orders
    public function index()
    {
        $orders = $this->orderModel->all();
        $this->view('admin/orders/index', ['orders' => $orders]);
    }

    // Show order details
    public function show($id)
    {
        $order = $this->orderModel->find($id);
        $this->view('admin/orders/show', ['order' => $order]);
    }

    // Create a new order
    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = [
                'user_id' => $_POST['user_id'],
                'total_price' => $_POST['total_price'],
                'status' => $_POST['status'],
                'shipping_address' => $_POST['shipping_address'],
                'city' => $_POST['city'],
                'postal_code' => $_POST['postal_code'],
                'country' => $_POST['country']
            ];

            $this->orderModel->create($data);
            header('Location: /orders');
        } else {
            $this->view('admin/orders/create');
        }
    }

    // Update an existing order
    public function edit($id)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = [
                'user_id' => $_POST['user_id'],
                'total_price' => $_POST['total_price'],
                'status' => $_POST['status'],
                'shipping_address' => $_POST['shipping_address'],
                'city' => $_POST['city'],
                'postal_code' => $_POST['postal_code'],
                'country' => $_POST['country']
            ];

            $this->orderModel->update($id, $data);
            header('Location: /admin/orders');
        } else {
            $order = $this->orderModel->find($id);
            $this->view('admin/orders/edit', ['order' => $order]);
        }
    }

    // Delete an order
    public function delete($id)
    {
        $this->orderModel->delete($id);
        header('Location: /admin/orders');
    }
}
