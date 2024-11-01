<?php require $_SERVER['DOCUMENT_ROOT'] . "/views/SuperAdmin/partials/header.php"; ?>

<h2>Subcategories</h2>
<a href="/SuperAdmin/categories/addSubcategory/<?php echo $mainCategoryId; ?>" class="btn-blue">+ Add New Subcategory</a>
<div class="cardBox">
    <?php foreach ($subcategories as $subcategory): ?>
        <div class="card">
            <h3><?php echo htmlspecialchars($subcategory['category_name']); ?></h3>
            <p><?php echo htmlspecialchars($subcategory['description']); ?></p>
            <a href="/SuperAdmin/products/index/<?php echo $subcategory['id']; ?>" class="btn-Green">View Products</a>
        </div>
    <?php endforeach; ?>
</div>

<?php require $_SERVER['DOCUMENT_ROOT'] . "/views/SuperAdmin/partials/footer.php"; ?>
