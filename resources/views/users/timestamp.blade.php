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
                    @if(isset($attemp_timestamp))
                        <input type="text" class="form-control" name="attemp_timestamp" value="{{ date('H:i:s',strtotime($attemp_timestamp->attemp_timestamp)) }}" disabled>
                    @else
                        <input type="text" class="form-control" name="attemp_timestamp" value="{{ $current_time }}" readonly>
                    @endif
            </div>
            <div class="col col-sm-3">
                <label for="users_id">เวลาออกงาน</label>
                @if($current_time > '23:50:00')
                    @if(isset($attemp_timestamp))
                        <input type="text" class="form-control" name="attemp_timestamp" value="{{ date('H:i:s',strtotime($attemp_timestamp->attemp_timestamp)) }}" disabled>
                    @else
                        <input type="text" class="form-control" name="attemp_timestamp" value="{{ $current_time }}" readonly>
                    @endif
                @else
                    <br><span style="color: red;"> หลัง 16:30น. ถึงลงเวลาได้อีกครั้ง </span>
                @endif
            </div>

            <div class="col col-sm-1">
                <label>บันทึกเวลา</label><br>
                <button type="submit" class="btn btn-primary">บันทึก</button>
            </div>
        </div>
    </form>

    {{-- <p> --}}

       {{-- {{date('Y-m-d', strtotime($attemp_timestamp->attemp_timestamp))}}<br>
       {{date('H:i:s', strtotime($attemp_timestamp->attemp_timestamp))}} --}}
        {{-- $time = $attemp_timestamp->format('H:i');
         --}}
    {{-- </p> --}}

</div>

@endsection
