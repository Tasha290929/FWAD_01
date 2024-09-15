<?php
class SqliteDatabase{
    private $bd;
    public function __construct(string $bd)
    {
        $this -> bd = new PDO(dsn:"sqlite:$bd");
    }

    public function select (string $table, array $fields = ["*"])
    {
        $this -> bd -> query(query:"select".implode(separator:',', $fields). " from $table ")
    }
}


$bd = new SqliteDatabase(bd:'database.sqlite');
