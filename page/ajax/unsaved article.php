<?php
require ("./../database.php");

// Like
if (isset($_POST['unsaved'])) {
    date_default_timezone_set('Asia/Jakarta');
    $user_id = $_POST['user_id'];
    $artikel_id = $_POST['postid'];

    $queryUnsavedArticle = "DELETE FROM user_saved_artikel WHERE user_id = $user_id AND artikel_id = $artikel_id";
    mysqli_query($db, $queryUnsavedArticle);
}
?>

<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-bookmark" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z"/>
</svg>