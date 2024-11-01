<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/sidebar.css">
    <link rel="stylesheet" href="../css/loading.css">
    <link rel="stylesheet" href="../css/activity.css">
    <title>Document</title>
</head>
<body>
    <div id="loadingScreen">
        <h1 class="loadingText">Loading</h1>
    </div>

    <nav class="sidebar">
        <div class="logo"> 
            <i id="btn" class="fa-solid fa-bars">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-menu" width="32" height="32" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M4 8l16 0" />
                <path d="M4 16l16 0" />
              </svg>
            </i>
        </div>
        
        <ul class="nav-links">
            <li>
                <a href="adminMain.html">
                    <i class="fa-solid fa-house"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-home" width="32" height="32" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M5 12l-2 0l9 -9l9 9l-2 0" />
                        <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                        <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
                      </svg></i>
                    <span>Main Menu</span>
                </a>
            </li>

            <li>
                <a href="users.html" id="linkUsers">
                    <i><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-users" width="32" height="32" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                        <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                        <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                        <path d="M21 21v-2a4 4 0 0 0 -3 -3.85" />
                      </svg></i>
                      <span>Users</span>
                </a>
            </li>

            <li>
                <a href="areas.html" id="linkUsers">
                    <i>
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-map-pin" width="32" height="32" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                        <path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z" />
                      </svg></i>
                      <span>Areas</span>
                </a>
            </li>
            <li>
                <a href="applications.html">
                    <i><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-book-2" width="32" height="32" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M19 4v16h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h12z" />
                    <path d="M19 16h-12a2 2 0 0 0 -2 2" />
                    <path d="M9 8h6" />
                  </svg></i>
                  <span>Applications</span>
                </a>
            </li>
            <li>
                <a href="analysis.html">
                    <i><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chart-bar" width="32" height="32" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M3 12m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v6a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z" />
                    <path d="M9 8m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v10a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z" />
                    <path d="M15 4m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v14a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z" />
                    <path d="M4 20l14 0" />
                    </svg></i>
                    <span>Analysis</span>
                </a>
            </li>

            <li>
                <a href="receipts.html">
                    <i><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-receipt" width="32" height="32" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M5 21v-16a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v16l-3 -2l-2 2l-2 -2l-2 2l-2 -2l-3 2m4 -14h6m-6 4h6m-2 4h2" />
                  </svg></i>
                  <span>Receipts</span>
                </a>
            </li>

            <li class="logout">
                <a href="login.html">
                    <i><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-logout-2" width="32" height="32" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M10 8v-2a2 2 0 0 1 2 -2h7a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-7a2 2 0 0 1 -2 -2v-2" />
                        <path d="M15 12h-12l3 -3" />
                        <path d="M6 15l-3 -3" />
                      </svg></i>
                      <span>Logout</span>
                </a>
            </li>
        </ul>
    </nav>

    <div class="content">
        <div class="wrapper">
            <h1 class="tittle">Activity Tracking</h1>
                <div class="activity">
                    <form action="">                
                            <div class="search-container">
                                    <input type="search" id="search-bar" placeholder="Nombre o ID" required>
                                    <span id="search-icon" class="icon-search"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-search" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                        <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" />
                                        <path d="M21 21l-6 -6" />
                                      </svg></span>
                            </div>  
                            
                            <table>
                                <thead>
                                    <tr>
                                        <th>Fecha</th>
                                        <th>Tipo</th>
                                        <th>Movimiento</th>
                                        <th>Artículo</th>
                                        <th>Cantidad</th>
                                    </tr>
                                </thead>
                                <tbody id="activityTableBody">
                                    <!-- Los datos de la BD se agregaran aquí -->
                                    <?php 
                                        include "../php/selectActivity.php";
                                        while($row = mysqli_fetch_assoc($responseM)) {?>
                                        <tr>
                                            <td><?php echo $row["fecha"] ?></td>
                                            <td><?php echo $row["tipo"] ?></td>
                                            <td><?php echo $row["movimiento"] ?></td>
                                            <td><?php echo $row["articulo"] ?></td>
                                            <td><?php echo $row["cantidad"] ?></td>
                                        </tr>
                                    
                                    <?php } ?>
                                    <?php 
                                        while($row = mysqli_fetch_assoc($responseP)) {?>
                                        <tr>
                                            <td><?php echo $row["fecha"] ?></td>
                                            <td><?php echo $row["tipo"] ?></td>
                                            <td><?php echo $row["movimiento"] ?></td>
                                            <td><?php echo $row["articulo"] ?></td>
                                            <td><?php echo $row["cantidad"] ?></td>
                                        </tr>
                                    
                                    <?php } ?>
                                </tbody>
                            </table>
                                
                    </form>
                </div>
            </div>
    </div>
    <script src="../js/loading.js"></script>
    <script src="../js/sidebar.js"></script>
    <script src="../js/activity.js"></script>
</body>
</html>