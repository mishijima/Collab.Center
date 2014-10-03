{{--
    This is page uses blade syntax, Laravel recognizes it because the file name is *.blade.php
    http://laravel.com/docs/4.2/templates#blade-templating

    This page extends app/views/_layouts/default.blade.php
    Everything inside the section will be included in the default.blade.php template under @yield('main') or @section('main')
--}}
@extends('._layouts/default')

@section('main')
    <div class="row margin-top-20px">
        <div class="col-md-4 col-md-offset-4">
        {{ Form::open(array('url' => secure_url('submit'), 'class' => 'form-horizontal')) }}
            <fieldset>
                <div class="form-group">
                    <label for="language" class="col-md-2 control-label">Language</label>
                    <div class="col-md-10">
                        <select name="language" class="form-control">
                            @foreach($languages as $key => $value)
                                <option value={{$value}}>{{$value}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="template" class="col-md-2 control-label">Template</label>
                    <div class="col-md-10">
                        <select name="template" class="form-control">
                            <option></option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-10 col-lg-offset-2">
                        <button type="submit" class="btn btn-primary">Create</button>
                    </div>
                </div>
            </fieldset>
        {{ Form::close() }}
        </div>
    </div>
@stop