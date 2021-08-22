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

                            Add Products
                        </div>
                        <div class="col-md-6">

                            <a href="{{route('admin.product')}}" class="btn btn-success">All Products</a>
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
                <form class="form-horizontal" enctype="multipart/form-data" wire:submit.prevent="addProduct()">
                    <div class="form-group">
                        <label class="col-md-4 control-label"> Name</label>
                        <div class="col-md-4">
                            <input type="text" placeholder="Name" class="form-control input-md" wire:model="name" wire:keyup="generateslug()" required>
                        </div>

                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label"> Slug</label>
                        <div class="col-md-4">
                            <input type="text" placeholder="Slug" class="form-control input-md" wire:model="slug" required>
                        </div>

                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label"> Short description</label>
                        <div class="col-md-4">
                            <textarea type="text" placeholder="Short description" class="form-control input-md" wire:model="short_description" required></textarea>
                        </div>

                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label"> Description</label>
                        <div class="col-md-4">
                            <textarea type="text" placeholder="Description" class="form-control input-md" wire:model="description" required></textarea>
                        </div>

                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Regular Price</label>
                        <div class="col-md-4">
                            <input type="number" placeholder="Regular Price" class="form-control input-md" wire:model="regular_price" required>
                        </div>

                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Sale Price</label>
                        <div class="col-md-4">
                            <input type="number" placeholder="Sale Price" class="form-control input-md" wire:model="sale_price" required>
                        </div>

                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label"> Stock Status</label>
                        <div class="col-md-4">
                            <select type="text" class="form-control select-md" wire:model="stock_status" required>
                                <option value="">Selected</option>
                                <option value="Instock">Instock</option>
                                <option value="Outstock">Outstock</option>
                            </select>
                        </div>

                    </div>
                    <div class="form-group">
                <label class="col-md-4 control-label"> Featured</label>
                <div class="col-md-4">
                    <select type="text" class="form-control select-md" wire:model="featured" required>
                        <option value="">Selected</option>
                        <option value="1">Yes</option>
                        <option value="0">No</option>
                    </select>  </div>

            </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label"> SKU</label>
                        <div class="col-md-4">
                            <input type="text" placeholder="SKU" class="form-control input-md" wire:model="SKU" required>
                        </div>

                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label"> Quantity</label>
                        <div class="col-md-4">
                            <input type="text" placeholder="Quantity" class="form-control input-md" wire:model="quantity" required>
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
                        <label class="col-md-4 control-label"> Category</label>
                    <div class="col-md-4">{{$category_id}}
                        <select type="text" class="form-control select-md" wire:model="category_id" required>
                            <option value="">Category</option>
                            @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach

                        </select>
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