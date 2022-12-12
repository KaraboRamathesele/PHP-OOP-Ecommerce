    <!-- Hero Area  -->
    <section class="hero">
        <div class="hero-img">
            <h2>What would<span class="green">Karabo</span> eat?</h2>
        </div>
    </section>

    <!-- Products Area  -->
    <section class="products">
        <div class="products-title">
            <h2>Products</h2>
        </div>
        <div class="products-display">
            <?php while ($product = $products->fetch_object()) : ?>
                <div class="product">
                    <div class="product-img" style="background-image: url('uploads/images/<?= $product->image ?>');">
                        <img src=" assets/img/coke-zero.jpg" alt="product image">
                    </div>
                    <div class="product-title">
                        <h4><?= $product->name ?></h4>
                    </div>
                    <div class="product-title">
                        <p>$<?= $product->price ?></p>
                    </div>
                    <div class="product-description">
                        <p>
                            <?= $product->description ?>
                        </p>
                    </div>
                    <button class="btn btn-see-more"><a href="product/singleProduct&id=<?= $product->id ?>">See more</a> </button>
                </div>
            <?php endwhile; ?>
        </div>
    </section>