<?php
// Navigation Menu
$menuItems = ["Home", "Admission", "Student Life", "Academics", "News and Events", "Thanksgiving"];

// Info Boxes
$infoBoxes = [
    [
        "image" => "aboutus.jpg",
        "title" => "ABOUT US",
        "description" => "Taguig City University (TCU) is a public institution committed to providing quality, affordable
        education. Focused on academic excellence, innovation, and community service, TCU prepares future
        leaders for a better society."
    ],
    [
        "image" => "information.png",
        "title" => "INFORMATION",
        "description" => "Founded: 2006<br>
        Location: Taguig City, Philippines<br>
        Type: Public University<br>
        Focus: Affordable, quality education & community service"
    ],
    [
        "image" => "contactus.jpg",
        "title" => "CONTACT US",
        "description" => "Taguig City University (TCU) is a public institution committed to providing quality, affordable
        education. Focused on academic excellence, innovation, and community service, TCU prepares
        future leaders for a better society.",
        "hasButton" => true
    ]
];

// Event List
$eventList = [
    [
        "title" => "EVENTS",
        "image" => "information.png"
    ],
    [
        "title" => "ACADEMICS",
        "image" => "contactus.jpg"
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TCU Webpage</title>
    <link rel="stylesheet" href="Website.css">
</head>
<body>

<div id="HeaderTop">
    <h1 id="HeaderTopText">TAGUIG CITY UNIVERSITY</h1>
</div>

<div id="Menu">
    <?php foreach ($menuItems as $item): ?>
        <a href="#"><?php echo htmlspecialchars($item); ?></a>
    <?php endforeach; ?>
</div>

<div id="Header">
    <div id="HeaderImage"></div>
    <div id="HeaderText">
        <h1>WELCOME TO TCU</h1>
        <h2>"God is our Refuge and Strength, an ever-present help in trouble. Therefore we will not Fear"
            <br><br> - Psalm 46:1
        </h2>
        <button>APPLY NOW</button>
        <button>VISIT US</button>
    </div>
</div>

<div id="Info">
    <?php foreach ($infoBoxes as $box): ?>
        <div class="InfoBox">
            <img class="infoimage" src="<?php echo $box['image']; ?>" alt="">
            <h1 class="ImageText"><?php echo $box['title']; ?></h1>
            <h2><?php echo $box['description']; ?></h2>
            <?php if (!empty($box['hasButton'])): ?>
                <button>Website</button>
            <?php endif; ?>
        </div>
    <?php endforeach; ?>
</div>

<div class="spacer"></div>

<div id="EventList">
    <?php foreach ($eventList as $event): ?>
        <div class="Carousel">
            <h1><?php echo $event['title']; ?></h1>
            <img src="<?php echo $event['image']; ?>" alt="">
        </div>
    <?php endforeach; ?>
</div>

<div id="Citations">
    <p id="Copyrights">&copy; <?php echo date("Y"); ?> Taguig City University</p>
    <p id="Address">Upper Bicutan, Taguig City</p>
</div>

</body>
</html>
