<?php require_once 'partials/header.php';?>
<?php require_once __DIR__.'/../controllers/SearchController.php';?>
<!-- Views/products.php -->

<form method="GET" action="search">
    <input type="search" placeholder="Type keyword(s) here" name="search" />
    <button type="submit" class="btn btn-lg btn-golden" name="btn-search">Search</button>
</form>

<?php if (!empty($results)) : ?>
    <?php foreach ($results as $data) : ?>
        <h1><?= htmlspecialchars($data['product_name']) ?></h1>
    <?php endforeach; ?>
<?php elseif (isset($_GET['btn-search'])) : ?>
    <p>No results found for "<?= htmlspecialchars($_GET['search']) ?>"</p>
<?php endif; ?>
