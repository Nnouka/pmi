<!-- portfolio -->
<section class="section doctors">
    <div class="container">
          <div class="row justify-content-center">
              <div class="col-lg-6 text-center">
                 <div class="section-title">
                     <h2>Team</h2>
                     <div class="divider mx-auto my-4"></div>
                 </div>
             </div>
          </div>
  
      <div class="row portfolio-gallery justify-content-center">
            @foreach($members as $member)
              @include('partials.team.card', ['member' => $member, 'm' => 2])
          @endforeach
      </div>
    </div>
</section>