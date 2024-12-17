@extends('layouts.app')
@section('content')
<html>
  <div class="container">
    <!-- Breadcrumb -->
    <div class="breadcrumb-container">
      <h2>This is main Dashboard</h2>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item active" aria-current="page">This is / Breadcrumb</li>
        </ol>
      </nav>
    </div>

    <!-- Dashboard Cards -->
    <div class="row">
      <div class="col-md-4">
        <div class="card run" id="card">
          <i class="bi bi-bell-fill" style="font-size: 2rem;"></i>
          <h3>Run</h3>
          <p>Notification</p>
          <h3>Juryn Tamtam</h3>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card likes" id="card">
          <i class="bi bi-hand-thumbs-up-fill" style="font-size: 2rem;"></i>
          <h3>520</h3>
          <p>Likes</p>
        </div>
      </div>
      
      <div class="col-md-4">
        <div class="card warning" id="card">
          <i class="bi bi-exclamation-triangle-fill" style="font-size: 2rem;"></i>
          <h3>Warning</h3>
          <p>Do something right!</p>
        </div>
      </div>
    </div>

    <!-- Report Section -->
    <div class="mt-5">
      <h4>Report for 2024 Company Financial Status</h4>
      <form>
        <div class="mb-3">
          <textarea class="form-control" rows="4" placeholder="Company Financial Status"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
      </form>
    </div>
  </div>
</html>
@endsection