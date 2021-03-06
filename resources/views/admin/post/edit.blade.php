@extends('admin.layouts.app')

@section('headSection')
<link rel="stylesheet" type="text/css" href="{{asset('admin/bower_components/select2/dist/css/select2.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('admin/dist/css/AdminLTE.min.css')}}">

@endsection



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


             @include('includes.messages')
          
            <!-- /.box-header -->
            <!-- form start -->

            <form role="form" action="{{route('post.update',$post->id)}}" method="post" enctype="multipart/form-data">
              {{csrf_field()}}
              {{method_field('PUT')}}
              <div class="box-body">


             <div class="col-lg-6">
                
    
                <div class="form-group">
                  <label for="title">Post title</label>
                  <input type="Text" class="form-control" id="title" name="title" placeholder="Enter title" value="{{"$post->title"}}">
                </div>

              

      
                <div class="form-group">
                  <label for="subtitle">Post subtitle</label>
                  <input type="Text" class="form-control" id="subtitle" name="subtitle" placeholder="Enter subtitle" value="{{"$post->subtitle"}}">
                </div>
  

  
                <div class="form-group">
                  <label for="slug">Post slug</label>
                  <input type="Text" class="form-control" id="slug" name="slug" placeholder="Enter slug" value="{{"$post->slug"}}">
                </div>

            </div>

              <div class="col-lg-6">
            <div class="form-group">
              <br>
              <div class="pull-right">
                  <label for="image">File input</label>
                  <input type="file" name="image" id="image">
                </div>
                <div class="pull-left">
                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="status" value="1" @if ($post->status==1)
                      {{'checked'}}
                    @endif> Publish
                  </label>
                </div>

              </div>

                  
                </div>

                <br>

                <div class="form-group" style="margin-top: 18px">
                  <label>Select Tags</label>
                  <select class="form-control select2 select2-hidden-accessible" multiple="" data-placeholder="Select a State" style="width: 100%;" tabindex="-1" aria-hidden="true" name="tags[]">
                    @foreach ($tags as $tag)
                    <option value="{{$tag->id}}"

                      @foreach ($post->tags as $postTag)
                       @if ($postTag->id==$tag->id)
                         selected
                       
                       @endif
                      @endforeach


                      >{{$tag->name}}</option>
                      @endforeach

                    </select>
                  </div>

               <div class="form-group" style="margin-top: 18px">
                <label>Select Caption</label>
                <select class="form-control select2 select2-hidden-accessible" multiple="" data-placeholder="Select a State" style="width: 100%;" tabindex="-1" aria-hidden="true" name="categories[]">
               @foreach ($categories as $category)
                      <option value="{{$category->id}}"


                      @foreach ($post->categories as $postCategories)
                       @if ($postCategories->id==$category->id)
                         selected
                       
                       @endif
                      @endforeach

                        >{{$category->name}}</option>
                  @endforeach
                </select>
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
              
                <textarea name="body" 
                          style="width: 100%; height: 400px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" id="editor1">{{"$post->body"}}</textarea>
            
            </div>
          </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a class="btn btn-warning" href="{{route('post.index')}}">Back</a>
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
  <!-- /.content-wrapper -->
@endsection



@section('footerSection')
<script type="text/javascript" src="{{asset('admin/bower_components/select2/dist/js/select2.full.min.js')}}">
</script>

<script src="{{asset('admin/ckeditor/ckeditor.js')}}"></script>



 
  </script> 

  <script>
    $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()
  
  CKEDITOR.replace('editor1')
    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5()

  });


</script>

@endsection

