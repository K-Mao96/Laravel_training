@include('share.header')
    <h2>Hello world!</h2>

    <form action="hello" method="POST">
        @csrf
        <input type="text" value= "{{isset($text) ? $text : ''}}" name="text">
        <button type="submit">送信</button>
    </form>

    <p>別ページに表示</p>

    <form action="hello_done" method="POST">
        @csrf
        <input type="text" value="" name="text2">
        <button type="submit">送信</button>
    </form>

    <!-- 入力内容の反映 -->
    @isset($text)
    <p>入力値</p>
    {{ $text }}

    <p><a href="/hello" class="btn">入力し直す</a></p>
    @endisset
@include('share.footer')
