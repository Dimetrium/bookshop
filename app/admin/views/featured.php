<section id="main-content">
    <h2>Select Book For Edit</h2>
    <hr>
    <div id="products">
<?php if($booksmain): ?>
    <?php foreach($booksmain as $books):?>
        <div class="product">
            <a href="?view=product&book_id=<?=$books['book_id']?>"><img src="<?=ADMIN_IMG?>product.gif" alt=Product"" class="feature"></a>
            <h3><a href="?view=product&book_id=<?=$books['book_id']?>"><?=$books['book_title']?></a></h3>
            <p><span><?=substr($books['full_text'], 0, 200)."..."?></span></p>
            <p>
                <a href="?view=product&book_id=<?=$books['book_id']?>" class="cart-btn">
                    <span class="price">$<?=$books['price']?></span><img src="<?=ADMIN_IMG?>white-cart.gif" alt="View Details">
                    VIEW DETAILS
                </a>
            </p>
        </div><!--end productS-->
    <?php endforeach?>
<?php else: ?>
    <p>All books are sold1122222</p>
<?php endif; ?>