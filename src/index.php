<?php
$dsn = 'mysql:dbname=mydatabase;host=mysql;port=3306';
$username = 'admin';
$password = '1234';

try {
  $connection = new PDO($dsn, $username, $password);
  $singer = $connection->prepare("SELECT * FROM porter_robinson");
  $singer->execute();

  $songs = $singer->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
  echo "Connection failed: " . $e->getMessage() . " (" . $e->getCode() . ")";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Porter Robinson Songs</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 text-gray-800">
  <div class="container mx-auto px-4 py-8">
    <header class="flex justify-center mb-8">
      <h1 class="text-5xl font-bold">PORTER ROBINSON</h1>
    </header>

    <section class="bg-white shadow-md rounded-lg p-6 mb-8">
      <h2 class="text-2xl font-bold mb-4 text-center">Who is Porter Robinson?</h2>
      <p class="text-justify">
        Porter Robinson is an American electronic music producer, singer, and DJ known for his emotive and
        genre-blending sound. Born on July 15, 1992, in Atlanta, Georgia, he gained prominence with his 2011 single
        "Language" and debut album <em>Worlds</em> (2014), which showcased a unique blend of electronic, synth-pop, and
        indie elements. Robinson's music often explores themes of nostalgia, escapism, and personal growth. He released
        the critically acclaimed album <em>Nurture</em> in 2021, marking a shift to a more introspective and organic
        sound. Robinson is also part of the duo Virtual Self, known for its futuristic, rave-inspired music.
      </p>
    </section>

    <section class="bg-white shadow-md rounded-lg p-6">
      <h2 class="text-2xl font-bold mb-4 text-center">His works</h2>
      <div class="flex flex-wrap">
        <?php foreach ($songs as $data) {
          $image = ($data["image"]);
          $title = ($data["title"]);
          $author = ($data["author"]);
          $desc = ($data["desc"]);
          ?>
          <div class="flex flex-col w-1/3 p-4">
            <img src='<?php echo $image; ?>' class="flex self-center rounded-lg mb-4 w-[360px]">
            <div class="text-xl font-bold text-center"><?php echo $title; ?></div>
            <div class="text-lg text-center italic mb-2"><?php echo $author; ?></div>
            <div class="self-center text-justify w-[380px]"><?php echo $desc; ?></div>
          </div>
        <?php } ?>

      </div>
    </section>
  </div>

  <footer>
    <div class="bg-gray-800 text-white text-center py-4">
      <p>Part of ITE220 - Web Development II (Instructor: Mohammadamin Dadras) by Pumin Whungprasit</p>
    </div>
  </footer>

</body>

</html>