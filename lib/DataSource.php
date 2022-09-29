<?php


namespace Phppot;

class DataSource
{
    // PHP 7.1.0 visibility modifiers are allowed for class constants.
    // when using above 7.1.0, declare the below constants as private
    // for better encapsulation
    const HOST = 'localhost';

    const USERNAME = 'root';

    const PASSWORD = '';

    const DATABASENAME = 'user_registration';

    private $conn;

    function __construct()
    {
        $this->conn = $this->getConnection();
    }

    /**
     * If connection object is needed use this method and get access to it.
     * Otherwise, use the below methods for insert / update / etc.
     *
     * @return \mysqli
     */
    public function getConnection()
    {
        $conn = new \mysqli(self::HOST, self::USERNAME, self::PASSWORD, self::DATABASENAME);

        if (mysqli_connect_errno()) {
            trigger_error("Problem with connecting to database.");
        }

        $conn->set_charset("utf8");
        return $conn;
    }


    /**
     * To get database results
     */
    public function select($query, $paramType = "", $paramArray = array())
    {
        $stmt = $this->conn->prepare($query);

        if (!empty($paramType) && !empty($paramArray)) {

            $this->bindQueryParams($stmt, $paramType, $paramArray);
        }
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $resultset[] = $row;
            }
        }

        if (!empty($resultset)) {
            return $resultset;
        }
    }

    /**
     * To insert
     */
    public function insert($query, $paramType, $paramArray)
    {
        $stmt = $this->conn->prepare($query);
        $this->bindQueryParams($stmt, $paramType, $paramArray);

        $stmt->execute();
        $insertId = $stmt->insert_id;
        return $insertId;
    }

    /*
      update 
    */
    public function update($query, $paramType, $paramArray)
    {
        $stmt = $this->conn->prepare($query);
        $this->bindQueryParams($stmt, $paramType, $paramArray);
        $stmt->execute();
    }

    /**
     * To execute query
     */
    public function execute($query, $paramType = "", $paramArray = array())
    {
        $stmt = $this->conn->prepare($query);

        if (!empty($paramType) && !empty($paramArray)) {
            $this->bindQueryParams($stmt, $paramType, $paramArray);
        }
        $stmt->execute();
    }

    /**
     * 1.
     * Prepares parameter binding
     * 2. Bind prameters to the sql statement
     */
    public function bindQueryParams($stmt, $paramType, $paramArray = array())
    {
        $paramValueReference[] = &$paramType;
        for ($i = 0; $i < count($paramArray); $i++) {
            $paramValueReference[] = &$paramArray[$i];
        }
        call_user_func_array(array(
            $stmt,
            'bind_param'
        ), $paramValueReference);
    }

    /**
     * To get database results
     */
    public function getRecordCount($query, $paramType = "", $paramArray = array())
    {
        $stmt = $this->conn->prepare($query);
        if (!empty($paramType) && !empty($paramArray)) {

            $this->bindQueryParams($stmt, $paramType, $paramArray);
        }
        $stmt->execute();
        $stmt->store_result();
        $recordCount = $stmt->num_rows;

        return $recordCount;
    }
}
