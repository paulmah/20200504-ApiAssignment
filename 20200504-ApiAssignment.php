<?php
  // Submit a request to the API endpoint.
  $authorJSONString = file_get_contents( 'http://openlibrary.org/authors/OL1A.json' );
  $authorObject = json_decode( $authorJSONString );
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>External API Assignment - Author</title>
</head>
<body>
  <h1>External API Assignment - Author</h1>
  <dl>
    <dt>Full Name</dt>
    <dd>
      <?php echo $author->name; ?>
    </dd>
  </dl>
</body>
</html>