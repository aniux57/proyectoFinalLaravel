<div class="form-group row">
    <label class="col-md-2" for="disabledTextInput">{{ $label }}</label>
    <div class="col-md-10">
        <input
            type="number"
            step="0.0000000001"
            onkeypress='validate(event)'
            id="{{ $name }}"
            name="{{ $name }}"
            class="form-control"
            placeholder="{{ $label }}"
            value="{{ $value }}"
            {{ $required }}
        >
    </div>
</div>
