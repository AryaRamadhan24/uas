<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Webpatser\Uuid\Uuid;
use Illuminate\Support\Facades\DB;

class senarController extends Controller
{
    public function index(){
        // $data = DB::table('data_senar as a')->join('data_jenis as b', 'a.id_jenis', '=', 'b.jenis_id')->get();


        // $data_ukuran = DB::table('data_senar as a')->join('data_ukuran as b', 'a.id_ukuran', '=', 'b.ukuran_id')->get();
        $data = DB::table('data_senar as a')
->join('data_jenis as b', 'a.id_jenis', '=', 'b.jenis_id')
->join('data_ukuran as c', 'a.id_ukuran', '=', 'c.ukuran_id')->get();

        return view ('dataSenar.index', compact('data'));
    }
    public function add(){
        $data =  DB::table('data_jenis')->get();
        $data_ukuran =  DB::table('data_ukuran')->get();
        return view('dataSenar.tambah',compact('data','data_ukuran'));
    }

    public function store(Request $request){
        $this->validate($request,[
            'id_jenis'=>'required',
            'id_ukuran'=>'required'
        ]
    );
        DB::table('data_senar')->insert([
            'senar_id'=>Uuid::generate(4),
            'merk'=>$request->merk,
            'id_jenis'=>$request->id_jenis,
            'id_ukuran'=>$request->id_ukuran,
            'stok'=>$request->stok,
            'harga'=>$request->harga
        ]);
        // Alert::success('selamat' ,'anda berhasil mengimputkan');

        return redirect('senar');
    }

}
