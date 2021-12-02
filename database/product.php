<?php
class Product
{
    public $db = null;

    public function __construct(DBcontroller $db)
    {
        if (!isset($db->con)) return null;
        $this->db = $db;
    }

    public $item = null;

    public function getData($table = 'product')
    {
        $result = $this->db->con->query("SELECT * FROM {$table}");
        $resultArry = array();

        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $resultArry[] = $item;
        }
        return $resultArry;
    }
}
