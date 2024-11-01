<?php
require_once 'BaseController.php';

class SuperReviewController extends Controller {
    private $reviewModel;

    public function __construct() {
        $this->reviewModel = $this->model('SuperReviewModel');
    }

    public function index() {
        $reviews = $this->reviewModel->all();
        $this->view('SuperAdmin/reviews/index', ['reviews' => $reviews]);
    }

    public function toggleStatus($id, $status) {
        try {
            $this->reviewModel->update($id, ['status' => $status]);
            $_SESSION['success'] = 'Review status updated successfully';
        } catch (Exception $e) {
            $_SESSION['error'] = 'Error updating review status: ' . $e->getMessage();
        }
        header('Location: /SuperAdmin/comments');
        exit();
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $reviewData = [
                'username' => $_POST['username'],
                'comment' => $_POST['comment'],
                'rating' => $_POST['rating'],
                'is_approved' => 1,
                'created_at' => date('Y-m-d H:i:s')
            ];

            $this->reviewModel->create($reviewData);
            $_SESSION['success'] = 'Review added successfully';
            header('Location: /admin/reviews');
            exit();
        } else {
            $this->view('SuperAdmin/reviews/create');
        }
    }

    public function edit($id) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $reviewData = [
                'username' => $_POST['username'],
                'comment' => $_POST['comment'],
                'rating' => $_POST['rating'],
                'updated_at' => date('Y-m-d H:i:s')
            ];

            $this->reviewModel->update($id, $reviewData);
            $_SESSION['success'] = 'Review updated successfully';
            header('Location: /SuperAdmin/reviews');
            exit();
        } else {
            $review = $this->reviewModel->findById($id);
            $this->view('SuperAdmin/reviews/edit', ['review' => $review]);
        }
    }
}
?>
