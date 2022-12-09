<div>
    <div class="form-group">
        <label for="">{{$label}}</label>
        <input type="{{$type}}" name="{{$name}}" id="" class="form-control" placeholder=""
            aria-describedby="helpId">
        <small id="helpId" class="text-muted">
            @error('{{$name}}')
                {{$message}}
                @enderror
        </small>
    </div>
</div>