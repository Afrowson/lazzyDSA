<div class="container">

    @foreach($skills as list($name,$value))
        <div class="skill">
            <p>{{$name}}:{{$value}}</p>


        </div>
    @endforeach
</div>