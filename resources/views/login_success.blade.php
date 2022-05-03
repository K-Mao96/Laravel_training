@include('share.header')
    <h2>ログイン結果画面</h2>
    @isset($message)
        <p>{{ $message }}</p>
    @endif

    <p><a href="/login" class="btn">入力し直す</a></p>

@include('share.footer')
