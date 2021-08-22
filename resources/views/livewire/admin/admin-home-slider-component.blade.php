<div>
    <style>
        nav svg{
            height: 20px;
        }
        nav .hidden{
            display: block!important;
        }
    </style>

    <div class="container" style="padding-top: 30px">
        <div class="row">
            @if(\Illuminate\Support\Facades\Session::has('message'))
                <div class="alert alert-success">
                    <strong>Success</strong> {{\Illuminate\Support\Facades\Session::get('message')}}
                </div>
            @endif
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-md-6">
                            All Sliders
                        </div>
                        <div class="col-md-6">
                            <a href="{{route('admin.addhomeslider')}}" class="btn btn-success pull-right">Add New</a>
                        </div>
                    </div>

                </div>
                <div class="panel-body">
                    <table class="table table-striped table-bordered">
                        <thead>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Subtitle</th>
                        <th> Price</th>
                        <th>Link</th>
                        <th>Status</th>
                        <th>Date</th>
                        <th>Action</th>
                        </thead>
                        <tbody>
                        @foreach($sliders as $slider)
                            <tr>
                                <td><img style="height: 50px" src="{{asset('assets/images/sliders')}}/{{$slider->image}}"></td>
                                <td>{{$slider->	title}}</td>
                                <td>{{$slider->subtitle}}</td>
                                <td>${{$slider->price}}</td>
                                <td>{{$slider->link}}</td>
                                <td>@if($slider->status==1) Yes @else No @endif</td>
                                <td>{{$slider->created_at}}</td>
                                <td><a href="{{route('admin.edithomeslider',['slide_id'=>$slider->id])}}"><span><i class="fa fa-edit fa-2px"></i> </span></a>
                                    <a href="#" wire:click.prevent="deleteSlider({{$slider->id}})" style="margin-left: 10px"><span><i class="fa fa-times fa-2px"></i> </span></a></td>
                            </tr>

                        @endforeach
                        </tbody>
                    </table>
                </div>

                {{$sliders->links()}}
            </div>
        </div>
    </div>
</div>