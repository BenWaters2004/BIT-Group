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
    <title>Quality Assured Package</title>
    <meta name="keywords" content="BIT, Bluescreen, Cyber Security, South West, Phishing simulation, threat, risk, security, awareness, training, anti-virus, EDR, response, password management, backup, threat hunting, mfa" />
    <meta name="description" content="If you’re looking for complete protection, monitored and managed by our BIT Security team, then the Assured package is the perfect solution for you."/>

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
            <div class="OvalBannerText" style="margin-top: 50px;">
                <h1>Protect your business with a cyber security <br>
                <span>Assured Package</span></h1>
                <p>Assure your partners and clients of the strength of your cybersecurity measures. Our Assured Package offers comprehensive software and expert monitoring to ensure security across your entire business.</p>
            </div>
            <img src="../../Media/General/banner-man-crossed-arms.png" alt="Essentials Cyber Security Package">
        </div>

        <div class="Title-TextBlock">
            <h2>Complete protection, monitored and managed <br><span>by our BIT Security team</span></h2>
            <p>Our Assured package offers a complete assurance of your cybersecurity, managed by our expert team. It includes everything in our Essential and Extended packages, PLUS:
            <br><br>
            - Microsoft OneDrive and Sharepoint Back-up<br>
            - Endpoint Detection and Response<br>
            - Threat Hunting <br>
            - Email Filtering<br>
            - Automatic Quarantine<br>
            - Multi-Factor Authentication<br>
            - 24-hour monitoring<br>
            <br><br>
            This comprehensive integration and protection of your people, and systems ensures every aspect of your cybersecurity is covered. It goes beyond addressing the most critical business risks, keeping your business secure 24/7. Our team reacts and mitigates escalation when threats are detected. With our 24-hour response, any suspicious activity is investigated thoroughly, every time!<br><br>
            If you’re looking for complete protection, monitored and managed by our BIT Security team, then the Assured package is the perfect solution for you.</p>
        </div>

        <div class="FAQ" style="margin-bottom: -50px;">
            <h2>Your Assured Package<br>includes the following software</h2>
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

            <div class="dropdown" id="dropdown">
                <h5>Enterprise Level Password Management</h5>
                <a class="dropdown-toggle" onclick="toggleDropdown('dropdownContent5')">Expand <i class="fa-solid fa-circle-arrow-right"></i></a>
                <div class="dropdownContent" id="dropdownContent5">
                    <p>Your cyber security action plan should start with password security. Over 80% of data breaches are related to weak or stolen passwords. The password is often the only thing protecting confidential business plans, intellectual property and network access. Despite this employees and contractors often use weak passwords or reuse them.<br><br> We deploy a zero-trust password management platform. The software generates high-strength, random passwords and we will track security and compliance throughout your organisation. Implementing two-factor authentication and role-based enforcement policies helps keep businesses of any size safe from ransomware and other password-related data breaches.</p><br><br>
                </div>
            </div>

            <div class="dropdown" id="dropdown">
                <h5>Endpoint Detection and Response</h5>
                <a class="dropdown-toggle" onclick="toggleDropdown('dropdownContent6')">Expand <i class="fa-solid fa-circle-arrow-right"></i></a>
                <div class="dropdownContent" id="dropdownContent6">
                    <p>Managed Next-Generation Anti-Virus and automated Incident Response for endpoints.</p><br><br>
                </div>
            </div>

            <div class="dropdown" id="dropdown">
                <h5>Microsoft OneDrive Back-up</h5>
                <a class="dropdown-toggle" onclick="toggleDropdown('dropdownContent7')">Expand <i class="fa-solid fa-circle-arrow-right"></i></a>
                <div class="dropdownContent" id="dropdownContent7">
                    <p>Automatic and managed backups for Microsoft OneDrive accounts. Automated backups (mailboxes, teams, OneDrive and SharePoint), Recovery (mailboxes, teams, OneDrive and SharePoint), Windows-based endpoint backup and recovery, backup account activity audit.</p><br><br>
                </div>
            </div>

            <div class="dropdown" id="dropdown">
                <h5>Microsoft Sharepoint Back-up</h5>
                <a class="dropdown-toggle" onclick="toggleDropdown('dropdownContent8')">Expand <i class="fa-solid fa-circle-arrow-right"></i></a>
                <div class="dropdownContent" id="dropdownContent8">
                    <p>Automatic and managed backups for Microsoft SharePoint sites. If you suffer a data loss we will be able to restore your data.</p><br><br>
                </div>
            </div>

            <div class="dropdown" id="dropdown">
                <h5>Threat Hunting</h5>
                <a class="dropdown-toggle" onclick="toggleDropdown('dropdownContent9')">Expand <i class="fa-solid fa-circle-arrow-right"></i></a>
                <div class="dropdownContent" id="dropdownContent9">
                    <p>With Falcon OverWatch, CrowdStrike stops more than 15,000 breach attempts every year across its global customer base located in 176 countries. In addition, customers benefit from the crowdsourcing power of CrowdStrike’s fully cloud-based platform as each attack detection feeds into defenses for the entire community.</p><br><br>
                </div>
            </div>

            <div class="dropdown" id="dropdown">
                <h5>Email Security and Filtering</h5>
                <a class="dropdown-toggle" onclick="toggleDropdown('dropdownContent10')">Expand <i class="fa-solid fa-circle-arrow-right"></i></a>
                <div class="dropdownContent" id="dropdownContent10">
                    <p>Email attacks are still the number 1 vector of attack for those looking to gain entry into your environment, through phishing, spam and business email compromise, attackers have a vast arsenal of weapons at their disposal, Hornet security’s email security system provides a defence against any email based attack, and can be supplemented with backup facilities for your virtual machine and 365 environments.<br><br>365 Total Protection Business.<br>
                    Email live tracking, infomail handling, content control, compliance filter, spam and malware protection, outlook allow list and deny list, individual user signatures, 1-click intelligent Ads, Company Disclaimer, Global S/MIME & PGP Encryption, Secure Cipher Policy Control</p><br><br>
                </div>
            </div>

            <div class="dropdown" id="dropdown">
                <h5>Multi-factor Authentication</h5>
                <a class="dropdown-toggle" onclick="toggleDropdown('dropdownContent11')">Expand <i class="fa-solid fa-circle-arrow-right"></i></a>
                <div class="dropdownContent" id="dropdownContent11">
                    <p>Add defence-in-depth to your user accounts with additional authentication.</p><br><br>
                </div>
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

        <div class="Carousel" id="noMargins"> <!--noMargins so that the background colour covers full width-->
            <h3>DO YOU AND YOUR BUSINESS NEED MORE SUPPORT?</h3>
            <h2>Perhaps consider one of these alternatives…</h2>
            <div class="blocks">
                <div class="block">
                    <img src="http://localhost/BIT-Group/BIT Security\Media\Carousel-Icons\BIT-red-one-01.svg" alt="">
                    <div class="CaraText">
                        <h4>Essentials - £14 per user per month</h4>
                        <p>The minimum cyber security a business needs to implement to keep their data, people and communications safe. Keep spam emails at bay and ensure your team know how to spot a Phish.</p>
                    </div>
                    <a href="#" class="btn-outline">LEARN MORE</a>
                </div>
                <div class="block">
                    <img src="http://localhost/BIT-Group/BIT Security\Media\Carousel-Icons\BIT-red-fingerprint.svg" alt="">
                    <div class="CaraText">
                        <h4>Extended - £18 per user per month</h4>
                        <p>Level up the Essential plan with an enhanced version of password security. Secure all the digital endpoints in your business from laptops to payment devices easily and effectively.</p>
                    </div>
                    <a href="#" class="btn-outline">LEARN MORE</a>
                </div>
            </div>
            <div class="controls"> <!--Will allow user to scroll through items in the carousel-->
                
            </div>
        </div>

        <?php require("../../Constants/contactForm.php"); //adds contact form?>
    </div>

    <?php require("../../Constants/footer.php"); //adds footer?>
    <script src="../../Java.js"></script> <!--Javascript for the opening of each dropdown-->
</body>
</html>