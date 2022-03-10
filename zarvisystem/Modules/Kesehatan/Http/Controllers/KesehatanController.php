<?php

namespace Modules\Kesehatan\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use App\Helpers\Tanggal;

use Modules\Kesehatan\Models\Kesehatan;
use Modules\Kesehatan\Models\Listkaryawan;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

use Illuminate\Support\Facades\DB;
class KesehatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Kesehatan $data
     */

    public function __construct(Kesehatan $data)
    {
        $this->data = $data;
    }

    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {

        return view('kesehatan::index');
    }

    

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function simpan(Request $request)
    {
        $rules = array( 
            'nik' => 'required|numeric', 

        );
 
        $validator = Validator::make($request->all(), $rules); 

        if ($validator->fails()) {

            $arr = array('msg' =>"Data Gagal disimpan", 'status'=>false);
            return response()->json($arr); 

        } else { 
	
	        $this->data->deletecoy($request->input('nik'));
           
           
            $data = new Kesehatan;  
            $data->nik 		= $request->input('nik');
            $data->kondisi 		= $request->input('kondisi'); 
            $data->sakit = $request->input('sakit');
		    $data->hari = $request->input('hari');
            $data->surat = $request->input('surat');
            $data->kerja = $request->input('kerja'); 
            $data->periksa = $request->input('periksa');

            $data->sdokter1	= $request->input('sdokter1');
            $data->sdokter2	= $request->input('sdokter2');
            $data->akhir	= $request->input('akhir');
            $data->tanggal_rapid	= $request->input('tanggal_rapid');
            $data->rapid	= $request->input('rapid');
            $data->hrapid	= $request->input('hrapid');
            $data->tanggal_sakit	= $request->input('tanggal_sakit');
            $data->tanggal_karantina	= $request->input('tanggal_karantina');
            $data->tanggal_swab1	= $request->input('tanggal_swab1');
            $data->hswab1	= $request->input('hswab1');
            $data->tanggal_swab2	= $request->input('tanggal_swab2');
            $data->hswab2	= $request->input('hswab2');
            $data->tempat	= $request->input('tempat');
            $data->tanggal_masuk = $request->input('tanggal_masuk'); 

            $data->keterangan = $request->input('keterangan'); 
	        $data->tanggal = date("Y-m-d"); 
            $data->created_at= date('Y-m-d H:i:s'); 
            $data->save();



            $tanggalnya = Tanggal::indonesian_date(date('Y-m-d H:i:s'));
            $arr = array('msg' =>"Data berhasil disimpan ". $tanggalnya, 'status'=>true);
            return response()->json($arr); 
        }
    }

    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function isikan(Request $request)
    {
        $kode = substr($request->input("query"),0,10);
        
        $data = Listkaryawan::select(DB::raw("nik,nama,dep,subdep,jabatan,dbm,manager,supervisor,pt")) 
        ->where("nik","LIKE","%{$kode}%")
        ->get();

        return response()->json($data); 
 
    }

    
}
