@extends('app')
@section('title','ログインページ')
@section('content')
<div class="container">
    <div class="row">
        <div class="mx-auto col col-12 col-sm-11 col-md-9 col-lg-7 col-xl-6">
            <div class="card mt-3">
                <div class="card-body text-center">
                    <h2 class="h3 card-title text-center mt-2">ログイン</h2>
                    @include('error_card_list')
                    <div class="card-text">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="md-form">
                                <label for="email">メールアドレス</label>
                                <input class="form-control" type="text" id="email" name="email" required value="{{ old('email') }}">
                            </div>
                            <div class="md-form">
                                <label for="password">パスワード</label>
                                <input class="form-control" type="password" id="password" name="password" required>
                            </div>
                            <input type="hidden" name="remember" id="remember" value="on">
                            <button class="btn btn-block mt-2 mb-2 btn_login" type="submit">ログイン</button>
                        </form>
                        <div class="mt-0">
                            <button class="btn btn-block mt-3 mb-2 btn_register" type="submit"><a href="{{ route('register') }}" class="card-text" >ユーザー登録はこちら</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
