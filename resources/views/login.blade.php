@include('share.header')
    <h2>ログイン</h2>

    <form action="login" method="POST">
        @csrf
        <p>メールアドレス</p>
        <input type="text" value= "{{isset($email) ? $email : ''}}" name="email">
        <p>パスワード</p>
        <input type="text" value= "{{isset($password) ? $password : ''}}" name="password">
        <button type="submit">送信</button>
    </form>

    @isset($message)
        <p>{{ $message }}</p>
        <p><a href="/login" class="btn">入力し直す</a></p>
    @endisset
@include('share.footer')
