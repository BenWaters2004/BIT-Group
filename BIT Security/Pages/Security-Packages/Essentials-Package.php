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
    <title>Cyber Security Packages</title>
    <meta name="keywords" content="BIT, Bluescreen, Cyber Security, Pentesting, South West, EDR, Phishing simulation, password management, threat, Cyber essentials, risk, security, awareness, training" />
    <meta name="description" content="Cyber security packages that are backed by a team of experts who are committed to keeping your business safe."/>

    <!--Styling-->
    <link rel="stylesheet" href="https://use.typekit.net/rbj1mem.css">
    <link rel="stylesheet" href="../../CSS/global.css">
    <link rel="stylesheet" href="../../CSS/header+footer.css">
    
    <?php 
    require("../../Constants/header.php"); //adds header
    ?>
</head>
<body>
    <div class="margins"> <!--Adds tramlines to the side of the page-->
        <div class="OvalBanner"><!--Heading banner-->
            <div class="OvalBannerText">
                <h1>Protect your business with a cyber security <br>
                <span>Essentials Package</span></h1>
                <p>Businesses need to be proactive in their cyber security and the BIT Security Essentials Package is the perfect way to start.</p>
            </div>
            <img src="../../Media/General/banner-ipad.png" alt="Essentials Cyber Security Package">
        </div>

        <div class="Title-TextBlock">
            <h2>Be proactive with <br><span>your Cyber Security</span></h2>
            <p>This essentials package provides just the right amount of robustness your business needs at a minimal cost. Secure critical areas of business risk, Endpoints, identities and people. Ensure your team are trained, aware of current and likely threats and are able to act, report and ensure your business and your data are kept safe. This package includes a variety of tools that will protect your business from attacks. We provide you with all the knowledge and support you need to stay safe online. 
            <br><br>
            - We integrate the software and manage the ongoing deployment.<br>
            - We train your staff using Simulated Phishing Campaigns and trigger further training based on their responses.<br>
            -We keep your team aware of security issues and types of scams to look out for.  
            <br><br>
            Cyber Security should not be considered an afterthought, but instead be seen as a proactive measure needed to protect online resources, customer data, and company information. </p>
        </div>
        <div class="FAQ" style="margin-bottom: -50px;">
            <h2>Your Essentials Package<br>includes the following software</h2>
            <div class="dropdown" id="dropdown">
                <h5>Next-Gen Anti-Virus</h5>
                <a class="dropdown-toggle" onclick="toggleDropdown('dropdownContent1')">Expand <i class="fa-solid fa-circle-arrow-right"></i></a>
                <div class="dropdownContent" id="dropdownContent1">
                    <p>We deploy CrowdStrike which uses world-class AI, the CrowdStrike Security Cloud identifies shifts in adversarial tactics, to automatically prevent threats in real-time, keeping you ahead of today’s threats and stop a breach. CrowdStrike uniquely uses behaviour-based identifiers to stop all forms of malware.</p><br><br>
                    <a href="https://www.crowdstrike.com/products/endpoint-security/falcon-prevent-antivirus/">Find out more</a>
                </div>
            </div>

            <div class="dropdown" id="dropdown">
                <h5>Simulated Phishing Campaigns</h5>
                <a class="dropdown-toggle" onclick="toggleDropdown('dropdownContent2')">Expand <i class="fa-solid fa-circle-arrow-right"></i></a>
                <div class="dropdownContent" id="dropdownContent2">
                    <p>We integrate KnowBe4, sending simulated phishing campaigns to your team, testing their awareness regularly and ensuring they are looking out for phishing emails with threat-based links/files.</p><br><br>
                </div>
            </div>
            <div class="dropdown" id="dropdown">
                <h5>Bespoke Security Awareness</h5>
                <a class="dropdown-toggle" onclick="toggleDropdown('dropdownContent3')">Expand <i class="fa-solid fa-circle-arrow-right"></i></a>
                <div class="dropdownContent" id="dropdownContent3">
                    <p>Our team utilises KnowBe4 creating a 12 month schedule of training curating professionally crafted training modules, videos games and assessments to keep your team engaged, interested and aware of the latest threats. This process improves security culture in your organisation, raises awareness of common attack vectors and reduces the risk of the number 1 method of attack.</p><br><br>
                </div>
            </div>

            <div class="dropdown" id="dropdown">
                <h5>Phish Button to Report</h5>
                <a class="dropdown-toggle" onclick="toggleDropdown('dropdownContent4')">Expand <i class="fa-solid fa-circle-arrow-right"></i></a>
                <div class="dropdownContent" id="dropdownContent4">
                    <p>This is a button integrated into your email client add-on that facilitates the reporting of suspected phishing emails. Your team can immediately share with us an email that they think is a Phish or potential threat. Keeping your team aware of threats and having an easy system in which they can report, check it is safe to open and ensure the safety of your organisation and data.</p><br><br>
                </div>
            </div>
        </div>
        <div class="Carousel" id="noMargins"> <!--noMargins so that the background colour covers full width-->
            <h3>DO YOU AND YOUR BUSINESS NEED MORE SUPPORT?</h3>
            <h2>Perhaps consider one of these alternatives…</h2>
            <div class="blocks">
                <div class="block">
                    <img src="http://localhost/BIT-Group/BIT Security\Media\Carousel-Icons\BIT-red-fingerprint.svg" alt="">
                    <div class="CaraText">
                        <h4>Extended - £18 per user per month</h4>
                        <p>Level up the Essential plan with an enhanced version of password security. Secure all the digital endpoints in your business from laptops to payment devices easily and effectively.</p>
                    </div>
                    <a href="#" class="btn-outline">LEARN MORE</a>
                </div>
                <div class="block">
                    <img src="http://localhost/BIT-Group/BIT Security\Media\Carousel-Icons\BIT-red-phone.svg" alt="">
                    <div class="CaraText">
                        <h4>Assured - £28 per user per month</h4>
                        <p>Secure all your devices, people, data and endpoints and include 24-hour monitoring along with OneDrive Back-up. The Assured packages means your data is always safe and can be restored.</p>
                    </div>
                    <a href="#" class="btn-outline">LEARN MORE</a>
                </div>
            </div>
            <div class="controls"> <!--Will allow user to scroll through items in the carousel-->
                
            </div>
        </div>

        <div class="Feedback">
            <h3>FEEDBACK THAT WE</h3>
            <h2>are truly proud of</h2>
            <div class="blocks">
                <div class="block">
                    <img src="../../Media/logos/moortec-logo-2021.png" alt="Moortec">
                    <h4>Moortec</h4>
                    <h5>Infrastructure Manager</h5><br>
                    <p>“Moortec, a global IP provider of in-chip monitoring solutions for cutting-edge technologies, using the support of Consulting services from BIT Security has enabled us to establish a secure scalable network infrastructure."</p><br><br>
                    <a href="../Contact-Us.php" class="btn-outline">MORE</a>
                </div>
                <div class="block">
                    <img src="../../Media/logos/plessey.png" alt="Plessey">
                    <h4>Plessey MicroLEDs</h4>
                    <h5>IT Manager</h5><br>
                    <p>“BIT offers a wealth of security knowledge, capabilities and experience and provide an ongoing level of services and technology recommendations that ensure Plessey are as secure as possible in this insecure world. Value for money and business continuity equals BIT security services.”</p><br><br>
                    <a href="../Contact-Us.php" class="btn-outline">MORE</a>
                </div>
                <div class="block">
                    <img src="../../Media/logos/PCHomes-logo.png" alt="Plymouth Community Homes">
                    <h4>Plymouth Community Homes </h4>
                    <h5>CTO</h5><br>
                    <p>“We particularly liked BIT Group’s mission to develop community Security Operation Centres that not only proactively develops local cyber talent through their educational and bootcamp programmes but also their commitment to opening the door to diversity to fill internal positions.”</p><br><br>
                    <a href="../Contact-Us.php" class="btn-outline">MORE</a>
                </div>
            </div>
        </div>

        <?php require("../../Constants/contactForm.php"); //adds contact form?>
    </div>

    <?php require("../../Constants/footer.php"); //adds footer?>
    <script src="../../Java.js"></script> <!--Javascript for the opening of each dropdown-->
</body>
</html>