<?php $page_title = 'products'; ?>
<?php include 'include/header.php'; ?>
<?php


$products = [
    [
        'title' => 'first product',
        'description' => 'first product description',
        'image' => 'yat/demo-project/assessts/imgs/1.webp',
        'price_original' => 200,
        'price_sale' => 100,
        'curency' => 'EGP',
        'sale' => false,
    ],
    [
        'title' => 'second product',
        'description' => 'second product description',
        'image' => 'yat/demo-project/assessts/imgs/1.webp',
        'price_original' => 400,
        'price_sale' => 300,
        'curency' => 'EGP',
        'sale' => true,
    ],
    [
        'title' => 'third product',
        'description' => 'third product description',
        'image' => 'yat/demo-project/assessts/imgs/1.webp',
        'price_original' => 700,
        'price_sale' => 600,
        'curency' => 'EGP',
        'sale' => false,
    ],
];
?>



<div class="container my-3">
    <div class="row">
        <?php foreach ($products as $product) { ?>
            <div class="col-4">
                <div class="card">
                    <?php
                    if ($product['sale'] === true) { ?>
                        <div class="btn btn-success" style="position: absolute;"> sale </div>
                    <?php     } ?>
                    <img src="/one/images/1.webp" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $product['title']; ?></h5>
                        <p class="card-text"><?php echo $product['description']; ?> </p>
                        <p class="card-text">
                            <?php
                            if ($product['sale'] === true) { ?>
                                <span class="text_muted" style="text-decoration:line-through">
                                    <?php echo $product['price_sale']; ?>
                                    <?php echo $product['curency']; ?>
                                </span>
                                <span>
                                    <?php echo $product['price_original']; ?>
                                    <?php echo $product['curency']; ?>
                                </span>
                            <?php     } else { ?>

                                <span>
                                    <?php echo $product['price_original']; ?>
                                    <?php echo $product['curency']; ?>
                                </span>

                            <?php } ?>
                        </p>
                        <a href="#" class="btn btn-primary">add to cart</a>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>




<?php include 'include/footer.php'; ?>