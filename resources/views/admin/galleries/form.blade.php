<!-- Form Start -->
<form action="{{ route('admin.galleries.store') }}" method="POST" enctype="multipart/form-data">
  @csrf

  <!-- Gallery Title -->
  <div class="form-group">
    <label for="title">Gallery Title</label>
    <input type="text" name="title" id="title" class="form-control"
      value="{{ old('title', $gallery->title ?? '') }}"
      placeholder="Enter gallery title" required>
  </div>


  <textarea name="content" id="editor" rows="10" cols="80">
            Start writing here...
        </textarea>

  <!-- Image Upload -->
  <div class="form-group">
    <label for="images">Upload Images</label>
    <input type="file" name="images[]" id="images" class="form-control-file" multiple required>
    <small class="form-text text-muted">You can upload multiple images (JPEG, PNG, GIF).</small>
  </div>

  <!-- Submit Button -->
  <button type="submit" class="btn btn-primary">Create Gallery</button>
</form>
<!-- Form End -->