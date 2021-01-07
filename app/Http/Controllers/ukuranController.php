<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Webpatser\Uuid\Uuid;
use Illuminate\Support\Facades\DB;

class ukuranController extends Controller
{
    public function index()
    {
        $data = DB::table('data_ukuran')->get();
        return view ('dataUkuran.index',compact ('data'));
    }

    public function add()
    {
        return view ('dataUkuran.tambahUkuran');
    }

    
    public function store(Request $request)
    {
        $this->validate($request,[
            'ukuran'=>'required'
        ],
        [
            //?
            'required'=>'wajib di isi',
        ]
    );

        DB::table('data_ukuran')->insert([
            'ukuran_id'=>Uuid::generate(4),
            'ukuran'=>$request->ukuran
        ]);

        // Alert::success('selamat' ,'anda berhasil menginputkan');

        return redirect('ukuran');

    }

    public function edit($id)
    {
        $data = DB::table('data_ukuran')->where('ukuran_id',$id)->first();
        return view('dataUkuran.edit',compact('data'));
    }

    public function update(Request $request,$id)
    {
        $this->validate($request,[
            'ukuran'=>'required'
        ]);

        DB::table('data_ukuran')->where('ukuran_id',$id)->update([
            'ukuran'=>$request->ukuran,
        ]);
        // toast('selamat anda telah berhasil mengubah data', 'success');

        return redirect('ukuran');

    }

    public function delete($id)
    {
        DB::table('data_ukuran')->where('ukuran_id',$id)->delete();
        // Alert::info('data', ' telat hapus');
        return redirect('ukuran');
    }
}
