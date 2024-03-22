@extends("layouts.master")

@section("title")
Products
@endsection

@section("content")

<section data-bs-version="5.1" class="header13 cid-t7QT2eNoVu" id="header13-1w" style="background-image: url({{asset('images/mbr.jpg')}})">

    

    
    

    <div class="align-center container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-11">
                <h1 class="mbr-section-title mbr-fonts-style mb-3 display-1"><strong>OUR PRODUCTS</strong></h1>
                
                <p class="mbr-text mbr-fonts-style mb-3 display-7">&nbsp;</p>
                
                
            </div>
        </div>
    </div>
</section>


<section data-bs-version="5.1" class="form5 cid-t85XjZwI3P" id="form5-21" style="background-color: #bbbbbb; padding-top: 1rem;">
    
    
    <div class="container-fluid">
        
        <div class="row justify-content-center mt-4">
            <div class="col-lg-8 mx-auto mbr-form" data-form-type="formoid">
                <form action="{{url ('cari')}}" method="GET">                     
                        <div class="col-12 form-group mb-3" data-for="url">
                            <input type="text" name="cari" placeholder="Nama produk" data-form-field="url" class="form-control" value="{{ old('id') }}" id="url-form5-21">
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 align-center mbr-section-btn">
                            <button type="submit" class="btn btn-primary display-4" value="CARI">Cari Produk</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
</section>
    

    
<section data-bs-version="5.1" class="features12 cid-t7QT2fhH1C" id="features13-1x" style="background-color: #bbbbbb;">    
    <div class="container">

                    
        <div class="row">
            @foreach($produk as $produk)
            <div class="col-md-4">
                <div class="card">
                    <a href="{{url ('detail?id='.$produk->id)}}">
                        <img src="{{asset('public/images/'.$produk->image)}}" class="card-img-top" alt="{{$produk->image}}">
                    </a>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-7">
                                <h5 class="card-title">{{$produk->name}}</h5>
                            </div>
                            <div class="col-md-5 text-right">
                                <p class="card-text">Harga Rp.{{$produk->price}}.000</p>
                            </div>
                        </div>
                        <a href="{{url ('detail?id='.$produk->id)}}" class="btn btn-primary">Lihat Produk</a>
                    </div>
                </div>
                <br>
            </div>
            
            @endforeach()
              
        </div>
    </div>
</section>

<section><a href="https://mobiri.se"></a><a href="https://mobiri.se"></a></section><script src="{{ asset('/bootstrap/js/bootstrap.bundle.min.js') }}"></script>  <script src="{{ asset('/smoothscroll/smooth-scroll.js') }}"></script>  <script src="{{ asset('/ytplayer/index.js') }}"></script>  <script src="{{ asset('/dropdown/js/navbar-dropdown.js') }}"></script>  <script src="{{ asset('/theme/js/script.js') }}"></script>  
  
  
@endsection