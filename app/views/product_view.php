<hr/>
<section id="main-content" class="clearfix">
    <div id="product-image">
        <img src="<?=IMG . 'big' . $product['img']?>" alt="Product">
    </div><!--end product-image-->
    <div id="product-details">
        <h1><?=$product['book_title']?></h1>
        <p><?=$product['full_text']?></p>
        <hr />
        <form action="" method="post">
            <label for="qty">Qty: </label>
            <input type="text" id="qty" name="quantity" value="1" maxlength="2">

            <button type="submit" name="sendmail" value="Send" id="submitMail"  maxlength="1000" class="secondary-cart-btn">
            <img src="<?=IMG?>white-cart.gif" alt="ADD TO CART" > ADD TO CART
            </button>
        </form>
    </div><!--end product-details-->
    <div id="product-info">
        <p class="price">$ <?=$product['price']?></p>
        <p>Author: <span><?=$product['author_title']?></span></p>
        <p>Genre: <span><?=$product['genre_title']?></span></p>
    </div>
</section>
<hr>