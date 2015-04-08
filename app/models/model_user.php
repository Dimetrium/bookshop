<?php

class Model_User extends Model
{
    private $last_id;

    public function get_data ()
    {
        $query = <<<SQL
SELECT
  xyz_cart_order.order_id,
  discount,
  price,
  name,
  book_title,
  pay_status_name,
  quantity,
  pay_method_name,
  date
FROM
  xyz_users,
  xyz_books,
  xyz_cart_order,
  xyz_orders,
  xyz_pay_status,
  xyz_payment_method

WHERE xyz_users.user_id = :id
AND xyz_cart_order.book_id = xyz_books.book_id
AND xyz_orders.pay_status_id = xyz_pay_status.pay_status_id
AND xyz_cart_order.order_id = xyz_orders.order_id
AND xyz_orders.pay_method_id = xyz_payment_method.pay_method_id

SQL;
        $id = $this->last_id;
        $data = $this->dbh->getRows($query, array('id' => $id));

        $this->dbh = null;
        return $data;
    }

    public function new_user ()
    {

        $name = trim($_POST['name']);
        $password = trim($_POST['password']);

        $query = <<<SQL
INSERT INTO xyz_users (name, password)
			VALUES (:name, :password);
SQL;
        $this->dbh->insertRow( $query, array(
            'name' => $name,
            'password' => $password) );
        $this->last_id = $this->dbh->lastInsertId();

    }

    public function getUser ()
    {
        // Get id from URI
        $segments = explode( '/', trim( $_SERVER[ 'REQUEST_URI' ], '/' ) );
        $param = $segments[ 2 ];

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
