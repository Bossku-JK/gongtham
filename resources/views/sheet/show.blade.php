@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
            <div class="card-header">เอกสาร สนามสอบที่ {{ $data->ss_id}} - {{$data->ss_name}} - {{$data->province_name}}</div>

                <div class="card-body">


                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                                @foreach ($dataimg as $key2 => $item)
                                <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#{{$key2}}">{{$key2}} มีทั้งหมด {{count($item) }} รูป </a>
                                      </li>
                            
                               
                                @endforeach
                              </ul>
                              
                              <div class="tab-content">
                            
                                    @foreach ($dataimg as $key2 => $item)
                                    <div id="{{$key2}}" class="container tab-pane fade"><br>
                                       
                                                @foreach ($item as $key3 => $items)
                                                <a>
                                                    <img alt="AltText" width="250px" src="/images/type{{$items->type_sheet_id}}/{{$data->ss_id}}/{{$items->img_name}}" class="img-responsive">
                                                </a>
                                                @endforeach
                                          
                                        </div>
                                @endforeach
                             
                              
                              </div>
                              
                              
                            
                          
                                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
