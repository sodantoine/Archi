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
        <div class="row clearfix">
            <div class="panel panel-default">

                <div class="panel-heading">
                    <div class="row">
                        <div class="col-md-6">

                            Add Slider
                        </div>
                        <div class="col-md-6">

                            <a href="{{route('admin.homeslider')}}" class="btn btn-success">All Sliders</a>
                        </div>
                    </div>


                </div>
            </div>
            <div class="panel-body">
                @if(\Illuminate\Support\Facades\Session::has('message'))
                    <div class="alert alert-success">
                        <strong>Success</strong> {{\Illuminate\Support\Facades\Session::get('message')}}
                    </div>
                @endif
                <form class="form-horizontal" enctype="multipart/form-data" wire:submit.prevent="addslider()">
                    <div class="form-group">
                        <label class="col-md-4 control-label"> Title</label>
                        <div class="col-md-4">
                            <input type="text" placeholder="Title" class="form-control input-md" wire:model="title" required>
                        </div>

                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label"> SubTitle</label>
                        <div class="col-md-4">
                            <input type="text" placeholder="SubTitle" class="form-control input-md" wire:model="subtitle" required>
                        </div>

                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label"> Price</label>
                        <div class="col-md-4">
                            <input type="text" placeholder="Price" class="form-control input-md" wire:model="price" required>
                        </div>

                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label"> Link</label>
                        <div class="col-md-4">
                            <input type="text" placeholder="Link" class="form-control input-md" wire:model="link" required>
                        </div>

                    </div>


                    <div class="form-group">
                        <label class="col-md-4 control-label">  Status</label>
                        <div class="col-md-4">
                            <select type="text" class="form-control select-md" wire:model="status" required>
                                <option value="">Selected</option>
                                <option value="1">Yes</option>
                                <option value="0">No</option>
                            </select>
                        </div>

                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label"> Image</label>
                        <div class="col-md-4"> @if($image)
                        <img src="{{$image->temporaryUrl()}}" width="120"/>
                            @endif


                            <input type="file" placeholder="Image" class="input-file" wire:model="image" required>

                        </div>

                    </div>


                    <div class="form-group">
                        <label class="col-md-4 control-label"></label>
                        <div class="col-md-4">
                            <button type="submit"  class="btn btn-primary">Send</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>


    </div>
</div>
</div>
</div>