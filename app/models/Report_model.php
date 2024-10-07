<?php
// Definisi dari table produk
class Report_model extends Model
{
    // Table
    protected static $table = 'report';
    protected static $primaryKey = 'id';


    // Fields
    public $id;
    public $report;
}
?>
