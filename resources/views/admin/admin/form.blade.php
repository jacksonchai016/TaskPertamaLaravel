<div class="form-group {{ $errors->has('nim_mahasiswa') ? 'has-error' : ''}}">
    <label for="nim_mahasiswa" class="control-label">{{ 'Nim Mahasiswa' }}</label>
    <input class="form-control" name="nim_mahasiswa" type="text" id="nim_mahasiswa" value="{{ isset($admin->nim_mahasiswa) ? $admin->nim_mahasiswa : ''}}" >
    {!! $errors->first('nim_mahasiswa', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('nama_mahasiswa') ? 'has-error' : ''}}">
    <label for="nama_mahasiswa" class="control-label">{{ 'Nama Mahasiswa' }}</label>
    <input class="form-control" name="nama_mahasiswa" type="text" id="nama_mahasiswa" value="{{ isset($admin->nama_mahasiswa) ? $admin->nama_mahasiswa : ''}}" >
    {!! $errors->first('nama_mahasiswa', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('alamat_rumah_mahasiswa') ? 'has-error' : ''}}">
    <label for="alamat_rumah_mahasiswa" class="control-label">{{ 'Alamat Rumah Mahasiswa' }}</label>
    <input class="form-control" name="alamat_rumah_mahasiswa" type="text" id="alamat_rumah_mahasiswa" value="{{ isset($admin->alamat_rumah_mahasiswa) ? $admin->alamat_rumah_mahasiswa : ''}}" >
    {!! $errors->first('alamat_rumah_mahasiswa', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
