<?php require $_SERVER['DOCUMENT_ROOT'] . "/views/SuperAdmin/partials/header.php"; ?>

<h2>Add Subcategory</h2>
<form method="POST">
    <label>Category Name</label>
    <input type="text" name="category_name" required>
    <label>Description</label>
    <textarea name="description"></textarea>
    <button type="submit">Add Subcategory</button>
</form>

<?php require $_SERVER['DOCUMENT_ROOT'] . "/views/SuperAdmin/partials/footer.php"; ?>
