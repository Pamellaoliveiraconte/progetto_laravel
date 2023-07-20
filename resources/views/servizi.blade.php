<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>I nostri servizi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    @include('parts/menu')

    <div class="px-4 py-5 my-5 bg-light  text-center">
    <h1 class="display-5 fw-bold text-body-emphasis">I nostri servizi</h1>
    <div class="col-lg-6 mx-auto">
      <p class="lead mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, velit quae est eaque laborum non, fuga doloremque illo, aliquid soluta libero? Enim, quod et ex ad fugit ipsam officia facere.
      Nesciunt aperiam, quidem maxime obcaecati, fugit cum quos quaerat maiores molestiae rerum eaque libero non? Tenetur placeat officiis assumenda! Ratione, inventore impedit eum voluptatem culpa consequuntur molestiae quidem quis vitae.
      Vitae aut, qui doloribus consequuntur eaque saepe et aliquam tempore. Rerum ab est omnis. Ratione doloribus placeat dolor vitae, aliquam illum fuga tempore adipisci veniam mollitia dolorum sint, earum aut?
      Sint natus expedita nisi autem, iure obcaecati alias culpa repudiandae, reprehenderit, accusamus quas recusandae dicta ullam laudantium corrupti quis quam at nemo aperiam harum aliquam ducimus tenetur itaque? Sapiente, cupiditate.</p>
      
    </div>

    <div class="container row mx-auto">

    <div class="col-6 col-md-6 col-xxl-3">
      <div class="card">
        <img src="./assets/servizi1.png" alt="">
        <div class="card-header bg-black text-bg-dark">
          <p class="text-center">Categorie</p>
        </div>
      </div>
    </div>

    <div class="col-6 col-md-6 col-xxl-3">
      <div class="card">
      <img src="./assets/servizi2.png" alt="">
        <div class="card-header bg-black text-bg-dark">
          <p class="text-center">Categorie</p>
        </div>
      </div>
    </div>

    <div class="col-6 col-md-6 col-xxl-3">
      <div class="card">
      <img src="./assets/servizi3.png" alt="">
        <div class="card-header bg-black text-bg-dark">
          <p class="text-center">Categorie</p>
        </div>
      </div>
    </div>

    <div class="col-6 col-md-6 col-xxl-3">
      <div class="card">
      <img src="./assets/servizi4.png" alt="">
        <div class="card-header bg-black text-bg-dark">
          <p class="text-center">Categorie</p>
        </div>
      </div>
    </div>
  </div>
</div>

    @include('parts/footer')    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>