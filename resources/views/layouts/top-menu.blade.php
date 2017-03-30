      <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills pull-right">
          @if(Sentinel::check())
            <li role="presentation">
              <form action="/logout" method="POST" id="logout-form">
                {{ csrf_field() }}

                <a href="#" onclick="document.getElementById('logout-form').submit()">Logout</a>
              </form>
            </li>
           
            
            @endif
          </ul>
        </nav>
        <h3 class="text-muted">
        
        </h3>
      </div>