<?php

class Model_Category extends Model
{

    public function get_data ()
    {
    }

    public function getByGenre ()
    {
        // Get id from URI
        $segments = explode( '/', trim( $_SERVER[ 'REQUEST_URI' ], '/' ) );
        $param = $segments[ 2 ];

        $query = <<<SQL
        SELECT *
		FROM xyz_books, xyz_genres
		INNER JOIN xyz_bycat
		WHERE xyz_books.book_id = xyz_bycat.book_id
		AND xyz_genres.genre_id = xyz_bycat.cat_id
		AND genre_id = :id;
SQL;
        $data = $this->dbh->getRows( $query, array( 'id' => $param ) );
        $this->dbh = null;
        return $data;

    }

    public function getByAuthor ()
    {
        // Get id from URI
        $segments = explode( '/', trim( $_SERVER[ 'REQUEST_URI' ], '/' ) );
        $param = $segments[ 4 ];

        $query = <<<SQL
        SELECT *
        FROM xyz_books, xyz_authors
		INNER JOIN xyz_byauth
		WHERE xyz_books.book_id = xyz_byauth.book_id
        AND xyz_authors.author_id = xyz_byauth.auth_id
        AND author_id = :id ;
SQL;
        $data = $this->dbh->getRows( $query, array( 'id' => $param ) );
        $this->dbh = null;

        return $data;
    }

}
