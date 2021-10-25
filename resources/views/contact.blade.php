<x-app-layout>
    <x-partials.page-title>
        PT BINTANG SAMUDRA NUSWANTORO
    </x-partials.page-title>

    <section class="section contact">
        <!-- container start -->
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <!-- address start -->
                    <div class="address-block">
                        <!-- Location -->
                        <div class="media">
                            <i class="far fa-map"></i>
                            <div class="media-body">
                                <h3>Location</h3>
                                <p>PO Box 16122 Collins Street West <br>Victoria 8007 Canada</p>
                            </div>
                        </div>
                        <!-- Phone -->
                        <div class="media">
                            <i class="fas fa-phone"></i>
                            <div class="media-body">
                                <h3>Phone</h3>
                                <p>
                                    (+48) 564-334-21-22-34
                                    <br>(+48) 564-334-21-22-38
                                </p>
                            </div>
                        </div>
                        <!-- Email -->
                        <div class="media">
                            <i class="far fa-envelope"></i>
                            <div class="media-body">
                                <h3>Email</h3>
                                <p>
                                    info@templatepath.com
                                    <br>info@cleanxer.com
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- address end -->
                </div>
                <div class="col-lg-7">
                    <div class="contact-form">
                        <!-- contact form start -->
                        <form action="!#" class="row">
                            <!-- name -->
                            <div class="col-lg-6">
                                <input type="text" name="name" class="form-control main" placeholder="Name" required>
                            </div>
                            <!-- email -->
                            <div class="col-lg-6">
                                <input type="email" class="form-control main" placeholder="Email" required>
                            </div>
                            <!-- phone -->
                            <div class="col-lg-12">
                                <input type="text" class="form-control main" placeholder="Phone" required>
                            </div>
                            <!-- message -->
                            <div class="col-lg-12">
                                <textarea name="message" rows="10" class="form-control main"
                                    placeholder="Your message"></textarea>
                            </div>
                            <!-- submit button -->
                            <div class="col-md-12 text-right">
                                <button class="btn btn-style-one" type="submit">Send Message</button>
                            </div>
                        </form>
                        <!-- contact form end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- container end -->
    </section>

    {{-- <section class="map">
        <!-- Google Map -->
        <div id="map" style="background-color: grey">
        <iframe src="https://www.google.com/maps" frameborder="0"></iframe>
        </div>
    </section> --}}


</x-app-layout>