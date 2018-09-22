@extends('user/app')



@section('bg-img',Storage::disk('local')->url($post->image))

@section('head')

<link rel="stylesheet" type="text/css" href="{{asset('user/css/prism.css')}}">

@endsection
@section('title',$post->title)
@section('sub-heading',$post->subtitle)

@section('main-content')

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

    <!-- Post Content -->
    <article>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <small>Created at : {{$post->created_at->diffforHumans()}}</small>

                  
                    @foreach ($post->categories as $category)
                   <a href="{{ route('category', $category->slug) }}"> <small  class="pull-right" style="margin-right:20px;" > 
                       {{$category->name}}

                   </small></a>
                   @endforeach

                   {!!htmlspecialchars_decode($post->body)!!}
                   {{--tag clouds--}}
                  
                   <h3>Tag clouds</h3>

                   @foreach ($post->tags as $tag)
                  <a href="{{route('tag',$tag->slug)}}"> <small  style=" margin-right:20px; border-radius:5px;  border:1px solid brown; padding: 10px;" > 
                     {{$tag->name}}

                 </small></a>
                   @endforeach

                </div>
                <div class="fb-comments" data-href="{{Request::url()}}" data-numposts="10"></div>
            </div>
        </div>
    </article>

    <hr>


@endsection

@section('footer')

<script type="text/javascript" src="{{asset('js/prism.js')}}"></script>
@endsection