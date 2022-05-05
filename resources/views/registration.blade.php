@include('share.header')
    <h2>会員登録</h2>

    <form action="registration" method="POST">
        @csrf
        <p>名前</p>
        <input type="text" value= "{{isset($name) ? $name : ''}}" name="name">
        <p>メールアドレス</p>
        <input type="text" value= "{{isset($email) ? $email : ''}}" name="email">
        <p>パスワード</p>
        <input type="text" value= "{{isset($password) ? $password : ''}}" name="password">
        <button type="submit">登録</button>
    </form>

    @isset($message)
        <p>{{ $message }}</p>
        <p><a href="/login" class="btn">ログインページへ</a></p>
    @endisset
@include('share.footer')
