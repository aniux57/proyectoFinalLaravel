<div class="form-group row">
    <label
        for="cono1"
        class="col-md-2"
    >
        {{ $label }}
    </label>
    <div class="col-md-10">
        <textarea
            id="{{ $name }}"
            name="{{ $name }}"
            class="form-control"
            {{ $required }}
        >{{ $value }}</textarea>
    </div>
</div>
