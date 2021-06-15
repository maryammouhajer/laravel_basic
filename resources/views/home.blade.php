@extends('layouts.app')

@section('content')
<div class="container" dir="rtl">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card text-right">
                <div class="card-header">{{ __('لوحة التحكم الرئيسية') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('لقد سجلت الدخول!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
