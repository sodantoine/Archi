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
                            <a href="{{route('admin.addcoupons')}}" class="btn btn-success pull-right">Add New</a>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <table class="table table-striped table-bordered">
                        <thead>
                        <th>Code</th>
                        <th>Type</th>
                        <th>Value</th>
                        <th>Cart Value</th>
                        <th>Expire Date</th>
                        <th>Action</th>
                        </thead>

                        <tbody>
                        @foreach($coupons as $coupon)
                            <tr>
                                  <td>{{$coupon->code }}</td>
                                <td>{{$coupon->type}}</td>

                                <td>@if($coupon->type=='percent') {{$coupon->value}}% @else ${{$coupon->value}} @endif </td>
                                <td>{{$coupon->cart_value}}</td>
                                <td>{{$coupon->expiry_date}}</td>
                                <td><a href="{{route('admin.editcoupons',['coupon_id'=>$coupon->id])}}"><span><i class="fa fa-edit fa-2px"></i> </span></a>
                                    <a href="#" wire:click.prevent="deleteCategory({{$coupon->id}})" style="margin-left: 10px"><span><i class="fa fa-times fa-2px"></i> </span></a></td>
                            </tr>

                        @endforeach
                        </tbody>
                    </table>
                </div>

                {{$coupons->links()}}
            </div>
        </div>
    </div>
</div>