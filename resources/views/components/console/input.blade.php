<div class="form-group row">
    <label class="col-md-2" for="disabledTextInput">{{ $label }}</label>
    <div class="col-md-10">
        <input
            type="text"
            id="{{ $name }}"
            name="{{ $name }}"
            class="form-control"
            placeholder="{{ $label }}"
            {{ $required }}
        >
    </div>
</div>
