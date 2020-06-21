<?php
class DBcontroller
{
    protected $host = 'sql12.freemysqlhosting.net';
    protected $user = 'sql12349963';
    protected $password = 'F33hr7ZXWg';
    protected $database = "sql12349963";

    public $con = null;

    public function __construct()
    {
        $this->con = mysqli_connect($this->host, $this->user, $this->password, $this->database);
        if ($this->con->connect_error) {
            echo "Fail" . $this->con->connect_error;
        }
    }

    public function __destruct()
    {
        $this->closeConnection();
    }

    protected function closeConnection()
    {
        if ($this->con != null) {
            $this->con->close();
            $this->con = null;
        }
    }
}