<div class="inputArea">
    <label for="{{$name}}">
        {{$label ?? ''}}
    </label>
    <input 
    type="checkbox" 
    id="title"  name="{{$name}}"
    {{empty($required) ? '' : 'required'}}
    value="1"
    {{$checked ? 'checked' : ''}}
    >
</div>
