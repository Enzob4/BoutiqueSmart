<html>
<head>
    <title>Liste des smartphones</title>
</head>
<body>
<h2>La liste des smartphones</h2>

@if(!empty($smartphones))
    <ul>
        @foreach($smartphones as $smart)
        <li>{{$smart->nom}} {{$smart->taille}} {{$smart->systeme}}</li>

    </ul>
@else
    <h3>aucun smartphone</h3>
@endif

</body>
</html>

