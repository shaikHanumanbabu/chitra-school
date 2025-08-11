<form
  action="{{ isset($event) ? route('admin.events.update', $event->id) : route('admin.events.store') }}"
  method="POST"
  enctype="multipart/form-data">
  @csrf
  @if(isset($event))
  @method('PATCH')
  @endif

  {{-- Title --}}
  <div class="form-group">
    <label for="title">Title</label>
    <input
      type="text"
      name="title"
      class="form-control"
      value="{{ old('title', $event->title ?? '') }}">
    @error('title') <small class="text-danger">{{ $message }}</small> @enderror
  </div>

  {{-- Date --}}
  <div class="form-group">
    <label for="date">Date</label>
    <input
      type="date"
      name="date"
      class="form-control"
      value="{{ old('date', isset($event) ? \Carbon\Carbon::parse($event->date)->format('Y-m-d') : '') }}">
    @error('date') <small class="text-danger">{{ $message }}</small> @enderror
  </div>

  {{-- Address --}}
  <div class="form-group">
    <label for="address">Address</label>
    <textarea
      name="address"
      class="form-control">{{ old('address', $event->address ?? '') }}</textarea>
    @error('address') <small class="text-danger">{{ $message }}</small> @enderror
  </div>

  {{-- Image --}}
  <div class="form-group">
    <label for="image">Image</label>
    <input
      type="file"
      name="image"
      class="form-control-file">
    @if(isset($event) && $event->image)
    <div class="mt-2">
      <img src="{{ asset($event->image) }}" alt="Current Image" width="150">
    </div>
    @endif
    @error('image') <small class="text-danger">{{ $message }}</small> @enderror
  </div>

  <button type="submit" class="btn btn-primary">
    {{ isset($event) ? 'Update' : 'Create' }}
  </button>
</form>