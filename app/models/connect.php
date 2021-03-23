<?php
include './config/config.php';
class DB 
{
    private const HOST = HOST_DB;
    private const USER = USER_DB;
    private const PASSWORD = PASSWORD_DB;
    private const DB = DB_DB;
    private const PORT = PORT_DB;

    //Connect DB
    public function connnet_DB()
    {
        $connect = new mysqli(self::HOST, self::USER, self::PASSWORD, self::DB, self::PORT);
        $connect = mysqli_connect(self::HOST, self::USER, self::PASSWORD, self::DB, self::PORT);
        if ($connect->connect_error) 
        {
            printf("Connect falied ", mysqli_connect_error());
        }
        else
        {
            return $connect;
        }       
    }

    public function get_UserDB($User) 
    {
        $connect = $this->connnet_DB();
        $result_Get = $connect->query("SELECT id, usuario FROM user_estoque where usuario = '$User';");
        
        if ($result_Get) 
        {
            return $result_Get->fetch_assoc();
        }
        else
        {
            return false;
        }
    }

    public function insert_Valor($User, $Password, $table)
    {
        
        $connect = $this->connnet_DB();
        $result_Insert = $connect->query("insert into $table value (default, '$User', '$Password')");
        return "Insert Sucess!!";
    }

}