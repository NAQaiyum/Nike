<form method="POST" action="{{ route($route.'save') }}"  enctype="multipart/form-data">
    @csrf
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">{{ $title }}</h4>
            <button type="button" class="btn-close fas fa-times" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body p-4">
            <div class="row">
                <div class="col-md-12">
                    <div class="mb-3">
                        <label for="field-1" class="form-label">Thumbnail</label>
                        <img src="{{ asset($data ? $data->thumbnail : 'https://upload.wikimedia.org/wikipedia/commons/a/ac/No_image_available.svg' ) }}" style="height: 150px; margin-bottom:10px;" id="thumbnail">
                        <input type="file" class="form-control" accept="image/png, image/gif, image/jpeg" name="thumbnail" onchange="document.getElementById('thumbnail').src = window.URL.createObjectURL(this.files[0])">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="mb-3">
                        <label for="field-1" class="form-label">Course</label>
                        <select class="form-control" name="course_id">
                            <option value=""> Select Course </option>
                            @foreach($getCourse as $course)
                            <option value="{{ $course->id }}" {{ $data && $data->course_id == $course->id ? 'Selected' : null }} > {{ $course->name }} </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="mb-3">
                        <label for="field-1" class="form-label">Title</label>
                        <input type="text" class="form-control" name="title" placeholder=" Name" value="{{ $data ? $data->title : null }}">
                        @if($data)
                        <input type="hidden" class="form-control" name="id" value="{{ $data ? $data->id : null }}">
                        @endif
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="mb-3">
                        <label for="field-1" class="form-label">Subtitle</label>
                        <input type="text" class="form-control" name="sub_title" placeholder=" Sub Title" value="{{ $data ? $data->sub_title : null }}">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="mb-3">
                        <label for="field-1" class="form-label">Description</label>
                        <textarea class="form-control" name="description" placeholder=" Description">{{ $data ? $data->description : null }}</textarea>
                    </div>
                </div>

            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-info waves-effect waves-light">Save changes</button>
        </div>
    </div>
</form>
