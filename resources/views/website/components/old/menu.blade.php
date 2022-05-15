<ul class="{{ $is_Child ?? '' }}">

    @php
        $items ?? null;
        if (Voyager::translatable($items)) {
            $items = $items->load('translations');
        }
    @endphp

    @foreach ($items as $item)

        @php
            $options ?? null;
            $item ??  null;

              $originalItem = $item;
              if (Voyager::translatable($item)) {
                  $item = $item->translate($options->locale);
              }

              $isActive = null;
              $styles = null;
              $icon = null;
              $isParent = null;
              $is_Child = "dropdown";

              // Background Color or Color
              if (isset($options->color) && $options->color == true) {
                  $styles = 'color:'.$item->color;
              }
              if (isset($options->background) && $options->background == true) {
                  $styles = 'background-color:'.$item->color;
              }

               if(!$originalItem->children->isEmpty()){
                  $isParent = '';
               }

              // Check if link is current
              if(url($item->link()) == url()->current()){
                  $isActive = 'active';
              }

              // Set Icon
              if($item->icon_class){
                  $icon = '<i class="' . $item->icon_class . '"></i>';
              }
        @endphp

        @if($item->status)
        <li class="{{ $isActive.$isParent }}">
            <a href="{{ url($item->link()) }}" target="{{ $item->target }}" style="{{ $styles }}">
                {!! $icon !!}
                <span>{{ $item->title }}</span>
            </a>
            @if(!$originalItem->children->isEmpty())
                @include('website.components.menu', ['items' => $originalItem->children, 'is_Child' => $is_Child ,'options' => $options])
            @endif
        </li>
        @endif
    @endforeach
</ul>

