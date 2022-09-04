<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script src='/js/emailValidar.js'></script>
</head>
<body>
    
    <form action="/contacts" method='POST'>
    @csrf
        <input type='number' name='id'>
        <input type='text' name='nome' id='name'placeholder='Name' minlength="5" maxlength="25">
        <input type='tel' name='tel' id='tel' placeholder="Contact" minlength="9" maxlength="9">
        <input type='email' name='email' id='email' placeholder='E-mail'>
        <input type = 'submit' value='Salvar'>
    </form>


</body>
</html>