<?php


class SuperProductController extends Controller
{
    private $productModel;

    public function __construct()
    {
        $this->productModel = $this->model('SuperProductModel');

    }

    public function index($categoryId)
    {
        $products = $this->productModel->getProductsByCategory($categoryId);
        $this->view('SuperAdmin/products/index', ['products' => $products, 'categoryId' => $categoryId]);
    }

    public function addProduct($categoryId)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'product_name' => $_POST['product_name'],
                'description' => $_POST['description'],
                'price' => $_POST['price'],
                'stock_quantity' => $_POST['stock_quantity'],
                'category_id' => $categoryId,
                'image_url' => $_POST['image_url']
            ];
            $this->productModel->create($data);
            header("Location: /SuperAdmin/products/index/$categoryId");
        } else {
            $this->view('SuperAdmin/products/addProduct', ['categoryId' => $categoryId]);
        }
    }
}
