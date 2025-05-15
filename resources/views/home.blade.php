@extends('layouts.app') @section('content')
<div class="page-block mb-2">
    <div class="row align-items-center">
        <div class="col-md-12">
            <div class="page-header-title">
                <h3 class="f-w-400">Informasi Penting Hari Ini</h3>
            </div>
        </div>
    </div>
</div>
<div class="col-md-6 col-xl-3">
    <div class="card">
        <div class="card-body">
            <h6 class="mb-2 f-w-400 text-muted">Presensi</h6>
            <h4 class="mb-3">
                4,42,236
                <span class="badge bg-light-primary border border-primary"
                    ><i class="ti ti-trending-up"></i> 59.3%</span
                >
            </h4>
            <p class="mb-0 text-muted text-sm">
                You made an extra
                <span class="text-primary">35,000</span>
                this year
            </p>
        </div>
    </div>
</div>
<div class="col-md-6 col-xl-3">
    <div class="card">
        <div class="card-body">
            <h6 class="mb-2 f-w-400 text-muted">Mutasi</h6>
            <h4 class="mb-3">
                78,250
                <span class="badge bg-light-success border border-success"
                    ><i class="ti ti-trending-up"></i> 70.5%</span
                >
            </h4>
            <p class="mb-0 text-muted text-sm">
                You made an extra
                <span class="text-success">8,900</span> this year
            </p>
        </div>
    </div>
</div>
<div class="col-md-6 col-xl-3">
    <div class="card">
        <div class="card-body">
            <h6 class="mb-2 f-w-400 text-muted">Kinerja</h6>
            <h4 class="mb-3">
                18,800
                <span class="badge bg-light-warning border border-warning"
                    ><i class="ti ti-trending-down"></i> 27.4%</span
                >
            </h4>
            <p class="mb-0 text-muted text-sm">
                You made an extra
                <span class="text-warning">1,943</span> this year
            </p>
        </div>
    </div>
</div>
<div class="col-md-6 col-xl-3">
    <div class="card">
        <div class="card-body">
            <h6 class="mb-2 f-w-400 text-muted">Penghasilan</h6>
            <h4 class="mb-3">
                $35,078
                <span class="badge bg-light-danger border border-danger"
                    ><i class="ti ti-trending-down"></i> 27.4%</span
                >
            </h4>
            <p class="mb-0 text-muted text-sm">
                You made an extra
                <span class="text-danger">$20,395</span>
                this year
            </p>
        </div>
    </div>
</div>
<div class="col-md-12 col-xl-8">
    <div class="card">
        <div class="card-body">
            <h6 class="mb-3 f-w-400 text-muted">Tabel Kehadiran</h6>
            <div class="table-responsive">
                <table class="table table-sm table-hover table-bordered mb-0">
                    <thead>
                        <tr>
                            <th class="py-2" scope="col">#</th>
                            <th class="py-2" scope="col">Tanggal</th>
                            <th class="py-2" scope="col">JenisJamKerja</th>
                            <th class="py-2" scope="col">JamMasuk</th>
                            <th class="py-2" scope="col">JamPulang</th>
                            <th class="py-2" scope="col">Potongan</th>
                            <th class="py-2" scope="col">StatusTL</th>
                            <th class="py-2" scope="col">StatusPSW</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row" class="text-center">1</th>
                            <td>18-02-2025</td>
                            <td>Normal</td>
                            <td>06:56</td>
                            <td>18:21</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope="row" class="text-center">2</th>
                            <td>18-02-2025</td>
                            <td>Normal</td>
                            <td>06:56</td>
                            <td>18:21</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope="row" class="text-center">3</th>
                            <td>18-02-2025</td>
                            <td>Normal</td>
                            <td>06:56</td>
                            <td>18:21</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope="row" class="text-center">4</th>
                            <td>18-02-2025</td>
                            <td>Normal</td>
                            <td>06:56</td>
                            <td>18:21</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="col-md-12 col-xl-4">
    <div class="card">
        <div class="card-body">
            <h6 class="mb-3 f-w-400 text-muted">Daftar Aplikasi</h6>
            <div class="list-group">
                @role('Mutasi')
                <a
                    href="#"
                    class="list-group-item list-group-item-action"
                    aria-current="true"
                >
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">Aplikasi Mutasi</h5>
                    </div>
                    <p class="mb-1">Informasi preferensi mutasi pegawai.</p>
                    <small>Alat Bantu Bagian SDM.</small>
                </a>
                @endrole @role('Presensi')
                <a
                    href="#"
                    class="list-group-item list-group-item-action"
                    aria-current="true"
                >
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">Aplikasi Presensi</h5>
                    </div>
                    <p class="mb-1">Informasi kehadiran pegawai.</p>
                    <small>Alat Bantu Bagian SDM.</small>
                </a>
                @endrole @role('Benma-Piutang')
                <a
                    href="#"
                    class="list-group-item list-group-item-action"
                    aria-current="true"
                >
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">Aplikasi Benma Piutang</h5>
                    </div>
                    <p class="mb-1">Informasi transaksi Piutang Negara.</p>
                    <small>Alat Bantu Bagian Keuangan.</small>
                </a>
                @endrole @role('Benma-Lelang')
                <a
                    href="#"
                    class="list-group-item list-group-item-action"
                    aria-current="true"
                >
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">Aplikasi Benma Lelang</h5>
                    </div>
                    <p class="mb-1">Informasi transaksi Lelang.</p>
                    <small>Alat Bantu Bagian Keuangan.</small>
                </a>
                @endrole
            </div>
        </div>
    </div>
</div>

@endsection
