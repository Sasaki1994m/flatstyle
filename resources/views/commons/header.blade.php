<nav class="navbar navbar-expand-md  navbar-dark bg-primary">
  <a class="navbar-brand" href="/"><img src="/images/flatstyle.title.png" width="125 alt="flatstyle.title.png"></a>
  <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#bs-navi" aria-controls="bs-navi" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
 
  <div class="collapse navbar-collapse justify-content-end" id="bs-navi">
    <ul class="navbar-nav">

      @if (Auth::check())
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            コンテンツ一覧
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">カテゴリー１</a>
            <a class="dropdown-item" href="#">カテゴリー２</a>
            <a class="dropdown-item" href="#">カテゴリー３</a>
            <a class="dropdown-item" href="#">カテゴリー４</a>
          </div>
        </li>
        <li class="nav-item"><a class="nav-link" href="/top/contents/create">コンテンツ登録</a></li>
        <li class="nav-item">{!! link_to_route('logout','ログアウト',[],['class'=>'nav-link']) !!}</li>
        <li class="nav-item"><a class="nav-link" href="/mypage">{{ Auth::user()->name }} 様</a></li>
      @else
        <li class="nav-item">{!! link_to_route('register_elementary', '無料登録', [], ['class' => 'nav-link']) !!}</li>
        <li class="nav-item">{!! link_to_route('login', 'ログイン', [], ['class' => 'nav-link']) !!}</li>
      @endif
    </ul>
  </div>
</nav>