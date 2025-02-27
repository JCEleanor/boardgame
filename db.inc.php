<?php
//資料庫主機設定
$db_host = "127.0.0.1:3306";
$db_username = "root";
$db_password = "Tiffany2266";
$db_name = "boardgame";
$db_charset = "utf8mb4";
$db_collate = "utf8mb4_unicode_ci";

//錯誤處理
try {
    //設定 PDO 屬性
    $options = [
        PDO::ATTR_EMULATE_PREPARES => false,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES {$db_charset} COLLATE {$db_collate}"
    ];

    //PDO 連線
    $pdo = new PDO(
        "mysql:host={$db_host};dbname={$db_name};charset={$db_charset}", 
        $db_username , 
        $db_password, 
        $options
    );
} catch (PDOException $e) {
    echo "資料庫連結失敗，訊息: " . $e->getMessage();
    exit();
}
