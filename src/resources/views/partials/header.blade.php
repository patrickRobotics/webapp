<nav class="navbar navbar-expand-lg">
  <a class="navbar-brand" href="{{ route('blog.index') }}">Laravel</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('blog.index') }}">Blog</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('other.about') }}">About</a>
      </li>
    </ul>
  </div>
</nav>
<!-- <nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="{{ route('blog.index') }}" class="navbar-brand">Laravel Guide</a>
            <ul class="nav navbar-nav">
                <li><a href="{{ route('blog.index') }}">Blog</a></li>
                <li><a href="{{ route('other.about') }}">About</a></li>
            </ul>
        </div>
    </div>
</nav> -->