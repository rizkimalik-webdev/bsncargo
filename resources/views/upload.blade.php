<x-app-layout>
    <section class="section">
        <!-- container start -->
        <div class="container">
            <div class="row">
                
                <div class="col-lg-6">
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



</x-app-layout>