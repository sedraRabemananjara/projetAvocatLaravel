<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <title>Mail</title>
</head>
<div id="header">
        <h5> Cabinet Razafimahefa </h5>

      <h5>  Village des jeux </h5> 
    
      <h5> Emmeuble Regus </h5> 
     
      <h5> Numero: +261  </h5> 
     
      <h5> Addresse mail: cab-razafimahefa@email.com </h5> 
</div>      
<body>
  
   <h1 style="text-align: center" class="heading-section">{{$data['client'] }}</h1>
      <h2 style="" class="heading-section">Procedure: {{$data['procedure']}}</h2>  
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
          <section class="ftco-section">
            <h2 style="text-decoration: underline" class="heading-section">Dérnière convocation:</h2> 
            <h3 style="" class="heading-section">motif:</h3>
              <p class="word">{{$data['motif'] }}</p>
            <h3 style="" class="heading-section">conclusion:</h3>
              <p class="word"> {{$data['espace_conclusion'] }} </p>
            
            <h2 style="text-decoration: underline" class="heading-section">Prochaine convocation:</h2> 
            <h4 style="font-style: bold" class="heading-section">Date: {{$data['date_agenda'] }}</h4>
              
            <h4 style="font-style: bold" class="heading-section">salle:  {{$data['salle'] }} </h4>
              
            <h4 style="text-decoration: underline" class="heading-section">motif de la convocation:</h4>
            <p class="word"> {{$data['nouveaumotif'] }}  </p>
          </section>
</body>
</html>



