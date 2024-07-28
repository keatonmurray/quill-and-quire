<div class="hero-body custom-hero-on-sale">
    <div class="container has-text-centered">
        <h1 class="is-size-4 has-text-weight-semibold">On Sale</h1>
        <p class="mb-4 is-uppercase">All items under 50% off</p>
        <div class="columns is-multiline mt-4" style="padding: 0;">
            <?php if (count($books) > 0): ?>
                <?php foreach ($books as $book): ?>
                    <div class="column is-12-mobile is-6-tablet is-3-desktop">
                        <div class="box books-on-sale" style="max-width: 100%;">
                            <div class="card-content">
                                <div class="content">
                                    <figure class="image is-16by16 js-modal-trigger" data-target="modal-js-product-1">
                                        <img src="assets/img/product-sample1.jpg"/>
                                    </figure>
                                    <h1 class="title is-6 has-text-weight-normal"><?php echo $book['book_title']; ?></h1>
                                    <p class="subtitle is-6 has-text-weight-normal"><?php echo $book['book_author']; ?></p>
                                    <p class="has-text-weight-bold">$<?php echo $book['book_price']; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                <?php else: ?>
                <h2 class="title has-text-weight-normal is-6">Oops! Our Bookshelves are Still Empty</h2>
            <?php endif; ?>
        </div>
    </div>
</div>