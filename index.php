<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- CSS -->
  <link rel="stylesheet" href="./assets/style.css">
  <!-- Axios -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <!-- VueJs -->
  <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

  <title>PHP Dischi JSON</title>
</head>
<body>

  <!-- HEADER -->
  <header>
    <div class="container">
        <div class="logo">
          <img src="assets/img/logo-spotify.png" alt="Spotify">
        </div>
    </div>  
  </header>

  <!-- MAIN -->
  <main id="app">
    <div class="container">
      <div 
      v-for="(disk, index) in albums"
      :key="index"
      class="card">
        <img :src="disk.poster" :alt="disk.title">
        <h4>{{disk.title}}</h4>
        <p>{{disk.author}}</p>
        <h5>{{disk.year}}</h5>
      </div>
    </div>
  </main>

  <script src="./main.js"></script>
</body>
</html>