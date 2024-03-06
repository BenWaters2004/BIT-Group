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
    <title>Contact Us - BIT Security</title>
    <meta name="keywords" content="BIT, Bluescreen, Cyber Security, SOC, SIEM, Pentesting, South West, Cyber essentials, EDR, Phishing simulation, password management, pre  employment screening,  EDR" />
    <meta name="description" content="BIT Cyber Security services provides you with swift, clear advice and an expert eye on your network to reduce the threat of cyber incidents. Find out more here"/>

    <!--Styling-->
    <link rel="stylesheet" href="https://use.typekit.net/rbj1mem.css">
    <link rel="stylesheet" href="../CSS/global.css">
    <link rel="stylesheet" href="../CSS/Main.css">
    
    <?php 
    require("../Constants/header.php");
    ?>
</head>
<body>
    <div class="margins">
        <div class="ContactBanner">
            <div class="ContactBannerText">
                <h2>Start the <br>conversation</h2>
                <h1>Contact us and see what we can offer.</h1>
                <p>Please fill out the form below and we'll get the right team to get in touch with you shortly.<br><br>
                If you have any questions please consider reading our <a href="#">FAQ page</a> first</p>
            </div>
            <img src="../Media/General/employer-portrait.png" alt="Contact Us">
        </div>

        <?php require("../Constants/contactForm.php");?>

        <div class="image-container"></div>
        <div class="Locations">
            <h3>FIND A SECURITY OPERATIONS CENTRE</h3>
            <h4>NEAR YOU</h4>

            <div class="dropdown" id="dropdown">
                <h5>Plymouth - Headquarters</h5>
                <a class="dropdown-toggle" onclick="toggleDropdown('dropdownContent1')">Open <i class="fa-solid fa-circle-arrow-right"></i></a>
                <div class="dropdownContent" id="dropdownContent1">
                    <p>Plymouth Science Park,<br>
                    1 Davy Rd, Plymouth,<br>
                    Devon PL6 8BX</p>
                    <p><span>+44 (0)1752 724 000<br>
                    sales@thinkbitgroup.co.uk</span></p>
                </div>
            </div>
            <div class="dropdown" id="dropdown">
                <h5>CEME</h5>
                <a class="dropdown-toggle" onclick="toggleDropdown('dropdownContent2')">Open <i class="fa-solid fa-circle-arrow-right"></i></a>
                <div class="dropdownContent" id="dropdownContent2">
                    <p>CEME Business Campus,<br>
                    Marsh Way,<br>
                    Rainham RM13 8EU</p>
                    <p><span>+44 (0)1752 724 000<br>
                    sales@thinkbitgroup.co.uk</span></p>
                </div>
            </div>
            <div class="dropdown" id="dropdown">
                <h5>Liverpool</h5>
                <a class="dropdown-toggle" onclick="toggleDropdown('dropdownContent3')">Open <i class="fa-solid fa-circle-arrow-right"></i></a>
                <div class="dropdownContent" id="dropdownContent3">
                    <p>Hugh Baird CyberHub,<br>
                    Hugh Baird College, Balliol Rd, Bootle,<br>
                    Liverpool L20 7EW</p>
                    <p><span>+44 (0)1752 724 000<br>
                    sales@thinkbitgroup.co.uk</span></p>
                </div>
            </div>
            <div class="dropdown" id="dropdown">
                <h5>Birmingham</h5>
                <a class="dropdown-toggle" onclick="toggleDropdown('dropdownContent4')">Open <i class="fa-solid fa-circle-arrow-right"></i></a>
                <div class="dropdownContent" id="dropdownContent4">
                    <p>BMet CyberHub,<br>
                    Matthew Boulton, Jennens Road,<br>
                    Birmingham B4 7PS</p>
                    <p><span>+44 (0)1752 724 000<br>
                    sales@thinkbitgroup.co.uk</span></p>
                </div>
            </div>
        </div>
    </div>

    <?php require("../Constants/footer.php");?>
    <script src="../Java.js"></script>
</body>
</html>

<!-- <i class="fa-solid fa-chevron-down"></i> -->