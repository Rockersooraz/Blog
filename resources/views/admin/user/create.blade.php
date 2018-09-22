@extends('admin.layouts.app')


@section('main-content')
   


         
      




    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Text Editors
        <small>Advanced form element</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">Editors</li>
      </ol>
    </section>


<!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">

         
            <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Titles</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->

            <form role="form">
              <div class="box-body">


             <div class="col-lg-6">
                
    
                <div class="form-group">
                  <label for="Title">Post Title</label>
                  <input type="Text" class="form-control" id="Title" name="Title" placeholder="Enter Title">
                </div>

              

      
                <div class="form-group">
                  <label for="Sub-Title">Post Sub-Title</label>
                  <input type="Text" class="form-control" id="Sub-Title" name="Sub-Title" placeholder="Enter sub-Title">
                </div>
  

  
                <div class="form-group">
                  <label for="Slug">Post Slug</label>
                  <input type="Text" class="form-control" id="Slug" name="slug" placeholder="Enter slug">
                </div>

            </div>

              <div class="col-lg-6">
                <br>
            <div class="form-group">
                  <label for="image">File input</label>
                  <input type="file" name="image" id="image">

                  
                </div>
            

<br>

                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="status"> Publish
                  </label>
                </div>
              </div>
            </div>



   <div class="box">
            <div class="box-header">
              <h3 class="box-title">Write post body
                <small>Simple and fast</small>
              </h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                  <i class="fa fa-minus"></i></button>
               
              </div>
              <!-- /. tools --> 
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
              <form>
                <textarea class="textarea" placeholder="Place some text here"
                          style="width: 100%; height: 400px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
              </form>
            </div>
          </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.box -->

              
         

               
    

        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->s
@endsection
