@extends('app')

@section('title','ユーザー登録');

@section('content')
    <div class="container">
        <div class="row">
            <div class="mx-auto col col-12 col-sm-11 col-md-9 col-lg-7 col-xl-6" >
                <div class="card">
                    <div class="card-body text-center" >
                        <h2 class="h3 card-title text-center mt-2" >ユーザー登録</h2>
                        @include('error_card_list')
                        <div class="card-text" >
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="md-form">
                                    <label for="name">ユーザー名</label>
                                    <input class="form-control" type="text" id="name" name="name" required value="{{ old('name') }}">
                                    <small>英数字2〜15文字<br>(登録後の変更はできません)</small>
                                </div>
                                <div class="md-form">
                                    <label for="email">メールアドレス</label>
                                    <input class="form-control" type="text" id="email" name="email" required value="{{ old('email') }}" >
                                </div>
                                <div class="md-form">
                                    <label for="password">パスワード</label>
                                    <input class="form-control" type="password" id="password" name="password" required>
                                    <small>半角英数字8文字以上16文字以下で、大文字、小文字、数字をそれぞれ1文字以上が必要です。<br>(登録後の変更はできません)</small>
                                </div>
                                <div class="md-form">
                                    <label for="password_confirmation">パスワード(確認)</label>
                                    <input class="form-control" type="password" id="password_confirmation" name="password_confirmation" required>
                                </div>
                                    <button class="btn btn-block mt-2 mb-2" type="submit" style="background-color: #cdf7e8; font-size: 16px;">ユーザー登録</button>
                            </form>
                            <div class="mt-0">
                                <button class="btn btn-block mt-2 mb-2" type="submit" style="background-color: #8df5f9; "> <a href="{{ route('login') }}" class="card-text" style="font-size: 16px">ログインはこちら</a></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


