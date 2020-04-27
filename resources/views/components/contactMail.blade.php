<div>
    <style>
        .border{
            border: 1px solid black;
            padding: 5%;
            margin: 2%;
        }
    </style>
    <h1>Bonjour {{request()->input('nom')}}</h1>
    <p>Nous avons bien reçu votre mail, nous y répondrons dans les plus brefs délais!</p>
    <br>
    <p>Voici une copie de votre message: </p>
       <div class="container border">
            {{request()->input('message')}}
        </div>
</div>
