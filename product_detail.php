<?php
$title = 'Product detail';
require __DIR__ . '/utils/protec_acess.php';
?>

<?php require __DIR__ . '/db/ProductsDB.php'; ?>
<?php require __DIR__ . '/db/UsersDB.php'; ?>
<?php include __DIR__ . '/incl/head.php'; ?>
<?php include __DIR__ . '/incl/nav.php'; ?>

<?php

if (!empty($_GET)) {
    $id = intval($_GET['id']);

    $productsDB = new ProductsDB();
    $usersDB = new UsersDB();

    $result = $productsDB->fetchById($id);
    $product = $result->fetchAll()[0];
    
    ?>
<?php include __DIR__ . '/utils/user_email_fr_id.php' ?>
<?php
    $price = $product['price'];
} else {
    exit('No product chosen');
}

?>

<body class="d-flex flex-column min-vh-100">

<div class="card" style="width: 50%; margin:auto;">
    <img src="<?php echo $product['img_link']; ?>" style="max-height: 30%;min-height:auto"alt="img_link" class="card-img-top- img-fluid">
    <div class="card-body">
        <h2 class="mb-10"><?php echo $product['name']; ?></h2>
        <h3 class="mb-4"> Product information </h3>
        <p> <?php echo $product['product_info']; ?> </p>
        <h3 class="mb-4">Seller contact</h3>
        <p> <?php echo $seller_email; ?></p>
        <h3 class="mb-4">Price</h3>
        <label class="mb-4 fs-4">$<?php echo $price; ?></label>
        <h3 class="mb-4">
            <a href="./order_confirm.php?id=<?php echo $product['product_id']; ?>">Buy</a>
        </h3>
    </div>
</div>

<?php include __DIR__ . '/incl/footer.php' ?>