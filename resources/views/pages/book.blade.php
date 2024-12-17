@extends('layouts.app')

@section('content')

@if(Session::has('success'))
    <p class="alert alert-success">{{ Session::get('success')}}</p>
@else
    <!-- <p class="alert alert-danger">Error!</p> -->

@endif
<x-page-header pagetitle="Manage Book" class="bg-warning"/>
            <div class="wrapper wrapper-content">
                <div class="animated fadeInRightBig">
                    <a href="{{ url('/book-form') }}" class="btn btn-primary">Add book</a>
               
                    <div class="row">
                    @foreach($data as $d)
                        <div class="col">
                            <div class="card" style="width:200px">
                                <img class="card-img-top" src="{{ asset('_uploads/'.$d->photo) }}" alt="Card image" style="width:100%">
                                <div class="card-body">
                                <h4 class="card-title">{{ $d->title }}</h4>
                                <p class="card-text">Country code: {{ $d->country_id }}
                                <br>Stocks: {{ $d->stock }}
                                <br>Price: {{ $d->amount }}</p>
                                <a href="{{ url('/edit-book',$d->id) }}" class="btn btn-info" onclick="return confirm('Update?')"><i class="fa fa-edit"></i></a>
                                <a href="{{ url('/delete-book',$d->id) }}" class="btn btn-danger" onclick="return confirm('Delete?')"><i class="fa fa-trash"></i></a>
                                </div>
                            </div>
                        </div>
                    @endforeach()
                    </div>
                </div>
            </div>
@endsection