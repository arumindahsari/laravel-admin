<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mahasiswa;


class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pagename='Data Mahasiswa';
        $data=Mahasiswa::all();
        return view('admin.mahasiswa.index', compact('data', 'pagename'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data = mahasiswa::all();
        $pagename = 'Form Input Mahasiswa';
        return view('admin.mahasiswa.create', compact('pagename', 'data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'txtnim_mahasiswa'=>'required',
            'txtnama_mahasiswa'=>'required',
            'txtalamat_mahasiswa'=>'required',
        ]);

        $data=new Mahasiswa([

            'nim_mahasiswa'=> $request->get('txtnim_mahasiswa'),
            'nama_mahasiswa'=> $request->get('txtnama_mahasiswa'),
            'alamat_mahasiswa'=> $request->get('txtalamat_mahasiswa'),
            


        ]);



        $data->save();
        return redirect('admin/mahasiswa')->with('sukses', 'data mahasiswa berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
