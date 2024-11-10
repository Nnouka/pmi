<div class="mx-auto my-4 text-justify">
    <h2 class="text-center">{{$title}}</h2>
    <div class="divider my-4 mx-auto"></div>
    @if (is_array($content))
        @foreach ($content as $p )
            <p>
                {{ $p }}
            </p>
        @endforeach
    @else
        <p>
            {{ $content }}
        </p>
    @endif
    @if (isset($pictures) && is_array($pictures))
        @foreach ($pictures as $p )
            <div class="about-img">
                <img class="about-image" src="{{asset($p['src'])}}" alt="" class="img-fluid w-100">
                <p>
                    {{ $p['caption'] }}
                </p>
            </div>
        @endforeach
    @endif
    @if (isset($closing))
        <p>
            {{ $closing }}
        </p>
    @endif
    
    @if (isset($cta))
        <button class="btn btn-primary" onclick="{{$cta['onclick']}}">
            {{ $cta['text']}}
        </button>
    @endif
</div>
