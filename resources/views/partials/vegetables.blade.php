<!-- Product -->
<div class="sec-product bg0 p-t-145 p-b-25">
    <div class="container">
        <div class="size-a-1 flex-col-c-m p-b-48">
            <div class="txt-center txt-m-201 cl10 how-pos1-parent m-b-14">
                Sayuran Kami

                <div class="how-pos1">
                    <img src="{{ asset("organic/images/icons/symbol-02.png") }}" alt="IMG">
                </div>
            </div>

            <h3 class="txt-center txt-l-101 cl3 respon1">
                Sayuran Segar
            </h3>
        </div>

        <div class="p-b-46">
            <div class="flex-w flex-c-m filter-tope-group">
                <button class="txt-m-104 cl9 hov2 trans-04 p-rl-27 p-b-10 how-active1" data-filter="*">
                    Sayuran
                </button>

                <button class="txt-m-104 cl9 hov2 trans-04 p-rl-27 p-b-10" data-filter=".vegetable-fill">
                    Paket Sayur
                </button>

                <button class="txt-m-104 cl9 hov2 trans-04 p-rl-27 p-b-10" data-filter=".fruit-fill">
                    Toko Sayur
                </button>
            </div>
        </div>

        <div class="row isotope-grid">
            <!-- - -->
            @foreach($vegetables as $vegetable)
                <div class="col-sm-6 col-md-4 col-lg-3 p-b-75 isotope-item fruit-juic-fill other-fill">
                    <!-- Block1 -->
                    <div class="block1">
                        <div class="block1-bg wrap-pic-w bo-all-1 bocl12 hov3 trans-04">
                            <img src="{{ asset("images/" . $vegetable->image) }}" alt="IMG">

                            <div class="block1-content flex-col-c-m p-b-46">
                                <a href="{{ url('/vegetable/' . $vegetable->id) }}"
                                   class="txt-m-103 cl3 txt-center hov-cl10 trans-04 js-name-b1">
                                    {{ $vegetable->name }}
                                </a>

                                <span class="block1-content-more txt-m-104 cl9 p-t-21 trans-04">
									Rp {{ $vegetable->price }}
								</span>

                                <div class="block1-wrap-icon flex-c-m flex-w trans-05">
                                    <a href="{{ url('/vegetable/' . $vegetable->id) }}"
                                       class="block1-icon flex-c-m wrap-pic-max-w">
                                        <img src="{{ asset("organic/images/icons/icon-view.png") }}" alt="ICON">
                                    </a>

                                    <a href="#" class="block1-icon flex-c-m wrap-pic-max-w js-addcart-b1">
                                        <img src="{{ asset("organic/images/icons/icon-cart.png") }}" alt="ICON">
                                    </a>

                                    <a href="wishlist.html" class="block1-icon flex-c-m wrap-pic-max-w js-addwish-b1">
                                        <img class="icon-addwish-b1"
                                             src="{{ asset("organic/images/icons/icon-heart.png") }}" alt="ICON">
                                        <img class="icon-addedwish-b1"
                                             src="{{ asset("organic/images/icons/icon-heart2.png") }}" alt="ICON">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
