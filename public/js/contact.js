document.querySelector('#contact-form').addEventListener('submit', function(e) {
    e.preventDefault();
    
    grecaptcha.ready(function() {
        grecaptcha.execute('{{ config("services.recaptcha.v3.key") }}', {
            action: 'contact',
            domain: recaptchaDomain
        })
        .then(function(token) {
            document.getElementById('g-recaptcha-response').value = token;
            e.target.submit();
        });
    });
});