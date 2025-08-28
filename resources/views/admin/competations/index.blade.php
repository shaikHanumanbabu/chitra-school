@extends('layouts.admin')

@section('content')





<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Competations</h1>
<p class="mb-4">

  <a target="_blank" href="{{ route('admin.competations.create') }}">Create competation</a>.
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
            <th>Title</th>
            <th>Actions</th>
          </tr>
        </thead>
        <!-- <tfoot>
          <tr>
            <th>Name</th>
            <th>Position</th>
            <th>Office</th>
            <th>Age</th>
            <th>Start date</th>
            <th>Salary</th>
          </tr>
        </tfoot> -->
        <tbody>

          @foreach ($competations as $competation)
          <tr>
            <td>{{ $competation->title }}</td>

            <td>
              <a href="{{ route('admin.competations.edit', ['competation' => $competation->id]) }}" class="btn btn-primary">Update</a>
              <form action="{{ route('admin.competations.destroy', $competation->id) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
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