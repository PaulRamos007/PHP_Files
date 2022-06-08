<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="youtube.css" rel="stylesheet">
    <title>YouTube Data Api Demo</title>

</head>

<body>
    <main>
        <form action="youtube.php" method="GET">
            <p>
                <label for="search">Search</label>
                <input type="text" id="search" name="search" placeholder="Search Term" value="<?php echo isset($_GET["search"]) ? $_GET["search"] : ''; ?>">
            <p>
                <label for=" search">Max Results</label>
                <input type="text" id="name" name="maxResults" placeholder="Results Requested" value="<?php echo isset($_GET["maxResults"]) ? $_GET["maxResults"] : ''; ?>">
            </p>
            <button type=" submit">Submit</button>
        </form>
        <?php
        if (($_SERVER['REQUEST_METHOD'] === 'GET') && !empty($_GET['search'])) {
            $apiKey = "";
            $search = $_GET['search'];
            $maxResults = 5;
            if (!empty($_GET['maxResults'])) {
                $maxResults = $_GET['maxResults'];
            }

            $url = "https://youtube.googleapis.com/youtube/v3/search?part=snippet&maxResults=" . rawurlencode($maxResults) . "&q=" . rawurlencode($search) . "&key=" . rawurldecode($apiKey);

            //@ is used to suppress warnings
            if ($response = @file_get_contents($url)) {
                $resultObj = json_decode($response);
                foreach ($resultObj->items as $item) {
                    if (isset($item->id->videoId)) {
                        $vId = $item->id->videoId;
                        $vTitle = $item->snippet->title;
                        $vChannel = $item->snippet->channelTitle;

        ?>

                        <div class='video'>
                            <h3>Channel <?= $vChannel; ?> Presents</h3>
                            <h4> <?= $vTitle; ?></h4>
                            <iframe width="280" height="150" src="https://youtube.com/embed/<?= $vId; ?>" frameborders="0" allowfullscreen></iframe>
                        </div>

        <?php
                    }
                }
            } else {
                echo "No results for your $search found";
            }
        } else {
            echo "Use the form to search youtube";
        }
        ?>
    </main>
</body>

</html>
