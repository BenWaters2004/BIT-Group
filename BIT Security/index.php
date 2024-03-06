<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Favicon-->
    <meta name="bmi-version" content="1.4.3" /><link rel="icon" href="https://thinkbitsecurity.co.uk/wp-content/uploads/2023/01/cropped-BIT-secrity-favicon-512-×-512-px-1-32x32.png" sizes="32x32" />
    <link rel="icon" href="https://thinkbitsecurity.co.uk/wp-content/uploads/2023/01/cropped-BIT-secrity-favicon-512-×-512-px-1-192x192.png" sizes="192x192" />
    <link rel="apple-touch-icon" href="https://thinkbitsecurity.co.uk/wp-content/uploads/2023/01/cropped-BIT-secrity-favicon-512-×-512-px-1-180x180.png" />
    <meta name="msapplication-TileImage" content="https://thinkbitsecurity.co.uk/wp-content/uploads/2023/01/cropped-BIT-secrity-favicon-512-×-512-px-1-270x270.png" />

    <meta name="geo.placename" content="Plymouth, Devon, England" />
    <meta name="description" content="Powered by the BIT Group">
    <title>Cyber Security - BIT Security</title>
    <meta name="keywords" content="BIT, Bluescreen, Cyber Security, SOC, SIEM, Pentesting, South West, Cyber essentials, EDR, Phishing simulation, password management, pre  employment screening,  EDR" />
    <meta name="description" content="BIT Cyber Security services provides you with swift, clear advice and an expert eye on your network to reduce the threat of cyber incidents. Find out more here"/>

    <!--Styling-->
    <link rel="stylesheet" href="https://use.typekit.net/rbj1mem.css">
    <link rel="stylesheet" href="CSS/global.css">
    <link rel="stylesheet" href="CSS/Main.css">
    
    <?php 
    require("Constants/header.php");
    ?>
</head>
<body>
    <div class="margins">
        <div class="homeBanner">
            <div class="homeBannerText">
                <h1>Protect your business <br><span>with our cyber security expertise</span></h1>
                <p>BIT Cyber Security services provides you with swift, clear advice and an expert eye on your network to reduce the threat of cyber incidents ensuring your business systems remain operational and your data safe.</p>
                <a href="#" class="btn-outline">FIND OUT MORE</a>
            </div>
        </div>

        <div class="Title-TextBlock">
            <h2>Affordability without compromising <br><span>your level of protection</span></h2>
            <p>Cyber Security is critical for businesses. We provide advice, services and security packages to ensure your business, people and data remains secure.
            <br><br>
            From Cyber Essentials Certification to ISO 27001, Vulnerability Assessments to Penetration Testing, Next Generation Antivirus to Email Security, Employee Security Training to Phishing Simulation, Endpoint Detection and Response (EDR) to Managed Detection and Response (MDR).  We implement the tools your business needs and monitor and manage the ongoing security requirements of your business.</p>
        </div>

        <div class="Carousel" id="noMargins">
            <h3>FINDING THE RIGHT LEVEL</h3>
            <h2>of protection for your business</h2>
            <div class="blocks">
                <div class="block">
                    <img src="http://localhost/BIT-Group/BIT Security\Media\Carousel-Icons\BIT-red-one-01.svg" alt="">
                    <div class="CaraText">
                        <h4>Essentials - £14 per user per month</h4>
                        <p>The minimum cyber security a business needs to implement to keep their data, people and communications safe. Keep spam emails at bay and ensure your team know how to spot a Phish.</p>
                    </div>
                    <a href="#" class="btn-outline">MORE</a>
                </div>
                <div class="block">
                    <img src="http://localhost/BIT-Group/BIT Security\Media\Carousel-Icons\BIT-red-fingerprint.svg" alt="">
                    <div class="CaraText">
                        <h4>Extended - £18 per user per month</h4>
                        <p>Level up the Essential plan with an enhanced version of password security. Secure all the digital endpoints in your business from laptops to payment devices easily and effectively.</p>
                    </div>
                    <a href="#" class="btn-outline">MORE</a>
                </div>
                <div class="block">
                    <img src="http://localhost/BIT-Group/BIT Security\Media\Carousel-Icons\BIT-red-phone.svg" alt="">
                    <div class="CaraText">
                        <h4>Assured - £28 per user per month</h4>
                        <p>Secure all your devices, people, data and endpoints and include 24-hour monitoring along with OneDrive Back-up. The Assured packages means your data is always safe and can be restored.</p>
                    </div>
                    <a href="#" class="btn-outline">MORE</a>
                </div>
            </div>
            <div class="controls">
                
            </div>
        </div>

        <div class="Stats" id="stats-container">
            <h3>IT’S NOT ALL ABOUT THE NUMBERS</h3>
            <h2>but we are proud of these</h2>
            <div class="blocks">
                <div class="block">
                    <img src="http://localhost/BIT-Group/BIT Security\Media\Carousel-Icons\Artboard-1-3.svg" alt="">
                    <h4 id="num100">0</h4>
                    <p>Cyber essentials completed</p>
                </div>
                <div class="block">
                    <img src="http://localhost/BIT-Group/BIT Security\Media\Carousel-Icons\Artboard-1-1.svg" alt="">
                    <h4 id="num50000">0</h4>
                    <p>Indicators of Compromise contributed</p>
                </div>
                <div class="block">
                    <img id="spin" src="http://localhost/BIT-Group/BIT Security\Media\Carousel-Icons\examine-1.png" alt="">
                    <h4 id="num20">0</h4>
                    <p>Years providing Cyber Security to businesses</p>
                </div>
            </div>
        </div>

        <?php require("Constants/contactForm.php");?>
    </div>

    <?php require("Constants/footer.php");?>

    <script>
        (function($) {
            $.fn.animateNumbers = function(stop, commas, duration, ease) {
                return this.each(function() {
                    var $this = $(this);
                    var start = parseInt($this.text().replace(/,/g, ""));
                    commas = (commas === undefined) ? true : commas;
                    $({value: start}).animate({value: stop}, {
                        duration: duration == undefined ? 1000 : duration,
                        easing: ease == undefined ? "swing" : ease,
                        step: function() {
                            $this.text(Math.floor(this.value));
                            if (commas) { $this.text($this.text().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,")); }
                        },
                        complete: function() {
                            if (parseInt($this.text()) !== stop) {
                                $this.text(stop);
                                if (commas) { $this.text($this.text().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,")); }
                            }
                        }
                    });
                });
            };
        })(jQuery);

        // Intersection Observer setup
        var options = {
            root: null,
            rootMargin: '0px',
            threshold: 0.5 // Change the threshold as needed
        };

        var observer = new IntersectionObserver(function(entries, observer) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    $('#num100').animateNumbers(100, true, 4000); // Adjust the duration here
                    $('#num50000').animateNumbers(50000, true, 4000); // Adjust the duration here
                    $('#num20').animateNumbers(20, true, 4000); // Adjust the duration here
                    observer.unobserve(entry.target);
                }
            });
        }, options);

        // Start observing the target element
        observer.observe(document.getElementById('stats-container'));
    </script>
</body>
</html>;