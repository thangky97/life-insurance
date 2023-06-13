<section class="full-screen p-0">
    <div class="slider-fade owl-carousel w-100 min-vh-100">
        @foreach ($banner as $slider)
            <div class="item" data-background="{{ asset($slider->image) ? '' . Storage::url($slider->image) : '' }}">
                <div class="">
                    <img src="{{ asset($slider->image) ? '' . Storage::url($slider->image) : '' }}" alt="" style="width: 100%">
                </div>
            </div>
        @endforeach
    </div>
    {{-- <span class="shape1"></span> --}}
    <div class="d-inline-block p-3 border border-width-2 border-primary-color top-20 left-10 ani-move position-absolute rounded-circle z-index-1"></div>
        {{-- <img src="{{ asset('client/img/content/shape9.png') }}" class="position-absolute bottom-5 left-45 ani-move z-index-1 d-none d-sm-block" alt="...">
        <img src="{{ asset('client/img/content/shape5.png') }}" class="position-absolute top-30 right-15 ani-left-right z-index-1" alt="...">
        <img src="{{ asset('client/img/content/shape1.png') }}" class="position-absolute bottom-0 start-0 ani-top-bottom opacity1 z-index-1 d-none d-lg-block" alt="..."> --}}
</section>
