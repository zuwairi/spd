 @csrf

<div class="form-group row">
    <label for="inputName3" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-10">
      <input name="name" type="text" class="form-control" id="inputName3" placeholder="Name" value="{{old('name',$sesi->name) }}">
    </div>
  </div>

  <div class="form-group row">
    <label class="col-sm-2 col-form-label">Status</label>
    <div class="col-sm-10">
      <input name="status" type="checkbox" class="form-check-input" {{old('status', $sesi->status) ? 'checked' : '' }}">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-sm-2 col-form-label">Pingat</label>
    <div class="col-sm-10">
      <input name="pingat" type="text" class="form-control" placeholder="Pingat name" value="{{old('pingat', $sesi->pingat) }}">
    </div>
  </div>

