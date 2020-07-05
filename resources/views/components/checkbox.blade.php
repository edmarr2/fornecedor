<div class="pure-checkbox {{ $inline ? 'pure-checkbox-inline' : ''}}">
    <input type="checkbox" class="checkbox" {{ $attributes }}>
    <label for="{{ $attributes->get('id') }}">{!! $label !!}</label>
</div>
