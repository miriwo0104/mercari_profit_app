<div class="main">
    <div class="title">
        <p>contents index</p>
    </div>
    <div class="link">
        <div class="new">
            <input type="button" onclick="location.href='{{route('contents.new')}}'" value="コンテンツ">
        </div>
    </div>
    <div class="main_contents">
        @foreach ($contents as $content)
            <hr>
            <p>{{$content['title']}}</p>
            <br>
            <p>{{$content['memo']}}</p>
            <div class="detail_button">
                <input type="button" onclick="location.href='{{route('contents.detail', ['contents_id' => $content['id']])}}'" value="詳細">
            </div>
        @endforeach
    </div>
</div>