@extends('layouts.dashboard.dashboard')
@section('title', 'Edit Data')
@section('content')
<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Edit Data {{ $bukutamu->name }}</h4>
          <form class="forms-sample" action="{{ route('dashboard.bukutamu.update', $bukutamu->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
              <label for="name">Nama</label>
              <input type="text" class="form-control" name="name" value="{{ $bukutamu->name }}" id="name" placeholder="Nama" />
            </div>
            <div class="form-group">
              <label for="name">Instansi</label>
              <input type="text" class="form-control" name="instansi" value="{{ $bukutamu->instansi }}" id="instansi" placeholder="" />
            </div>
            <div class="form-group">
              <label for="hp">Hp</label>
              <input type="text" class="form-control" name="hp" value="{{ $bukutamu->hp }}" id="hp" placeholder="Username" />
            </div>
            <div class="form-group">
              <label for="tujuan">Tujuan</label>
              <input type="text" class="form-control" name="tujuan" value="{{ $bukutamu->tujuan }}" id="tujuan" placeholder="Username" />
            </div>
            <div class="form-group float-right">
                <button class="btn btn-light">Cancel</button>
                <button type="submit" class="btn btn-primary mr-2"> Submit </button>
            </div>
          </form>
        </div>
      </div>
    </div>
@endsection
