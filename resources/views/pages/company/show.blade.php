@extends('layouts.app')

@section('title', 'Company Profile')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/summernote/dist/summernote-bs4.css') }}">
    <link rel="stylesheet" href="{{ asset('library/bootstrap-social/assets/css/bootstrap.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Company Profile</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item">Company Profile</div>
                </div>
            </div>
            <div class="section-body">
                <h2 class="section-title">Company Profile</h2>
                <p class="section-lead">
                    Information about your company.
                </p>

                <div class="row mt-sm-4">
                    <div class="col-12 col-md-12 col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-md-6 col-12">
                                        <label>Name</label>
                                        <p>{{ $company->name }}</p>
                                    </div>
                                    <div class="form-group col-md-6 col-12">
                                        <label>Address</label>
                                        <p>{{ $company->address }}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6 col-12">
                                        <label>Email</label>
                                        <p>{{ $company->email }}</p>
                                    </div>
                                    <div class="form-group col-md-6 col-12">
                                        <label>Radius KM</label>
                                        <p>{{ $company->radius_km }}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6 col-12">
                                        <label>Latitude</label>
                                        <p>{{ $company->latitude }}</p>
                                    </div>
                                    <div class="form-group col-md-6 col-12">
                                        <label>Longitude</label>
                                        <p>{{ $company->longitude }}</p>
                                    </div>
                                </div>
                                <div class="row">

                                    <div class="form-group col-md-6 col-12">
                                        <label>Time in</label>
                                        <p>{{ $company->time_in }}</p>
                                    </div>
                                    <div class="form-group col-md-6 col-12">
                                        <label>Time out</label>
                                        <p>{{ $company->time_out }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <a href="{{ route('company.edit', $company->id) }}" class="btn btn-primary">Edit Company Profile</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraries -->
    <script src="{{ asset('library/summernote/dist/summernote-bs4.js') }}"></script>

    <!-- Page Specific JS File -->
@endpush
