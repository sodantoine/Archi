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

                            Add Coupons
                        </div>
                        <div class="col-md-6">

                            <a href="{{route('admin.coupons')}}" class="btn btn-success">All Coupons</a>
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
                <form class="form-horizontal" wire:submit.prevent="storeCoupon">
                    <div class="form-group">
                        <label class="col-md-4 control-label">Coupon Code</label>
                        <div class="col-md-4">
                            <input type="text" placeholder="Coupon Code" class="form-control input-md" wire:model="code"  required>
                            @error('code') <p class="text-danger">{{$message}}</p> @enderror
                        </div>

                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Coupon Type</label>
                        <div class="col-md-4">
                            <select type="text"  class="form-control input-md" wire:model="type" required>
                                <option value="">Select</option>
                                <option value="fixed">fixed</option>
                                <option value="percent">percent</option>
                            </select>  @error('type') <p class="text-danger">{{$message}}</p> @enderror

                        </div>

                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Coupon Value</label>
                        <div class="col-md-4">
                            <input type="text" placeholder="Coupon Value"  class="form-control input-md" wire:model="value" required>
                            @error('value') <p class="text-danger">{{$message}}</p> @enderror
                        </div>

                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Cart Value</label>
                        <div class="col-md-4">
                            <input type="text" placeholder="Coupon Value"  class="form-control input-md" wire:model="cart_value" required>
                            @error('cart_value') <p class="text-danger">{{$message}}</p> @enderror
                        </div>

                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Expiry Date</label>
                        <div class="col-md-4" wire:ignore>
                            <input type="date" id="expiry-date" placeholder="Expiry Date"  class="form-control input-md" wire:model="expiry_date" required>
                            @error('expiry_date') <p class="text-danger">{{$message}}</p> @enderror
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

@push('scripts')
    <script>
        $(function () {
          $('#expiry_date').datepicker({
              format:'Y-MM-DD'
          })
              .on('dp.change',function (ev) {
              var data= $('#expiry-date').val();
              @this.set('expiry_date',data);
          });
        });
    </script>
    @endpush