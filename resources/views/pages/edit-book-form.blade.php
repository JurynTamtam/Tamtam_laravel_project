@extends('layouts.app')

@section('content')
<x-page-header pagetitle="Edit Book" class="bg-warning"/>

            <div class="wrapper wrapper-content">
                <div class="animated fadeInRightBig">
                <form action="{{ url('/update-book') }}" method="post" enctype="multipart/form-data">
                @csrf()
                <div class="row">
                    <div class="col-4">
                        <div class="form-group">
                            <label for="">Title</label>
                            <input type="text" class="form-control" name="title" id="title" required value="{{ $data[0]->title }}">
                        </div>
                        <div class="form-group">
                            <label for="">Description</label>
                            <input type="text" class="form-control" name="description" id="description" value="{{ $data[0]->description }}">
                        </div>
                        <div class="form-group">
                            <label for="">Country Code</label>
                            <input type="number" class="form-control" name="country_id" id="country_id" value="{{ $data[0]->country_id }}">
                        </div>
                        <div class="form-group">
                            <label for="">Stock</label>
                            <input type="number" class="form-control" name="stock" id="stock" value="{{ $data[0]->stock }}">
                        </div>
                        <div class="form-group">
                            <label for="">Amout</label>
                            <input type="number" class="form-control" name="amount" id="amount" value="{{ $data[0]->amount }}">
                        </div>
                        <div class="form-group">
                            <label for="">Photo</label>
                            <input type="file" class="form-control" name="photo" id="photo" value="{{ $data[0]->photo }}">
                            <input type="hidden" name="id" id="id" value="{{ $data[0]->id }}">
                        </div>
                        <hr>
                        <button class="btn btn-primary" type="submit">Save</button>
                       
                    </div>
                </div>
                </form>
                   




                </div>
            </div>
@endsection