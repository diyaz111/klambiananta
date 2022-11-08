<?php

namespace App\Http\Controllers;

use App\Http\Requests\BajuRequest;
use App\Models\Baju;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Carbon\Carbon;

class BajuController extends Controller
{
    public function index()
    {

        $datas = Baju::orderBy('created_at', 'DESC')->get();
        return view('baju.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('baju.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BajuRequest $request)
    {
        $this->validate($request, [
            'nama' => 'required|string|max:255',
            'harga' => 'required'
        ]);

        if($request->file('gambar1')) {
            $file = $request->file('gambar1');
            $dt = Carbon::now();
            $acak  = $file->getClientOriginalExtension();
            $fileName = rand(11111,99999).'-'.$dt->format('Y-m-d-H-i-s').'.'.$acak;
            $request->file('gambar1')->move("images/baju/gambar1", $fileName);
            $gambar1 = $fileName;
        } else {
            $gambar1 = NULL;
        }

        if($request->file('gambar2')) {
            $file = $request->file('gambar2');
            $dt = Carbon::now();
            $acak  = $file->getClientOriginalExtension();
            $fileName = rand(11111,99999).'-'.$dt->format('Y-m-d-H-i-s').'.'.$acak;
            $request->file('gambar2')->move("images/baju/gambar2", $fileName);
            $gambar2 = $fileName;
        } else {
            $gambar2 = NULL;
        }

        if($request->file('gambar3')) {
            $file = $request->file('gambar3');
            $dt = Carbon::now();
            $acak  = $file->getClientOriginalExtension();
            $fileName = rand(11111,99999).'-'.$dt->format('Y-m-d-H-i-s').'.'.$acak;
            $request->file('gambar3')->move("images/baju/gambar3", $fileName);
            $gambar3 = $fileName;
        } else {
            $gambar3 = NULL;
        }

        if($request->file('gambar4')) {
            $file = $request->file('gambar4');
            $dt = Carbon::now();
            $acak  = $file->getClientOriginalExtension();
            $fileName = rand(11111,99999).'-'.$dt->format('Y-m-d-H-i-s').'.'.$acak;
            $request->file('gambar4')->move("images/baju/gambar4", $fileName);
            $gambar4 = $fileName;
        } else {
            $gambar4 = NULL;
        }

        if($request->file('gambar5')) {
            $file = $request->file('gambar5');
            $dt = Carbon::now();
            $acak  = $file->getClientOriginalExtension();
            $fileName = rand(11111,99999).'-'.$dt->format('Y-m-d-H-i-s').'.'.$acak;
            $request->file('gambar5')->move("images/baju/gambar5", $fileName);
            $gambar5 = $fileName;
        } else {
            $gambar5 = NULL;
        }

        Baju::create([
            'nama' => $request->get('nama'),
            'isi' => $request->get('isi'),
            'harga' => $request->get('harga'),
            'diskon' => $request->get('diskon'),
            'gambar1' => $gambar1,
            'gambar2' => $gambar2,
            'gambar3' => $gambar3,
            'gambar4' => $gambar4,
            'gambar5' => $gambar5,
            ]);

        alert()->success('Berhasil.','Data telah ditambahkan!');

        return redirect()->route('baju.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $data = Baju::findOrFail($id);

        return view('baju.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $baju = Baju::all();
        $data = Baju::findOrFail($id);
        return view('Baju.edit', compact('data', 'baju'));
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
        if($request->file('gambar1')) {
            $file = $request->file('gambar1');
            $dt = Carbon::now();
            $acak  = $file->getClientOriginalExtension();
            $fileName = rand(11111,99999).'-'.$dt->format('Y-m-d-H-i-s').'.'.$acak;
            $request->file('gambar1')->move("images/baju/gambar1", $fileName);
            $gambar1 = $fileName;
        } else {
            $gambar1 = NULL;
        }

        if($request->file('gambar2')) {
            $file = $request->file('gambar2');
            $dt = Carbon::now();
            $acak  = $file->getClientOriginalExtension();
            $fileName = rand(11111,99999).'-'.$dt->format('Y-m-d-H-i-s').'.'.$acak;
            $request->file('gambar2')->move("images/baju/gambar2", $fileName);
            $gambar2 = $fileName;
        } else {
            $gambar2 = NULL;
        }

        if($request->file('gambar3')) {
            $file = $request->file('gambar3');
            $dt = Carbon::now();
            $acak  = $file->getClientOriginalExtension();
            $fileName = rand(11111,99999).'-'.$dt->format('Y-m-d-H-i-s').'.'.$acak;
            $request->file('gambar3')->move("images/baju/gambar3", $fileName);
            $gambar3 = $fileName;
        } else {
            $gambar3 = NULL;
        }

        if($request->file('gambar4')) {
            $file = $request->file('gambar4');
            $dt = Carbon::now();
            $acak  = $file->getClientOriginalExtension();
            $fileName = rand(11111,99999).'-'.$dt->format('Y-m-d-H-i-s').'.'.$acak;
            $request->file('gambar4')->move("images/baju/gambar4", $fileName);
            $gambar4 = $fileName;
        } else {
            $gambar4 = NULL;
        }

        if($request->file('gambar5')) {
            $file = $request->file('gambar5');
            $dt = Carbon::now();
            $acak  = $file->getClientOriginalExtension();
            $fileName = rand(11111,99999).'-'.$dt->format('Y-m-d-H-i-s').'.'.$acak;
            $request->file('gambar5')->move("images/baju/gambar5", $fileName);
            $gambar5 = $fileName;
        } else {
            $gambar5 = NULL;
        }

        Baju::find($id)->update([
                    'nama' => $request->get('nama'),
                    'isi' => $request->get('isi'),
                    'harga' => $request->get('harga'),
                    'diskon' => $request->get('diskon'),
                    'gambar1' => $gambar1,
                    'gambar2' => $gambar2,
                    'gambar3' => $gambar3,
                    'gambar4' => $gambar4,
                    'gambar5' => $gambar5
                ]);

        alert()->success('Berhasil.','Data telah diubah!');
        return redirect()->route('baju.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Baju::find($id)->delete();
        alert()->success('Berhasil.','Data telah dihapus!');
        return redirect()->route('baju.index');
    }
}
