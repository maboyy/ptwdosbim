@extends('layouts.template-app')

@section('content')
<div class="container-fluid">
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-themecolor">Dashboard</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)"></a></li>
            </ol>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    Hai, {{ Auth::user()->name }} - {{ Auth::user()->nbi }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection