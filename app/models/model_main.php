<?php

class Model_Main extends Model
{
    protected $data = array();

    public function get_data ()
    {
        self::getAllBooks();
        return $this->data;
    }


    public function getAllBooks ()
    {
        $query = <<<SQL
        SELECT book_id, book_title, img, price, full_text
		FROM xyz_books;
SQL;
        $this->data = $this->dbh->getRows($query);
        $this->dbh = null;

    }


}