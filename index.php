<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once $_SERVER['DOCUMENT_ROOT'] . "/assets/php/header.php" ?>
    <link rel="stylesheet" href="/assets/css/min/home.min.css">
</head>

<body>
    <?php
    $page = 0;
    include_once $_SERVER["DOCUMENT_ROOT"] . "/assets/php/nav.php";
    ?>
    <div id="landing" class="col center horizontal vertical">
        <img src="/assets/images/logo.svg" alt="">
        <div id="cta" class="row">
            <a href="https://maineadventures.org/booking?ref=blackhat" target="_blank" class="btn" title="Book your trip on Maine Adventures">book a trip</a>
            <a href="/packages" class="btn secondary" title="Goto the packages page">view our packages</a>
        </div>
        <img id="scroll-indicator" src="/assets/images/scroll-indicator.svg" alt="" title="scroll to content">
    </div>

    <section id="what-do-we-do" class="row">
        <div class="row">
            <img src="/assets/images/deer.webp" alt="">
        </div>
        <div class="col">
            <h1>What do we do?</h1>

            <div class="content">
                <p>
                    As a family, we manage 9,000 acres of privately owned property dedicated to recreational hunts. We also reside and operate a year-round campground situated in the heart of this expansive land. The property's access is exclusively restricted to our clients, ensuring that the wildlife can thrive and reach its full potential. We diligently observe and monitor the wildlife using trail cameras and engage in extensive footwork throughout the year. Scouting is our favorite pastime, as we closely monitor trails leading to food sources, while continuously adding and maintaining Food Plots to sustain the local wildlife.
                </p>

                <p>
                    As stewards of this vast 9,000-acre property, our family takes great pride in ensuring its optimal management for recreational hunts. The property's exclusivity, with restricted access limited only to our clients, creates a sanctuary where wildlife can flourish undisturbed. By maintaining such control over access, we are able to preserve the natural balance and foster an environment where animals can thrive and reach their full potential.
                </p>

                <p>
                    Throughout the year, our commitment to wildlife conservation is evident in the meticulous care we dedicate to monitoring and observing the resident fauna. We employ a combination of modern technology and good old-fashioned footwork to keep a watchful eye on the creatures that call this property home. Trail cameras strategically placed throughout the land provide invaluable insights into the habits and behaviors of various species, allowing us to track their movements and gain a deeper understanding of their needs.
                </p>

                <p>
                    However, it is not solely through technological means that we ensure the well-being of the wildlife. Our family enthusiastically engages in the art of scouting, which has become a beloved pastime for us. We eagerly explore the terrain, meticulously surveying the trails that lead to vital food sources. By closely monitoring these pathways, we can anticipate the animals' movements and establish a deeper connection with the land. Additionally, we continuously enhance the habitat by adding and tending to Food Plots. These purposefully cultivated areas provide a sustainable food source for the wildlife, supporting their overall health and contributing to the thriving ecosystem that exists within the property.
                </p>
                <p>
                    In our year-round campground located at the heart of this magnificent landscape, we not only witness the wonders of nature firsthand but also serve as advocates for its conservation. We believe that by responsibly managing this property, we play a vital role in preserving and protecting the local wildlife, ensuring that future generations can continue to experience the beauty and bounty it offers.
                </p>
            </div>
            <a href="/gallery" class="btn" title="Goto the gallery page">View Gallery</a>
        </div>
    </section>

    <section id="lodging" class="row">
        <div class="col">
            <h1>Lodging??</h1>

            <div class="content">
                Lodging is provided by Maine Adventures!
                <p>
                    Lodging is included in the package price. The cabins are propane-based and feature heating, lights, a refrigerator, and a 4-burner cooktop. Cookware, utensils, dishes, a percolator, dish soap, and dishcloths are all provided. However, you'll need to bring your own food and handle the cooking. Bedding and pillows are also provided. Water is portaged to you in a 7-gallon container from an on-site well. Outhouses are conveniently located nearby. Showers are available at the lodge from 5:00 pm to 7:30 pm for $2 per non-hunting person. Hunters have a free shower included in their hunting package.
                </p>
                <p>
                    Hunts take place from Sunday to Sunday, as there is no hunting on Sundays in Maine. Please plan your arrival for 1:00 pm or later on the Sunday before your hunt. Departure should be by 11:00 am or earlier on the Sunday following your hunt.
                </p>
                <p>
                    Additionally, there are campsites available. Power/Water sites are situated along the water, while Primitive sites offer more seclusion in the woods.
                </p>
                <p>
                    We offer a range of hunting packages tailored to both big and small game enthusiasts. Whether you prefer a guided or semi-guided experience, we have you covered. Our team is dedicated to providing exceptional services and ensuring that your hunting trip is an unforgettable adventure.
                </p>
                <p>
                    Are you seeking the thrill of hunting black bears? Look no further! Our world-class black bear hunts are designed to deliver an exhilarating experience in the wild. With expert guides by your side, you'll have the opportunity to track and pursue these magnificent creatures, creating memories that will last a lifetime.
                </p>
                <p>
                    For those who dream of pursuing the majestic moose, our trophy moose hunts in Zones 4 and 9 are perfect for you. These areas are known for their abundant moose population, providing an excellent chance for a successful hunt. Whether you prefer the challenge of a self-guided expedition or the support of a knowledgeable guide, we offer options to suit your preferences.
                </p>
                <p>
                    If you're interested in smaller game, our grouse packages are sure to delight. Immerse yourself in the beauty of the wilderness while hunting these elusive birds. Additionally, we provide thrilling whitetail hunts, allowing you to test your skills in pursuit of these prized deer.
                </p>
                <p>
                    Join us for an unparalleled hunting experience that combines adventure, expertise, and a deep appreciation for the great outdoors. Contact us now to learn more about our packages and book your next hunting expedition.
                </p>
            </div>
            <a href="https://maineadventures.org" class="btn" title="Goto the Maine Adventures site">View Maine Adventures</a>
        </div>

        <div class="row">
            <img src="/assets/images/moose.webp" alt="">
        </div>
    </section>

    <section id="contact-us">
        <h1>Contact Us</h1>
        <div class="row">
            <div id="contact-items" class="col">
                <a class="contact-item row center vertical" href="tel:(207) 692-7317">
                    <i class="fa-solid fa-phone"></i>
                    <div class="col">
                        <p class="title">phone</p>
                        <p class="value">(207) 692-7317</p>
                    </div>
                </a>
                <a class="contact-item row center vertical" href="mailto:john.doe@example.com">
                    <i class="fa-solid fa-paper-plane"></i>
                    <div class="col">
                        <p class="title">email</p>
                        <p class="value">john.doe@example.com</p>
                    </div>
                </a>
                <div class="contact-item row center vertical">
                    <i class="fa-solid fa-envelope"></i>
                    <div class="col">
                        <p class="title">mail</p>
                        <p class="value">P.O. Box 396 Millinocket, ME 04462</p>
                    </div>
                </div>
            </div>
            <iframe id="map" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5554.9241316447815!2d-69.222342!3d45.882071!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x81e08b7556a8c8e3!2sAllagash%20Gateway!5e0!3m2!1sen!2sus!4v1674368904758!5m2!1sen!2sus" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>

    <?php include_once $_SERVER["DOCUMENT_ROOT"] . "/assets/php/footer.php"; ?>

</body>

</html>