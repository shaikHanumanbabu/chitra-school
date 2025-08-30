@extends('layouts.admin')

@section('content')





<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Create Carousels</h1>
<p class="mb-4">

  <a href="{{ route('admin.carousels.index') }}">Back</a>.
</p>

<div class="container mt-5">
  @include('admin.carousels.form', ['competation' => $competation ?? null]) {{-- No $service passed --}}
</div>






@endsection

@push('scripts')
<script src="https://cdn.ckeditor.com/ckeditor5/41.2.1/classic/ckeditor.js"></script>
<script>
  ClassicEditor
    .create(document.querySelector('#description'))
    .catch(error => {
      console.error(error);
    });
</script>
@endpush