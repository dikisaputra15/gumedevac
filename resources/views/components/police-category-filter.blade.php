<fieldset style="margin:0 0 6px;">
    <legend style="font-size:inherit;font-weight:700;margin-bottom:4px;">Category:</legend>
    @foreach (['National Police HQ', 'Police Precinct'] as $category)
        <label style="display:block;font-size:13px;font-weight:600;margin-bottom:2px;">
            <input type="checkbox" name="policeCategory" value="{{ $category }}">
            {{ $category }} (<span data-police-category-count="{{ $category }}">0</span>)
        </label>
    @endforeach
</fieldset>
