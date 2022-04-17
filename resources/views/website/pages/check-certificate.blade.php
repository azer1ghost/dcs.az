@extends('website.layout')

@section('title', "Certificate")

@section('content')
    <!-- ##### Content Area Start ###### -->
    <section class="about-area section-padding-100-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-12">
                    <div class="about-content mb-100">
                        <!-- Section Heading -->
                        <div class="section-heading">
                            <div class="line"></div>
                            <p>DCS.az qrcode scan result page</p>
                        </div>
                        <div class="section-padding-0-100">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Certificate №</th>
                                        <td>{{$certificate->getAttribute('serialNumber')}}</td>
                                    </tr>
                                    <tr>
                                        <th>Certificate Holder</th>
                                        <td>{{$certificate->getAttribute('student')}}</td>
                                    </tr>
                                    <tr>
                                        <th>Training</th>
                                        <td>{{$certificate->getRelationValue('training')->getTranslatedAttribute('name')}}</td>
                                    </tr>
                                    <tr>
                                        <th>Company Name</th>
                                        <td>{{config('app.name')}}</td>
                                    </tr>
{{--                                    <tr>--}}
{{--                                        <th>Trainer Name</th>--}}
{{--                                        <td>Mark</td>--}}
{{--                                    </tr>--}}
                                    <tr>
                                        <th>Assessment Result</th>
                                        <td>PASS</td>
                                    </tr>
                                    <tr>
                                        <th>Training Duration</th>
                                        <td>{{$certificate->getRelationValue('session')->getAttribute('duration')}}</td>
                                    </tr>
                                    <tr>
                                        <th>Certificate issue date</th>
                                        <td>{{$certificate->getAttribute('created_at')->format('d.m.Y')}}</td>
                                    </tr>
                                    @php
                                        $expired_at = $certificate->getAttribute('expired_at');
                                        $class = $expired_at > now() ? 'text-success' : 'text-danger';
                                    @endphp
                                    <tr class="{{$class}}">
                                        <th>Certificate expiry date</th>
                                        <td>{{$expired_at->format('d.m.Y')}}</td>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### About Area End ###### -->
@endsection
