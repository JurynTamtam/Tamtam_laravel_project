@extends('layouts.app')

@section('content')
<x-page-header pagetitle="Add Book" class="bg-warning"/>


            <div class="wrapper wrapper-content">
                <div class="animated fadeInRightBig">
                <form action="{{ url('/add-customer') }}" method="post" enctype="multipart/form-data">
                @csrf()
                <div class="row">
                    <div class="col-4">
                    <div class="form-group">
                    <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" class="form-control" name="name" id="name" required>
                        </div>
                        <div class="form-group">
                            <label for="">Contact</label>
                            <input type="number" class="form-control" name=" contact" id="contact">
                        </div>
                        <hr>
                        <button class="btn btn-primary" type="submit">Save</button>
                       
                    </div>
                </div>
                </form>
                </div>
            </div>
@endsection