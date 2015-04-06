<?php

class View
{

    //public $template_view; // здесь можно указать общий вид по умолчанию.

    /*
    $content_file - виды отображающие контент страниц;
    $template_file - общий для всех страниц шаблон;
    $data - массив, содержащий элементы контента страницы. Обычно заполняется в модели.
    */
    function GenreMenu()
    {
        $dbh = new PDO ( PDO_DSN, PDO_USER, PDO_PASSWORD );

        $query = "SELECT *
        FROM  `xyz_genres`
        ORDER BY  `genre_id`";
        $stmt = $dbh->query( $query );
        while ( $row = $stmt->fetch( PDO::FETCH_ASSOC ) ) {
            $genres_menu[] = $row[ 'genre_title' ];
        }

        $dbh = null;

        return $genres_menu;

    }
    function AuthorMenu()
    {
        $dbh = new PDO ( PDO_DSN, PDO_USER, PDO_PASSWORD );

        $query = "SELECT *
		FROM  `xyz_authors`
		ORDER BY  `author_title`";
        $stmt = $dbh->query($query);
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
        {
            $author_menu[] = $row['author_title'];
        }

        $dbh = null;

        return $author_menu;

    }

    function generate($content_view, $template_view, $data = null)
    {
            foreach ($data as $row )
            {
//              $genres_menu[] = $row['genre_title'];// преобразуем элементы массива в переменные
//                $authors_menu[] = $row['authors_title'];// преобразуем элементы массива в переменные
                $booksmain[] = $row['books_main'];// преобразуем элементы массива в переменные
                $product[] = $row['product'];// преобразуем элементы массива в переменные
                $categorys[] = $row['byGenre'];
            }
        $genres_menu = self::GenreMenu();
        $authors_menu = self::AuthorMenu();

        $booksmain = array_filter($booksmain);
        @$product = array_filter($product[0]);
        $categorys = array_filter($categorys);

        /*
        динамически подключаем общий шаблон (вид),
        внутри которого будет встраиваться вид
        для отображения контента конкретной страницы.
        */
        include 'app/views/'.$template_view;

        unset($genres_menu);
        unset($authors_menu);
        unset($booksmain);
    }
}
