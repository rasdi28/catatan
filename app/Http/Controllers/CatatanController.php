<?php

namespace App\Http\Controllers;

use App\Models\Catatan;
use Illuminate\Http\Request;

class CatatanController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function create(Request $request)
    {
        $data = $request->all();
        // return $data;
        $catatan = Catatan::create($data);
        return response()->json([
            'code'=>201,
            'message'=>'success',
            'data'=>$catatan
        ]);
    }

    public function index()
    {
        $data = Catatan::get();
        return response()->json([
            'code'=>201,
            'message'=>'success',
            'data'=> $data
        ]);
    }

    public function show($id)
    {
        $data = Catatan::find($id);
        return response()->json([
            'code'=>201,
            'message'=>'success',
            'data'=>$data
        ]);
    }

    public function update(Request $request, $id)
    {
        $data = Catatan::find($id);
        $databaru = $request->all();
        $data->update($databaru);
        return response()->json([
            'code'=>201,
            'message'=>'success',
            'data'=>$data
        ]);
    }

    public function delete($id)
    {
        $data = Catatan::find($id);
        if(!$data){
            return response()->json([
                'code'=>404,
                'message'=>'Data Not Found',
            ]);
        }

        $data->delete();
        return response()->json([
            'code'=>201,
            'message'=>'success delete data'
        ]);
        
    }

    //
}
