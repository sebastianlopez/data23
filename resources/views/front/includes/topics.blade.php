<div class="container topics">
    <div class="row">
        <div class="col-12 header-blog text-center myt">
            <h2>{{$site['blog_bottom_title'] ?? ''}}</h2>
        </div>
    </div>
    <div class="space"></div>
    <div class="row mr-5 ml-5">
        @php $slugs = array('','marketing','ventas','servicio-al-cliente') @endphp
        @for($i=1;$i<4;$i++)
        <div class="col-xs-12 col-sm-12 col-md-4 ">
            <div class="card  mb-4" >
                <a href="{{route('blog_category',['slug'=>$slugs[$i]])}}/">
                <img class="card-img-top" src="{{asset('front/images/blog/IMG-'.(6+$i).'.webp')}}" alt="Card image">
                </a>
                <div class="card-body body-topics-marketing text-center">
                  <h4 class="card-title p-3">{{$site['blog_bottom_title'.$i] ?? ''}}</h4>
                  <p class="card-text">{{$site['blog_bottom_desc'.$i] ?? ''}}</p>
                </div>
              </div>
        </div>
        @endfor
    </div>
</div>