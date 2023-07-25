{{-- Extends layout --}}

@extends('dashboard.parent')

@section('title','عروض المدربين')

@section('sub-title','بيانات المدربين ')

@section('active title','بيانات المدربين ')
{{-- Content --}}
@section('styles')
<style>
    ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
    }
</style>

@endsection
@section('content')
<div class="d-flex flex-column-fluid">
    <div class="container">
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class="container">
                <!--begin::Profile 4-->
                <div class="d-flex flex-row">

                    <div class="flex-row-fluid ml-lg-8">

                        <!--end::Row-->
                        <!--begin::Advance Table Widget 8-->
                        <div class="card card-custom gutter-b">
                            <!--begin::Header-->
                            <div class="card-header border-0 py-5">
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label font-weight-bolder text-dark">معلومات المدربين الخاصة
                                        بالدبلومة  </span>

                                </h3>
                                <div class="card-toolbar">

                                </div>
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            @foreach ($trainers as $trainer)
                            <div class="card-body pt-0 pb-3">
                                <div class="row clearfix">

                                    <!--begin::Table-->
                                    <div class="form-group col-md-6">
                                        <label>اسم المدرب:</label>
                                        <input type="text"
                                            {{-- value="{{ $trainer->user->first_name .' ' .$trainer->user->last_name}} " --}}
                                            class="form-control form-control-solid" disabled />
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>رقم المجموعة:</label>
                                        <input type="text" value="{{$trainer->group_name.' '. $trainer->group_number }}"
                                            class="form-control form-control-solid" disabled />
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label> تاريخ ميلاد المدرب:</label>
                                        <input type="text" 
                                        {{-- value="{{$trainer->user->date_of_birth}} " --}}
                                            class="form-control form-control-solid" disabled />
                                    </div>

                                    {{-- <div class="form-group col-md-6">
                                        <label> المدينة:</label>
                                        <input type="text" value="{{$trainer->$cities->name}} "
                                            class="form-control form-control-solid" disabled />
                                    </div> --}}
                                    <div class="form-group col-md-6">
                                        <label> الإيميل:</label>
                                        <input type="text" value="{{$trainer->email}} "
                                            class="form-control form-control-solid" disabled />
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label> رقم الجوال:</label>
                                        <input type="text"
                                         value="{{ $trainer->id}} "
                                            class="form-control form-control-solid" disabled />
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label> التخصص:</label>
                                        <input type="text" 
                                        {{-- value="{{$trainer->user->speciality}} " --}}
                                            class="form-control form-control-solid" disabled />
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label> المسمى الوظيفي:</label>
                                        <input type="text" 
                                        {{-- value="{{$trainer->user->job_title}} " --}}
                                            class="form-control form-control-solid" disabled />
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label> الراتب:</label>
                                        <input type="text" 
                                        {{-- value="{{ $trainer->user->salary_value}} " --}}
                                            class="form-control form-control-solid" disabled />
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label> نوع الراتب:</label>
                                        <input type="text"
                                         {{-- value="{{$trainer->user->salary_type}} " --}}
                                            class="form-control form-control-solid" disabled />
                                    </div>
                    </div>

                        {{-- <div class="row">

                        </div> --}}

                        <!--end::Table-->
                    </div>
                    <!--end::Body-->
                    <br>
                    <hr style="background-color: black;">
                    <br>

                    @endforeach
                    @can('Index-Diploma')
                        
                    <a href="{{route('diplomas.index')}}"> <button type="button" class="btn btn-primary mr-6"> العودة
                            للدبلومة</button></a>
                    @endcan

                </div>
                <!--end::Advance Table Widget 8-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Profile 4-->
    </div>
    <!--end::Container-->
</div>
</div>
</div>

@endsection


@section('scripts')

<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

<script src="{{asset('crudjs/crud.js')}}"></script>



@endsection
