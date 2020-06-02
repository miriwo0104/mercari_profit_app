<div class="main">
    <div class="title">
        <p>contents edit</p>
    </div>
    <div class="content">
        <form action="{{route('contents.save')}}" method="post">
            @csrf
            <div class="content_title">
                <input type="text" name="title" value="{{$content['title']}}">
            </div>
            <div class="content_memo">
                <textarea name="memo" cols="30" rows="10">{{$content['memo']}}</textarea>
            </div>
            <div class="button">
                <input type="hidden" name="id" value="{{$content['id']}}">
                <input type="submit" value="保存">
            </div>
        </form>
    </div>
    <div class="link_index">
        <input type="button" onclick="location.href='{{route('contents.index', ['contents_id' => $content['id']])}}'" value="一覧に戻る">
    </div>
</div>