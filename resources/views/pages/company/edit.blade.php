@extends('layouts.app')

@section('title', 'Edit Company Profile')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/summernote/dist/summernote-bs4.css') }}">
    <link rel="stylesheet" href="{{ asset('library/bootstrap-social/assets/css/bootstrap.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Edit Company Profile</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="{{ route('company.show', $company->id) }}">Company Profile</a>
                    </div>
                    <div class="breadcrumb-item">Edit Company Profile</div>
                </div>
            </div>
            <div class="section-body">
                <h2 class="section-title">Edit Company Profile</h2>
                <p class="section-lead">
                    Edit information about your company on this page.
                </p>

                <div class="row mt-sm-4">
                    <div class="col-12 col-md-12 col-lg-12">
                        <div class="card">
                            <form action="{{ route('company.update', $company->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                    <div class="row">
                                        <div class="form-group col-md-6 col-12">
                                            <label>Name</label>
                                            <input type="text" name="name" class="form-control"
                                                value="{{ $company->name }}">
                                        </div>
                                        <div class="form-group col-md-6 col-12">
                                            <label>Address</label>
                                            <input type="text" name="address" class="form-control"
                                                value="{{ $company->address }}">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-md-6 col-12">
                                            <label>Email</label>
                                            <input type="email" name="email" class="form-control"
                                                value="{{ $company->email }}">
                                        </div>
                                        {{-- <div class="form-group col-md-6 col-12">
                                                <label>Telepon Perusahaan</label>
                                                <input type="tel" name="phone" class="form-control" value="{{ $company->phone }}">
                                            </div> --}}
                                        <div class="form-group col-md-6 col-12">
                                            <label>Radius KM</label>
                                            <input type="number" step="0.01" name="radius_km" class="form-control"
                                                value="{{ $company->radius_km }}">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-md-6 col-12">
                                            <label>Latitude</label>
                                            <input type="text" name="latitude" class="form-control"
                                                value="{{ $company->latitude }}">
                                        </div>
                                        <div class="form-group col-md-6 col-12">
                                            <label>Longitude</label>
                                            <input type="text" name="longitude" class="form-control"
                                                value="{{ $company->longitude }}">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-md-6 col-12">
                                            <label>Time in</label>
                                            <input type="time" name="time_in" class="form-control"
                                                value="{{ $company->time_in }}">
                                        </div>
                                        <div class="form-group col-md-6 col-12">
                                            <label>Time out</label>
                                            <input type="time" name="time_out" class="form-control"
                                                value="{{ $company->time_out }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="card-footer text-right">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </form>
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
