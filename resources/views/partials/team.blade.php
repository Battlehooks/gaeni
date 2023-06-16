<div class="container-xxl py-5">
  <div class="container">
    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
      <h6 class="section-title bg-white text-center text-primary px-3">
        Teams
      </h6>
      <h1 class="mb-5">Meet Our Teams</h1>
    </div>
    <div class="row g-4 justify-content-center mb-3">
      {{-- GHP --}}
      @include('members.gatot')
      {{-- Enni --}}
      @include('members.enni')
      {{-- Siswoyo --}}
      @include('members.siswoyo')
    </div>
    <div class="row g-4 justify-content-center mb-3">
      {{-- Raka --}}
      @include('members.raka')
      {{-- Sena --}}
      @include('members.sena')
      {{-- Arin --}}
      @include('members.arin')
      {{-- Bintang --}}
      @include('members.bintang')
    </div>
    <div class="row g-4 justify-content-center mb-3">
      {{-- Rizky --}}
      @include('members.rizky')
      {{-- Lutvi --}}
      @include('members.lutvi')
      {{-- Vicky --}}
      @include('members.vicky')
      {{-- Anifa --}}
      @include('members.anifa')
    </div>
  </div>
</div>