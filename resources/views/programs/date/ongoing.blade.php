<div class="text-center wow fadeInUp mt-2">
    <a data-bs-toggle="collapse" data-bs-target="#ongoing" role="button" aria-expanded="false" aria-controls="ongoing">
        <h5 class="section-title bg-white text-primary px-5 mb-3">Upcoming</h5>
    </a>
</div>

<div class="collapse" id="ongoing">
    <div class="row g-3 justify-content mb-3">
        @include('events.lks.ds')
        @include('events.lks.meta') 
    </div>
</div>