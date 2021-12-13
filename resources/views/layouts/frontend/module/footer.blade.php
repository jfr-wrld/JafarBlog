  <footer class="site-footer">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md-4">
          <h3>About me</h3>
          <p>{{ $setting->bio }}
            <br><a href="{{ $setting->web_portfolio }}"> Visit my Github</a></p>
        </div>
        <div class="col-md-6 ml-auto">
          <div class="row">
            <div class="col-md-7">
              <h3>Latest Post</h3>
              <div class="post-entry-sidebar">
                <ul>
                  @foreach($newest as $new)
                  <li>
                    <a href="{{ url('/article/' . $new->slug) }}">
                      <img src="{{ asset('storage/' . $new->header_articles) }}" alt="{{ $new->title }}" class="mr-4">
                      <div class="text">
                        <h4>{{$new->title}}</h4>
                        <div class="post-meta">
                          <span class="mr-2">{{$new->created_at}}</span> &bullet;
                          <span class="ml-2"><span class="fa fa-comments"></span> {{$new->comments->count()}}</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  @endforeach
                </ul>
              </div>
            </div>
            <div class="col-md-1"></div>
            
            <div class="col-md-4">

              <div class="mb-5">
                <h3>Quick Links</h3>
                <ul class="list-unstyled">
                  <li><a href="{{ $setting->web_portfolio }}">About Me</a></li>
                  <li><a href="{{route('front.article')}}">Articles</a></li>
                </ul>
              </div>
              
              <div class="mb-5">
                <h3>Social</h3>
                <ul class="list-unstyled footer-social">
                  <li><a href="{{ $setting->fb }}"><span class="fa fa-facebook"></span> Facebook</a></li>
                  <li><a href="{{ $setting->twitter }}"><span class="fa fa-twitter"></span> Twitter</a></li>
                  <li><a href="{{ $setting->instagram }}"><span class="fa fa-instagram"></span> Instagram</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>