@extends('backend.master')

@section('content')
<div class="page-header">
    <h2>Buat Artikel</h2>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-block">
                <form action="{{ url('ecodeeepis/artikel/') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="title">Title</label>
                                            <input type="text" class="form-control" name="title" id="title" placeholder="Title" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="user-photo">
                                            <input type="file" name="image" accept="image/*" id="image" style="opacity:0">
                                            <input type="hidden" name="photo" id="photo">
                                            <div class="text-center">Cover Photo (Max File Size: 1MB)</div>
                                            <div class="upload">
                                                <div class="upload-content">
                                                <img src="{{ url('/img/default.jpg') }}" id="preview-image">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="content">Content</label>
                                            <textarea class="form-control summernote" name="content" id="content" rows="3" placeholder="Content" required></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="status">Status</label>
                                            <select class="form-control" name="status" id="status" required>
                                                <option value="Publish" selected>Publish</option>
                                                <option value="Draft">Draft</option>
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
