<section id="main-content">
    <h2>Featured</h2>
    <hr>
<?php if($booksmain): ?>
    <?php foreach($booksmain as $books):?>
        <div class="product">
            <a href="product/index/<?=$books['book_id']?>"><img src="<?=IMG.$books['img']?>" alt=Product"" class="feature"></a>
            <h3><a href="product/index/<?=$books['book_id']?>"><?=$books['book_title']?></a></h3>
            <p><span><?=substr($books['full_text'], 0, 200)."..."?></span></p>
            <p>
                <a href="product/index/<?=$books['book_id']?>" class="cart-btn">
                    <span class="price">$<?=$books['price']?></span><img src="<?=IMG?>white-cart.gif" alt="View Details">
                    VIEW DETAILS
                </a>
            </p>
        </div><!--end productS-->
    <?php endforeach?>
<?php else: ?>
    <p>All books are sold</p>
<?php endif; ?>
</section>
<hr>
