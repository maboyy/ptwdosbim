@extends('layouts.template-app')

@section('page_heading', "Home")

@section('content')
<div class="row">
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-lg font-weight-bold text-primary text-uppercase mb-1">
                            Halo, {{ Auth::user()->name }}
                        </div>
                        {{-- <div class="h5 mb-0 font-weight-bold text-gray-800">$40,000</div> --}}
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-profile fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection