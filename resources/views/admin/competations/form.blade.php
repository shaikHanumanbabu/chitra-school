<!-- Form Start -->
<form
  action="{{ isset($competation) ? route('admin.competations.update', $competation->id) : route('admin.competations.store') }}"
  method="POST" enctype="multipart/form-data">
  @csrf

  @if(isset($competation))
  @method('PATCH')
  @endif
  <!-- Competation Title -->
  <div class="form-group">
    <label for="title">Competation Title</label>
    <input type="text" name="title" id="title" class="form-control"
      value="{{ old('title', $competation->title ?? '') }}"
      placeholder="Enter competation title" required>
  </div>

  <!-- Competation Title -->
  <div class="form-group">
    <label for="title">Entry Fee</label>
    <input type="text" name="entry_fee" id="entry_fee" class="form-control"
      value="{{ old('entry_fee', $competation->entry_fee ?? '') }}"
      placeholder="Enter entry fee" required>
  </div>




  <!-- Image Upload -->
  <div class="form-group">
    <label for="images">Enter Description</label>
    <textarea name="description" id="description" rows="10" cols="80">
    {{ old('description', $competation->description ?? '') }}
    </textarea>
  </div>


  <!-- Submit Button -->
  <button type="submit" class="btn btn-primary">Create Competation</button>
</form>
<!-- Form End -->