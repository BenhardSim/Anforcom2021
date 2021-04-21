<!DOCTYPE html>
<html lang="en">
  <head>
    <title>{{ env('APP_NAME', 'Anforcom') }}</title>

    <!-- Meta tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/images/favicon/apple-touch-icon.png') }}" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/favicon/favicon-32x32.png') }}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicon/favicon-16x16.png') }}" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

    <!-- Style CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/comingsoon.css') }}"/>
  </head>
  <body>
    <!-- ComingSoon start -->
    <section class="ComingSoon">
      <div class="container">
        <!-- Logo start -->
        <div class="row">
          <div class="col-lg-12">
            <div class="d-flex justify-content-center">
              <div class="single-logo mt-30">
                <img src="{{ asset('assets/images/comingsoon/undip.png') }}" alt="undip">
              </div>
              <div class="single-logo mt-30">
                <img src="{{ asset('assets/images/comingsoon/hmif.png') }}" alt="hmif">
              </div>
              <div class="single-logo mt-30">
                <img src="{{ asset('assets/images/comingsoon/kompas.png') }}" alt="kompas">
              </div>
              <div class="single-logo mt-30 bawah">
                <img src="{{ asset('assets/images/comingsoon/anforcom.png') }}" alt="anforcom">
              </div>
            </div>
          </div>
        </div>
        <!-- Logo end -->
        <p>One of the <span style="font-weight: 600">greatest</span> IT event is back!</p>
        <h1 id="headline">Anforcom 2021</h1>
        <div id="countdown">
          <ul>
            <li class="pisah">Days<span id="days"></span></li>
            <li>Hours<span id="hours"></span></li>
            <li>Minutes<span id="minutes"></span></li>
            <li>Seconds<span id="seconds"></span></li>
          </ul>
        </div>
        <div class="tombol">
          <ul class="slider-btn rounded-buttons">
            <li><a class="main-btn rounded-one" target="_blank" href="https://calendar.google.com/event?action=TEMPLATE&tmeid=MGNubWNrdjk5Nm05bm5tZ2w3Y3MwNTFzajIgZHV0ZzJ1MDBrYmFjcTJuNXE2NGwybXVpNXNAZw&tmsrc=dutg2u00kbacq2n5q64l2mui5s%40group.calendar.google.com">Add To Calendar</a></li>
            <button class="main-btn rounded-one" onclick="myFunction()">Share Event</button>
            <input class="hidden" type="text" value="https://www.instagram.com/anforcom/" id="myInput">
          </ul>
        </div>
      </div>
    </section>
    <!-- ComingSoon end -->

    <script src="{{ asset('assets/js/comingsoon.js') }}"></script>
  </body>
</html>
