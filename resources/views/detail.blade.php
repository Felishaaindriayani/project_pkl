@extends('layouts.front')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <!-- Trending Tittle -->
                <div class="about-right mb-90">
                    <div class="trend-top-img mt-5">
                        <img src="{{ asset('/images/artikel/' . $artikel->cover) }}" width="500" alt="">
                        <div class="trend-top-cap">
                            <span>{{ $artikel->kategori->nama_kategori }}</span>
                            <h2>{{ $artikel->judul }}</h2>
                        </div>
                    </div>
                    <div class="about-img">
                        <img src="assets/img/trending/trending_top.jpg" alt="">
                    </div>
                    {{-- <div class="section-tittle mb-30 pt-30">
                        <h3>Here come the moms in space</h3>
                    </div> --}}
                    <div class="about-prea">
                        <p class="about-pera1 mb-25" style="text-align: justify">{{ $artikel->isi }}</p>
                    </div>

                </div>
                <!-- From -->
                <div class="row">
                    <div class="col-lg-12">
                        <form class="form-contact contact_form mb-80" action="{{route('login')}}" id="contactForm" novalidate="novalidate">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control w-100 error" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder="Enter Message"></textarea>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="button button-contactForm boxed-btn">Send</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
