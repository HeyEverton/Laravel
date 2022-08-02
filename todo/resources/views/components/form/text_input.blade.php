<div class="inputArea">
    <label for="{{$name}}">
        {{$label ?? ''}}
    </label>
    <input 
    type="{{empty($type) ? 'text' : $type }}" name="{{$name}}" 
    id="title" placeholder="{{$placeholder ?? ''}}" 
    {{empty($required) ? '' : 'required'}}
    value="{{$value ?? ''}}"
    >
</div>
