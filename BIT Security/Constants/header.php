<link rel="stylesheet" href="CSS/header+footer.css">

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $(window).scroll(function() {
            if ($(this).scrollTop() === 0) {
                $('.navBack').css({
                    'border': '1px solid #004e66',
                    'background-color': 'var(--accent)',
                    'margin-top': '130px',
                    'width': '100%',
                });
                $('.nav-logo img').attr('src', 'http://localhost/BIT%20Security/Media/logos/BIT-Security-virtical.png');
            } else {
                $('.navBack').css({
                    'border': 'none',
                    'margin-top': '70px'
                });
                $('.nav-logo img').attr('src', 'http://localhost/BIT%20Security/Media/logos/BIT-small-B.png');
            }
        });
    });
</script>

<div class="header">
    <a href="http://localhost/BIT%20Security" class="nav-logo"><img src="http://localhost/BIT%20Security/Media/logos/BIT-Security-virtical.png" alt="BIT Security"></a>
    <h3>+44 (0)1752 724 000</h3>
    <div class="navBack">
        <ul class="top-nav">
            <li><a href="#">SECURITY PACKAGES</a></li>
            <li><a href="#">SERVICES</a></li>
            <li><a href="#">ABOUT</a></li>
            <li><a href="#">NEWS</a></li>
            <li><a href="http://localhost/BIT%20Security/Pages/Contact-Us.php">CONTACT US</a></li>
        </ul>
    </div>
</div>
