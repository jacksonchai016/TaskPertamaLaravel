<div class="form-group {{ $errors->has('name_location') ? 'has-error' : ''}}">
    <label for="name_location" class="control-label">{{ 'Name Location' }}</label>
    <input class="form-control" name="name_location" type="text" id="name_location" value="{{ isset($location->name_location) ? $location->name_location : ''}}" >
    {!! $errors->first('name_location', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
