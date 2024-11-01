<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
    <link rel="stylesheet" href="../css/users.css">
    <link rel="stylesheet" href="../css/loading.css">
    <link rel="stylesheet" href="../css/sidebar.css">
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

        <!-- Button 1 -->
        <nav class="userOption">
            
            <button onclick="showFormat(format1)">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-plus" width="36" height="36" viewBox="0 0 24 24" stroke-width="1.5" stroke="#9e9e9e" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                    <path d="M16 19h6" />
                    <path d="M19 16v6" />
                    <path d="M6 21v-2a4 4 0 0 1 4 -4h4" />
                </svg>
        </button>
        <!-- Button 2 -->
        <button onclick="showFormat(format2)">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-search" width="36" height="36" viewBox="0 0 24 24" stroke-width="1.5" stroke="#9e9e9e" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                <path d="M6 21v-2a4 4 0 0 1 4 -4h1.5" />
                <path d="M18 18m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                <path d="M20.2 20.2l1.8 1.8" />
            </svg>
        </button>
        <!-- Button 3 -->
        <button onclick="showFormat(format3)">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-minus" width="36" height="36" viewBox="0 0 24 24" stroke-width="1.5" stroke="#9e9e9e" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                <path d="M6 21v-2a4 4 0 0 1 4 -4h4c.348 0 .686 .045 1.009 .128" />
                <path d="M16 19h6" />
            </svg>
        </button>
    </nav>
    
    <div id="format1" class="format" style="display: none;">
        
        <!-- users forms -->
        <form action="../php/insertUser.php" method="post">
            <h1 class="tittleU">Add Users</h1>
            
            <section class="data">
                <div class="addUsers">
                    
                    <h2 class="subtittle">Personal Data</h2>
                    
                        <div class="personalData">
                        
                            <div class="input-container">
                                <input type="text" id="name" name="name" class="onlyLetters" placeholder="Name" required>
                                <span id="error-name" class="error">Only Letters are Allowed</span>
                            </div>
                            
                            <div class="input-container">
                                <input type="text" id="ap" name="ap" class="onlyLetters" placeholder="Last Name (Paternal)" required>
                                <span id="error-ap" class="error">Only Letters are Allowed</span>
                            </div>
                            
                            <div class="input-container">
                                <input type="text" id="am" name="am" class="onlyLetters" placeholder="Last Name (Maternal)" required>
                                <span id="error-am" class="error">Only Letters are Allowed</span>
                            </div>
                            
                            <div class="input-container">
                                <input type="text" id="rfc" name="rfc" placeholder="RFC" required>
                                <span id="error-rfc" class="error">RFC Format is not Allowed</span>
                            </div>
                            
                            <div class="input-container">
                                <input type="email" id="email" name="email" placeholder="Email" required>
                                <span id="error-email" class="error">Email Format is not Allowed</span>
                            </div>

                            <div class="input-container">
                                <input type="tel" id="phone" name="phone" placeholder="Contact Number" required>
                                <span id="error-phone" class="error" style="display: none;">Contact Number not Valid</span>
                            </div>
                        </div>

                    <h2 class="subtittle2">User Data</h2>
                        <div class="userData">
                            <input type="text" id="username" name="username" placeholder="Username" required>
                            
                            <input type="password" id="password" name="password" placeholder="Password" required>

                            <select class="roles" id="role" name="role" >
                                <option value="">Role</option>
                                <option value="ADMIN">Administrador</option>
                                <option value="RECEP">Verificador</option>
                                <option value="ANAL">Analista</option>
                            </select>

                            <input type="submit" class="submit-button">
                        </div>
                </div>
            </section>
                
            </form>
        </div>
        <div id="format2" class="format" style="display: block;"> <!-- Formulario para buscar usuarios -->
            <h2 class="tittleS">Search Users</h2>
            <div class="searchPanel">
                
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
                            <th>Number</th>
                            <th>Name</th>
                            <th>Alias</th>
                            <th>Password</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>RFC</th>
                            <th>Role</th>
                        </tr>
                    </thead>
                    <tbody id="activityTableBody">
                        <!-- Aquí se agregarán las filas dinámicamente -->
                         <?php 
                            include "../php/selectUsers.php";

                            while($row = mysqli_fetch_assoc($response)) {?>

                            <tr>
                                <td><?php echo $row["num"] ?></td>
                                <td><?php echo $row["nombre"] ?></td>
                                <td><?php echo $row["alias"] ?></td>
                                <td><?php echo $row["contraseña"] ?></td>
                                <td><?php echo $row["numCont"] ?></td>
                                <td><?php echo $row["correoElectronico"] ?></td>
                                <td><?php echo $row["rfc"] ?></td>
                                <td><?php echo $row["descripcion"] ?></td>
                            </tr>
                         
                         <?php } ?>
                    </tbody>
                </table>  
            </div>
        </div>
        <div id="format3" class="format" style="display: none;"> <!-- Formulario para eliminar usuarios -->
            <h2 class="tittleD">Delete Users</h2>
            <div class="deletePanel">
                
                <div class="search-container">
                    <input type="search" id="search-bar" placeholder="Nombre o ID" required>
                    <span id="search-icon" class="icon-search"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-search" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" />
                        <path d="M21 21l-6 -6" />
                    </svg></span>
                </div>
            </div>
        </div>
        
    </div>
        <script src="../js/users.js"></script>
        <script src="../js/sidebar.js"></script>
        <script src="../js/loading.js" defer></script>
    </body>
    </html>