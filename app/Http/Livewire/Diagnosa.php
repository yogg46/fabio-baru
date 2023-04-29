<?php

namespace App\Http\Livewire;

use App\Models\detailDiagnosa;
use App\Models\DetailPenyakit;
use App\Models\Diagnosa as ModelsDiagnosa;
use App\Models\Laporan;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Diagnosa extends Component
{

    public $jnsTanaman;
    public $bgnTanaman;
    public $gjlTanaman = [];

    public $showJNS = 'false';
    public $showBGN = [];
    public $showGJL = [];

    public function render()
    {


        return view('livewire.diagnosa', [
            // 'gejala' => DetailPenyakit::where('Buah', $this->jnsTanaman)->where('Bagian', $this->bgnTanaman)->get()
            'gejala' => DetailPenyakit::all()
            // 'gejala' => $gejala,
        ])
            ->extends('layouts.main', [
                'tittle' => ' ',
            ])
            ->section('page');
    }
    public function mount()
    {
        $this->showBGN[0] = 'false';
        $this->showGJL[0] = 'false';
        $this->showBGN[1] = 'false';
        $this->showGJL[1] = 'false';
    }

    public function ResetISI($id)
    {
        $this->gjlTanaman[$id] = [];
    }
    public function showBagian($id)
    {
        $this->showBGN[$id] = 'true';
        $this->ResetISI($id);
    }
    public function showGejala($id)
    {
        $this->showGJL[$id] = 'true';
        $this->ResetISI($id);
    }


    public $updateMode = false;
    public $inputs = [];
    public $i = 1;

    public function add($i)
    {
        $i = $i + 1;
        $this->i = $i;
        array_push($this->inputs, $i);
        array_push($this->showBGN, $i);
        array_push($this->showGJL, $i);
    }

    public function remove($i)
    {

        unset($this->inputs[$i]);
    }

    private function resetInputFields()
    {
        // $this->account = '';
        // $this->username = '';
    }

    public function store()
    {
        $this->validate([
                'jnsTanaman.0' => 'required',
                'bgnTanaman.0' => 'required',
                'gjlTanaman.0' => 'required',
                'jnsTanaman.*' => 'required',
                'bgnTanaman.*' => 'required',
                'gjlTanaman.*' => 'required',
            ],
            [
                'jnsTanaman.0.required' => 'Jenis Tanaman Harus Di isi',
                'bgnTanaman.0.required' => 'Bagian Tanaman Harus Di isi',
                'gjlTanaman.0.required' => 'Gejala Harus Di isi',
                'jnsTanaman.*.required' => 'Jenis Tanaman Harus Di isi',
                'bgnTanaman.*.required' => 'Bagian Tanaman Harus Di isi',
                'gjlTanaman.*.required' => 'Gejala Harus Di isi',
            ]
        );
        // $user = Auth::user()->idUser;

        if (is_null($this->jnsTanaman)) {
            return @dd('aaa');
        } else {

            foreach ($this->jnsTanaman as $key => $value) {
                // $diagnosaa =  ModelsDiagnosa::create(['idUser' => $user, 'tanggal' => Carbon::now()]);
                $diagnosaa = new ModelsDiagnosa();
                $diagnosaa->idUser = Auth::user()->idUser;
                $diagnosaa->tanggal = Carbon::now();
                $diagnosaa->save();

                foreach ($this->gjlTanaman[$key] as $item) {
                    detailDiagnosa::create([
                        'idDiagnosa' => $diagnosaa->id, 'idDetailPenyakit' => $item
                    ]);
                }

                $loop = ['iteration' => 0, 'count' => count($diagnosaa->DiagnosaToDetail->unique('relasidetailPenyakit.detailPenyakitToPenyakit.namaPenyakit'))];
                foreach ($diagnosaa->DiagnosaToDetail->unique('relasidetailPenyakit.detailPenyakitToPenyakit.namaPenyakit') as $p) {
                    $loop['iteration']++;
                    if ($loop['count'] > 1) {
                        $v = 0;
                        break;
                    } else {
                        $v = 1;
                    }
                }
                if ($v == 0) {
                    $diagnosaa->update([
                        'status' => 'Tidak Valid'
                    ]);
                } else {

                    Laporan::create([
                        'namaPengguna' => Auth::user()->namaPengguna,
                        'tglDiagnosa' => Carbon::now(),
                        'penyakit' => $diagnosaa->DiagnosaToDetail[0]->RelasidetailPenyakit->DetailPenyakitToPenyakit->namaPenyakit,
                        'obat' =>  $diagnosaa->DiagnosaToDetail[0]->RelasidetailPenyakit->DetailPenyakitToPenyakit->penyakitToObat[0]->namaObat,

                    ]);
                }
            }

            // $this->inputs = [];


            // $this->resetInputFields();
            return redirect()->route('hasil-diagnosa', $diagnosaa->key);
        }

        // return @dd( $v);
        // session()->flash('message', 'Account Added Successfully.');
    }
}
