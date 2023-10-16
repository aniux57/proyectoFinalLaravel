<div class="form-group row">
    <label class="col-md-2" for="disabledTextInput">{{ $label }}</label>
    <div class="col-md-10">
        <select
            class="select2 form-select shadow-none"
            id="{{ $name }}"
            name="{{ $name }}"
            style="width: 100%; height:36px;"
        >
            @foreach ($items as $item)
                <option value="{{ $item -> getValue() }}">{{ $item -> getValue() }}</option>
            @endforeach
        </select>
    </div>
</div>

