<!-- jQuery library -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<!-- Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="js/contact.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<section id="contact center-items">
    <!--<h1 class="section-header">Contact</h1> -->
    <div class="contact-wrapper center-items">
        <!-- Left Contact Form -->
        <form id="contact-form" class="form-horizontal" role="form" method="POST" action="{{ route('contact.store') }}">
            @csrf
            <div class="form-group">
                <div class="col-sm-12">
                    <input type="text" class="form-control" id="name" placeholder="NAME" name="name" required>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    <input type="email" class="form-control" id="email" placeholder="EMAIL" name="email" required>
                </div>
            </div>
            <textarea class="form-control" id="form-control-textarea" rows="10" placeholder="MESSAGE" name="message" required></textarea>
            <div class="recaptcha center-items">
                <script src="https://www.google.com/recaptcha/api.js" async defer></script>

                @if(config("services.recaptcha.key"))
                    <div class="g-recaptcha" data-sitekey="{{ config('services.recaptcha.key') }}"></div>
                @endif
            </div>
            
            <button class="btn btn-primary send-button" id="submit" type="submit" value="SEND">
                <div class="alt-send-button">
                    <i class="fa fa-paper-plane"></i><span class="send-text">SEND</span>
                </div>
            </button>
        </form>
        <!-- Right Contact Information -->
        <div class="direct-contact-container">
            <ul class="contact-list">
                <li class="list-item"><i class="fa fa-map-marker fa-2x"><span class="contact-text place">Bavaria, Germany</span></i></li>
                <li class="list-item"><i class="fa fa-envelope fa-2x"><span class="contact-text gmail"><a href="mailto:{{ config('constants.MY_EMAIL_ADDRESS') }}" class="text-link" title="Send me an email">{{ config('constants.MY_EMAIL_ADDRESS') }}</a></span></i></li>
            </ul>
            <hr>
            <ul class="social-media-list">
                <li onclick="window.open('https://github.com/Benedikt-Hollerauer', '_blank');">
                    <a class="contact-icon">
                        <i class="fa-brands fa-github"></i>
                    </a>
                </li>
                <li onclick="window.open('https://leetcode.com/benedikt-hollerauer/', '_blank');">
                    <a class="contact-icon">
                        <i class="fa-solid fa-code"></i>
                    </a>
                </li>
                <li onclick="window.open('https://www.linkedin.com/in/benedikt-hollerauer-b198b6259/', '_blank');">
                    <a class="contact-icon">
                        <i class="fa-brands fa-linkedin-in"></i>
                    </a>
                </li>
            <hr>
            <div class="copyright">Feel free to leave me a message</div>
        </div>
    </div>
</section>