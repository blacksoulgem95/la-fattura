<div class="form-control">
    <label class="label cursor-pointer flex items-center justify-start gap-2">
        <input id="{{$id}}" name="{{$name}}" type="checkbox" {{$attributes->merge(['class' => 'checkbox ']) }} />
        <span class="label-text">{{$label}}</span>
    </label>
</div>
