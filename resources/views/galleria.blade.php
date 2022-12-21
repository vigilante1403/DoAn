<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="{{ asset('js/galleria/dist/galleria.min.js') }}"></script>
 <script src="{{ asset('js/galleria/dist/themes/classic/galleria.classic.min.js') }}"></script>
 <link rel="stylesheet" href="{{ asset('js/galleria/dist/themes/classic/galleria.classic.min.css') }}">
</head>

<style>
  .galleria {
 height: 400px;       /* Change the height to whatever you want */
 width: 50%;        /* Optional: default is 100% */
}
</style>
<body>
  <section class="galleria">
    <a href="https://picsum.photos/id/237/200/100">
    <img src="https://picsum.photos/id/237/200/100" data-title="Cosmospolitan" data-description="Pen and ink painting"></a>
    <a href="https://picsum.photos/id/23/200/100">
    <img src="https://picsum.photos/id/23/200/100" data-title="Morse" data-description="Pen and ink painting"></a>
    <a href="https://picsum.photos/id/37/200/100">
    <img src="https://picsum.photos/id/37/200/100" data-title="Riccar" data-description="Pen and ink painting"></a>
    <a href="https://picsum.photos/id/11/200/100">
    <img src="https://picsum.photos/id/11/200/100" data-title="Sewmor" data-description="Pen and ink painting"></a>
    <a href="https://picsum.photos/id/42/200/100">
    <img src="https://picsum.photos/id/42/200/100" data-title="Spencer" data-description="Pen and ink painting"></a>
 </section>

 
 
       <script>
          // Galleria.loadTheme({{ asset('js/galleria/dist/themes/classic/galleria.classic.min.js') }});
          Galleria.run('.galleria');   // Use the class name of your gallery
       </script>
</body>
</html>
