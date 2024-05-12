<form method="POST" action="{{ route($route.'save') }}"  enctype="multipart/form-data">
    @csrf
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">{{ $title }}</h4>
            <button type="button" class="btn-close fas fa-times" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body p-4">
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="field-1" class="form-label">Thumbnail</label>
                        <img src="{{ asset($data ? $data->thumbnail : 'https://upload.wikimedia.org/wikipedia/commons/a/ac/No_image_available.svg' ) }}" style="height: 150px; margin-bottom:10px;" id="thumbnail">
                        <input type="file" class="form-control" accept="image/png, image/gif, image/jpeg" name="thumbnail" onchange="document.getElementById('thumbnail').src = window.URL.createObjectURL(this.files[0])">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="field-1" class="form-label">Cover</label>
                        <img src="{{ asset($data ? $data->cover : 'https://upload.wikimedia.org/wikipedia/commons/a/ac/No_image_available.svg' ) }}" style="height: 150px; margin-bottom:10px;" id="cover">
                        <input type="file" class="form-control" accept="image/png, image/gif, image/jpeg" name="cover" onchange="document.getElementById('cover').src = window.URL.createObjectURL(this.files[0])">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="field-1" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" placeholder=" Name" value="{{ $data ? $data->name : null }}">
                        @if($data)
                        <input type="hidden" class="form-control" name="id" value="{{ $data ? $data->id : null }}">
                        @endif
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="field-1" class="form-label">Subtitle</label>
                        <input type="text" class="form-control" name="subtitle" placeholder=" subtitle" value="{{ $data ? $data->subtitle : null }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="field-1" class="form-label">limit</label>
                        <input type="text" class="form-control" name="limit" placeholder=" limit" value="{{ $data ? $data->limit : null }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="field-1" class="form-label">start</label>
                        <input type="text" class="form-control" name="start" placeholder=" start" value="{{ $data ? $data->start : null }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="field-1" class="form-label">end</label>
                        <input type="text" class="form-control" name="end" placeholder=" end" value="{{ $data ? $data->end : null }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="field-1" class="form-label">status</label>
                        <select class="form-control" name="status">
                            <option value=""> Select Status </option>
                            <option value="1" {{ $data && $data->status == 1 ? 'Selected' : null }} > Active </option>
                            <option value="0" {{ $data && $data->status == 0 ? 'Selected' : null }} > Pending </option>
                        </select>
                    </div>
                </div>

            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-info waves-effect waves-light">Save changes</button>
        </div>
    </div>
</form>
