@extends('cms::layouts.admin')
@section('content')
    {!! Form::open() !!}
    <div class="form-group">
        <label for="exampleInputPassword1">Page Name</label>
        <input type="text" class="form-control" name="title" placeholder="My App Page">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Slug</label>
        <input type="text" class="form-control" name="slug" placeholder="my_app_page">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Front Page Url</label>
        <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">{!! url('studios') !!}/</span>
            <input type="text" name="url" class="form-control" placeholder="my-page"
                   aria-describedby="basic-addon1">
        </div>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">App Path</label>

            <select  name="file_path" class="form-control" placeholder="/" aria-describedby="basic-addon1">
                <option>Select Aplication</option>
                <option value="src/Resources/Views/assets/Tawfik/index.php">Tawfik Work</option>
                <option value="src/Resources/Views/assets/EdoSahak/index.php">Edo/Sahak</option>
            </select>
    </div>
    <div class="form-check">
        <label class="form-check-label">
            <input type="hidden" name="status" value="draft">
            <input type="checkbox" name="status" value="published" class="form-check-input" checked>
            Publish
        </label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    {!! Form::close() !!}

@stop