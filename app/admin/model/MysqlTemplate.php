<?
abstract class MysqlTemplate
{
	public function __construct ()
	{
	}
	
	protected function select($query)
	{
		$result = mysql_query($query) or die(mysql_query(Error));
		$this->result = array();
		while(@$row = mysql_fetch_assoc($result))
		{
			$this->result[] = $row; 
		}
	}

	protected function mysqlQuery($query)
	{
		$myQuery = mysql_query($query);
		$this->rows = mysql_affected_rows();
	}

	protected function myId()
	{
		$this->id = mysql_insert_id();
	}

	protected function clear($var)
	{
		$this->var = mysql_real_escape_string($var);
	}

//	protected function cleanInt($var)
//	{
//		$this->var = abs(trim(strip_tags((int)$var)));
//	}
}