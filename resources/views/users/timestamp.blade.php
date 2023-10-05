@extends('layouts.layouts')

@section('layouts')

    <head>
        <title> Time stamp </title>
    </head>

<div class="col col-sm-9">
    <h3>ลงเวลาเข้า - ออกงาน วันที่ : {{ date('d/m/Y') }}</h3>
    <form action="{{ route('savetime.store')}}" method="POST" class="form-horizontal">
        @csrf
        <div class="row" >
            <div class="col col-sm-2">
                <label for="users_id"> รหัสพนักงาน </label>
                <input type="text" class="form-control"   name="users_id"   placeholder="รหัสพนักงาน"   value="1"  readonly>
            </div>
            <div class="col col-sm-2">
                <label for="users_id">เวลาเข้างาน</label>
                    @if(isset($attemp))
                        <input type="text" class="form-control" name="attemp_timein" value="{{ $attemp->attemp_timein }}" disabled>
                    @else
                        <input type="text" class="form-control" name="attemp_timein" value=" " readonly>
                    @endif
            </div>
            <div class="col col-sm-3">
                <label for="users_id">เวลาออกงาน</label>
                @if($current_time > '16:30:00')
                    @if(isset($attemp))
                        <input type="text" class="form-control" name="attemp_timeout" value="{{ date('H:i:s',strtotime($attemp->attemp_timeout)) }}" disabled>
                    @else
                        <input type="text" class="form-control" name="attemp_timeout" value="{{ $current_time }}" readonly>
                    @endif
                @else
                    <br><span style="color: red;"> 16:30น. ถึงลงเวลาได้อีกครั้ง </span>
                @endif
            </div>
            <div class="col col-sm-1">
                <label>บันทึกเวลา</label><br>
                <button type="submit" class="btn btn-primary">บันทึก</button>
            </div>
        </div>
    </form>
</div>

@endsection
