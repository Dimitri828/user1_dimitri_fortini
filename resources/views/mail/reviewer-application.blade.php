
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Candidatura ricevuta</title>
</head>
<style>
    body {
        font-family: Arial, Helvetica, sans-serif;
        color: rgb(45, 45, 45)
    }

    main {
        border: 2px solid rgb(41,48,56);
        border-radius: 30px;
        padding: 40px 20px
    }
    h1{
        text-align: center;
        font-size:100px;
        
    }
    .bg-green{
        width: 100%;
        background-color: rgb(92,125,100);
    }
   
</style>

<body>

    <main>
        
        <h1 class="bg-green">Presto.it</h1>
        <h2>Grazie per averci contattato</h2>

        <p>
            Abbiamo ricevuto con successo la tua candidatura per entrare a far parte del team di
            <strong>Presto.it</strong>.
        </p>

        <p>
            Queste sono le informazioni che ci hai fornito:
            
        </p>

        <ul>
            <li>Email:{{$reviewer->email}}</li>
            <li>Conoscenza della lingua inglese:{{$reviewer->english_level}}</li>
            <li>Esperienza:{{$reviewer->experience}}</li>
        </ul>

        <p>
            Il nostro team esaminerà attentamente il tuo profilo. Se la tua candidatura risulterà in linea con le nostre
            esigenze,
            ti contatteremo all'indirizzo email che hai fornito.
        </p>

        <p>
            Ti ringraziamo per l'interesse dimostrato e ti auguriamo una buona giornata.
        </p>

        <hr>

        <p class="bg-green">
            <strong >Il Team di Presto.it</strong>
        </p>

    </main>
</body>

</html>
