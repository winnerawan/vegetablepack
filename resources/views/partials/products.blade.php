<!-- Product2 -->
<section class="sec-product bg0 p-t-113 p-b-35">
    <div class="container">
        <div class="row isotope-grid">
            <div class="col-sm-10 col-md-6 col-lg-4 p-b-20 m-rl-auto-md">
                <div class="p-r-20 p-rl-0-xl">
                    <!-- slide2 -->
                    <div class="wrap-slick2">
                        <div class="p-b-20 p-rl-15">
								<span class="txt-m-107 cl9">
									new form the farm
								</span>

                            <div class="flex-w flex-t p-t-5">
                                <h4 class="size-w-5 m-r-20">
										<span class="txt-l-103 cl6">
											organic
										</span>

                                    <span class="txt-l-104 cl3">
											special
										</span>
                                </h4>

                                <div class="wrap-arrow-slick2 flex-w m-t-6"></div>
                            </div>
                        </div>


                        <div class="">
                            @foreach($vegetables as $vegetable)
                                <div class="item-slick2 p-all-15">
                                    <!-- item product2 -->
                                    <a href="product-single.html"
                                       class="flex-w flex-str size-h-1 bo-all-1 bocl12 hov3 trans-04 m-b-30">
                                        <div class="size-w-6 flex-c-m wrap-pic-max-s">
                                            <img src="images/product-09.jpg" alt="IMG-PRODUCT">
                                        </div>

                                        <div class="size-w-7 flex-col-m p-l-30 p-tb-15 p-r-15 p-l-0-ssm">
											<span class="txt-m-103 cl3">
												{{ $vegetable->name }}
											</span>

                                            <div class="how-line1 m-t-14 m-b-19"></div>

                                            <span class="txt-m-104 cl9">
												Rp {{ $vegetable->price }}
											</span>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
