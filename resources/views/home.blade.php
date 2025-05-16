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

<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <div class="row">
                @foreach ($user->roles as $role)
                <div class="col-md-6 col-xl-3">
                    <a href="">
                        <div class="card border-primary mb-3 cards">
                            <div class="card-body">
                                <h5 class="card-title">
                                    {{ $role->name  }}
                                </h5>
                                <p class="mb-0 text-muted text-sm">
                                    Alat pengolahan data
                                    {{ $role->name  }}.
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection
