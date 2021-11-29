<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/all.css')}}">

    <title>Task</title>
</head>

<body>
    <header>
        <div class="navTop">
            <p>COOL NEW COLOR: STERLING - SO WORTH IT</p>
        </div>
        <div class="navBottom">
            <div class="container-lg">
                <nav>
                    <div class="customNavbar">
                        <div class="hamburger" id="hamburger-1">
                            <span class="line"></span>
                            <span class="line"></span>
                            <span class="line"></span>
                        </div>
                        <div class="logo">
                            <img src="{{ asset('frontend/images/cocacola.png') }}" alt="">
                        </div>
                        <ul class="headerMenu">
                            <li><a href="">materials</a></li>
                            <li><a href="">tools</a></li>
                            <li class="active"><a href="">machines</a></li>
                            <li><a href="">equipment</a></li>
                            <li><a href="">Services</a></li>
                        </ul>
                    </div>
                    <div class="searchUserInfo">
                        <div class="inputSearch">
                            <input type="text" placeholder="What are you looking for...">
                            <img src="{{ asset('frontend/images/search.png') }}" alt="">
                        </div>
                        <div class="userInfo">
                            <p> ﻲﺑﺮﻋ</p>
                            <div class="userDropDown">
                                <h4>Marhaba </h4>
                                <h3>Mouhannad</h3>
                                <div class="dropDown">
                                    <a href="">Profile</a>
                                    <a href="">Logout</a>
                                </div>
                            </div>
                            <a href="" class="whislist">
                                <img src="{{ asset('frontend/images/love.png') }}" alt="">
                            </a>
                            <a href="" class="cart">
                                <img src="{{ asset('frontend/images/trolley-cart.png') }}" alt="">
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <main>
        <section class="bannerSection">
            <div class="container-lg">
                <div class="textOverImg">
                    <h1>Looking for interior designer?</h1>
                    <p>Choose from top 500 interior designers in Saudi.</p>
                    <a href="">Explore</a>
                </div>
            </div>
        </section>
        <div class="container-lg">
            <div class="checkboxContainer">
                <div class="checkboxHolder row d-flex align-items-center">
                    <div class="col-lg-3">
                        <label class="containerInput">Compare products
                            <input type="checkbox" checked="checked">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                    <div class="col-lg-3">
                        <label class="containerInput">Discount coupons
                            <input type="checkbox" checked="checked">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                    <div class="col-lg-3">
                        <label class="containerInput">Promotional offers
                            <input type="checkbox" checked="checked">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                    <div class="col-lg-3">
                        <label class="containerInput">Advance payment protection system
                            <input type="checkbox" checked="checked">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                </div>
            </div>
        </div>

        <section class="categoriesSection">
            <div class="container-lg">
                <div class="categoriesSectionInner">
                    <h2>Shop by categories</h2>
                    <p>All your construction requirements under one roof</p>
                    <div class="categoriesHolder d-flex flex-row justify-content-between align-items-center flex-wrap">
                        <div class="categoriesCard mx-lg-2 col-lg-2">
                            <div class="categoriesCardImg">
                                <img src="{{ asset('frontend/images/test-img.png') }}" alt="">
                            </div>
                            <h3>Metal</h3>
                        </div>
                        <div class="categoriesCard mx-lg-2 col-lg-2">
                            <div class="categoriesCardImg">
                                <img src="{{ asset('frontend/images/test-img.png') }}" alt="">
                            </div>
                            <h3>Metal</h3>
                        </div>
                        <div class="categoriesCard mx-lg-2 col-lg-2">
                            <div class="categoriesCardImg">
                                <img src="{{ asset('frontend/images/test-img.png') }}" alt="">
                            </div>
                            <h3>Metal</h3>
                        </div>
                        <div class="categoriesCard mx-lg-2 col-lg-2">
                            <div class="categoriesCardImg">
                                <img src="{{ asset('frontend/images/test-img.png') }}" alt="">
                            </div>
                            <h3>Metal</h3>
                        </div>
                        <div class="categoriesCard mx-lg-2 col-lg-2">
                            <div class="categoriesCardImg">
                                <img src="{{ asset('frontend/images/test-img.png') }}" alt="">
                            </div>
                            <h3>Metal</h3>
                        </div>
                        <div class="categoriesCard mx-lg-2 col-lg-2">
                            <div class="categoriesCardImg">
                                <img src="{{ asset('frontend/images/test-img.png') }}" alt="">
                            </div>
                            <h3>Metal</h3>
                        </div>
                        <div class="categoriesCard mx-lg-2 col-lg-2">
                            <div class="categoriesCardImg">
                                <img src="{{ asset('frontend/images/test-img.png') }}" alt="">
                            </div>
                            <h3>Metal</h3>
                        </div>
                        <div class="categoriesCard mx-lg-2 col-lg-2">
                            <div class="categoriesCardImg">
                                <img src="{{ asset('frontend/images/test-img.png') }}" alt="">
                            </div>
                            <h3>Metal</h3>
                        </div>
                        <div class="categoriesCard mx-lg-2 col-lg-2">
                            <div class="categoriesCardImg">
                                <img src="{{ asset('frontend/images/test-img.png') }}" alt="">
                            </div>
                            <h3>Metal</h3>
                        </div>
                        <div class="categoriesCard mx-lg-2 col-lg-2">
                            <div class="categoriesCardImg">
                                <img src="{{ asset('frontend/images/test-img.png') }}" alt="">
                            </div>
                            <h3>Metal</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="findSection">
            <div class="container-lg">
                <div class="findSectionInner">
                    <h2>Didn’t find what you are looking for?</h2>
                    <p>All your construction requirements under one roof</p>
                    <div
                        class="findHolder d-flex flex-row justify-content-between align-items-center flex-wrap mt-lg-4">
                        <div class="findCardCan col-lg-6 pe-lg-3">
                            <div class="findCard">
                                <div class="findImg">
                                    <img src="{{ asset('frontend/images/Layer 13.png') }}" alt="">
                                </div>
                                <div class="findTextOverlay">
                                    <h3>Services</h3>
                                </div>
                                <h4>Contractors | Designers | Consultants | developers | sellers</h4>
                            </div>
                        </div>
                        <div class="findCardCan col-lg-6 ps-lg-3">
                            <div class="findCard">
                                <div class="findImg">
                                    <img src="{{ asset('frontend/images/Layer 14.png') }}" alt="">
                                </div>
                                <div class="findTextOverlay">
                                    <h3>Services</h3>
                                </div>
                                <h4>Contractors | Designers | Consultants | developers | sellers</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="productSection py-4">
            <div class="container-lg">
                <div class="productHeading mb-4">
                    <h2>Products on sale</h2>
                    <p>All your construction requirements under one roof</p>
                </div>
                <div class="productSliderWrapper">
                    <div class="productSlider">
                        <div class="productSliderInner">
                            <div class="productImg">
                                <img src="{{ asset('frontend/images/test-image-2.png') }}" alt="">
                            </div>
                            <div class="productText p-2">
                                <h3>Plush beige Sofa - 2 seater</h3>
                                <h4 class="py-2">(21k+ reviews)</h4>
                                <div class="starImg">
                                    <img src="{{ asset('frontend/images/star.png') }}" alt="">
                                </div>
                                <p class="pt-2">SAR 12,000 <span>SAR 15,000</span></p>
                            </div>
                        </div>
                        <div class="productSliderInner">
                            <div class="productImg">
                                <img src="{{ asset('frontend/images/test-image-2.png') }}" alt="">
                            </div>
                            <div class="productText p-2">
                                <h3>Plush beige Sofa - 2 seater</h3>
                                <h4 class="py-2">(21k+ reviews)</h4>
                                <div class="starImg">
                                    <img src="{{ asset('frontend/images/star.png') }}" alt="">
                                </div>
                                <p class="pt-2">SAR 12,000 <span>SAR 15,000</span></p>
                            </div>
                        </div>
                        <div class="productSliderInner">
                            <div class="productImg">
                                <img src="{{ asset('frontend/images/test-image-2.png') }}" alt="">
                            </div>
                            <div class="productText p-2">
                                <h3>Plush beige Sofa - 2 seater</h3>
                                <h4 class="py-2">(21k+ reviews)</h4>
                                <div class="starImg">
                                    <img src="{{ asset('frontend/images/star.png') }}" alt="">
                                </div>
                                <p class="pt-2">SAR 12,000 <span>SAR 15,000</span></p>
                            </div>
                        </div>
                        <div class="productSliderInner">
                            <div class="productImg">
                                <img src="{{ asset('frontend/images/test-image-2.png') }}" alt="">
                            </div>
                            <div class="productText p-2">
                                <h3>Plush beige Sofa - 2 seater</h3>
                                <h4 class="py-2">(21k+ reviews)</h4>
                                <div class="starImg">
                                    <img src="{{ asset('frontend/images/star.png') }}" alt="">
                                </div>
                                <p class="pt-2">SAR 12,000 <span>SAR 15,000</span></p>
                            </div>
                        </div>
                        <div class="productSliderInner">
                            <div class="productImg">
                                <img src="{{ asset('frontend/images/test-image-2.png') }}" alt="">
                            </div>
                            <div class="productText p-2">
                                <h3>Plush beige Sofa - 2 seater</h3>
                                <h4 class="py-2">(21k+ reviews)</h4>
                                <div class="starImg">
                                    <img src="{{ asset('frontend/images/star.png') }}" alt="">
                                </div>
                                <p class="pt-2">SAR 12,000 <span>SAR 15,000</span></p>
                            </div>
                        </div>
                        <div class="productSliderInner">
                            <div class="productImg">
                                <img src="{{ asset('frontend/images/test-image-2.png') }}" alt="">
                            </div>
                            <div class="productText p-2">
                                <h3>Plush beige Sofa - 2 seater</h3>
                                <h4 class="py-2">(21k+ reviews)</h4>
                                <div class="starImg">
                                    <img src="{{ asset('frontend/images/star.png') }}" alt="">
                                </div>
                                <p class="pt-2">SAR 12,000 <span>SAR 15,000</span></p>
                            </div>
                        </div>
                        <div class="productSliderInner">
                            <div class="productImg">
                                <img src="{{ asset('frontend/images/test-image-2.png') }}" alt="">
                            </div>
                            <div class="productText p-2">
                                <h3>Plush beige Sofa - 2 seater</h3>
                                <h4 class="py-2">(21k+ reviews)</h4>
                                <div class="starImg">
                                    <img src="{{ asset('frontend/images/star.png') }}" alt="">
                                </div>
                                <p class="pt-2">SAR 12,000 <span>SAR 15,000</span></p>
                            </div>
                        </div>
                        <div class="productSliderInner">
                            <div class="productImg">
                                <img src="{{ asset('frontend/images/test-image-2.png') }}" alt="">
                            </div>
                            <div class="productText p-2">
                                <h3>Plush beige Sofa - 2 seater</h3>
                                <h4 class="py-2">(21k+ reviews)</h4>
                                <div class="starImg">
                                    <img src="{{ asset('frontend/images/star.png') }}" alt="">
                                </div>
                                <p class="pt-2">SAR 12,000 <span>SAR 15,000</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="sliderArrow">
                        <button class="back lifeSliderBack">
                            <img src="{{ asset('frontend/images/left-arrow.png') }}" alt="">
                        </button>
                        <button class="forward lifeSliderForward">
                            <img src="{{ asset('frontend/images/right-arrow.png') }}" alt="">
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <section class="lookingSection py-4">
            <div class="container-lg">
                <div class="productHeading mb-4">
                    <h2>Looking for something</h2>
                    <p>We have got everything right here</p>
                </div>
                <div class="row d-flex justify-content-between align-items-center flex-wrap">
                    <div class="lookingCard col-lg-4">
                        <div class="bg-success bg-opacity-50 rounded"></div>
                    </div>
                    <div class="lookingCard col-lg-4">
                        <div class="bg-danger bg-opacity-50 rounded"></div>
                    </div>
                    <div class="lookingCard col-lg-4">
                        <div class="bg-success bg-opacity-50 rounded"></div>
                    </div>
                </div>
            </div>
        </section>


    </main>


    <script src="{{asset('js/all.js')}}"></script>
</body>

</html>
