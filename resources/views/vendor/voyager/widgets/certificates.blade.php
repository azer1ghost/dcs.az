<style>
    .pulsate {
        -webkit-animation: pulsate 2s ease-out;
        -webkit-animation-iteration-count: infinite;
        opacity: 0.5;
    }
    @-webkit-keyframes pulsate {
        0% {
            opacity: 0.5;
        }
        50% {
            opacity: 1.0;
        }
        100% {
            opacity: 0.5;
        }
    }
</style>

<div class="panel widget center bgimage" style="margin-bottom:0;overflow:hidden;background-image:url('{{ $image }}');">
    <div class="dimmer"></div>
    <div class="panel-content">
        @if (isset($icon))<i class='{{ $icon }}'></i>@endif
        <h4>{!! $title !!}</h4>
        <p>{!! $text !!}</p>
        <a href="{{ $button['link'] }}"  @class(['btn btn-primary', 'pulsate btn-danger' => $alert])>{!! $button['text'] !!}</a>
    </div>
</div>
