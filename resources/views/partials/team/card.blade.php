<div class="{{isset($classes) ? $classes : 'col-lg-3 col-sm-12 col-md-6'}} m-{{$m}} shadow" style="background: white;border-radius: 4px;">
    <div class="position-relative doctor-inner-box" style="margin-bottom:0;">
        <div class="doctor-profile">
            <div class="doctor-img">
                <a href="{{route('team', ['slug' => $member->slug])}}">
                    <img class="team-image" src="{{asset($member->picture)}}" alt="{{$member->name}}" class="img-fluid w-100">
                </a>
            </div>
        </div>
        <div class="content mt-3" style="margin-bottom:0;">
            <h4 class="mb-0"><a href="{{route('team', ['slug' => $member->slug])}}">{{$member->name}}</a></h4>
            <p class="team-description-para">
                {{ $member->title }}
            </p>
            @if(isset($member->caption) && strlen($member->caption) > 2)
                <p class="team-description-para">
                    ({{ $member->caption }})
                </p>
            @endif
        </div> 
      </div>
</div>