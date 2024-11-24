<?php 
require ("./../database.php");

if (isset($_POST['cek_notifikasi'])) {
    $user_id = $_POST['user_id'];
    $queryCekNotifikasi = "SELECT * FROM user_notifikasi WHERE user_id = '$user_id' AND sudah_dilihat = 0";
    $cekNotifikasi = query($queryCekNotifikasi);

    if (count($cekNotifikasi) > 0) {
        echo '
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-bell-fill" viewBox="0 0 16 16">
            <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z"/>
        </svg>
        Notifikasi <span class="badge">'. count($cekNotifikasi) .'</span>
        ';
    }
    else {
        echo '
        <svg
            width="1.2em"
            height="1.2em"
            viewBox="0 0 16 16"
            class="bi bi-bell"
            fill="currentColor"
            xmlns="http://www.w3.org/2000/svg"
        >
            <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2z" />
            <path
                fill-rule="evenodd"
                d="M8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z"
            />
        </svg>
        Notifikasi
        ';
    }
}

?>
