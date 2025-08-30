<!-- Form Start -->
<form
  action="{{ isset($carousel) ? route('admin.carousels.update', $carousel->id) : route('admin.carousels.store') }}"
  method="POST" enctype="multipart/form-data">
  @csrf

  @if(isset($carousel))
  @method('PATCH')
  @endif
  <!-- Competation Title -->
  <div class="form-group">
    <label for="title">Carousels Title One</label>
    <input type="text" name="title_1" id="title" class="form-control"
      value="{{ old('title_1', $carousel->title_1 ?? '') }}"
      placeholder="Enter carousel title" required>
    @error('title_1') <small class="text-danger">{{ $message }}</small> @enderror

  </div>

  <div class="form-group">
    <label for="title">Carousels Title Two</label>
    <input type="text" name="title_2" id="title" class="form-control"
      value="{{ old('title_2', $carousel->title_2 ?? '') }}"
      placeholder="Enter carousel title" required>
    @error('title_2') <small class="text-danger">{{ $message }}</small> @enderror

  </div>






  <!-- Image Upload -->
  <div class="form-group">
    <label for="images">Enter Description</label>
    <textarea name="description" id="description" rows="10" cols="80">
    {{ old('description', $carousel->description ?? '') }}
    </textarea>
    @error('description') <small class="text-danger">{{ $message }}</small> @enderror

  </div>


  {{-- Image --}}
  <div class="form-group">
    <label for="image">Image</label>
    <input
      type="file"
      name="image"
      class="form-control-file">
    @if(isset($carousel) && $carousel->image)
    <div class="mt-2">
      <img src="{{ asset($carousel->image) }}" alt="Current Image" width="150">
    </div>
    @endif
    @error('image') <small class="text-danger">{{ $message }}</small> @enderror
  </div>


  <!-- Submit Button -->
  <button type="submit" class="btn btn-primary">Create Carousel</button>
</form>
<!-- Form End -->