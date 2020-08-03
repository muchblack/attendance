@extends('layouts.default')

@section('content')
    <div class="card mb-4">
        <div class="card-header"><i class="fas fa-table mr-1"></i>新增班表</div>
        <div class="card-body">
            <div class="table-responsive">
                <form method="POST" action="../modify">
                    @csrf
                    <input type="hidden" name="idx" value="{{$schedules['idx']}}">
                    <div class="form-group">
                        <label>班表名稱</label>
                        <input type="text" class="form-control" name="schedule_name" value="{{$schedules['schedule_name']}}">
                    </div>
                    <div class="form-group">
                        <label>表定上班時間</label>
                        <select name="work_start_hour">
                            @for($i=0;$i<24;$i++)
                                @if(str_pad($i,2,0,STR_PAD_LEFT) == $start_time[0])
                                    <option value="{{str_pad($i,2,0,STR_PAD_LEFT)}}" selected>{{str_pad($i,2,0,STR_PAD_LEFT)}}</option>
                                @else
                                    <option value="{{str_pad($i,2,0,STR_PAD_LEFT)}}">{{str_pad($i,2,0,STR_PAD_LEFT)}}</option>
                                @endif
                            @endfor
                        </select>：
                        <select name="work_start_mins">
                            @for($i=0;$i<60;$i++)
                                @if(str_pad($i,2,0,STR_PAD_LEFT) == $start_time[1])
                                    <option value="{{str_pad($i,2,0,STR_PAD_LEFT)}}" selected>{{str_pad($i,2,0,STR_PAD_LEFT)}}</option>
                                @else
                                    <option value="{{str_pad($i,2,0,STR_PAD_LEFT)}}">{{str_pad($i,2,0,STR_PAD_LEFT)}}</option>
                                @endif
                            @endfor
                        </select>
                    </div>
                    <div class="form-group">
                        <label>表定下班時間</label>
                        <select name="work_end_hour">
                            @for($i=0;$i<24;$i++)
                                @if(str_pad($i,2,0,STR_PAD_LEFT) == $end_time[0])
                                    <option value="{{str_pad($i,2,0,STR_PAD_LEFT)}}" selected>{{str_pad($i,2,0,STR_PAD_LEFT)}}</option>
                                @else
                                    <option value="{{str_pad($i,2,0,STR_PAD_LEFT)}}">{{str_pad($i,2,0,STR_PAD_LEFT)}}</option>
                                @endif
                            @endfor
                        </select>：
                        <select name="work_end_mins">
                            @for($i=0;$i<60;$i++)
                                @if(str_pad($i,2,0,STR_PAD_LEFT) == $end_time[1])
                                    <option value="{{str_pad($i,2,0,STR_PAD_LEFT)}}" selected>{{str_pad($i,2,0,STR_PAD_LEFT)}}</option>
                                @else
                                    <option value="{{str_pad($i,2,0,STR_PAD_LEFT)}}">{{str_pad($i,2,0,STR_PAD_LEFT)}}</option>
                                @endif
                            @endfor
                        </select>
                    </div>
                    <div class="form-group">
                        <label>緩衝時間(單位：分)</label>
                        <input type="text" class="form-control" name="schedule_buffer" maxlength="2" value="{{$schedules['schedule_buffer']}}">
                    </div>
                    <button type="submit" class="btn btn-primary">送出</button>
                </form>
            </div>
        </div>
    </div>
@endsection
