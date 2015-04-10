<?php

class View
{
/**
 * temporary 'kostely' for generate category/author list
 *
 * TODO: Move this 'kostyl's' to main model
 *
 */
    function GenreMenu ()
    {
        $dbh = DBConnect::getInstance();
        $dbh->getConnection();
        $query = <<<SQL
            SELECT *
            FROM  `xyz_genres`
            ORDER BY  `genre_id`;
SQL;
        $genres = $dbh->getRows( $query );
        $dbh = null;

        return $genres;

    }

    function AuthorMenu ()
    {
        $dbh = DBConnect::getInstance();
        $dbh->getConnection();

        $query = <<<SQL
            SELECT *
            FROM  `xyz_authors`
            ORDER BY  `author_title`;
SQL;
        $author = $dbh->getRows( $query );
        $dbh = null;

        return $author;

    }
    // End 'Kostyl'

    function generate ( $content_view, $template_view, $data = array() )
    {

        foreach ( $data as $row ) {
            $booksmain[ ] = $row;
            $product[ ] = $row;
            $categorys[ ] = $row;
            $userinfo[ ] = $row;
        }

        $genres = self::GenreMenu();
        $authors = self::AuthorMenu();

        @$booksmain = array_filter( $booksmain );
        @$product = array_filter( $product[ 0 ] );
        @$categorys = array_filter( $categorys );

        include 'app/views/' . $template_view;

        unset( $genres );
        unset( $authors );
        unset( $booksmain );
    }
}
