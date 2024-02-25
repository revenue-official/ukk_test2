<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;
use App\Models\Golongan;
use App\Models\Jabatan;

class PegawaiController extends Controller
{
    public function index()
    {
        $dataPegawai = Pegawai::all();
        $dataGolongan = Golongan::all();
        $dataJabatan = Jabatan::all();

        return view(
            'index',
            [
                'onPage' => 'Table',
                'pegawai' => $dataPegawai,
                'pegawaiJson' => json_encode($dataGolongan),
                'golongan' => $dataGolongan,
                'jabatan' => $dataJabatan,
                'relationGolongan' => $this->relationGolongan()
            ]
        );
    }

    public function relationGolongan()
    {
        return Golongan::withCount('pegawai')
            ->pluck("gaji", "nm_golongan")
            ->toArray();
    }

    public function create()
    {
        $dataGolongan = Golongan::all();
        $dataJabatan = Jabatan::all();

        return view(
            'index',
            [
                'onPage' => 'Create',
                'golongan' => $dataGolongan,
                'jabatan' => $dataJabatan
            ]
        );
    }

    public function store(Request $request)
    {
        $newData = new Pegawai();
        $newData->nip = $request->nip;
        $newData->nama_pegawai = $request->nama_pegawai;
        $newData->tgl_lahir = $request->tgl_lahir;
        $newData->golongan = $request->golongan;
        $newData->jabatan = $request->jabatan;
        $newData->jenis_kelamin = $request->jenis_kelamin;
        $newData->save();

        if ($newData) {
            return redirect('/')->with('success', 'Create Successfully');
        } else {
            return redirect('/')->with('failed', 'Failed to Create');
        }
    }

    public function destroy($nip)
    {
        $deleteData = Pegawai::where('nip', $nip)->delete();
        if ($deleteData) {
            return redirect('/')->with('success', 'Delete Successfully');
        } else {
            return redirect('/')->with('failed', 'Failed to Delete');
        }
    }
}
