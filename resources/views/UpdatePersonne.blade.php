<?php
$selh = "";
$self = "";
if ($Personne->sexe == "Homme")
    $selh = "checked";
else
    $self = "checked";


$maroc = "";
$france = "";
$algerie = "";
$portugal = "";
if ($Personne->nationalite == "Maroc")
    $maroc = "selected";
elseif ($Personne->nationalite == "France")
    $france = "selected";
elseif ($Personne->nationalite == "Algerie")
    $algerie = "selected";
else
    $portugal = "selected";

?>


<html>

<head>
    <title>Page Add Personne</title>
</head>

<body>
    <div>
        <form action="/Personnes" method="POST">
            @csrf
            @method('PUT')
            <table width="30%">
                <tr>
                    <td>CIN : </td>
                    <td><input type="text" name="cin" value='{{$Personne->cin}}' readonly/></td>
                </tr>
                <tr>
                    <td>Nom : </td>
                    <td><input type="text" name="nom" value='{{$Personne->nom}}' /></td>
                </tr>
                <tr>
                    <td>Prénom : </td>
                    <td><input type="text" name="prenom" value='{{$Personne->prenom}}' /></td>
                </tr>
                <tr>
                    <td>Date de Naissance : </td>
                    <td><input type="date" name="datenaissance" value='{{$Personne->datenaissance}}' /></td>
                </tr>
                <tr>
                    <td>Sexe : </td>
                    <td>
                        <input type="radio" name="sexe" value="Homme" {{$selh}} /> Homme
                        <input type="radio" name="sexe" value="Femme" {{$self}} /> Femme
                    </td>
                </tr>
                <tr>
                    <td>Nationalité : </td>
                    <td>
                        <select name="nationalite">
                            <option value="France" {{$france}}>France</option>
                            <option value="Maroc" {{$maroc}}>Maroc</option>
                            <option value="Algerie" {{$algerie}}>Algerie</option>
                            <option value="Portugal" {{$portugal}}>Portugal</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" value="Save" /></td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>