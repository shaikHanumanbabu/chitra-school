@extends('layouts.admin')

@section('content')





<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Create Event</h1>
<p class="mb-4">

  <a href="{{ route('admin.events.index') }}">Back</a>.
</p>

<div class="container mt-5">
  @include('admin.events.form', ['event' => $event ?? null]) {{-- No $event passed --}}
</div>






@endsection