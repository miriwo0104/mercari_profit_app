<div class="main">
    <div class="title">
        <p>contents detail</p>
    </div>
    <div class="content">
        <p>{{$content['title']}}</p>
        <p>{{$content['memo']}}</p>
    </div>
    <div class="link_index">
        <input type="button" onclick="location.href='{{route('contents.index', ['contents_id' => $content['id']])}}'" value="一覧に戻る">
    </div>
</div>