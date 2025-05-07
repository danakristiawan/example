@extends('layouts.app') @section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-header">{{ __("Dashboard") }}</div>

        <div class="card-body">
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session("status") }}
            </div>
            @endif

            {{ __("You are logged in!") }}
            <p>{{ $user }}</p>
            <div class="div">
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <input
                        type="submit"
                        class="btn btn-sm btn-primary"
                        value="Logout"
                    />
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
