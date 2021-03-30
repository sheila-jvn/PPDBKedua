<?php

namespace App\Http\Controllers;

use App\Pendaftaran;
use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    public function index()
    {
    $pendaftarans = Pendaftaran::latest()->paginate(5);
  
    return view('pendaftarans.index',compact('pendaftarans'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pendaftarans.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nis' => 'required',
            'nama' => 'required',
            'jns_kelamin' => 'required',
            'tmp_lahir' => 'required',
            'tgl_lahir' => 'required',
            'alamat' => 'required',
            'asal_sekolah' => 'required',
            'kelas' => 'required',
            'jurusan' => 'required',
        ]);
    
        Pendaftaran::create($request->all());

        return redirect()->route('pendaftarans.index')
                        ->with('success','Pendaftaran updated successfully');
    }
    public function show(Pendaftaran $pendaftaran)
    {
        return view('pendaftarans.show',compact('pendaftaran'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pendaftaran  $pendaftaran
     * @return \Illuminate\Http\Response
     */
    public function edit(Pendaftaran $pendaftaran)
        {
            return view('pendaftarans.edit',compact('pendaftaran'));
        }
        public function update(Request $request, Pendaftaran $pendaftaran)
        {
            $request->validate([
                'nis' => 'required',
                'nama' => 'required',
                'jns_kelamin' => 'required',
                'tmp_lahir' => 'required',
                'tgl_lahir' => 'required',
                'alamat' => 'required',
                'asal_sekolah' => 'required',
                'kelas' => 'required',
                'jurusan' => 'required',
            ]);
    
            $pendaftaran->update($request->all());
    
            return redirect()->route('pendaftarans.index')
                            ->with('success','Pendaftaran updated successfully');
            }

    public function destroy(Pendaftaran $pendaftaran)
    {
        $pendaftaran->delete();

        return redirect()->route('pendaftarans.index')
                        ->with('success','Pendaftaran deleted successfully');
    }
}
