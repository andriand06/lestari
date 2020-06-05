@extends('layouts.partials.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
        @foreach ($items as $item)
        <p>{{$item->NamaBarang}}</p>
        @endforeach
        </div>  
    </div>
</div>
@endsection
