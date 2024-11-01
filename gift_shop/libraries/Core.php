<?php
//update to our pages names
class Core {
    protected $routes = [
        // Default route to customer index
        '' => 'CustomerController@index',  // This handles the root URL




        // Admin Routes
        'admin/dashboard' => 'DashboardController@index',
        'admin/users' => 'UserController@index',
        'admin/comments' => 'ReviewController@index',
        'admin/users/create' => 'UserController@create',
        'admin/users/status' => 'UserController@toggleStatus',
        'admin/coupons' => 'CouponController@index',
        'admin/coupons/create' => 'CouponController@create',
        'admin/coupons/edit/{id}' => 'CouponController@edit',
        'admin/coupons/delete/{id}' => 'CouponController@delete',
        'admin/users/toggleStatus/{id}/{status}' => 'UserController@toggleStatus',
        'admin/reviews/toggleStatus/{id}/{status}' => 'ReviewController@toggleStatus',
        'admin/coupons/toggleStatus/{id}/{status}' => 'CouponController@toggleStatus',
        'admin/login' => 'AdminController@login',

        'admin/category' => 'CategoryController@index',                 // List categories
        'admin/category/create' => 'CategoryController@create',           // Create category form
        'admin/category/store' => 'CategoryController@store',             // Store new category
        'admin/category/edit/{id}' => 'CategoryController@edit',
        'admin/categories/show/{id}' => 'CategoryController@show',
        'admin/categories/addSubcategory/{id}' => 'CategoryController@addSubcategory',
        // Edit category form
        'admin/category/update/{id}' => 'CategoryController@update',      // Update category
        'admin/category/delete/{id}' => 'CategoryController@delete',      // Delete category

        // New Product Routes
        'admin/products' => 'ProductController@index',                    // List products
        'admin/product/create' => 'ProductController@create',             // Create product form
        'admin/product/store' => 'ProductController@store',               // Store new product
        'admin/product/edit/{id}' => 'ProductController@edit',            // Edit product form
        'admin/product/update/{id}' => 'ProductController@update',        // Update product
        'admin/product/delete/{id}' => 'ProductController@delete',        // Delete product

        // Order Management Route
        'admin/orders' => 'OrderController@index',              // List all orders
        'admin/orders/show/{id}' => 'OrderController@show',     // Show a specific order
        'admin/orders/create' => 'OrderController@create',      // Create a new order
        'admin/orders/store' => 'OrderController@store',        // Store new order data
        'admin/orders/edit/{id}' => 'OrderController@edit',     // Edit a specific order
        'admin/orders/update/{id}' => 'OrderController@update', // Update a specific order
        'admin/orders/delete/{id}' => 'OrderController@delete',

        // Super Admin Routes

        'SuperAdmin/dashboard' => 'SuperDashboardController@index',
        'SuperAdmin/users' => 'SuperUserController@index',
        'SuperAdmin/comments' => 'SuperReviewController@index',
        'SuperAdmin/users/create' => 'SuperUserController@create',
        'SuperAdmin/users/status' => 'SuperUserController@toggleStatus',
        'SuperAdmin/coupons' => 'SuperCouponController@index',
        'SuperAdmin/coupons/create' => 'SuperCouponController@create',
        'SuperAdmin/coupons/edit/{id}' => 'SuperCouponController@edit',
        'SuperAdmin/coupons/delete/{id}' => 'SuperCouponController@delete',
        'SuperAdmin/users/toggleStatus/{id}/{status}' => 'SuperUserController@toggleStatus',
        'SuperAdmin/reviews/toggleStatus/{id}/{status}' => 'SuperReviewController@toggleStatus',
        'SuperAdmin/coupons/toggleStatus/{id}/{status}' => 'SuperCouponController@toggleStatus',


        'SuperAdmin/category' => 'SuperCategoryController@index',                 // List categories
        'SuperAdmin/category/create' => 'SuperCategoryController@create',           // Create category form
        'SuperAdmin/category/store' => 'SuperCategoryController@store',             // Store new category
        'SuperAdmin/category/edit/{id}' => 'SuperCategoryController@edit',
        'SuperAdmin/categories/show/{id}' => 'SuperCategoryController@show',
        'SuperAdmin/categories/addSubcategory/{id}' => 'SuperCategoryController@addSubcategory',
        // Edit category form
        'SuperAdmin/category/update/{id}' => 'SuperCategoryController@update',      // Update category
        'SuperAdmin/category/delete/{id}' => 'SuperCategoryController@delete',      // Delete category

        // New Product Routes
        'SuperAdmin/products' => 'SuperProductController@index',                    // List products
        'SuperAdmin/product/create' => 'SuperProductController@create',             // Create product form
        'SuperAdmin/product/store' => 'SuperProductController@store',               // Store new product
        'SuperAdmin/product/edit/{id}' => 'SuperProductController@edit',            // Edit product form
        'SuperAdmin/product/update/{id}' => 'SuperProductController@update',        // Update product
        'SuperAdmin/product/delete/{id}' => 'SuperProductController@delete',        // Delete product

        // Order Management Route
        'SuperAdmin/orders' => 'SuperOrderController@index',              // List all orders
        'SuperAdmin/orders/show/{id}' => 'SuperOrderController@show',     // Show a specific order
        'SuperAdmin/orders/create' => 'SuperOrderController@create',      // Create a new order
        'SuperAdmin/orders/store' => 'SuperOrderController@store',        // Store new order data
        'SuperAdmin/orders/edit/{id}' => 'SuperOrderController@edit',     // Edit a specific order
        'SuperAdmin/orders/update/{id}' => 'SuperOrderController@update', // Update a specific order
        'SuperAdmin/orders/delete/{id}' => 'SuperOrderController@delete', // Delete a specific order




    ];

    public function __construct() {
        $this->dispatch();
    }

    private function dispatch() {
        $url = $this->getUrl();

        // Check for dynamic routes
        foreach ($this->routes as $route => $action) {
            // Create a regex pattern from the route, replacing {param} with a regex capture group
            $routePattern = preg_replace('/\{(\w+)\}/', '([^\/]+)', $route);

            // Check if the current URL matches the route pattern
            if (preg_match('#^' . $routePattern . '$#', $url, $matches)) {
                // Remove the first element which is the full match
                array_shift($matches);

                $route = explode('@', $action);
                $controllerName = $route[0];
                $methodName = $route[1];

                // Check if the controller file exists
                if (file_exists('controllers/' . $controllerName . '.php')) {
                    require_once 'controllers/' . $controllerName . '.php';
                    $controller = new $controllerName;

                    // Check if the method exists in the controller
                    if (method_exists($controller, $methodName)) {
                        // Call the method with the captured parameters
                        call_user_func_array([$controller, $methodName], $matches);
                        return;  // End function after successful dispatch
                    } else {
                        die("ERROR: Method $methodName not found in $controllerName.");
                    }
                } else {
                    die("ERROR: Controller $controllerName not found.");
                }
            }
        }

        // Default route handling for non-dynamic routes
        if (isset($this->routes[$url])) {
            $route = explode('@', $this->routes[$url]);
            $controllerName = $route[0];
            $methodName = $route[1];

            if (file_exists('controllers/' . $controllerName . '.php')) {
                require_once 'controllers/' . $controllerName . '.php';
                $controller = new $controllerName;

                if (method_exists($controller, $methodName)) {
                    $controller->$methodName();
                    return;  // End function after successful dispatch
                } else {
                    die("ERROR: Method $methodName not found in $controllerName.");
                }
            } else {
                die("ERROR: Controller $controllerName not found.");
            }
        } else {
            die("ERROR: Route not found for URL '$url'.");
        }
    }

    private function getUrl() {
        $url = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '';
        $url = trim($url, '/');  // Trim leading and trailing slashes

        if (strpos($url, '?') !== false) {
            $url = strstr($url, '?', true);  // Remove query strings for clean URL
        }

        return $url;
    }

}