@props(['put' => false, 'action', 'method', 'enctype' => null, 'delete' => false, 'patch' => false])

<form action="{{ $action }}" method="{{ $method }}" @if($enctype) enctype="{{ $enctype}}" @endif>
    @csrf
    @if($put)
        @method('PUT')
    @endif

    @if($delete)
        @method('DELETE')
    @endif
    @if($patch)
        @method('PATCH')
    @endif
    {{ $slot }}
</form>
