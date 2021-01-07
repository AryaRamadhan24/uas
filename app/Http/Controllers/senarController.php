<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Webpatser\Uuid\Uuid;
use Illuminate\Support\Facades\DB;

class senarController extends Controller
{
    public function index(){
        $data = DB::table('data_senar as a')->join('data_jenis as b', 'a.id_jenis', '=', 'b.jenis_id')->get();
        return view ('dataSenar.index', compact('data'));
    }
    public function add(){
        $data =  DB::table('data_jenis')->get();
        return view('dataSenar.tambah',compact('data'));
    }

    public function store(Request $request){
        $this->validate($request,[
            'id_jenis'=>'required',
            'id_ukuran'=>'required'
        ]
    );
        DB::table('data_senar')->insert([
            'senar_id'=>Uuid::generate(4),
            'id_jenis'=>$request->id_jenis,
            'id_ukuran'=>$request->id_ukuran
        ]);
        // Alert::success('selamat' ,'anda berhasil mengimputkan');

        return redirect('senar');
    }

}
