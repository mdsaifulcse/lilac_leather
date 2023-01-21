@extends('layouts.vmsapp')

@section('title')
    Sub Menu
@endsection


<!-- begin:: Content Head -->

@section('subheader')
    {{$menu->name}} > Sub Menu
@endsection

@section('subheader-action')
    @can('menu')
        <a href="{{ route('menu.index') }}" class="btn btn-success pull-right">
            Go Menu list
        </a>
    @endcan
@endsection

<!-- end:: Content Head -->

@section('content')

    <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">


        <!-- begin:: Content -->
        <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

            <div class="row justify-content-md-center justify-content-lg-center">
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">

                    <div class="kt-portlet">
                        {!! Form::open(array('route' => 'sub-menu.store','method'=>'POST','class'=>'kt-form kt-form--label-right','files'=>true)) !!}

                        <div class="kt-portlet__head form-header">
                            <div class="kt-portlet__head-label">
                                <h3 class="kt-portlet__head-title">
                                    Create new sub menu under > {{$menu->name}}
                                </h3>
                            </div>
                        </div>

                        <div class="kt-portlet__body">
                            <div class="form-group row   {{ $errors->has('name') ? 'has-error' : '' }}">
                                <div class="col-md-6">
                                    <strong> Sub Menu</strong>
                                    {{Form::text('name','',array('class'=>'form-control','placeholder'=>'Sub Menu Name *','required'))}}
                                    <input type="hidden" name="menu_id" value="{{$menu->id}}">
                                </div>
                                <div class="col-md-6">
                                    <strong> Sub Menu Bangla</strong>
                                    {{Form::text('name_bn','',array('class'=>'form-control','placeholder'=>'Sub Menu Name Bangla*','required'))}}
                                    <input type="hidden" name="menu_id" value="{{$menu->id}}">
                                </div>
                            </div>

                            <div class="form-group row  {{ $errors->has('url') ? 'has-error' : '' }}">
                                <div class="col-md-6">
                                    <strong>URL</strong>
                                    {{Form::text('url','',array('class'=>'form-control','placeholder'=>'URL *','required'=>false))}}
                                    @if ($errors->has('url'))
                                        <span class="help-block"><strong>{{ $errors->first('url') }}</strong></span>
                                    @endif
                                </div>

                                <div class="col-md-4 col-lg-4">
                                           <strong>Icon Class:</strong>
                                        {{Form::text('icon_class','',array('class'=>'form-control','placeholder'=>'Ex: fa fa-folder'))}}
                                        @if ($errors->has('icon_class'))
                                            <span class="help-block"><strong>{{ $errors->first('icon_class') }}</strong> </span>
                                        @endif
                                </div>


                                <div class="form-group ">
                                    <div class="col-md-2">
                                        <label class="slide_upload profile-image" for="file">
                                            <img id="image_load" src="{{asset('images/default/default.png')}}" style="width: 100px;height: auto; cursor:pointer;">
                                        </label>

                                        <input id="file" style="display:none" name="icon" type="file" onchange="photoLoad(this,this.id)" accept="image/*">
                                        @if ($errors->has('icon'))
                                            <span class="help-block text-danger">
                                                    <strong>The icon image dimensions(Y, X) should not be less then 120 and grater then 240</strong>
                                                </span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-3">
                                    <strong> Menu As </strong>
                                    {{Form::select('menu_as', ['Category'=>'Category','Author'=>'Author'],'', ['id'=>'menuAs','placeholder'=>'--Select One--','class' => ' form-control'])}}
                                </div>

                                <div class="col-md-5" style="display:none">
                                    <strong> Menu As Category</strong>
                                    {{Form::select('category_id', $categories,'', ['id'=>'Category','placeholder'=>'--Select Category--','class' => ' form-control'])}}
                                </div>
                                <div class="col-md-5" style="display:none">
                                    <strong>Menu As Author</strong>
                                    {{Form::select('author_id', $authors,'', ['id'=>'Author','placeholder'=>'--Select Author--','class' => ' form-control'])}}
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-2">
                                    <?php $max=$max_serial+1; ?>
                                    {{Form::number('serial_num',"$max",['class'=>'form-control','placeholder'=>'Serial Number','max'=>"$max",'min'=>'0','required'=>true])}}
                                    <small> Serial </small>
                                </div>

                                <div class="col-md-3">
                                    {{Form::select('menu_for', $menuFor,'', ['class' => 'form-control'])}}
                                    <small> Menu For </small>
                                </div>

                                <div class="col-md-2">
                                    {{Form::select('status', [\App\Models\SubMenu::ACTIVE  => \App\Models\SubMenu::ACTIVE , \App\Models\SubMenu::INACTIVE  => \App\Models\SubMenu::INACTIVE],'', ['class' => 'form-control'])}}
                                    <small> Status </small>
                                </div>

                                <div class="col-md-3">
                                    {{Form::select('open_new_tab', [\App\Models\SubMenu::NO_OPEN_NEW_TAB  => \App\Models\SubMenu::NO_OPEN_NEW_TAB , \App\Models\SubMenu::OPEN_NEW_TAB  => \App\Models\SubMenu::OPEN_NEW_TAB],'', ['class' => 'form-control'])}}
                                    <small> Open New Tab? </small>
                                </div>

                            </div><!-- end row -->

                            <div class="form-group row">
                                <label for="example-text-input" class="col-3 col-form-label">Permission</label>
                                <div class="col-9">
                                    {!! Form::select('slug[]', $permissions,[], array('id'=>'kt_select2_2','class' => 'form-control kt-select2','multiple'=>true,'required'=>true)) !!}

                                    @if ($errors->has('slug'))
                                        <span class="help-block">
                                            <strong class="text-danger">{{ $errors->first('slug') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                        </div> <!-- end kt-portlet__body -->


                        <div class="kt-portlet__foot form-footer">
                            <div class="kt-form__actions">
                                <div class="row">
                                    <div class="col-2">
                                    </div>
                                    <div class="col-10">
                                        <button type="submit" class="btn btn-success">Submit</button>
                                        @can('menu')
                                            <a href="{{route('menu.index')}}" class="btn btn-secondary pull-right "> Cancel </a>
                                        @endcan
                                    </div>
                                </div>
                            </div>
                        </div>

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>


            <!-- Table view -->
            <div class="row justify-content-md-center justify-content-lg-center">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                    <table class="table table-striped table-hover table-bordered center_table" id="my_table">
                        <thead>
                        <tr class="bg-dark text-white">
                            <th>SL</th>
                            <th>Menu</th>
                            <th>Sub Menu</th>
                            <th>URL</th>
                            <th>Sub Menu For</th>
                            <th>Sub Sub Menu</th>
                            <th>Status</th>
                            <th>Created At</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $i=1; ?>
                        @forelse($allData as $data)
                            <tr>
                                <td>{{$data->serial_num}}</td>
                                <td>{{$menu->name}}</td>
                                <td><a href="#" data-toggle="modal" data-target="#subMenuModal{{$data->id}}"><i class="{{$data->icon_class}}"></i> {{$data->name}}</a></td>
                                <td><a href="{{URL::to($data->url)}}" target="_blank">{{URL::to($data->url)}}</a></td>

                                <td>
                                    @if($data->menu_for==\App\Models\SubMenu::ADMIN_MENU)
                                        <span class="btn btn-sm btn-warning">{{$data->menu_for}}</span>
                                    @else
                                        <span class="btn btn-sm btn-default">{{$data->menu_for}}</span>
                                    @endif
                                </td>

                                <td><a href="{{URL::to('admin/sub-sub-menu',$data->id)}}" class="btn btn-primary btn-sm" style="color: #fff;">Sub Sub Menu ( {{$data->subSubMenu->count('id')}})</a></td>

                                <td><i class="{{($data->status==\App\Models\SubMenu::ACTIVE)? 'fa fa-check-circle text-success' : 'fa fa-times-circle'}}"></i></td>

                                <td>{{$data->created_at}}</td>
                                <td>
                                    {!! Form::open(array('route' => ['sub-menu.destroy',$data->id],'method'=>'DELETE','id'=>"deleteForm$data->id")) !!}
                                    <a href="{{route('sub-menu.edit',$data->id)}}" class="btn btn-success btn-sm"><i class="la la-pencil-square"></i> </a>
                                    <button type="button" class="btn btn-danger btn-sm" onclick='return deleteConfirm("deleteForm{{$data->id}}")'><i class="la la-trash"></i></button>
                                    {!! Form::close() !!}
                                </td>

                            </tr>
                        @empty

                            <tr>
                                <td colspan="8" class="text-center"> No Menu Data ! </td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div> <!-- end kt-container -->

        <!--End::Row-->

        <!--End::Dashboard 1-->
    </div>
    <!-- end:: Content -->
@endsection

@section('script')
    <script type="text/javascript">

        $('#menuAs').on('click',function () {
            let menuAs=$(this).val()

            if(menuAs=='Category'){
                $('#Category').attr('required',true)
                $('#Category').parent().css('display','block')

                $('#Author').attr('required',false)
                $('#Author').parent().css('display','none')

            }else if(menuAs=='Author') {
                $('#Category').attr('required',false)
                $('#Category').parent().css('display','none')

                $('#Author').attr('required',true)
                $('#Author').parent().css('display','block')
            }else{
                $('#Category').attr('required',false)
                $('#Author').attr('required',false)
            }
        })

        function photoLoad(input,image_load) {
            var target_image='#'+$('#'+image_load).prev().children().attr('id');

            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $(target_image).attr('src', e.target.result);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }

    </script>

@endsection
