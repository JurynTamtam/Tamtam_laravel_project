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
                    <a href="{{ url('/customer-form') }}" class="btn btn-primary">Add customer</a>
               
                    <div class="row">
                    @foreach($data as $d)
                        <div class="col">
                            <div class="card" style="width:200px">
                               <div class="card-body">
                                <h4 class="card-title">{{ $d->name }}</h4>
                                <p class="card-text">Contact: {{ $d->contact}}
                              </p>
                                <a href="{{ url('/edit-customer',$d->id) }}" class="btn btn-info" onclick="return confirm('Update?')"><i class="fa fa-edit"></i></a>
                                <a href="{{ url('/delete-customer',$d->id) }}" class="btn btn-danger" onclick="return confirm('Delete?')"><i class="fa fa-trash"></i></a>
                                </div>
                            </div>
                        </div>
                    @endforeach()
                    </div>
                </div>
            </div>
@endsection