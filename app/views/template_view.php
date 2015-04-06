<!DOCTYPE html>
<html>
<head>
<base href="http://192.168.0.15/~user5/bookshop">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?=TITLE?></title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="<?=CSS?>main.css">
    <link rel="stylesheet" href="<?=CSS?>mormalize.css">
</head>
<body>
<div id="wrapper">
    <header>
        <section id="action-bar">
            <div id="logo"><a href="/"><span id="logo-accent">B</span>ook <span id="logo-accent">S</span>hop</a></div>
            <nav class="dropdown">
                <ul>
                    <li>
                        <a href="#">By Genre <img src="<?=IMG?>down-arrow.gif" alt="By Genre" /></a>
                        <ul>
                            <?php foreach($genres_menu as $key => $item):?>
                                <li><a href="/category/genre/<?=$key?>"><?=$item?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </li>
                </ul>
            </nav>
            <div id="user-menu">
                <nav class="dropdown">
                    <ul>
                        <li>
                            <a href="#"><img src="<?=IMG?>user-icon.gif" alt="By Authors"/> By Authors <img src="<?=IMG?>down-arrow.gif" alt="Authors"/></a>
                            <ul>
                                <?php foreach($authors_menu as $key => $authors):?>
                                    <li><a href="/category/author/<?=$key?>"><?=$authors?></a></li>
                                <?php endforeach; ?>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div><!--end user-menu-->
            <div id="view-cart">
                <a href="/admin"><img src="<?=IMG?>password.gif" alt="Admin Panel"> Admin Panel</a>
            </div><!--end view-cart-->
        </section><!--end action-bar-->
    </header>

    <?php include 'app/views/'.$content_view; ?>

    <footer>
        <section class="clearfix">
            <div id="copyright">
                <div id="logo"><a href="/"><span id="logo-accent">B</span>ook <span id="logo-accent">S</span>hop</a></div>
                <!--end logo-->
                <p id="store-desc">This is a short description of the store.</p>
                <p id="store-copy">&copy; 2014 Book Shop.</p>
            </div><!--end copyright-->
            <div id="payments">
                <h4>SUPPORTED PAYMENT METHODS</h4>
                <img src="<?=IMG?>payment-methods.gif" alt="Supported Payment Methods">
            </div><!--end payments-->
        </section>
    </footer>
</div><!--end wrapper-->
</body>
</html>
