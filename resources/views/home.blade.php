@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
       
                    @if(!auth::guest() &&auth()->user()->role=='admin')
                    <a  href="{{route('showadmin')}}" class="btn btn-primary btn-block">Go Panael Control</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
