<?php
// Definisi dari table produk
class User_model extends Model
{
    // Table
    protected static $table = 'user';
    protected static $primaryKey = 'id';


    // Fields
    public $id;
    public $username;
    public $password;

}
?>
