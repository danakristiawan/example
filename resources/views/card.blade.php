@extends('layouts.app') @section('page-card')

<div class="col-md-6 col-xl-3">
    <div class="card text-center">
        <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">
                With supporting text below as a natural lead-in to additional
                content.
            </p>
            <a href="#!" class="btn btn-primary">Go somewhere</a>
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

@endsection
