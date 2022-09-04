<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script src="../js/details.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    @foreach ($contacts as $contact)
       
        <div class="flex flex-col w-full">
           <div> 
             <p>Name: {{$contact->nome}}</p>
          </div>
          <div>
            <a href='/edit'>Editar</a>
            <button>Excluir</button>
            <a href='/details/{{$contact->nome}}'>Mais Detalhes</a>
           </div>
        </div>   
    @endforeach 
</body>
</html>