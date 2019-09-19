@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
                <div class="card">
                        <div class="card-body">
                            <h2 class="text-center"> ระบบตรวจรับมอบเอกสารการสอบ สำนักงานแม่กองธรรมสนามหลวง</h2>
                            </div>
                        </div>
            <div class="card py-2" style="margin-top:10px;">
                {{--  <div class="card-header">เพิ่มข้อมูลการส่งเอกสาร สำนักงานแม่กองธรรมสนามหลวง</div>  --}}

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                            <example-component></example-component>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
