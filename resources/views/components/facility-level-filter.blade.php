<fieldset style="margin:0 0 6px;">
    <legend style="font-size:inherit;font-weight:700;margin-bottom:4px;">Facility Level:</legend>
    @foreach (['Hospital', 'Clinic / Health Center'] as $level)
        <label style="display:block;font-size:13px;font-weight:600;margin-bottom:2px;">
            <input type="checkbox" name="hospitalLevel" value="{{ $level }}">
            {{ $level }} (<span data-facility-level-count="{{ $level }}">0</span>)
        </label>
    @endforeach
</fieldset>
