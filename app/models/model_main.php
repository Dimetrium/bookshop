<?php

class Model_Main extends Model
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
        self::getAllBooks();
        return $this->data;
    }


    public function getAllBooks()
    {

        $query = "SELECT book_id, book_title, img, price, full_text
		FROM xyz_books";
        $stmt = $this->dbh->query($query);
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
        {
            $this->data[]['books_main'] = $row;
        }

        $this->dbh = null;

    }


}