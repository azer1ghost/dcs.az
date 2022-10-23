@if ($isCurrent)
    <li class="breadcrumb-item active" style="color: aqua !important;" aria-current="page">{{$slot}}</li>
@else
    <li class="breadcrumb-item"><a href="{{$link}}">{{$slot}}</a></li>
@endif
