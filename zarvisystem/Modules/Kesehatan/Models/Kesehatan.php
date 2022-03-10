<?php
namespace Modules\Kesehatan\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

/**
 * @property array|null|string name
 */
class Kesehatan extends Model {
    protected $table = 'lapkesehatan';
    public $timestamps = true; 

 
 
  public function deletecoy($nik)
    {
        $db = DB::connection('mysql');
        $db->table('lapkesehatan')
        ->where("nik","=",$nik) 
        ->where("tanggal","=",date("Y-m-d")) 
        ->delete();
        
    }

       
}
