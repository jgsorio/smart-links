<div class="mb-4">
    <input type="{{ $type }}" name="{{ $name }}" placeholder="{{ $placeholder }}" value="{{ $value }}" class="{{ $class ?? 'input input-bordered' }}">
    @error($name)
        <span class="text-red-500">{{ $message }}</span>
    @enderror
</div>
