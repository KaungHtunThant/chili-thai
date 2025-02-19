@extends('layouts.index')

@section('content')
    <section id="contact" class="contact section bg-dark text-light">
        <img src="img/crs-img/crs-img-1.png" alt="Los Angeles" class="carousel-img d-block w-100 h-50 ">
        <!-- Section Title -->

        <!-- About & Contact Section -->
        <div class="container">
            <div class="row justify-content-center m-0 p-2 p-md-3">
                <h2 class="text-center col-12 mb-4">About Us</h2>

                <!-- About Text -->
                <div class="col-12 col-md-6 col-lg-5 px-3 px-md-5 mb-4 mb-md-0" data-aos="fade-up">
                    <p class="text-justify">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis officia nihil expedita
                        repellendus iure velit quia eum accusamus, quo earum debitis, aliquid dolore! Labore assumenda
                        inventore dolor consequatur iusto obcaecati omnis, esse voluptatum magni deleniti quo repellendus
                        corrupti expedita pariatur excepturi explicabo error quae illum sapiente saepe reiciendis beatae,
                        blanditiis at? Officia cumque, corporis deserunt iure eos illum ab nam optio rerum ducimus error
                        quasi dolorem possimus non et? Nostrum omnis iure amet atque autem consequuntur dignissimos voluptas
                        alias nisi, consequatur inventore doloremque, rerum numquam laboriosam enim! Iusto officia optio
                        mollitia suscipit veritatis unde a, hic beatae, quia, recusandae libero.
                    </p>
                </div>

                <!-- Contact Info -->
                <div class="col-12 col-md-6 col-lg-5 p-sm-3">
                    <div class="row gy-3 gy-md-4">
                        <!-- Address -->
                        <div class="col-12 col-sm-6 col-md-12">
                            <div class="info-item d-flex align-items-center" data-aos="fade-up" data-aos-delay="200">
                                <i class="icon bi bi-geo-alt flex-shrink-0 p-2 p-md-3 fs-3 fs-md-1 text-danger"></i>
                                <div class="ms-2">
                                    <h3>Address</h3>
                                    <p class="mb-0">730 Apollo Dr #110, Lino Lakes, MN 55014</p>
                                </div>
                            </div>
                        </div>

                        <!-- Phone -->
                        <div class="col-12 col-sm-6 col-md-12">
                            <div class="info-item d-flex align-items-center" data-aos="fade-up" data-aos-delay="200">
                                <i class="icon bi bi-telephone flex-shrink-0 p-2 p-md-3 fs-3 fs-md-1 text-danger"></i>
                                <div class="ms-2">
                                    <h3>Call Us</h3>
                                    <p class="mb-0">+1 5589 55488 55</p>
                                </div>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="col-12 col-sm-6 col-md-12">
                            <div class="info-item d-flex align-items-center" data-aos="fade-up" data-aos-delay="200">
                                <i class="icon bi bi-envelope flex-shrink-0 p-2 p-md-3 fs-3 fs-md-1 text-danger"></i>
                                <div class="ms-2">
                                    <h3>Email Us</h3>
                                    <p class="mb-0">info@example.com</p>
                                </div>
                            </div>
                        </div>

                        <!-- Hours -->
                        <div class="col-12 col-sm-6 col-md-12">
                            <div class="info-item d-flex align-items-center" data-aos="fade-up" data-aos-delay="200">
                                <i class="icon bi bi-clock flex-shrink-0 p-2 p-md-3 fs-3 fs-md-1 text-danger"></i>
                                <div class="ms-2">
                                    <h3>Opening Hours</h3>
                                    <p class="mb-0"><strong>Mon-Sat:</strong> 11AM - 23PM<br><strong>Sunday:</strong>
                                        Closed</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        </div><!--end section title-->
        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2812.2296174318217!2d-93.11053622330851!3d45.18244795219304!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x52b2df4cf284c5ff%3A0xec12e36519b0160f!2sChili%20Thai%20Cuisine!5e0!3m2!1sen!2sus!4v1738333017293!5m2!1sen!2sus"
                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div><!-- End Google Maps -->
        </div>
        <div class="p-3">
            <h2 class="social text-center">Follow Us On</h2>
            <div class="facebook d-flex justify-content-center align-items-center">
                <a href="https://www.facebook.com/ChiliThaiCuisine/" class="d-inline-block p-2 text-decoration-none">
                    <i class="fa-brands fa-facebook fs-1 "></i>
                </a>
                <a href="https://www.yelp.com/biz/chili-thai-cuisine-lino-lakes"
                    class="d-inline-block p-2 text-decoration-none">
                    <i class="fa-brands fa-yelp fs-1 text-danger"></i>
                </a>
            </div>
        </div>

    </section><!-- /Contact Section -->
@endsection
