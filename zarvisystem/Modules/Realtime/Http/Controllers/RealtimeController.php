<?php

namespace Modules\Realtime\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use App\Helpers\Tanggal;

use Modules\Realtime\Models\Realtime; 

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

use Illuminate\Support\Facades\DB;
class RealtimeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Realtime $data
     */

    public function __construct(Realtime $data)
    {
        $this->data = $data;
    }

    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
       
        return view('realtime::index');
    }

    public function store(Request $request)
    {   
        $rules = array(
            'kdcab'   => 'required', 
        ); 
 
        $validator = Validator::make($request->all(), $rules); 
 
        if ($validator->fails()) {
 
            return Redirect::to('realtime')->withErrors($validator)->withInput();
 
        } else {
        
            $kdcab = $request->input("kdcab");
            $kdtk = $request->input("kdtk");
    
            if($kdtk = "all"){
                $data = $this->data->salesall($kdcab);
            }else{
                $data = $this->data->sales($kdcab,$kdtk);
            }
     
        
        }
        return view('realtime::preview',['data' => $data]);
    }

    
    public function listtoko($id)
    { 
       
        $data = $this->data->listtoko($id);
        
        return response()->json($data);

    }

    
}
