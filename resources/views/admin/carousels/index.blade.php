@extends('layouts.admin')

@section('content')





<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Carousels</h1>
<p class="mb-4">

  <a target="_blank" href="{{ route('admin.carousels.create') }}">Create carousel</a>.
</p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">
      DataTables Example
    </h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Title 1</th>
            <th>Title 2</th>
            <th>Description</th>
            <th>Image</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach($carousels as $carousel)
          <tr>
            <td>{{ $carousel->title_1 }}</td>
            <td>{{ $carousel->title_2 }}</td>
            <td>{!! $carousel->description !!}</td>
            <td><img src="{{ asset($carousel->image) }}" alt="carousel image" width="100"></td>
            <td>
              <a href="{{ route('admin.carousels.edit', $carousel->id) }}" class="btn btn-warning">Edit</a>
              <form action="{{ route('admin.carousels.destroy', $carousel->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>






@endsection