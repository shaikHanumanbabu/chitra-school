@extends('layouts.admin')

@section('content')


@if (session('success'))
    <x-alert type="success">
        {{ session('success') }}
    </x-alert>
@endif

@if ($errors->any())
    <x-alert type="danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </x-alert>
@endif


<div class="container mt-5">
  <form method="post" action="{{ route('admin.information.update', ['information' => 1]) }}">
    @csrf
    @method('PATCH')
    <div class="form-row align-items-center">

    
      <div class="col">
        <input type="text" class="form-control mb-2" placeholder="Enter something" value="{{ old('title', $information->title) }}" name="title">
      </div>
      <div>
        <button type="submit" class="btn btn-primary mb-2">Submit</button>
      </div>
    </div>
  </form>
</div>






@endsection