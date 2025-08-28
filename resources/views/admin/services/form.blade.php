<!-- Form Start -->
<form
  action="{{ isset($service) ? route('admin.services.update', $service->id) : route('admin.services.store') }}"
  method="POST" enctype="multipart/form-data">
  @csrf

  @if(isset($service))
  @method('PATCH')
  @endif
  <!-- Service Title -->
  <div class="form-group">
    <label for="title">Service Title</label>
    <input type="text" name="title" id="title" class="form-control"
      value="{{ old('title', $service->title ?? '') }}"
      placeholder="Enter service title" required>
  </div>




  <!-- Image Upload -->
  <div class="form-group">
    <label for="images">Enter Description</label>
    <textarea name="description" id="description" rows="10" cols="80">
    {{ old('description', $service->description ?? '') }}
    </textarea>
  </div>


  <!-- Submit Button -->
  <button type="submit" class="btn btn-primary">Create Service</button>
</form>
<!-- Form End -->