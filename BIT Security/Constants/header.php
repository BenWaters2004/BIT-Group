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
                    'margin-top': '80px'
                });

                // Add animation class's for switch to small B
                $('.nav-logo img').removeClass('animate__animated animate__backInLeft').addClass('animate__animated animate__backOutLeft');
                sleep(300).then(() => { $('.nav-logo img').attr('src', 'http://localhost/BIT-Group/BIT%20Security/Media/logos/BIT-small-B.png'); });

                sleep(300).then(() => { $('.nav-logo img').removeClass('animate__animated animate__backOutLeft').addClass('animate__animated animate__backInLeft'); });
                
            }
        });
    });

    $(document).ready(function() {
    $('.SecPackHover').hover(function() {
        $('#ServicesHover').hide();
        $('#AboutHover').hide();
        $('#SecPackHover').slideDown('0.3s');
    }, function() {
        $('#SecPackHover').slideUp('0.3s');
    });

    $('.ServicesHover').hover(function() {
        $('#AboutHover').hide();
        $('#SecPackHover').hide();
        $('#ServicesHover').slideDown('0.3s');
    }, function() {
        $('#ServicesHover').slideUp('0.3s');
    });

    $('.AboutHover').hover(function() {
        $('#ServicesHover').hide();
        $('#SecPackHover').hide();
        $('#AboutHover').slideDown("0.3s");
    }, function() {
        $('#AboutHover').slideUp('0.3s');
    });
    
    });
</script>


<div class="header">
    <a href="http://localhost/BIT-Group/BIT%20Security" class="nav-logo"><img src="http://localhost/BIT-Group/BIT%20Security/Media/logos/BIT-Security-virtical.png" alt="BIT Security"></a>
    <h3>+44 (0)1752 724 000</h3>
    <div class="navBack">
        <ul class="top-nav">
            <li><a href="#" class="SecPackHover">SECURITY PACKAGES</a></li>
            <li><a href="#" class="ServicesHover">SERVICES</a></li>
            <li><a href="#" class="AboutHover">ABOUT</a></li>
            <li><a href="#">NEWS</a></li>
            <li><a href="http://localhost/BIT-Group/BIT%20Security/Pages/Contact-Us.php">CONTACT US</a></li>
        </ul>
    </div>
    <ul class="hoverMenu" id="SecPackHover">
        <li><p>Our Packages</p></li>
        <li><a href="#">Cyber Security Packages</a></li>
        <li><a href="#">Essentials Package</a></li>
        <li><a href="#">Extended Package</a></li>
        <li><a href="#"> Quality Assured Package</a></li>
    </ul>
    <ul class="hoverMenu" id="ServicesHover">
        <li><p>What can we offer?</p></li>
        <li><a href="#">Cyber Essentials Certification</a></li>
        <li><a href="#">Pre-Employment Screening</a></li>
        <li><a href="#">Penetration Testing Service</a></li>
        <li><a href="#">Complying with DORA Regulations</a></li>
        <li><a href="#">BPSS Screening as a Service</a></li>
        <li><a href="#">Managed Detection and Response Services</a></li>
        <li><a href="#">Achieve ISO 27001 Compliance</a></li>
    </ul>
    <ul class="hoverMenu" id="AboutHover">
        <li><p>Who is BIT Group?</p></li>
        <li><a href="#">About BIT Security</a></li>
        <li><a href="#">Our Amazing Cyber Partners</a></li>
        <li><a href="#">Our Cyber Technology Solutions</a></li>
        <li><a href="#">Fast FAQs</a></li>
    </ul>
</div>
