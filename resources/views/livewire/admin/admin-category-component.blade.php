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
                        All Categories
                    </div>
                    <div class="col-md-6">
         <a href="{{route('admin.addcategory')}}" class="btn btn-success pull-right">Add New</a>
                    </div>
                </div>

            </div>
            <div class="panel-body">
                <table class="table table-striped table-bordered">
                    <thead>

                    <th>Name</th>
                    <th>Slug</th>
                    <th>Action</th>
                    </thead>

                    <tbody>
                @foreach($categories as $category)
<tr>

    <td>{{$category->name}}</td>
    <td>{{$category->slug}}</td>
    <td><a href="{{route('admin.editcategory',['category_slug'=>$category->slug])}}"><span><i class="fa fa-edit fa-2px"></i> </span></a>
        <a href="#" wire:click.prevent="deleteCategory({{$category->id}})" style="margin-left: 10px"><span><i class="fa fa-times fa-2px"></i> </span></a></td>
</tr>

                    @endforeach
                    </tbody>
                </table>
            </div>
            
            {{$categories->links()}}
        </div>
    </div>
</div>
</div>