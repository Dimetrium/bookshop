<header>
<a href="<?=$_SERVER['REQUEST_URI']?>en">En</a>
<a href="<?=$_SERVER['REQUEST_URI']?>ru">Ru</a>
    <section id="action-bar">
        <div id="logo"><a href="<?= BASE ?>"><span id="logo-accent">B</span>ook <span
                    id="logo-accent">S</span>hop</a>
        </div>
        <nav class="dropdown">
            <ul>
                <li>
                    <a href="#">By Genre <img src="<?= IMG ?>down-arrow.gif" alt="By Genre"/></a>
                    <ul>
                        <?php foreach ( $genres as $item ): ?>
                            <li>
                                <a href="category/genre/<?= $item[ 'genre_id' ] ?>/"><?= $item[ 'genre_title' ] ?></a>
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
                                    <a href="category/author/<?= $author[ 'author_id' ] ?>/"><?= $author[ 'author_title' ] ?></a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
        <div id="view-cart">
            <a href="#" data-toggle="modal" data-target="#loginModal"><img src="<?= IMG ?>password.gif"
                                                                           alt="Admin Panel"> Sign in\Sign Up</a>
        </div>
    </section>
</header>
