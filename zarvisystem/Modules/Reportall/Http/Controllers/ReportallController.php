<?php

namespace Modules\Reportall\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

use App\Helpers\Tanggal;

use Modules\Reportall\Models\Reportall; 

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class ReportallController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Kesehatan $data
     */

    public function __construct(Reportall $data)
    {
        $this->data = $data;
    }

    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        return view('reportall::index');
    }
 /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function preview(Request $request)
    {
        $tanggal = $request->input("tanggal");
        $jenis = $request->input("jenis");

            switch($jenis){

                default:
                    $data = $this->data->detail($tanggal);
                    
                    return view('reportall::preview2',['tanggal' => $tanggal, 'data'=> $data]);
                break; 

                case "manager": 
                    $data = $this->data->manager($tanggal);

                    return view('reportall::preview',['tanggal' => $tanggal, 'data'=> $data]);            
                break;

                case "supervisor": 
                    $data = $this->data->spv($tanggal);
					
					return view('reportall::preview3',['tanggal' => $tanggal, 'data'=> $data]);    
                break;
                
                case "rekap": 
			//echo "halo ini rekap".$tanggal;
	                   $data = $this->data->rekap($tanggal);
					
					return view('reportall::preview4',['tanggal' => $tanggal, 'data'=> $data]);    
                break;

                case "all2": 
                    $data = $this->data->all2($tanggal);
					
					return view('reportall::preview5',['tanggal' => $tanggal, 'data'=> $data]);    
                break;
    		  case "sakit": 
                	    $data = $this->data->sakitall($tanggal);
					
				return view('reportall::sakitall',['tanggal' => $tanggal, 'data'=> $data]);    
                break;
                
    		  case "sakit2": 
                $data = $this->data->sakitall($tanggal);
            
                return view('reportall::sakitall2',['tanggal' => $tanggal, 'data'=> $data]);    
                break;
        
            }


        
        


    }
}
