<?php

class Model_Product extends Model
{

    public function get_data()
    {
        $dbh = new PDO ( PDO_DSN, PDO_USER, PDO_PASSWORD );

        $segments=explode('/',trim($_SERVER['REQUEST_URI'],'/'));
        $param = $segments[3];

        $query =
            "SELECT DISTINCT xyz_books.book_id, price, book_title, img, full_text, GROUP_CONCAT(DISTINCT author_title)
		as author_title, GROUP_CONCAT(DISTINCT genre_title SEPARATOR ', ')
		as genre_title
		FROM xyz_books, xyz_authors, xyz_genres
		INNER JOIN xyz_byauth, xyz_bycat
		WHERE xyz_books.book_id = xyz_byauth.book_id
		and xyz_authors.author_id = xyz_byauth.auth_id
		and xyz_books.book_id = xyz_bycat.book_id
		and xyz_genres.genre_id = xyz_bycat.cat_id
		and xyz_books.book_id = $param
		GROUP BY book_title";

        $stmt = $dbh->query($query);
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
        {
            $data[]['product'] = $row;
        }

        return $data;

    }

}
