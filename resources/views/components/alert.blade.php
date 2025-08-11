{{-- resources/views/components/alert.blade.php --}}
<div class="alert alert-{{ $type ?? 'secondary' }}" role="alert">
    {{ $slot }}
</div>