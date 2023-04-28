@extends('layouts.main')
@section('page')
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <div class="mb-1">
                <div class="btn-group" role="group" aria-label="Horizontal Primary">
                    <a href="{{ route('cetak-laporan-gejala') }}" target="_blank" type="button" class="btn btn-primary"
                        style="background-color: rgb(129, 123, 234)">
                        <i class="fa fa-fw fa-print me-1"></i> Cetak Laporan
                    </a>
                </div>
            </div>
        </div>
        <div class="block-content block-content-full">
            <!-- DataTables init on table by adding .js-dataTable-full class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
            <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                <thead>
                    <tr>
                        <th class="text-center" style="width: 20%;">Nama Petani</th>
                        <th class="text-center" style="width: 20%">Tanggal Diagnosa</th>
                        <th class="d-none d-sm-table-cell text-center" style="width: 60%;">Gejala yang dipilih</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($laporangejala as $key)
                        @foreach ($key->DiagnosaToDetail as $item)
                            <tr>
                                <td class="text-center fs-sm text-center">{{ $key->DiagnosaToUser->namaPengguna }}</td>
                                <td class="fw-normal fs-sm text-center">{{ $key->tanggal }}</td>
                                <td class="d-none d-sm-table-cell fs-sm text-center">
                                    {{ $item->RelasidetailPenyakit->DetailPenyakitToGejala->namaGejala }}
                                </td>
                            </tr>
                        @endforeach
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
