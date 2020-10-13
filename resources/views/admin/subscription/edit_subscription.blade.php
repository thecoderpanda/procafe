@extends("admin.adminlayout")

@section("admin_content")


    <div class="container-fluid mt--6">
        <div class="card mb-4">
            <!-- Card header -->
            <div class="card-header">
                <h3 class="mb-20">Edit Subscription</h3>
                @if(session()->has("MSG"))
                    <div class="alert alert-{{session()->get("TYPE")}}">
                        <strong> <a>{{session()->get("MSG")}}</a></strong>
                    </div>
                @endif
                @if($errors->any()) @include('admin.admin_layout.form_error') @endif
            </div>
            <!-- Card body -->
            <div class="card-body">
                <form  method="post" action="{{route('update_subscription',$id->id)}}" enctype="multipart/form-data">
                {{csrf_field()}}
                @method('PATCH')
                <!-- Form groups used in grid -->
                    <div class="row">

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-control-label" for="example3cols2Input">Subscription Name</label>
                                <input type="text" name="name" value="{{$id->name}}" class="form-control" required>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-control-label" for="example3cols2Input">Subscription Price</label>
                                <input type="number" name="price" value="{{$id->price}}" class="form-control" required>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-control-label" for="example3cols2Input">Subscription Days</label>
                                <input type="number" name="days" value="{{$id->days}}" class="form-control" value="30" required>
                            </div>
                        </div>


                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-control-label" for="example3cols2Input">Subscription Description</label>
                                <textarea class="form-control" name="description" class="form-control" required>{{$id->description}}</textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-control-label">is active</label><br>
                                <label class="custom-toggle">
                                    <input type="checkbox" name="is_active" {{$id->is_active? "checked":null}}>
                                    <span class="custom-toggle-slider rounded-circle" data-label-off="No" data-label-on="Yes"></span>
                                </label>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <button class="btn btn-primary" type="submit">Update Subscription</button>
                            </div>
                        </div>

                    </div>

                </form>
            </div>



        </div>

@endsection
