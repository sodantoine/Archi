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
                            <a href="{{route('admin.addproduct')}}" class="btn btn-success pull-right">Add New</a>
                        </div>
                    </div>

                </div>
                <div class="panel-body">
                    <table class="table table-striped table-bordered">
                        <thead>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Slug</th>
                        <th>Regular Price</th>
                        <th>Qty</th>
                        <th>Categoriy</th>
                         <th>Date</th>
                        <th>Action</th>
                        </thead>

                        <tbody>
                        @foreach($products as $product)
                            <tr>
                                <td><img style="height: 50px" src="{{asset('assets/images/products')}}/{{$product->image}}"></td>
                                <td>{{$product->name}}</td>
                                <td>{{$product->slug}}</td>
                                <td>${{$product->regular_price}}</td>
                                <td>{{$product->quantity}}</td>
                                <td>{{$product->category->name}}</td>
                                <td>{{$product->created_at}}</td>

                                <td><a href="{{route('admin.editcategory',['category_slug'=>$product->slug])}}"><span><i class="fa fa-edit fa-2px"></i> </span></a>
                                    <a href="#" wire:click.prevent="deleteCategory({{$product->id}})" style="margin-left: 10px"><span><i class="fa fa-times fa-2px"></i> </span></a></td>
                            </tr>

                        @endforeach
                        </tbody>
                    </table>
                </div>

                {{$products->links()}}
            </div>
        </div>
    </div>
</div>