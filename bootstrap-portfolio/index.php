<?php

function get_CURL($url)
{
  $curl = curl_init();
  curl_setopt($curl, CURLOPT_URL, $url);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
  $result = curl_exec($curl);
  curl_close($curl);
  return json_decode($result, true);
}

$result = get_CURL('https://www.googleapis.com/youtube/v3/channels?part=snippet,statistics&id=UCkXmLjEr95LVtGuIm3l2dPg&key=AIzaSyAgTvKRb4bEeWoA1N5zEXT4rzhdoR_qkhI');

$youtubeProfilePic = $result['items'][0]['snippet']['thumbnails']['medium']['url'];
$channelName = $result['items'][0]['snippet']['title'];
$subscribers = $result['items'][0]['statistics']['subscriberCount'];

// latest vidoe
$result = get_CURL('https://www.googleapis.com/youtube/v3/search?key=AIzaSyAgTvKRb4bEeWoA1N5zEXT4rzhdoR_qkhI&channelId=UCkXmLjEr95LVtGuIm3l2dPg&maxResults=1&order=date&part=snippet');
$latestVideo = $result['items'][0]['id']['videoId'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>My Porfolio</title>

  <!-- Bootstrap -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

  <!-- jumbotron -->
  <div class="jumbotron text-center">
    <img src="img/sandhika.png" class="img-circle">
    <h1>Sandhika Galih</h1>
    <p>Lecturer | Web Developer | YouTuber</p>
  </div>
  <!-- akhir jumbotron -->


  <!-- about -->
  <section class="about" id="about">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h2 class="text-center">About</h2>
          <hr>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-5 col-sm-offset-1">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta aut fuga recusandae ad vero voluptates voluptatibus iusto expedita voluptas animi itaque, ratione commodi pariatur. Quia veniam hic eius iure quis.</p>
        </div>
        <div class="col-sm-5">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla ipsam, veritatis nesciunt eveniet voluptas labore quidem recusandae enim, repudiandae ab accusantium consectetur minus optio adipisci voluptates omnis consequuntur dolore qui?</p>
        </div>
      </div>
    </div>
  </section>
  <!-- akhir about -->

  <!-- Youtube & IG -->
  <section class="social bg-light" id="social">
    <div class="container">
      <div class="row pt-4 mb-4">
        <div class="col text-center">
          <h2>Sosial Media</h2>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-5">
          <div class="row">
            <div class="col-md-4">
              <img src="<?= $youtubeProfilePic; ?>" alt="" width="200" class="rounded-circle img-thumbnail">
            </div>
            <div class="col-md-8">
              <h5><?= $channelName; ?></h5>
              <p><?= $subscribers; ?> Subscribers.</p>
              <div class="g-ytsubscribe" data-channelid="UCkXmLjEr95LVtGuIm3l2dPg" data-layout="default" data-count="default"></div>
            </div>
          </div>
          <div class="row mt-3 pb-3">
            <div class="col">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?= $latestVideo; ?>?rel=0" allowfullscreen></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- portfolio -->
  <section class="portfolio" id="portfolio">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 text-center">
          <h2>Portfolio</h2>
          <hr>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-4">
          <a href="" class="thumbnail">
            <img src="img/portfolio/1.png">
          </a>
        </div>
        <div class="col-sm-4">
          <a href="" class="thumbnail">
            <img src="img/portfolio/2.png">
          </a>
        </div>
        <div class="col-sm-4">
          <a href="" class="thumbnail">
            <img src="img/portfolio/3.png">
          </a>
        </div>
        <div class="col-sm-4">
          <a href="" class="thumbnail">
            <img src="img/portfolio/4.png">
          </a>
        </div>
        <div class="col-sm-4">
          <a href="" class="thumbnail">
            <img src="img/portfolio/5.png">
          </a>
        </div>
        <div class="col-sm-4">
          <a href="" class="thumbnail">
            <img src="img/portfolio/6.png">
          </a>
        </div>
      </div>

    </div>
  </section>
  <!-- akhir portfolio -->


  <!-- contact -->
  <section class="contact" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 text-center">
          <h2>Contact</h2>
          <hr>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
          <form>
            <div class="form-group">
              <label for="nama">Nama</label>
              <input type="text" id="nama" class="form-control" placeholder="masukkan nama">
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" id="email" class="form-control" placeholder="masukkan email">
            </div>
            <div class="form-group">
              <label for="telp">No Telepon</label>
              <input type="tel" id="telp" class="form-control" placeholder="masukkan no telepon">
            </div>
            <select class="form-control">
              <option>-- Pilih Kategori --</option>
              <option>Web Design</option>
              <option>Web Development</option>
            </select>
            <div class="form-group">
              <label for="pesan">Pesan</label>
              <textarea class="form-control" rows="10" placeholder="masukkan pesan"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Kirim Pesan</button>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- akhir contact -->


  <!-- footer -->
  <footer>
    <div class="container text-center">
      <div class="row">
        <div class="col-sm-12">
          <p>&copy; copyright 2017 | built with <i class="glyphicon glyphicon-heart"></i> by. <a href="http://instagram.com/sandhikagalih">Sandhika Galih</a>.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12">
          <a href="http://youtube.com/webprogrammingunpas" class="btn btn-danger"><i class="glyphicon glyphicon-play"></i> Subscribe to YouTube</a>
        </div>
      </div>
    </div>
  </footer>
  <!-- akhir footer -->


  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
  <script src="https://apis.google.com/js/platform.js"></script>
</body>

</html>