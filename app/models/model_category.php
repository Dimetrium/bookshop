<?php

class Model_Category extends Model
{
    protected $dbh;
    protected $data = array();

    public function __construct()
    {
        $dbh = new PDO ( PDO_DSN, PDO_USER, PDO_PASSWORD );
        $this->dbh = $dbh;
    }

    public function get_data()
    {
//        self::getByGenre();
        return $this->data;
    }


    public function getByGenre()
    {
        $segments=explode('/',trim($_SERVER['REQUEST_URI'],'/'));
        $param = $segments[2];

        $query =
            "SELECT *
		FROM xyz_books, xyz_genres
		INNER JOIN xyz_bycat
		WHERE xyz_books.book_id = xyz_bycat.book_id
		and xyz_genres.genre_id = xyz_bycat.cat_id
		and genre_id=$param";

        $stmt = $this->dbh->query($query);
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
        {
            $this->data[]['byGenre'] = $row;
        }

        $this->dbh = null;
        return $this->data;

    }

    public function getByAuthor()
    {
        $segments = explode( '/', trim( $_SERVER[ 'REQUEST_URI' ], '/' ) );
        $param = $segments[ 2 ];

        $query =
            "SELECT *
    FROM xyz_books, xyz_authors
		INNER JOIN xyz_byauth
		WHERE xyz_books.book_id = xyz_byauth.book_id
    and xyz_authors.author_id = xyz_byauth.auth_id
    and author_id=$param";

        $stmt = $this->dbh->query( $query );
        while ( $row = $stmt->fetch( PDO::FETCH_ASSOC ) ) {
            $this->data[ ][ 'byGenre' ] = $row;
        }

        $this->dbh = null;
        return $this->data;


    }
}