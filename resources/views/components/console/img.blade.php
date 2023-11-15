<div class="form-group row">
    <label class="col-md-2" for="imagen">{{ $label }}</label>
    <div class="col-md-10">
        <input
            type="file"
            id="{{ $name }}"
            name="{{ $name }}"
            class="form-control-file"
            accept="image/*"
            {{ $required }}
        >
    </div>
</div>
