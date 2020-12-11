@extends('tempelate_backend.home')
@section('sub-judul','Create')
@section('content')

@if (count($errors)>0)
    @foreach ($errors->all() as $error)
    <div class="alert alert-primary" role="alert">
        {{$error}}
    </div>
    @endforeach
@endif

@if (Session::has('success'))
<div class="alert alert-primary" role="alert">
    {{Session('success')}}
</div>
@endif


<form action="{{route('post.store')}}" method="POST">
    @csrf
    <div class="form-group">
        <label>judul</label>
        <input type="text" class="form-control" name="judul">
    </div>

    <div class="form-group">
        <button class="btn btn-primary btn-block">Simpan Kategory</button>
    </div>
</form>

@endsection

<div class="form-group">
    <label>Kategory</label>
    <select class="form-control" name="category_id">
        <option value=""holder>Pilih Kategory</option>
        @foreach ($category as $result)
            <option value="{{$result->id}}">{{$result->name}}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
    <label>Konten</label>
    <textarea name="content" class="form-control"></textarea>
</div>
<div class="form-group">
    <label for="">Tumbnail</label>
    <input type="file" name="gambar" class="form-control">
</div>