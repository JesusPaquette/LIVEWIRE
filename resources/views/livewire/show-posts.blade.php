<div>
    @foreach ($posts as $post)
       <table class="table table-borded table-hover table-stripped">
            <tr>
                <td>{{$post->id}}</td>
                <td>{{$post->title}}</td>
                <td>{{$post->content}}</td>
            </tr>
        </table>
    @endforeach
</div>
