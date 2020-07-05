<form {{ $attributes }} method="{{ $method }}" enctype="multipart/form-data">
    @csrf
    @method($methodField)

    {{ $slot }}
</form>
