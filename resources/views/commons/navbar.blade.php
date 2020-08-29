<header class="mb-4">
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        {{-- トップページへのリンク --}}
        <a class="navbar-brand" href="/">TaskList</a>

        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav-bar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="nav-bar">
            <ul class="navbar-nav mr-auto"></ul>
            <ul class="navbar-nav">
                {{-- タスク作成ページへのリンク --}}
                <li class="nav-item">{!! link_to_route('tasks.create', '新規タスク作成', [], ['class' => 'nav-link']) !!}</li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                    {{-- ユーザ登録ページへのリンク --}}
                    <li>{!! link_to_route('signup.get', 'Signup', [], ['class' => 'nav-link']) !!}</li>
                    {{-- ログインページへのリンク --}}
                    <li><a href="#">Login</a></li>
            </ul>            
        </div>
    </nav>
</header>