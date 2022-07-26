<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../assets/styles/main.css">
    <link rel="stylesheet" href="../assets/styles/dashboard.css">

    <script src="../assets/scripts/style.js" async></script>

    <title>Dashboard | Segaran App</title>
</head>
<body>
<aside state="open">
    <div id="title">
            <span id="logo">
                <img src="../assets/img/icons/segaran-icon.png" alt="" width="50" height="50" navHide="">
                <span navHide="">
                    <h1>Segaran</h1>
                    <p>Dashboard</p>
                </span>

            </span>
        <img src="../assets/img/icons/menu-toggle.png" alt="" width="50" id="menu-toggle" class="button">
    </div>

    <div id="nav">

    </div>

    <button id="keluar" class="button" navHide="">
        Keluar
    </button>
    <img src="../assets/img/icons/log-out.png" alt="log out" width="50" class="button" hidden id="logout">
</aside>

<main>
    <header>
        <div id="title">
            Dashboard
        </div>
        <span id="top-right">
                <img src="../assets/img/icons/notif.png" alt="notification" width="30" height="30" class="button">
                <div id="divider">|</div>

                <div class="profile button">
                    <p id="name" value="Kepala Desa">Kepala Desa</p>


                    <div id="profile-circle">

                        <img src="../assets/img/avatar-man.png" alt="profile" width="50" height="50">
                    </div>
                </div>

            </span>


    </header>

    <section>
        <div class="card-container">
            <div class="card">
                <h2>Jumlah Dusun</h2>
                    <h1>60</h1>
            </div>
            <div class="card"></div>
            <div class="card"></div>
            <div class="card"></div>
        </div>
        <div class="table">
            <head>Data Warga Desa  Segaran</head>
            <div class="sort"></div>
            <div class="data"></div>


        </div>

    </section>


</main>

</body>
</html>
