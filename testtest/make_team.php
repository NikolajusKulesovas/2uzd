<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>

   
        <meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no">
        <meta http-equiv="content-language" content="en">
        <meta charset="UTF-8">
        <title>FORMULA 1</title>
        <meta itemprop="name" content="FORMULA 1">
        <meta itemprop="description" name="description" content="FORMULA 1">
  
        <link rel="stylesheet" href="style.css">
   
        <div class="banner">
            <header class="maxWidthWrapper">
                <a href="index" class="logo-text">FORMULA 1</a>
                <div class="toggleMenu" onclick="toggleMenu();"></div>
                <ul class="navigation">
                    <li><a href="drivers-teams">PILOTAI IR KOMANDOS</a></li>
                    <li><a href="standings">REITINGAS</a></li>
                    <li><a href="prices">UZDARBIS</a></li>
                    <li><a href="streaks">STATISTIKA</a></li>
                    <li><a href="make_team" class="aktualu">PADARYTI KOMANDA</a></li>
                    <li><a href="login">PRISIJUNGTI</a></li>
                    <li><a href="registracija">REGISTRACIJA</a></li>
                </ul>
            </header>
        </div>


        <div class="maxWidthWrapper">
        <div style="display:flex;  flex-direction: row">
            <div class="main-wrapper-2 ">
        <div class="container">

        <form action="register.php" method="post" enctype="multipart/form-data">
            <table class="lenta">
               <tr> 
            <td><label for="teamname" class="teamname"><b>Komandos pavadinimas</b></label><br></td>
            <td><input type="text"  name="teamname" placeholder="Iveskite komandos pavadinima" required><br></td>
            </tr>
            
            <tr>
           <td><label for="pilotfirst" class="pilotfirst"><b>Pirmo piloto vardas</b></label><br></td> 
            <td><input type="text" name="pilotfirst" placeholder="Iveskite pirmo piloto varda" required><br></td>
            </tr>

            <tr>
            <td><label for="pilotsecond" class="pilotsecond"><b>Antro piloto vardas</b></label><br></td>
            <td><input type="text" name="pilotsecond" placeholder="Iveskite antro piloto varda" required><br></td>
            </tr>    
            
            <tr>
            <td><label for="money" class="money"><b>Iveskite pradini komandos biudzeta(€)</b></label><br></td>
            <td><input type="text" name="money" placeholder="Iveskite pradini komandos biudzeta" name="money" required><br></td>
            </tr>

            <tr>
            <td><label for="boss" class="boss"><b>Iveskite komandos vadova</b></label><br></td>
            <td><input type="text" name="boss" placeholder="Iveskite komandos vadova" required><br></td>
            </tr>

           <tr>
            <td><label for="date" class="data"><b>Ikurimo data:</b></label><br></td>
            <td><input type="date" id="start" name="team_start"
                value=""
            min="1999-01-01" max="2050-12-31"><br></td>
        </tr>

       
    </table>

            <input type="checkbox" id="info" name="info"><br>
            <label for="info" class="checkboxas">Informacija teisinga</label><br>           
            <input type="checkbox" id="rules" name="rules"><br>
            <label for="info" class="checkboxas">Sutinku su taisyklemis</label><br>
            <button type="submit">SUKURTI</button>
        
        </form>

        </div>
            </div>
 
        <div class="column-wrapper-2">
            <div class="mainStats">
                <div class="calHeader">
                    <h2 style="color: #adadad">KITOS LENKTYNES</h2>
                </div>
                <div class="calBody">
                    <div style="margin-right: 10px;">
                        <img src="/Images/Flags/singapore.png" class="track children" alt="">
                    </div>
                    <h1 id="NextCountry" style="font-size: 16px">SINGAPURAS</h1>
                </div>
                <div class="calHeader" style="margin-top: 5px;">
                    <img src="Images/Icons/calendar.png" style="width: 12px; height: 12px; margin-right: 10px">
                    <h2 style="color: #adadad" id="NextDate">31 rug - 2 spa</h2>
                </div>
            </div>

            <div class="mainStats homeBox" style="padding-right: 0px; padding-left: 0px; padding-bottom: 0px; padding-top: 20px;">
         
                <div class="homeTab">
                    <!-- Tab links -->
                    <div class="tab">
                        <button class="tablinks active" id="defaultOpen" onclick="openStat(event, 'DRIV')">PILOTAI</button>
                        <button class="tablinks" onclick="openStat(event, 'CONS')">KOMANDOS</button>
                    </div>
                    <!-- Tab content -->
                    <div id="DRIV" class="tabcontent" style="display: block;">
                        <div class="rivalsGrid">
                            <div class="Pos">
                                <h2 style="color:#b9b9b9">POZICIJA</h2>
                            </div>
                            <div class=""></div>
                            <div class=""></div>
                            <div class="Driver">
                                <h2 style="color:#b9b9b9">VARDAS</h2>
                            </div>
                            <div class="Pts" style="text-align: right">
                                <h2 style="color:#b9b9b9">TASKAI</h2>
                            </div>
                        </div>
                        <div class="rivalsGrid">
                            <div class="rivalText movementText">
                                <span id="Position1">1</span>
                            </div>
                            <div class="movementWrapper">
                                <div class="sameMarker"></div>
                                <span id="Movement1" class="MovementOption" style="display: none">LIEKA</span>
                            </div>
                            <div class="movementWrapper">
                                <img src="https://res.cloudinary.com/f1-fantasy/image/upload/c_scale,f_auto,w_30/v1616743177/Headshots/Verstappen.png" class="rivalDriver">
                            </div>
                            <div class="rivalText DriverRivalName" id="Driver1">Verstappen</div>
                            <div class="rivalText" style="text-align: right" id="Result1">660</div>
                        </div>
                        <div class="rivalsGrid">
                            <div class="rivalText movementText">
                                <span id="Position2">2</span>
                            </div>
                            <div class="movementWrapper">
                                <div class="sameMarker"></div>
                                <span id="Movement2" class="MovementOption" style="display: none">LIEKA</span>
                            </div>
                            <div class="movementWrapper">
                                <img src="https://res.cloudinary.com/f1-fantasy/image/upload/c_scale,f_auto,w_30/v1616743177/Headshots/Russell.png" class="rivalDriver">
                            </div>
                            <div class="rivalText DriverRivalName" id="Driver2">Russell</div>
                            <div class="rivalText" style="text-align: right" id="Result2">485</div>
                        </div>
                        <div class="rivalsGrid">
                            <div class="rivalText movementText">
                                <span id="Position3">3</span>
                            </div>
                            <div class="movementWrapper">
                                <div class="sameMarker"></div>
                                <span id="Movement3" class="MovementOption" style="display: none">LIEKA</span>
                            </div>
                            <div class="movementWrapper">
                                <img src="https://res.cloudinary.com/f1-fantasy/image/upload/c_scale,f_auto,w_30/v1616743177/Headshots/Leclerc.png" class="rivalDriver">
                            </div>
                            <div class="rivalText DriverRivalName" id="Driver3">Leclerc</div>
                            <div class="rivalText" style="text-align: right" id="Result3">461</div>
                        </div>
                        <div class="rivalsGrid">
                            <div class="rivalText movementText">
                                <span id="Position4">4</span>
                            </div>
                            <div class="movementWrapper">
                                <div class="sameMarker"></div>
                                <span id="Movement4" class="MovementOption" style="display: none">LIEKA</span>
                            </div>
                            <div class="movementWrapper">
                                <img src="https://res.cloudinary.com/f1-fantasy/image/upload/c_scale,f_auto,w_30/v1616743177/Headshots/Perez.png" class="rivalDriver">
                            </div>
                            <div class="rivalText DriverRivalName" id="Driver4">Perez</div>
                            <div class="rivalText" style="text-align: right" id="Result4">425</div>
                        </div>
                        <div class="rivalsGrid">
                            <div class="rivalText movementText">
                                <span id="Position5">5</span>
                            </div>
                            <div class="movementWrapper">
                                <div class="sameMarker"></div>
                                <span id="Movement5" class="MovementOption" style="display: none">LIEKA</span>
                            </div>
                            <div class="movementWrapper">
                                <img src="https://res.cloudinary.com/f1-fantasy/image/upload/c_scale,f_auto,w_30/v1616743177/Headshots/Hamilton.png" class="rivalDriver">
                            </div>
                            <div class="rivalText DriverRivalName" id="Driver5">Hamilton</div>
                            <div class="rivalText" style="text-align: right" id="Result5">414</div>
                        </div>
                        <div class="rivalsGrid">
                            <div class="rivalText movementText">
                                <span id="Position6">6</span>
                            </div>
                            <div class="movementWrapper">
                                <div class="sameMarker"></div>
                                <span id="Movement6" class="MovementOption" style="display: none">LIEKA</span>
                            </div>
                            <div class="movementWrapper">
                                <img src="https://res.cloudinary.com/f1-fantasy/image/upload/c_scale,f_auto,w_30/v1616743177/Headshots/Sainz.png" class="rivalDriver">
                            </div>
                            <div class="rivalText DriverRivalName" id="Driver6">Sainz</div>
                            <div class="rivalText" style="text-align: right" id="Result6">384</div>
                        </div>
                        <div class="rivalsGrid">
                            <div class="rivalText movementText">
                                <span id="Position7">7</span>
                            </div>
                            <div class="movementWrapper">
                                <div class="sameMarker"></div>
                                <span id="Movement7" class="MovementOption" style="display: none">LIEKA</span>
                            </div>
                            <div class="movementWrapper">
                                <img src="https://res.cloudinary.com/f1-fantasy/image/upload/c_scale,f_auto,w_30/v1616743177/Headshots/Norris.png" class="rivalDriver">
                            </div>
                            <div class="rivalText DriverRivalName" id="Driver7">Norris</div>
                            <div class="rivalText" style="text-align: right" id="Result7">275</div>
                        </div>
                        <div class="rivalsGrid">
                            <div class="rivalText movementText">
                                <span id="Position8">8</span>
                            </div>
                            <div class="movementWrapper">
                                <div class="sameMarker"></div>
                                <span id="Movement8" class="MovementOption" style="display: none">LIEKA</span>
                            </div>
                            <div class="movementWrapper">
                                <img src="https://res.cloudinary.com/f1-fantasy/image/upload/c_scale,f_auto,w_30/v1616743177/Headshots/Ocon.png" class="rivalDriver">
                            </div>
                            <div class="rivalText DriverRivalName" id="Driver8">Ocon</div>
                            <div class="rivalText" style="text-align: right" id="Result8">233</div>
                        </div>
                        <div class="rivalsGrid">
                            <div class="rivalText movementText">
                                <span id="Position9">9</span>
                            </div>
                            <div class="movementWrapper">
                                <div class="sameMarker"></div>
                                <span id="Movement9" class="MovementOption" style="display: none">LIEKA</span>
                            </div>
                            <div class="movementWrapper">
                                <img src="https://res.cloudinary.com/f1-fantasy/image/upload/c_scale,f_auto,w_30/v1616743177/Headshots/Alonso.png" class="rivalDriver">
                            </div>
                            <div class="rivalText DriverRivalName" id="Driver9">Alonso</div>
                            <div class="rivalText" style="text-align: right" id="Result9">214</div>
                        </div>
                        <div class="rivalsGrid">
                            <div class="rivalText movementText">
                                <span id="Position10">10</span>
                            </div>
                            <div class="movementWrapper">
                                <div class="sameMarker"></div>
                                <span id="Movement10" class="MovementOption" style="display: none">LIEKA</span>
                            </div>
                            <div class="movementWrapper">
                                <img src="https://res.cloudinary.com/f1-fantasy/image/upload/c_scale,f_auto,w_30/v1616743177/Headshots/Vettel.png" class="rivalDriver">
                            </div>
                            <div class="rivalText DriverRivalName" id="Driver10">Vettel</div>
                            <div class="rivalText" style="text-align: right" id="Result10">175</div>
                        </div>
                        <div class="rivalsGrid">
                            <div class="rivalText movementText">
                                <span id="Position11">11</span>
                            </div>
                            <div class="movementWrapper">
                                <div class="leagueUp"></div>
                                <span id="Movement11" class="MovementOption" style="display: none">KYLA</span>
                            </div>
                            <div class="movementWrapper">
                                <img src="https://res.cloudinary.com/f1-fantasy/image/upload/c_scale,f_auto,w_30/v1616743177/Headshots/Bottas.png" class="rivalDriver">
                            </div>
                            <div class="rivalText DriverRivalName" id="Driver11">Bottas</div>
                            <div class="rivalText" style="text-align: right" id="Result11">168</div>
                        </div>
                        <div class="rivalsGrid">
                            <div class="rivalText movementText">
                                <span id="Position12">12</span>
                            </div>
                            <div class="movementWrapper">
                                <div class="leagueDown"></div>
                                <span id="Movement12" class="MovementOption" style="display: none">LEIDZIASI</span>
                            </div>
                            <div class="movementWrapper">
                                <img src="https://res.cloudinary.com/f1-fantasy/image/upload/c_scale,f_auto,w_30/v1616743177/Headshots/Stroll.png" class="rivalDriver">
                            </div>
                            <div class="rivalText DriverRivalName" id="Driver12">Stroll</div>
                            <div class="rivalText" style="text-align: right" id="Result12">167</div>
                        </div>
                        <div class="rivalsGrid">
                            <div class="rivalText movementText">
                                <span id="Position13">13</span>
                            </div>
                            <div class="movementWrapper">
                                <div class="sameMarker"></div>
                                <span id="Movement13" class="MovementOption" style="display: none">LIEKA</span>
                            </div>
                            <div class="movementWrapper">
                                <img src="https://res.cloudinary.com/f1-fantasy/image/upload/c_scale,f_auto,w_30/v1616743177/Headshots/Gasly.png" class="rivalDriver">
                            </div>
                            <div class="rivalText DriverRivalName" id="Driver13">Gasly</div>
                            <div class="rivalText" style="text-align: right" id="Result13">165</div>
                        </div>
                        <div class="rivalsGrid">
                            <div class="rivalText movementText">
                                <span id="Position14">14</span>
                            </div>
                            <div class="movementWrapper">
                                <div class="sameMarker"></div>
                                <span id="Movement14" class="MovementOption" style="display: none">LIEKA</span>
                            </div>
                            <div class="movementWrapper">
                                <img src="https://res.cloudinary.com/f1-fantasy/image/upload/c_scale,f_auto,w_30/v1616743177/Headshots/Albon.png" class="rivalDriver">
                            </div>
                            <div class="rivalText DriverRivalName" id="Driver14">Albon</div>
                            <div class="rivalText" style="text-align: right" id="Result14">149</div>
                        </div>
                        <div class="rivalsGrid">
                            <div class="rivalText movementText">
                                <span id="Position15">15</span>
                            </div>
                            <div class="movementWrapper">
                                <div class="sameMarker"></div>
                                <span id="Movement15" class="MovementOption" style="display: none">LIEKA</span>
                            </div>
                            <div class="movementWrapper">
                                <img src="https://res.cloudinary.com/f1-fantasy/image/upload/c_scale,f_auto,w_30/v1616743177/Headshots/Magnussen.png" class="rivalDriver">
                            </div>
                            <div class="rivalText DriverRivalName" id="Driver15">Magnussen</div>
                            <div class="rivalText" style="text-align: right" id="Result15">114</div>
                        </div>
                        <div class="rivalsGrid">
                            <div class="rivalText movementText">
                                <span id="Position16">16</span>
                            </div>
                            <div class="movementWrapper">
                                <div class="sameMarker"></div>
                                <span id="Movement16" class="MovementOption" style="display: none">LIEKA</span>
                            </div>
                            <div class="movementWrapper">
                                <img src="https://res.cloudinary.com/f1-fantasy/image/upload/c_scale,f_auto,w_30/v1616743177/Headshots/Schumacher.png" class="rivalDriver">
                            </div>
                            <div class="rivalText DriverRivalName" id="Driver16">Schumacher</div>
                            <div class="rivalText" style="text-align: right" id="Result16">113</div>
                        </div>
                        <div class="rivalsGrid">
                            <div class="rivalText movementText">
                                <span id="Position17">17</span>
                            </div>
                            <div class="movementWrapper">
                                <div class="sameMarker"></div>
                                <span id="Movement17" class="MovementOption" style="display: none">LIEKA</span>
                            </div>
                            <div class="movementWrapper">
                                <img src="https://res.cloudinary.com/f1-fantasy/image/upload/c_scale,f_auto,w_30/v1616743177/Headshots/Ricciardo.png" class="rivalDriver">
                            </div>
                            <div class="rivalText DriverRivalName" id="Driver17">Ricciardo</div>
                            <div class="rivalText" style="text-align: right" id="Result17">86</div>
                        </div>
                        <div class="rivalsGrid">
                            <div class="rivalText movementText">
                                <span id="Position18">18</span>
                            </div>
                            <div class="movementWrapper">
                                <div class="leagueUp"></div>
                                <span id="Movement18" class="MovementOption" style="display: none">KYLA</span>
                            </div>
                            <div class="movementWrapper">
                                <img src="https://res.cloudinary.com/f1-fantasy/image/upload/c_scale,f_auto,w_30/v1616743177/Headshots/Zhou.png" class="rivalDriver">
                            </div>
                            <div class="rivalText DriverRivalName" id="Driver18">Zhou</div>
                            <div class="rivalText" style="text-align: right" id="Result18">82</div>
                        </div>
                        <div class="rivalsGrid">
                            <div class="rivalText movementText">
                                <span id="Position19">19</span>
                            </div>
                            <div class="movementWrapper">
                                <div class="leagueDown"></div>
                                <span id="Movement19" class="MovementOption" style="display: none">LEIDZIASI</span>
                            </div>
                            <div class="movementWrapper">
                                <img src="https://res.cloudinary.com/f1-fantasy/image/upload/c_scale,f_auto,w_30/v1616743177/Headshots/Latifi.png" class="rivalDriver">
                            </div>
                            <div class="rivalText DriverRivalName" id="Driver19">Latifi</div>
                            <div class="rivalText" style="text-align: right" id="Result19">79</div>
                        </div>
                        <div class="rivalsGrid">
                            <div class="rivalText movementText">
                                <span id="Position20">20</span>
                            </div>
                            <div class="movementWrapper">
                                <div class="sameMarker"></div>
                                <span id="Movement20" class="MovementOption" style="display: none">LIEKA</span>
                            </div>
                            <div class="movementWrapper">
                                <img src="https://res.cloudinary.com/f1-fantasy/image/upload/c_scale,f_auto,w_30/v1616743177/Headshots/Tsunoda.png" class="rivalDriver">
                            </div>
                            <div class="rivalText DriverRivalName" id="Driver20">Tsunoda</div>
                            <div class="rivalText" style="text-align: right" id="Result20">51</div>
                        </div>
                    </div>
                    <div id="CONS" class="tabcontent" style="display: none;">
                        <div class="rivalsGrid">
                            <div class="Pos">
                                <h2 style="color:#b9b9b9">POZICIJA</h2>
                            </div>
                            <div class=""></div>
                            <div class=""></div>
                            <div class="Driver">
                                <h2 style="color:#b9b9b9">VARDAS</h2>
                            </div>
                            <div class="Pts" style="text-align: right">
                                <h2 style="color:#b9b9b9">TASKAI</h2>
                            </div>
                        </div>
                        <div class="rivalsGrid">
                            <div class="rivalText movementText">
                                <span id="Position21">1</span>
                            </div>
                            <div class="movementWrapper">
                                <div class="sameMarker"></div>
                                <span id="Movement21" class="MovementOption" style="display: none">LIEKA</span>
                            </div>
                            <div class="movementWrapper">
                                <div class="rivalTeamWrapper" style="background-color:#15185E">
                                    <img src="/Images/Constructors/RedBullIcon.jpg" class="rivalTeam">
                                </div>
                            </div>
                            <div class="rivalText DriverRivalName" id="Driver21">Red Bull</div>
                            <div class="rivalText" style="text-align: right" id="Result21">976</div>
                        </div>
                        <div class="rivalsGrid">
                            <div class="rivalText movementText">
                                <span id="Position22">2</span>
                            </div>
                            <div class="movementWrapper">
                                <div class="sameMarker"></div>
                                <span id="Movement22" class="MovementOption" style="display: none">LIEKA</span>
                            </div>
                            <div class="movementWrapper">
                                <div class="rivalTeamWrapper" style="background-color:#6CAEA9">
                                    <img src="/Images/Constructors/MercedesIcon.jpg" class="rivalTeam">
                                </div>
                            </div>
                            <div class="rivalText DriverRivalName" id="Driver22">Mercedes</div>
                            <div class="rivalText" style="text-align: right" id="Result22">810</div>
                        </div>
                        <div class="rivalsGrid">
                            <div class="rivalText movementText">
                                <span id="Position23">3</span>
                            </div>
                            <div class="movementWrapper">
                                <div class="sameMarker"></div>
                                <span id="Movement23" class="MovementOption" style="display: none">LIEKA</span>
                            </div>
                            <div class="movementWrapper">
                                <div class="rivalTeamWrapper" style="background-color:#FE0100">
                                    <img src="/Images/Constructors/FerrariIcon.jpg" class="rivalTeam">
                                </div>
                            </div>
                            <div class="rivalText DriverRivalName" id="Driver23">Ferrari</div>
                            <div class="rivalText" style="text-align: right" id="Result23">749</div>
                        </div>
                        <div class="rivalsGrid">
                            <div class="rivalText movementText">
                                <span id="Position24">4</span>
                            </div>
                            <div class="movementWrapper">
                                <div class="sameMarker"></div>
                                <span id="Movement24" class="MovementOption" style="display: none">LIEKA</span>
                            </div>
                            <div class="movementWrapper">
                                <div class="rivalTeamWrapper" style="background-color:#0F1D2B">
                                    <img src="/Images/Constructors/AlpineIcon.jpg" class="rivalTeam">
                                </div>
                            </div>
                            <div class="rivalText DriverRivalName" id="Driver24">Alpine</div>
                            <div class="rivalText" style="text-align: right" id="Result24">338</div>
                        </div>
                        <div class="rivalsGrid">
                            <div class="rivalText movementText">
                                <span id="Position25">5</span>
                            </div>
                            <div class="movementWrapper">
                                <div class="leagueUp"></div>
                                <span id="Movement25" class="MovementOption" style="display: none">KYLA</span>
                            </div>
                            <div class="movementWrapper">
                                <div class="rivalTeamWrapper" style="background-color:#FF8700">
                                    <img src="/Images/Constructors/MclarenIcon.jpg" class="rivalTeam">
                                </div>
                            </div>
                            <div class="rivalText DriverRivalName" id="Driver25">Mclaren</div>
                            <div class="rivalText" style="text-align: right" id="Result25">272</div>
                        </div>
                        <div class="rivalsGrid">
                            <div class="rivalText movementText">
                                <span id="Position26">6</span>
                            </div>
                            <div class="movementWrapper">
                                <div class="leagueDown"></div>
                                <span id="Movement26" class="MovementOption" style="display: none">LEIDZIASI</span>
                            </div>
                            <div class="movementWrapper">
                                <div class="rivalTeamWrapper" style="background-color:#02574F">
                                    <img src="/Images/Constructors/AstonMartinIcon.jpg" class="rivalTeam">
                                </div>
                            </div>
                            <div class="rivalText DriverRivalName" id="Driver26">Aston Martin</div>
                            <div class="rivalText" style="text-align: right" id="Result26">261</div>
                        </div>
                        <div class="rivalsGrid">
                            <div class="rivalText movementText">
                                <span id="Position27">7</span>
                            </div>
                            <div class="movementWrapper">
                                <div class="sameMarker"></div>
                                <span id="Movement27" class="MovementOption" style="display: none">LIEKA</span>
                            </div>
                            <div class="movementWrapper">
                                <div class="rivalTeamWrapper" style="background-color:#9A0000">
                                    <img src="/Images/Constructors/AlfaRomeoIcon.jpg" class="rivalTeam">
                                </div>
                            </div>
                            <div class="rivalText DriverRivalName" id="Driver27">Alfa Romeo</div>
                            <div class="rivalText" style="text-align: right" id="Result27">159</div>
                        </div>
                        <div class="rivalsGrid">
                            <div class="rivalText movementText">
                                <span id="Position28">8</span>
                            </div>
                            <div class="movementWrapper">
                                <div class="leagueUp"></div>
                                <span id="Movement28" class="MovementOption" style="display: none">KYLA</span>
                            </div>
                            <div class="movementWrapper">
                                <div class="rivalTeamWrapper" style="background-color:#EE193B">
                                    <img src="/Images/Constructors/HaasIcon.jpg" class="rivalTeam">
                                </div>
                            </div>
                            <div class="rivalText DriverRivalName" id="Driver28">Haas</div>
                            <div class="rivalText" style="text-align: right" id="Result28">146</div>
                        </div>
                        <div class="rivalsGrid">
                            <div class="rivalText movementText">
                                <span id="Position29">9</span>
                            </div>
                            <div class="movementWrapper">
                                <div class="leagueDown"></div>
                                <span id="Movement29" class="MovementOption" style="display: none">LEIDZIASI</span>
                            </div>
                            <div class="movementWrapper">
                                <div class="rivalTeamWrapper" style="background-color:#00A0DF">
                                    <img src="/Images/Constructors/WilliamsIcon.jpg" class="rivalTeam">
                                </div>
                            </div>
                            <div class="rivalText DriverRivalName" id="Driver29">Williams</div>
                            <div class="rivalText" style="text-align: right" id="Result29">144</div>
                        </div>
                        <div class="rivalsGrid">
                            <div class="rivalText movementText">
                                <span id="Position30">10</span>
                            </div>
                            <div class="movementWrapper">
                                <div class="sameMarker"></div>
                                <span id="Movement30" class="MovementOption" style="display: none">LIEKA</span>
                            </div>
                            <div class="movementWrapper">
                                <div class="rivalTeamWrapper" style="background-color:#272850">
                                    <img src="/Images/Constructors/AlphaTauriIcon.jpg" class="rivalTeam">
                                </div>
                            </div>
                            <div class="rivalText DriverRivalName" id="Driver30">AlphaTauri</div>
                            <div class="rivalText" style="text-align: right" id="Result30">132</div>
                        </div>
                    </div>
                </div>
                <a href="standings.html" class="standingsMore hovereffect">Paziureti visus</a>
            </div>
        </div>

        
    </div>
    <footer class="site-footer">
        <div class="footer-container" id="mob-footer">
    
            <div class="footer-2022">FORMULA 1 © 2022</div>
        </div>
    </footer>
        </div>
        