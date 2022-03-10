<?php
namespace Modules\Realtime\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

/**
 * @property array|null|string name
 */
class Realtime extends Model {
    protected $table = 'mrg';
    public $timestamps = true; 

 
    public function salesall($kdcab)
    {
        $db = DB::connection('mysql');
        $data = $db->table('mrg')
        ->select(db::raw("tokocab.KDTK,tokocab.NAMA,tokocab.AMGR,tokocab.KDCAB,mrg.BERSIH,mrg.MARGIN,mrg.updated_at"))
        ->leftJoin("tokocab","mrg.kdtk","=","tokocab.kdtk")
        ->where("tokocab.kdcab","=",$kdcab)
        ->orderBy("mrg.kdtk","asc")->get();
        return $data;
    }

    
    public function sales($kdcab, $kdtk)
    {
        $db = DB::connection('mysql');
        $data = $db->table('mrg')
        ->select(db::raw("tokocab.KDTK,tokocab.NAMA,tokocab.AMGR,tokocab.KDCAB,mrg.BERSIH,mrg.MARGIN,mrg.updated_at"))
        ->leftJoin("tokocab","mrg.kdtk","=","tokocab.kdtk")
        ->where("tokocab.kdcab","=",$kdcab)
        ->where("tokocab.kdtk","=",$kdtk)
        ->orderBy("mrg.kdtk","asc")->get();

        return $data;
    }
 
  public function listtoko($kdcab)
    {
        $db = DB::connection('mysql');
        $data = $db->table('tokocab')
        ->where("kdcab","=",$kdcab)
        ->orderBy("kdtk","asc")->get();
        return $data;
    }

       
}
