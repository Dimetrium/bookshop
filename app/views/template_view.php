<!DOCTYPE html>
<html>
<head>
<base href="/~user5/bookshop/">
    <title><?= TITLE ?></title>
    <link rel="stylesheet" href="<?= CSS ?>bootstrap.min.css" type='text/css'>
    <link rel="stylesheet" href="<?= CSS ?>main.css" type='text/css'>
    <link rel="stylesheet" href="<?= CSS ?>normalize.css" type='text/css'>
    <script type="text/javascript" src="<?= JS ?>jquery-2.1.3.js"></script>
</head>
<body>

<?php if ( ( $_GET[ 'login' ] ) ) { ?>
    <script type="text/javascript"> $('#loginModal').modal('show'); </script>
<?php } ?>

<div class="container">
    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title">SignIn/SignUp</h4>
                </div>

                <div class="modal-body">
                    <div class="well">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#login" data-toggle="tab">Login</a></li>
                            <li><a href="#create" data-toggle="tab">Create Account</a></li>
                        </ul>
                        <div id="myTabContent" class="tab-content">
                            <div class="tab-pane active in" id="login">
                                <form id="loginForm" method="post" class="form-horizontal">
                                    <div class="form-group">
                                        <label class="col-xs-3 control-label">Username</label>

                                        <div class="col-xs-5">
                                            <input type="text" class="form-control" name="username"/>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-xs-3 control-label">Password</label>

                                        <div class="col-xs-5">
                                            <input type="password" class="form-control" name="password"/>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-xs-5 col-xs-offset-3">
                                            <button type="submit" class="btn btn-primary" formaction="login">Login
                                            </button>
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="create">
                                <form id="tab" method="post" class="form-horizontal">

                                    <div class="form-group">
                                        <label class="col-xs-3 control-label">Name</label>

                                        <div class="col-xs-5">
                                            <input type="text" value="" name="name" class="input-xlarge">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-xs-3 control-label">Password</label>

                                        <div class="col-xs-5">
                                            <input type="text" value="" name="password" class="input-xlarge">
                                        </div>
                                    </div>

                                    <div>
                                        <button class="btn btn-primary" formaction="user/new">Create Account</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="wrapper">
    <header>
        <section id="action-bar">
            <div id="logo"><a href="/~user5/bookshop/"><span id="logo-accent">B</span>ook <span id="logo-accent">S</span>hop</a>
            </div>
            <nav class="dropdown">
                <ul>
                    <li>
                        <a href="#">By Genre <img src="<?= IMG ?>down-arrow.gif" alt="By Genre"/></a>
                        <ul>
                            <?php foreach ( $genres as $item ): ?>
                                <li>
                                    <a href="category/genre/<?= $item[ 'genre_id' ] ?>"><?= $item[ 'genre_title' ] ?></a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </li>
                </ul>
            </nav>
            <div id="user-menu">
                <nav class="dropdown">
                    <ul>
                        <li>
                            <a href="#"><img src="<?= IMG ?>user-icon.gif" alt="By Authors"/> By Authors <img
                                    src="<?= IMG ?>down-arrow.gif" alt="Authors"/></a>
                            <ul>
                                <?php foreach ( $authors as $author ): ?>
                                    <li>
                                        <a href="category/author/<?= $author[ 'author_id' ] ?>"><?= $author[ 'author_title' ] ?></a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
            <!--end user-menu-->
            <div id="view-cart">
                <a href="#" data-toggle="modal" data-target="#loginModal"><img src="<?= IMG ?>password.gif"
                                                                               alt="Admin Panel"> Sign in\Sign
                    Up</a>
                <!--                <a href="/admin" data-toggle="modal" data-target="#loginModal"><img src="-->
                <? //= IMG ?><!--password.gif" alt="Admin Panel"> Sign in\Sign Up</a>-->
            </div>
            <!--end view-cart-->
        </section>
        <!--end action-bar-->
    </header>

    <?php include 'app/views/' . $content_view; ?>

    <footer>

        <section class="clearfix">
            <div id="copyright">
                <div id="logo"><a href="/"><span id="logo-accent">B</span>ook <span id="logo-accent">S</span>hop</a>
                </div>
                <!--end logo-->
                <p id="store-desc">This is a short description of the store.</p>

                <p id="store-copy">&copy; 2015 Book Shop.</p>
            </div>
            <!--end copyright-->
            <div id="payments">
                <h4>SUPPORTED PAYMENT METHODS</h4>
                <img src="<?= IMG ?>payment-methods.gif" alt="Supported Payment Methods">
            </div>
            <!--end payments-->
        </section>
    </footer>
</div>
<script type="text/javascript" src="<?= JS ?>bootstrap.min.js"></script>
<script type="text/javascript" src="<?= JS ?>modal.js"></script>
<!--end wrapper-->
</body>
</html>
