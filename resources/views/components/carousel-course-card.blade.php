<div class="single-popular-carusel">
    <div class="thumb-wrap relative">
        <div class="thumb relative">
            <div class="overlay overlay-bg"></div>
            <img class="img-fluid" src="/{{$icon}}" alt="">
        </div>
        <div class="meta d-flex justify-content-between">
            <p><span class="lnr lnr-users"></span> {{$adherents}} <span class="lnr lnr-bubble"></span>{{$comments}}</p>
            <h4>{{$price}} DA</h4>
        </div>
    </div>
    <div class="details">
        <a href="{{asset('course-details')}}/{{$id}}">
            <h4>
                {{$title}}
            </h4>
        </a>
        <p>
            {{$description}}
        </p>
    </div>
</div>