@extends('layouts.app')

@section('title', ' تعديل المشروع')

@section('content')
<div class="row justify-content-center  text-right">
    <div class="col-8">
        <div class="card p-5">
        <h3 class="text-center pb-5 font-weight-bold">تعديل المشروع</h3>
        
        <form method="POST" action="/projects/{{$project->id}}" dir="rtl">
            @method('PATCH')
          @include('projects.form')
          <div class="form-group  d-flex  flex-row-reverse mt-5">
                <button type="submit" class="btn btn-primary px-4 px-sm-5">
             تعديل
                </button>
                <a href="/projects" class="btn btn-light px-4 px-sm-5">إلغاء</a>
            </div>

        </form>
    </div>
    </div>
</div>
@endsection