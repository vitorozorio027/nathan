<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidebar</title>
    <link rel="stylesheet" href="assets/css/header.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="assets/js/header.js" defer></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="sidebar">
        <div class="logo-details">
            <div class="logo_name">Menu Principal</div>
            <i class='bx bx-menu' id="btn"></i>
        </div>
        <ul class="nav-list">
            <li>
                <a href="dashboard.php">
                    <i class='bx bx-grid-alt'></i>
                    <span class="links_name">Dashboard</span>
                </a>
                <span class="tooltip">Dashboard</span>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-user'></i>
                    <span class="links_name">Administrador</span>
                </a>
                <span class="tooltip">Administrador</span>
            </li>
            <li>
                <a href="#">
                    <i class='bx bxs-key'></i>
                    <span class="links_name">Cadastro de Chaves</span>
                </a>
                <span class="tooltip">Cadastro de Chaves</span>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-file'></i>
                    <span class="links_name">Relatórios</span>
                </a>
                <span class="tooltip">Relatórios</span>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-user-plus'></i>
                    <span class="links_name">Cadastro de Alunos</span>
                </a>
                <span class="tooltip">Cadastro de Alunos</span>
            </li>
            <li>
                <a href="#">
                    <i class='bx bxs-alarm-exclamation'></i>
                    <span class="links_name">Empréstimo de Chaves</span>
                </a>
                <span class="tooltip">Empréstimo de Chaves</span>
            </li>
            <li class="profile">
                <div class="profile-details">
                    <img src="./images/user.png" alt="profileImg">
                    <div class="name_job">
                        <div class="name">Nome do Usuário</div>
                        <div class="job">Cadeia de Comando</div>
                    </div>
                </div>
                <a href="index.php" id="log_out">
                    <i class='bx bx-log-out' id="log_out"></i>
                </a>
            </li>
        </ul>
    </div>
</body>
</html>
