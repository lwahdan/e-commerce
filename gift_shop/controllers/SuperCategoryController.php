<?php
require_once 'BaseController.php';

class SuperCategoryController extends Controller {
    private $categoryModel;

    public function __construct() {
        $this->categoryModel = $this->model('SuperCategoryModel');
    }

    // Show main categories page
    public function index() {
        $categories = $this->categoryModel->all();

        $this->view('SuperAdmin/Categories/index', ['categories' => $categories]);
    }

    // Show subcategories for a specific main category
    public function show($mainCategoryId) {
        $subcategories = $this->categoryModel->getSubcategories($mainCategoryId);
        $this->view('SuperAdmin/Categories/subcategories', ['subcategories' => $subcategories, 'mainCategoryId' => $mainCategoryId]);
    }

    // Add a new subcategory
    public function addSubcategory() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $mainCategoryId = $_POST['main_category_id'];
            $this->categoryModel->addSubcategory($name, $mainCategoryId);
            header("Location: /SuperAdmin/categories/show/$mainCategoryId");
        }
    }
}
