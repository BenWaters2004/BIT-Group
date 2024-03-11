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
    <title>Fast FAQs</title>
    <meta name="keywords" content="BIT, Bluescreen, Cyber Security, southwest, help, questions, infomation, support, IT, DBS, BPSS, Phishing, password, benefits" />
    <meta name="description" content="Answers to the most frequent questions. What do we do? Where are we? How can I get in touch?"/>

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
                <h1><br><br>Frequently
                <span>asked questions (FAQs)</span></h1>
                <p>We are BIT Security, a company focused on ensuring your business has effective cyber security. We cover all security aspects from Cyber Essentials, ISO27001, to implementation and management of your email, network and data security. We consistently train your team to be aware of the latest threats and support your organisation to ensure you have the proper protocols and protection to remain secure.</p>
            </div>
            <img src="../../Media/General/banner-guy-laptop.png" alt="Questions">
        </div>

        <div class="FAQ">
            <div class="dropdown" id="dropdown">
                <h5>What do we do?</h5>
                <a class="dropdown-toggle" onclick="toggleDropdown('dropdownContent1')">Expand <i class="fa-solid fa-circle-arrow-right"></i></a>
                <div class="dropdownContent" id="dropdownContent1">
                    <p>We ensure your company is cyber aware and cyber secure. We implement software to track, train and inform us of threats/harmful infiltration. We offer several packages to cover distinct aspects of cyber security. We can tailor our packages to suit your specific requirements or choose the one your organisation requires.</p><br><br>
                </div>
            </div>

            <div class="dropdown" id="dropdown">
                <h5>How do we help our clients?</h5>
                <a class="dropdown-toggle" onclick="toggleDropdown('dropdownContent2')">Expand <i class="fa-solid fa-circle-arrow-right"></i></a>
                <div class="dropdownContent" id="dropdownContent2">
                    <p>Most of our support and products can be deployed remotely. We review, and keep you up to date with the information our products give, such as staff training, and how the team are performing on spotting threats and phishing emails designed to trick employees and owners into giving access to sensitive data or to compromise an email account to infiltrate your client networks.</p><br><br>
                </div>
            </div>

            <div class="dropdown" id="dropdown">
                <h5>What are our unique selling points?</h5>
                <a class="dropdown-toggle" onclick="toggleDropdown('dropdownContent3')">Expand <i class="fa-solid fa-circle-arrow-right"></i></a>
                <div class="dropdownContent" id="dropdownContent3">
                    <p>We support clients nationally from our location in Plymouth, with people working for us across the UK. We respond quickly with a real person. We are passionate about levelling up cyber security for businesses which remains a huge threat to the UK economy.<br><br>‘Four in five (82%) of boards or senior management within UK businesses rate cyber security as a ‘very high’ or ‘fairly high’ priority’. (Department of Culture, and Sports Cyber Security Breach Survey 2022).</p><br><br>
                </div>
            </div>

            <div class="dropdown" id="dropdown">
                <h5>What is our approach to Cyber Security?</h5>
                <a class="dropdown-toggle" onclick="toggleDropdown('dropdownContent4')">Expand <i class="fa-solid fa-circle-arrow-right"></i></a>
                <div class="dropdownContent" id="dropdownContent4">
                    <p>We provide guidance on certifications such as ISO27001 and Cyber Essentials, supporting the assessment process and ensuring the required protocols are in place and active. We also offer cost-effective packages for our managed services and products, ensuring cyber security to the level your business needs.</p><br><br>
                </div>
            </div>

            <div class="dropdown" id="dropdown">
                <h5>Where are you based?</h5>
                <a class="dropdown-toggle" onclick="toggleDropdown('dropdownContent5')">Expand <i class="fa-solid fa-circle-arrow-right"></i></a>
                <div class="dropdownContent" id="dropdownContent5">
                    <p>Our team is based in Plymouth, Dorset and Liverpool.</p><br><br>
                </div>
            </div>

            <div class="dropdown" id="dropdown">
                <h5>How can I get in touch?</h5>
                <a class="dropdown-toggle" onclick="toggleDropdown('dropdownContent6')">Expand <i class="fa-solid fa-circle-arrow-right"></i></a>
                <div class="dropdownContent" id="dropdownContent6">
                    <p>Visit our Contact Us page to find all the different ways you can get in touch with us.</p><br><br>
                </div>
            </div>

            <div class="dropdown" id="dropdown">
                <h5>Who do we help?</h5>
                <a class="dropdown-toggle" onclick="toggleDropdown('dropdownContent7')">Expand <i class="fa-solid fa-circle-arrow-right"></i></a>
                <div class="dropdownContent" id="dropdownContent7">
                    <p>We support small/medium IT Teams and businesses that need to implement better their Cyber Security. We work with businesses in any sector, because every business has data, customers and employees and our security solutions protect these aspects of business</p><br><br>
                </div>
            </div>

            <div class="dropdown" id="dropdown">
                <h5>Can you build bespoke packages?</h5>
                <a class="dropdown-toggle" onclick="toggleDropdown('dropdownContent8')">Expand <i class="fa-solid fa-circle-arrow-right"></i></a>
                <div class="dropdownContent" id="dropdownContent8">
                    <p>We can be flexible on any of the products in our packages. We normally review your requirements and price a monthly cost per user. The packages are designed to guide you to the requirements for a monthly cost and you can choose to add or retract from these bundles. We can offer free trials of some of the packages to see if they are useful and work well for your organisation.</p><br><br>
                </div>
            </div>
            
        </div>


        <?php require("../../Constants/contactForm.php"); //adds contact form?>
    </div>

    <?php require("../../Constants/footer.php"); //adds footer?>
    <script src="../../Java.js"></script> <!--Javascript for the opening of each question dropdown-->
</body>
</html>