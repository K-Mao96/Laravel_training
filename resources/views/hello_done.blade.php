@include('share.header')
    <h2>入力値を受け取りました</h2>

    <!-- 入力内容の反映 -->
    @isset($text2)
    <p>入力値</p>
    {{ $text2 }}

    <p><a href="/hello" class="btn">入力し直す</a></p>
    @endisset
@include('share.footer')
