<!-- jQuery library -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<!-- Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="js/contact.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<section id="contact">
    <h1 class="section-header">Contact</h1>
    <div class="contact-wrapper">
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
            <textarea class="form-control" rows="10" placeholder="MESSAGE" name="message" required></textarea>
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
                <li class="list-item"><i class="fa fa-phone fa-2x"><span class="contact-text phone">0163 1769819</span></i></li>
                <li class="list-item"><i class="fa fa-envelope fa-2x"><span class="contact-text gmail"><a href="mailto:hollibene@gmail.com" title="Send me an email">hollibene@gmail.com</a></span></i></li>
            </ul>
            <hr>
            <ul class="social-media-list">
                <li>
                    <a href="https://github.com/Benedikt-Hollerauer" target="_blank" class="contact-icon">
                        <i class="fa-brands fa-github"></i>
                    </a>
                </li>
                <li>
                    <a href="https://leetcode.com/benedikt-hollerauer/" target="_blank" class="contact-icon">
                        <i class="fa-solid fa-code"></i>
                    </a>
                </li>
                <li>
                    <a href="https://www.linkedin.com/in/benedikt-hollerauer-b198b6259/" target="_blank" class="contact-icon">
                        <i class="fa-brands fa-linkedin-in"></i>
                    </a>
                </li>
                <li>
                    <a href="https://www.instagram.com/bene.hl/" target="_blank" class="contact-icon">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                </li>
            </ul>
            <hr>
            <div class="copyright">&copy; ALL OF THE RIGHTS RESERVED</div>
        </div>
    </div>
</section>