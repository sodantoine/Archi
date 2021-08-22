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

                    Add Categories
                </div>
                        <div class="col-md-6">

                            <a href="{{route('admin.categories')}}" class="btn btn-success">All categories</a>
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
    <form class="form-horizontal" wire:submit.prevent="sorecategory">
        <div class="form-group">
            <label class="col-md-4 control-label">Category Name</label>
            <div class="col-md-4">
                <input type="text" placeholder="Category Name" class="form-control input-md" wire:model="name" wire:keyup="generateslug()" required>
            </div>

        </div>
        <div class="form-group">
            <label class="col-md-4 control-label">Category Slug</label>
            <div class="col-md-4">
                <input type="text" placeholder="Category Slug" class="form-control input-md" wire:model="slug" required>
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