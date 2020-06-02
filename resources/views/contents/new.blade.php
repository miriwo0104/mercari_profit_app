<div class="main">
    <div class="title">
        <p>contents new</p>
    </div>
    <div class="input_content">
        <form action="{{route('contents.create')}}" method="post">
            @csrf
            <div class="content_title">
                <input type="text" name="title">
            </div>
            <div class="content_memo">
                <textarea name="memo" cols="30" rows="10"></textarea>
            </div>
            <div class="button">
                <input type="submit" value="登録">
            </div>
        </form>
    </div>
</div>