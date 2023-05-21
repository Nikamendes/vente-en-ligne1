<?php
// Fonction pour afficher le menu
function renderMenu()
{
    $menu = '
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Mon site</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                    <li class="nav-tem">
                    <a class="nav-link" href="./front/articles.php">Articles</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>';

    echo $menu;
}

//Fonction pour afficher TOUS les clients
function requete1($conn) {
    $sql = "SELECT * FROM client";
    $result = $conn->prepare($sql);
    $result->execute();
	
	// Si aucun résultat n'est trouvé, affiche un message 
	if ($result->rowCount() == 0)  {
        return "Aucune donnée à afficher pour le moment";
    }
	
    //return $result->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

// Fonction pour afficher TOUTES les ventes
function requete2($conn) {
	//Requête 2, on va afficher tout ce qui est dans la base de données, dans "articles"
    $sql = "SELECT * FROM articles";
    $result = $conn->prepare($sql);
    $result->execute();
	
	//Si aucun résultat n'est trouvé, on affiche un message 
	if ($result->rowCount() == 0)  {
        return "Aucune donnée à afficher pour le moment";
    }
	// crée le code HTML pour afficher le résultat 

    $html = '<table class="table table-striped table-hover">';
    $html .= '<thead>';
    $html .= '<tr><th>ID</th><th>Aspirateur</th><th>Tapis</th><th>Chaise</th></tr>';
    $html .= '</thead>';
    $html .= '<tbody>';

    foreach ($result as $row) {
        $html .= '<tr>';
        $html .= '<td>' . $row['id'] . '</td>';
        $html .= '<td>' . $row['aspirateur'] . '</td>';
        $html .= '<td>' . $row['tapis'] . '</td>';
        $html .= '<td>' . $row['chaise'] . '</td>';
        $html .= '</tr>';
    }

    $html .= '</tbody>';
    $html .= '</table>';

    return $html;

	// envoie les données a afficher
    return $html;
}