<div class="pure-radiobutton {{ $inline ? 'pure-radiobutton-inline' : ''}}">
    <input id="{{ $attributes->get('id') }}" type="radio" class="radio" {{ $attributes }}>
    <label for="{{ $attributes->get('id') }}">{{ $label }}</label>
</div>
