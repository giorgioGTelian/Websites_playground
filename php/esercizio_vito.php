<?php
const APIURL = "https://api.themoviedb.org/3/discover/movie?api_key=04c35731a5ee918f014970082a0088b1";
const IMGPATH = "https://image.tmdb.org/t/p/w1280";
const SEARCHAPI =
    "https://api.themoviedb.org/3/search/movie?&api_key=04c35731a5ee918f014970082a0088b1&query=";

$main = '<div id="content"></div>';
$form = '<form id="form"></form>';
$search = '<input type="text" id="search">';
$genre = '<select id="genre"></select>';

echo $main . $form . $search . $genre;

// initially get fav movies
getMovies(APIURL);

// add event listener to search input field
if (isset($_POST['search'])) {
    $searchTerm = $_POST['search'];
    if ($searchTerm) {
        getMovies(SEARCHAPI . $searchTerm);
    } else {
        getMovies(APIURL);
    }
}

function getMovies($url) {
    $resp = file_get_contents($url);
    $respData = json_decode($resp, true);

    showMovies($respData['results']);
}

function showMovies($movies) {
    $main = '';

    foreach ($movies as $movie) {
        $poster_path = $movie['poster_path'];
        $title = $movie['title'];
        $vote_average = $movie['vote_average'];
        $overview = $movie['overview'];

        $movieEl = '<div class="movie">';
        $movieEl .= '<img src="' . IMGPATH . $poster_path . '" alt="' . $title . '">';
        $movieEl .= '<div class="movie-info">';
        $movieEl .= '<h3>' . $title . '</h3>';
        $movieEl .= '<span class="' . getClassByRate($vote_average) . '">' . $vote_average . '</span>';
        $movieEl .= '</div>';
        $movieEl .= '<div class="overview">';
        $movieEl .= '<h3>Overview:</h3>';
        $movieEl .= $overview;
        $movieEl .= '</div>';
        $movieEl .= '</div>';

        $main .= $movieEl;
    }

    echo '<div id="content">' . $main . '</div>';
}

function getClassByRate($vote) {
    if ($vote >= 8) {
        return "green";
    } else if ($vote >= 5) {
        return "orange";
    } else {
        return "red";
    }
}
