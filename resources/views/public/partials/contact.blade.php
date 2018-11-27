<section class="index-contact">
    <div class="layer">
        <div class="container">
            <h3 data-aos="zoom-in" data-aos-duration="1000">Got a project in mind? please contact and lets make awesome</h3>
            <p data-aos="zoom-in" data-aos-duration="1000">Lorem Ipsum is simply dummy text of the printing and
                typesetting industry. Lorem Ipsum has been the
                industry's type specimen book. It has survived not only five centuries, but also the leap into
                electronic typesetting,</p>
            <form data-aos="fade-up" data-aos-duration="1000" action="{{route('comment')}}" method="post">
                <ul class="row">
                    <li class="col-md-4">
                        <input type="text" required class="w-100" placeholder="Your Name" name="name">
                    </li>
                    <li class="col-md-4">
                        <input type="email" required class="w-100" placeholder="Your Email Id" name="email">
                    </li>
                    <li class="col-md-4">
                        <input type="text" required class="w-100" placeholder="Your Mobile No" name="mobile">
                    </li>
                    <li class="col-12">
                        <textarea class="w-100" required placeholder="Your Message" name="message"></textarea>
                    </li>
                </ul>
                <button type="submit">alright submit it</button>
                {{ csrf_field() }}
            </form>
        </div>
    </div>
</section>
