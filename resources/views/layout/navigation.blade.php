<style>
   #saya{
     color:blue;
   }

</style>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Laravel 7</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item {{request()->is('/')?'active':''}}">
                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item {{request()->is('about')?'active':''}}">
                <a class="nav-link about" href="{{url('about')}}">about</a>
            </li>
            <li class="nav-item {{request()->is('contact')?'active':''}}">
                <a class="nav-link" href="/contact" id="{{request()->is('contact')?'saya':""}}"">contact</a>
            </li>
            <li class="nav-item {{request()->is('login')?'active':''}}">
                <a class="nav-link" href="user">login</a>
            </li>
            <li class="nav-item {{request()->is('posts')?'active':''}}">
                <a class="nav-link" href="{{$navi ?? "posts"}}">show</a>
            </li>
  
            <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
        </ul>
    </div>
</nav>
