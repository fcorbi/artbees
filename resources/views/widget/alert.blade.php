<!-- ALERT -->
@if(isset($level) && isset($title) && isset($message))
    <div class="alert alert-{{$level}}" role="alert">
        <strong>{{$title}}</strong> {{$message}}
    </div>
@endif