@extends('layouts.template-app')

@section('page_heading', "Ujian")

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Ujian</h6>
    </div>
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Mata Kuliah</th>
                    <th scope="col">Dosen</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Jam</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $item->mata_kuliah_relation->name }}</td>
                    <td>{{ $item->mata_kuliah_relation->dosen }}</td>
                    <td>{{ $item->date }}</td>
                    <td>{{ $item->time }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
