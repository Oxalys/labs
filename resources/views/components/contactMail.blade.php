<div class="d-flex">
    <h1>Bonjour {{request()->input('nom')}}</h1>
    <p>Nous avons bien reçu votre mail, nous y répondrons dans les plus berfs délais!</p>
    <br>
    <p>Voici une copie de votre message: 
        <br>
        {{request()->input('message')}}</p>
</div>
