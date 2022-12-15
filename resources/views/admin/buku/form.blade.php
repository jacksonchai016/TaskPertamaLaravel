<div class="form-group {{ $errors->has('no_buku') ? 'has-error' : ''}}">
    <label for="no_buku" class="control-label">{{ 'No Buku' }}</label>
    <input class="form-control" name="no_buku" type="number" id="no_buku" value="{{ isset($buku->no_buku) ? $buku->no_buku : ''}}" >
    {!! $errors->first('no_buku', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('judul_buku') ? 'has-error' : ''}}">
    <label for="judul_buku" class="control-label">{{ 'Judul Buku' }}</label>
    <input class="form-control" name="judul_buku" type="text" id="judul_buku" value="{{ isset($buku->judul_buku) ? $buku->judul_buku : ''}}" >
    {!! $errors->first('judul_buku', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('pengarang_buku') ? 'has-error' : ''}}">
    <label for="pengarang_buku" class="control-label">{{ 'Pengarang Buku' }}</label>
    <input class="form-control" name="pengarang_buku" type="text" id="pengarang_buku" value="{{ isset($buku->pengarang_buku) ? $buku->pengarang_buku : ''}}" >
    {!! $errors->first('pengarang_buku', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('penerbit_buku') ? 'has-error' : ''}}">
    <label for="penerbit_buku" class="control-label">{{ 'Penerbit Buku' }}</label>
    <input class="form-control" name="penerbit_buku" type="text" id="penerbit_buku" value="{{ isset($buku->penerbit_buku) ? $buku->penerbit_buku : ''}}" >
    {!! $errors->first('penerbit_buku', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('tahun_terbit') ? 'has-error' : ''}}">
    <label for="tahun_terbit" class="control-label">{{ 'Tahun Terbit' }}</label>
    <input class="form-control" name="tahun_terbit" type="text" id="tahun_terbit" value="{{ isset($buku->tahun_terbit) ? $buku->tahun_terbit : ''}}" >
    {!! $errors->first('tahun_terbit', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
