@extends('header')

@section('title', 'Data Pemain')

@section('content')

<div class="container">
    <h1>Data Pemain</h1>
    <table border="1px" class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Pemain</th>
                <th>No Punggung</th>
                <th>Posisi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pemain as $player)
            <tr>
                <td>{{ $player->id }}</td>
                <td>{{ $player->nama_pemain }}</td>
                <td>{{ $player->no_punggung }}</td>
                <td>{{ $player->posisi }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>