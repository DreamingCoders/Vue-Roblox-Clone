<?php
// ===== API Fetch Helper =====
function callAPI($method, $url, $data = false) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    switch (strtoupper($method)) {
        case "POST":
            curl_setopt($ch, CURLOPT_POST, 1);
            if ($data) curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
            break;
        case "PUT":
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
            if ($data) curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
            break;
        default: // GET
            if ($data) $url = sprintf("%s?%s", $url, http_build_query($data));
            break;
    }

    $result = curl_exec($ch);
    if (curl_errno($ch)) {
        die("cURL error: " . curl_error($ch));
    }
    curl_close($ch);

    return $result;
}

// ===== Example API Call (Roblox or custom) =====
$apiUrl = "https://example.net/api/foobar.php"; 
//$apiUrl = "https://api.rolimons.com/items/v1/itemdetails"; // Example Roblox items API
$get_data = callAPI("GET", $apiUrl);

$response = json_decode($get_data, true);

// Extract something meaningful (adjust depending on API structure)
$data = $response ?? [];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>API Scraper Example</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <style>
    body { font-family: Arial, sans-serif; margin: 20px; }
    h2 { color: #444; }
    .api-box { padding: 10px; background: #f4f4f4; border-radius: 6px; margin-top: 10px; }
  </style>
</head>
<body>

  <h2>Trading API Scraper</h2>
  <hr>

  <h3>Server-Side (PHP Fetch):</h3>
  <div class="api-box">
    <pre><?php echo htmlspecialchars(print_r($data, true)); ?></pre>
  </div>

  <h3>Client-Side (AJAX Fetch):</h3>
  <div id="content" class="api-box">Loading...</div>

  <script>
  $(function(){
    // Load API JSON directly into a div
    $.getJSON("<?php echo $apiUrl; ?>", function(data) {
      let html = "<ul>";
      $.each(data, function(key, val) {
        html += "<li><b>" + key + ":</b> " + JSON.stringify(val) + "</li>";
      });
      html += "</ul>";
      $("#content").html(html);
    });
  });
  </script>

</body>
</html>
