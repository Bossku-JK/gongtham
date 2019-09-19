@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
                <div class="card">
                        <div class="card-body">
                            <h2 class="text-center"> แบบฟอร์ม สำหรับขอรับชื่อผู้ใช้และรหัสผ่าน และกู้คืนรหัสผ่าน</h2>
                            <h3 class="text-center"> สำหรับสถานศึกษา</h3>
                            </div>
                        </div>
            <div class="card py-2" style="margin-top:10px;">
                {{--  <div class="card-header">แบบฟอร์ม สำหรับขอชื่อผู้ใช้และรหัสผ่าน </div>  --}}

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                            <shoolinfo></shoolinfo>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
