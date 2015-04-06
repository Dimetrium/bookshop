<section id="main-content" class="clearfix">
    <div id="product-image">
        <img src="<?=ADMIN_IMG?>product.gif">
    </div><!--end product-image-->
    <div id="product-details">
        <h1><?=$product['book_title']?></h1>
        <p><?=$product['full_text']?></p>
        <hr />
        <form action="#" method="post">
            <p><a href="?view=editbook&book_id=<?=$_GET['book_id']?>" id="updateBook">Update</a></p>
            <p><a href="?view=delbook&book_id=<?=$_GET['book_id']?>" id="delBook">Delete</a></p>
        </form>
    </div><!--end product-details-->
    <div id="product-info">
        <p class="price">$ <?=$product['price']?></p>
        <p>Author: <span><?=$product['authors_name']?></span></p>
        <p>Genre: <span><?=$product['genre_name']?></span></p>
    </div>
</section>