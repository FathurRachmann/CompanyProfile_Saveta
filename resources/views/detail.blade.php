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

<section data-bs-version="5.1" class="features12 cid-t7QT2fhH1C" id="features13-1x" style="background-color: #bbbbbb;">
<section data-bs-version="5.1" class="features16 cid-t4LyctWiSm" id="features17-2">
    

    
    
    <div class="container-fluid">
        <div class="content-wrapper">
            <div class="row align-items-center">
                <div class="col-12 col-lg-4">
                    <div class="image-wrapper">
                        <img src="{{asset('public/images/'.$produk->image)}}" class="card-img-top" alt="{{$produk->image}}">
                    </div>
                </div>
                <div class="col-12 col-lg">
                    <div class="text-wrapper">
                        <h6 class="card-title mbr-fonts-style display-5"><strong>{{$produk->name}}</strong></h6>
                        <p class="mbr-text mbr-fonts-style mb-4 display-4">
                        Harga Rp.{{$produk->price}}.000</p>
                        <p class="mbr-text mbr-fonts-style mb-4 display-4">
                        Kategori : {{$produk->category}}</p>
                        <p class="mbr-text mbr-fonts-style mb-4 display-4">
                        Deskripsi : {{$produk->description}}</p><hr>
                        <a href="https://wa.me/628871303729" class="btn btn-primary">Order Sekarang</a>
                        <p>
                        *Untuk memesan produk, anda dapat menghubungi kami via Whatsapp.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</section>

<section><a href="https://mobiri.se"></a><a href="https://mobiri.se"></a></section><script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>  <script src="assets/smoothscroll/smooth-scroll.js"></script>  <script src="assets/ytplayer/index.js"></script>  <script src="assets/dropdown/js/navbar-dropdown.js"></script>  <script src="assets/theme/js/script.js"></script>  
  
  
@endsection