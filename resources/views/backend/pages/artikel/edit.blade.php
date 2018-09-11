@extends('backend.master')

@section('content')
<div class="page-header">
    <h2>Ubah Artikel</h2>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-heading card-default">
                Data Form
            </div>
            <div class="card-block">
                <form action="{{ url('/ecodeeepis/artikel/'.$data->id) }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="PUT">

                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="row">
                                <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="title">Title</label>
                                            <input type="text" class="form-control" name="title" id="title" value="{{ $data->title }}" placeholder="Title" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="user-photo">
                                            <input type="file" name="image" accept="image/*" id="image" style="opacity:0">
                                            <input type="hidden" name="photo" id="photo">
                                            <div class="text-center">Cover Photo (Max File Size: 1MB)</div>
                                            <div class="upload">
                                                <div class="upload-content">
                                                @if (empty($data->photo))
                                                    <img src="{{ url('img/default.jpg') }}" id="preview-image">
                                                @else
                                                    @if (file_exists(public_path('artikel/'.$data->photo)))
                                                    <img src="{{ url('artikel/'.$data->photo) }}" id="preview-image">
                                                    @else
                                                    <img src="{{ url('img/default.jpg') }}" id="preview-image">
                                                    @endif
                                                @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="content">Content</label>
                                            <textarea class="form-control summernote" name="content" id="content" rows="3" placeholder="Content" required>{{ $data->content }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                      <div class="form-group">
                                        <label for="status">Status</label>
                                        <select class="form-control" name="status" id="status" required>
                                          @if ($data->status == 'Publish')
                                            <option value="Publish" selected>Publish</option>
                                          @else
                                            <option value="Publish">Publish</option>
                                          @endif
                                          @if ($data->status == 'Draft')
                                            <option value="Draft" selected>Draft</option>
                                          @else
                                            <option value="Draft">Draft</option>
                                          @endif
                                        </select>
                                      </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-footer text-center">
                        <a href="{{ url('/ecodeeepis/artikel') }}" class="btn btn-warning">Cancel</a>
                        <button type="submit" name="submit" class="btn btn-success">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@stop
