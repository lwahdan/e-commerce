<?php require $_SERVER['DOCUMENT_ROOT'] . "/views/SuperAdmin/partials/header.php"; ?>
<div class="product-container">
    <h2>Main Categories</h2>

    <!-- Categories Cards -->
    <div class="product-cards">

        <?php

        foreach ($categories as $category) : ?>
            <div class="product-card">
                <img src="<?php echo $category['image_url']; ?>" alt="Category Image">
                <div class="product-card-title"><?php echo htmlspecialchars($category['category_name']); ?></div>
                <a href="/SuperAdmin/categories/show/<?php echo $category['id']; ?>" class="btn-blue">View Subcategories</a>

            </div>
        <?php endforeach; ?>
    </div>


</div>

<?php require $_SERVER['DOCUMENT_ROOT'] . "/views/SuperAdmin/partials/footer.php"; ?>
