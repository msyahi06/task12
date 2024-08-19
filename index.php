<?php
$data = [
                [
                  "position" => 1,
                  "url" => "https =>//www.nike.com/",
                  "title" => "Nike. Just Do It. Nike.com",
                  "description" => "Nike delivers innovative products, experiences and services to inspire athletes."
                ],
                [
                  "position" => 2,
                  "url" => "https =>//www.instagram.com/nike/?hl=de",
                  "title" => "Nike (@nike) • Instagram photos and videos",
                  "description" => "255m Followers, 147 Following, 1019 Posts - See Instagram photos and videos from Nike (@nike)"
                ],
                [
                  "position" => 3,
                  "url" => "https =>//twitter.com/nike",
                  "title" => "Nike - Twitter",
                  "description" => "Welcome to Nike FC. We're not a club. We're a community. If you love the game of football, you're a part of Nike FC. Let's change the game, ..."
                ],
                [
                  "position" => 4,
                  "url" => "https =>//en.wikipedia.org/wiki/Nike,_Inc.",
                  "title" => "Nike, Inc. - Wikipedia",
                  "description" => "Nike, Inc is an American multinational corporation that is engaged in the design, development, manufacturing, and worldwide marketing and sales of footwear, ..."
                ],
                [
                  "position" => 5,
                  "url" => "https =>//www.youtube.com/user/nike",
                  "title" => "Nike - YouTube",
                  "description" => "We will continue to stand up for equality and work to break down barriers for athletes* all over the world. We will do and invest more to uphold ..."
                ],
                [
                  "position" => 6,
                  "url" => "https =>//www.footlocker.com/category/brands/nike.html",
                  "title" => "Nike Sneakers, Apparel, and Accessories - Foot Locker",
                  "description" => "Shop the latest selection of Nike at Foot Locker. Find the hottest sneaker drops from brands like Jordan, Nike, Under Armour, ..."
                ],
                [
                  "position" => 7,
                  "url" => "https =>//stockx.com/nike",
                  "title" => "Buy Nike Shoes & New Sneakers - StockX",
                  "description" => "Buy and sell Nike shoes at the best price on StockX, the live marketplace for StockX Verified Nike sneakers and other popular new releases."
                ],
                [
                  "position" => 8,
                  "url" => "https =>//play.google.com/store/apps/details?id=com.nike.omega&hl=en_US&gl=US",
                  "title" => "Nike => Shoes, Apparel & Stories - Apps on Google Play",
                  "description" => "Shop all perfect gifts for sport and style this Nike holiday season. Nike Member Exclusive products, end of year deals, and more - shop and ..."
                ],
                [
                  "position" => 9,
                  "url" => "https =>//de-de.facebook.com/nike/",
                  "title" => "Nike - Home | Facebook",
                  "description" => "Nike, Beaverton, OR. 36093752 likes · 306235 talking about this · 7259 were here. Just Do It."
                ],
                [
                  "position" => 10,
                  "url" => "https =>//www.linkedin.com/company/nike",
                  "title" => "Nike - LinkedIn",
                  "description" => "NIKE, Inc., named for the Greek goddess of victory, is the world's leading designer, marketer, and distributor of authentic athletic footwear, apparel, ..."
                ]
              ];

$itemsperpage = 5;
$page = isset($_GET['page']) ? (int)$_GET['page'] :1 ;

$offset = ($page - 1) * $itemsperpage;
$currentData = array_slice($data, $offset, $itemsperpage);   

echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<tr><th>URL</th><th>Title</th><th>Description</th></tr>";
foreach ($currentData as $item) {
  echo "<tr>";
  echo "<td><a href='{$item['url']}' target='_blank'>{$item['url']}</a></td>";
  echo "<td> {$item['title']}</td>";
  echo "<td> {$item['description']}</td>";
  echo "</tr>";
}
echo "</table>";

$totalpages = ceil(count($data) / $itemsperpage);

echo "<form action='selanjutnya.php' method='GET'>";
for ($i = 1; $i <= $totalpages; $i++) {
  echo "<button type='submit' name='pages' value='{$i}'>$i</button>";
}
echo "</form>";
            ?>
