@extends('layouts.app')

@section('content')
<x-page-header pagetitle="Add Book" class="bg-warning"/>


            <div class="wrapper wrapper-content">
                <div class="animated fadeInRightBig">
                <form action="{{ url('/add-book') }}" method="post" enctype="multipart/form-data">
                @csrf()
                <div class="row">
                    <div class="col-4">
                        <div class="form-group">
                            <label for="">Title</label>
                            <input type="text" class="form-control" name="title" id="title" required>
                        </div>
                        <div class="form-group">
                            <label for="">Description</label>
                            <input type="text" class="form-control" name="description" id="description">
                        </div>
                        <div class="form-group">
                            <label for="">Country code</label>
                            <input type="number" class="form-control" name="country_id" id="country_id">
                        </div>
                        <div class="form-group">
                            <label for="">Stock</label>
                            <input type="number" class="form-control" name="stock" id="stock">
                        </div>
                        <div class="form-group">
                            <label for="">Amount</label>
                            <input type="number" class="form-control" name="amount" id="amount">
                        </div>
                        <div class="form-group">
                            <label for="">Photo</label>
                            <input type="file" class="form-control" name="photo" id="photo">
                        </div>
                        <hr>
                        <button class="btn btn-primary" type="submit">Save</button>
                       
                    </div>
                </div>
                </form>
                </div>
            </div>
@endsection