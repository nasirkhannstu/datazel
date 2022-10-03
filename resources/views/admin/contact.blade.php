@extends('layouts.backend.app')
@push('header')
<link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
@endpush
@section('content')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Dashboard</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li>Dashboard</li>
                    <li class="active">Profile</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="content mt-3">
<div class="row">
    <div class="col-md-12">
        @if ($errors->any())

        @foreach ($errors->all() as $error)
        <div class="alert  alert-danger alert-dismissible fade show" role="alert">
            <span class="badge badge-pill badge-danger">Erorr</span> {{$error}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
        @endforeach

        @endif

    </div>
    <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>All Contacts</h4>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        @foreach($contacts as $contact)
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-md-3">{{ $contact->name }}</div>
                                <div class="col-md-3">{{ $contact->email }}</div>
                                <div class="col-md-6">{{ $contact->message }}</div>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                    {{ $contacts->links() }}
                </div>
            </div>
    </div>
</div>
</div>
<!-- .content -->
@endsection
@push('footer')
<script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
<script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
{!! Toastr::message() !!}
@endpush
