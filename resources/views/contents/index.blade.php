<div class="main">
    <div class="title">
        <p>contents index</p>
    </div>
    <div class="link">
        <div class="new">

        </div>
    </div>
    <div class="main_contents">
        @foreach ($contents as $content)
            <hr>
            <p>{{$content['title']}}</p>
            <br>
            <p>{{$content['memo']}}</p>
        @endforeach
    </div>
</div>