<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="./assets/favicon.png" type="image/x-icon">
    <title>FITNESS - Gym Club</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    @include('parts/menu')

    @include('parts/slider')

  <div class="m-5 p-5" >
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      <div class="col-10 col-sm-8 col-lg-6">
        <img src="./assets/struttura.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
      </div>
      <div class="col-lg-6">
        <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">La nostra struttura</h1>
        <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam reiciendis, commodi neque officia quae pariatur, soluta laborum temporibus dolore blanditiis, dignissimos dolor distinctio voluptatem id molestiae aspernatur! Totam, voluptas iure.
        A error repellendus quaerat optio? Esse velit commodi quidem perferendis asperiores beatae minima quae numquam, ducimus repellat quam placeat, omnis dolorem totam amet provident similique optio illo hic soluta doloribus?
        Dolores incidunt totam repudiandae mollitia consequuntur consectetur labore perspiciatis, ratione obcaecati laboriosam culpa a, est maiores rem excepturi. Quaerat, provident. Sed quo eligendi eveniet voluptatem quis ipsam pariatur molestiae tempora?</p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
          <button type="button" class="btn btn-dark btn-lg px-4 me-md-2">Più info</button>
        </div>
      </div>
    </div>
    </div>

    @include('parts/footer')
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>