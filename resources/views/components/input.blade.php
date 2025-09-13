@props([
    'type' => 'text',
    'name',
    'label',
    'placeholder' => '',
    'model',
    'modelType' => '',
    'options' => [],
    'class' => '',
    'required' => false,
])

<div class="mb-3">
    @if ($type !== 'radio')
        <label for="{{ $name }}" class="form-label">
            {{ $label }} {{ $required ? '*' : '' }}
        </label>
    @endif

    @if($type === 'select')
        <select class="form-select {{ $class }} @error($model) is-invalid @enderror"
                id="{{ $name }}"
                wire:model{{ $modelType }}="{{ $model }}">
            <option value=" ">Pilih {{ $label }}</option>
            @foreach($options as $value => $display)
                <option value="{{ $value }}">{{ $display }}</option>
            @endforeach
        </select>
    @elseif($type === 'textarea')
        <textarea class="form-control {{ $class }} @error($model) is-invalid @enderror"
            id="{{ $name }}" rows="3"
            wire:model{{ $modelType }}="{{ $model }}"
            placeholder="{{ $placeholder }}"></textarea>
    @elseif($type === 'radio')
        @foreach($options as $value => $display)
            <div class="form-check mb-2">
                <input class="form-check-input" type="radio"
                    wire:model{{ $modelType }}="{{ $model }}"
                    id="{{ $name }}.{{ slug($value, '.') }}"
                    value="{{ $value }}">
                <label class="form-check-label" for="{{ $name }}.{{ slug($value, '.') }}">
                    {{ $display }}
                </label>
            </div>
        @endforeach
    @else
        <input type="{{ $type }}"
            class="form-control {{ $class }} @error($model) is-invalid @enderror"
            id="{{ $name }}"
            wire:model{{ $modelType }}="{{ $model }}"
            placeholder="{{ $placeholder }}">
    @endif

    @error($model)
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>
