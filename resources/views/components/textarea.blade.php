<div class="mb-4">
    <textarea name="{{ $name }}" placeholder="{{ $placeholder }}" class="textarea textarea-bordered" cols="{{ $cols ?? '30' }}" rows="{{ $rows ?? '10' }}">
        {{ $value }}
    </textarea>
    @error($name)
        <span class="text-red-500">{{ $message }}</span>
    @enderror
</div>
