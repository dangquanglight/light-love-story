<!--Contact Form-->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="heading">
                <h2 class="wow fadeInUp underline padtop50" data-wow-delay="0.5s">Get in Touch</h2>

                <p class="wow fadeInUp" data-wow-delay="0.5s">Contrary to popular belief, Lorem Ipsum is not simply
                    random text. It has roots in a piece of classical Latin literature from 45 BC, making it over
                    2000 years old.</p>
            </div>

            <div id="ContactFormDiv"></div>

            <form class="form-horizontal" method="post" action="ajax/sendemail.php" name="ContactForm" id="contact">
                <div class="col-md-4">
                    <input type="text" class="form-control" name="name" id="name" placeholder="Your Name">
                </div>

                <div class="col-md-4">
                    <input type="text" class="form-control" name="email" id="email" placeholder="Email">
                </div>

                <div class="col-md-4">
                    <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone">
                </div>

                <div class="col-md-12">
                    <textarea name="comments" class="form-control" rows="10"></textarea>
                </div>

                <div class="col-md-12 btn-normal">
                    <a href="" id="submit"><span>Submit</span></a>
                </div>
            </form>

        </div>
    </div>
</div>