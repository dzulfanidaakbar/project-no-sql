<?php 
// LATIHAN CRUD menambah data di MongoDB 
// Dibuat oleh : Nama:Dzulfanida Akbar Hikmat, NPM :1941403
//Koneksi MongoDb dengan fungsi Manager() 
$manager = new MongoDB\Driver\Manager(); 
// Catatan. Koneksi ke mongoDb bisa dengan perintah sbb. : 
//$manager = new MongoDB\Driver\Manager("mongodb://user:password@localhost:27017"); 
//$manager = new MongoDB\Driver\Manager("mongodb://localhost:27017"); 
//$manager = new MongoDB\Driver\Manager("mongodb://127.0.0.1:27017"); 
//Perintah insert data 
$bulkWrite = new MongoDB\Driver\BulkWrite; 
$bulkWrite->insert(['nama' => 'Erlangga', 'umur' => 26, 'status' => 'pria']); 
$bulkWrite->insert(['nama' => 'Arbi', 'umur' => 31, 'status' => 'pria', 'lahir' => new MongoDB\BSON\UTCDatetime(strtotime('1987-04-02') * 1000)]); 
$bulkWrite->insert(['nama' => 'Deswita', 'umur' => 25, 'status' => 'wanita']); 
//Membuat database di MongoDb dengan nama databaseAnda dan tabel CollectionUser 
//lalu menjalankan perintah insert (menambah data) 
$manager->executeBulkWrite("databaseAnda.collectionUser", $bulkWrite); 
echo "Insert data success!!" 
?>