@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection

<script src="{{ asset('/plugins/Chart.js') }}" type="text/javascript"></script>
<script src="{{ asset('/plugins/Chart.min.js') }}" type="text/javascript"></script>
@section('main-content')
	<div class="container-fluid spark-screen">
	
            
		<div class="row">
        <div class="col-md-12">
         
           <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Add your Website or App</h3>
            </div>
            <div class="box-body">
              <div class="input-group">
                <span class="input-group-addon">@</span>
                <input type="text" class="form-control" placeholder="Username">
              </div>
              <br>

             

              <h4>Email For this Website</h4>

              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                <input type="email" class="form-control" placeholder="Email">
              </div>
              <br>

              <div class="input-group">
                <input type="text" class="form-control">
                <span class="input-group-addon"><i class="fa fa-check"></i></span>
              </div>
              <br>

              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                <input type="text" class="form-control">
                <span class="input-group-addon"><i class="fa fa-ambulance"></i></span>
              </div>

            
              <!-- /.row -->

              <h4>Website Url</h4>

            
              <!-- /input-group -->
              <p class="margin">ex.<code>http://demo.com</code></p>

              <div class="input-group input-group-sm">
                <input type="text" class="form-control">
                    <span class="input-group-btn">
                      <button type="button" class="btn btn-info btn-flat">Submit thie website!</button>
                    </span>
              </div>
              <!-- /input-group -->
            </div>
            <!-- /.box-body -->
          </div>

        </div>
        <!-- /.col -->
      </div>
	</div>
	                    


	
@endsection

