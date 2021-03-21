<?php
class DB 
{
    private const HOST = '';
    private const USER = '';
    private const PASSWORD = '';
    private const DB = '';
    private const PORT = '';

    //Connect DB
    public static function connnet_DB()
    {
        $connect = mysqli_connect(self::HOST, self::USER, self::PASSWORD, self::DB, SELF::PORT);
        
        if (mysqli_connect_error()) 
        {
            printf("Connect falied ", mysqli_connect_error());
        }
        else
        {
            return $connect;
        }
    }

    public static function select_get($connect) 
    {
        $get_Table = $_GET["table"];
        $result = mysqli_query($connect, "select * from $get_Table");
        return mysqli_fetch_all($result)[0];
    }
    // 
    public static function insert_Valor($connect, $User, $Password, $table)
    {
        $Query = "insert into $table value (default, $User, $Password)";
        $result = mysqli_query($connect, $Query);
    }
}