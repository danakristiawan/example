@extends('layouts.app') @section('page-header')
<div class="page-block mb-2">
    <div class="row align-items-center">
        <div class="col-md-12">
            <div class="page-header-title">
                <h3 class="m-b-10">Selamat Datang di Dashboard</h3>
            </div>
        </div>
    </div>
</div>
@endsection @section('page-card')
<div class="col-md-6 col-xl-3">
    <div class="card">
        <div class="card-body">
            <h6 class="mb-2 f-w-400 text-muted">Total Page Views</h6>
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
            <h6 class="mb-2 f-w-400 text-muted">Total Users</h6>
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
            <h6 class="mb-2 f-w-400 text-muted">Total Order</h6>
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
            <h6 class="mb-2 f-w-400 text-muted">Total Sales</h6>
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
@endsection @section('page-chart')
<div class="col-md-12 col-xl-8">
    <div class="d-flex align-items-center justify-content-between mb-3">
        <h5 class="mb-0">Unique Visitor</h5>
    </div>
    <div class="card">
        <div class="card-body">
            <h6 class="mb-2 f-w-400 text-muted">This Week Statistics</h6>
            <h3 class="mb-3">$7,650</h3>
        </div>
    </div>
</div>
<div class="col-md-12 col-xl-4">
    <h5 class="mb-3">Income Overview</h5>
    <div class="card">
        <div class="card-body">
            <h6 class="mb-2 f-w-400 text-muted">This Week Statistics</h6>
            <h3 class="mb-3">$7,650</h3>
        </div>
    </div>
</div>
@endsection @section('content')

<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <h6 class="mb-4 f-w-400 text-muted">This Week Statistics</h6>
            <div class="table-responsive">
                <table class="table table-hover table-bordered mb-0">
                    <thead>
                        <tr>
                            <th>TRACKING NO.</th>
                            <th>PRODUCT NAME</th>
                            <th>TOTAL ORDER</th>
                            <th>STATUS</th>
                            <th class="text-end">TOTAL AMOUNT</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <a href="#" class="text-muted">84564564</a>
                            </td>
                            <td>Camera Lens</td>
                            <td>40</td>
                            <td>
                                <span class="d-flex align-items-center gap-2"
                                    ><i
                                        class="fas fa-circle text-danger f-10 m-r-5"
                                    ></i
                                    >Rejected</span
                                >
                            </td>
                            <td class="text-end">$40,570</td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#" class="text-muted">84564564</a>
                            </td>
                            <td>Laptop</td>
                            <td>300</td>
                            <td>
                                <span class="d-flex align-items-center gap-2"
                                    ><i
                                        class="fas fa-circle text-warning f-10 m-r-5"
                                    ></i
                                    >Pending</span
                                >
                            </td>
                            <td class="text-end">$180,139</td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#" class="text-muted">84564564</a>
                            </td>
                            <td>Mobile</td>
                            <td>355</td>
                            <td>
                                <span class="d-flex align-items-center gap-2"
                                    ><i
                                        class="fas fa-circle text-success f-10 m-r-5"
                                    ></i
                                    >Approved</span
                                >
                            </td>
                            <td class="text-end">$180,139</td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#" class="text-muted">84564564</a>
                            </td>
                            <td>Camera Lens</td>
                            <td>40</td>
                            <td>
                                <span class="d-flex align-items-center gap-2"
                                    ><i
                                        class="fas fa-circle text-danger f-10 m-r-5"
                                    ></i
                                    >Rejected</span
                                >
                            </td>
                            <td class="text-end">$40,570</td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#" class="text-muted">84564564</a>
                            </td>
                            <td>Laptop</td>
                            <td>300</td>
                            <td>
                                <span class="d-flex align-items-center gap-2"
                                    ><i
                                        class="fas fa-circle text-warning f-10 m-r-5"
                                    ></i
                                    >Pending</span
                                >
                            </td>
                            <td class="text-end">$180,139</td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#" class="text-muted">84564564</a>
                            </td>
                            <td>Mobile</td>
                            <td>355</td>
                            <td>
                                <span class="d-flex align-items-center gap-2"
                                    ><i
                                        class="fas fa-circle text-success f-10 m-r-5"
                                    ></i
                                    >Approved</span
                                >
                            </td>
                            <td class="text-end">$180,139</td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#" class="text-muted">84564564</a>
                            </td>
                            <td>Camera Lens</td>
                            <td>40</td>
                            <td>
                                <span class="d-flex align-items-center gap-2"
                                    ><i
                                        class="fas fa-circle text-danger f-10 m-r-5"
                                    ></i
                                    >Rejected</span
                                >
                            </td>
                            <td class="text-end">$40,570</td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#" class="text-muted">84564564</a>
                            </td>
                            <td>Laptop</td>
                            <td>300</td>
                            <td>
                                <span class="d-flex align-items-center gap-2"
                                    ><i
                                        class="fas fa-circle text-warning f-10 m-r-5"
                                    ></i
                                    >Pending</span
                                >
                            </td>
                            <td class="text-end">$180,139</td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#" class="text-muted">84564564</a>
                            </td>
                            <td>Mobile</td>
                            <td>355</td>
                            <td>
                                <span class="d-flex align-items-center gap-2"
                                    ><i
                                        class="fas fa-circle text-success f-10 m-r-5"
                                    ></i
                                    >Approved</span
                                >
                            </td>
                            <td class="text-end">$180,139</td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#" class="text-muted">84564564</a>
                            </td>
                            <td>Mobile</td>
                            <td>355</td>
                            <td>
                                <span class="d-flex align-items-center gap-2"
                                    ><i
                                        class="fas fa-circle text-success f-10 m-r-5"
                                    ></i
                                    >Approved</span
                                >
                            </td>
                            <td class="text-end">$180,139</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
