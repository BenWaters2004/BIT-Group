<link rel="stylesheet" href="CSS/header+footer.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://kit.fontawesome.com/7732d65683.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    function sleep(ms) {
        return new Promise(resolve => setTimeout(resolve, ms));
    }
    $(document).ready(function() {
        $(window).scroll(function() {
            var scrollTop = $(this).scrollTop();

            if (scrollTop === 0) {
                $('.navBack').css({
                    'border': '1px solid #004e66',
                    'background-color': 'var(--accent)',
                    'margin-top': '130px',
                    'width': '100%',
                });

                // Add animation class's for switch to vertical
                $('.nav-logo img').removeClass('animate__animated animate__backInLeft').addClass('animate__animated animate__backOutLeft');

                sleep(300).then(() => { $('.nav-logo img').attr('src', 'http://localhost/BIT-Group/BIT%20Security/Media/logos/BIT-Security-virtical.png'); });

                sleep(300).then(() => { $('.nav-logo img').removeClass('animate__animated animate__backOutLeft').addClass('animate__animated animate__backInLeft'); });
                
            } else if ($('.nav-logo img').attr('src') !== 'http://localhost/BIT-Group/BIT%20Security/Media/logos/BIT-small-B.png') {
                $('.navBack').css({
                    'border': 'none',
                    'margin-top': '70px'
                });

                // Add animation class's for switch to small B
                $('.nav-logo img').removeClass('animate__animated animate__backInLeft').addClass('animate__animated animate__backOutLeft');
                sleep(300).then(() => { $('.nav-logo img').attr('src', 'http://localhost/BIT-Group/BIT%20Security/Media/logos/BIT-small-B.png'); });

                sleep(300).then(() => { $('.nav-logo img').removeClass('animate__animated animate__backOutLeft').addClass('animate__animated animate__backInLeft'); });
                
            }
        });
    });
</script>


<div class="header">
    <a href="http://localhost/BIT-Group/BIT%20Security" class="nav-logo"><img src="http://localhost/BIT-Group/BIT%20Security/Media/logos/BIT-Security-virtical.png" alt="BIT Security"></a>
    <h3>+44 (0)1752 724 000</h3>
    <div class="navBack">
        <ul class="top-nav">
            <li>
                <a href="#">SECURITY PACKAGES</a>
            </li>
            <li><a href="#">SERVICES</a></li>
            <li><a href="#">ABOUT</a></li>
            <li><a href="#">NEWS</a></li>
            <li><a href="http://localhost/BIT-Group/BIT%20Security/Pages/Contact-Us.php">CONTACT US</a></li>
        </ul>
    </div>
</div>
