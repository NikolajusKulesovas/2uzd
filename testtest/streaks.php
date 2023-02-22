<!DOCTYPE html>
<html lang="en"><head>

  
    <meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="content-language" content="en">
    <meta charset="UTF-8">
    <title>FORMULA 1</title>
    <meta itemprop="name" content="FORMULA 1">
    <meta itemprop="description" name="description" content="FORMULA 1">

    <link rel="stylesheet" href="style.css">
</head>
<div class="banner">
    <header class="maxWidthWrapper">
        <a href="index" class="logo-text">FORMULA 1</a>
        <div class="toggleMenu" onclick="toggleMenu();"></div>
        <ul class="navigation">
            <li><a href="drivers-teams">PILOTAI IR KOMANDOS</a></li>
            <li><a href="standings">REITINGAS</a></li>
            <li><a href="prices">UZDARBIS</a></li>
            <li><a href="streaks" class="aktualu">STATISTIKA</a></li>
            <li><a href="make_team">PADARYTI KOMANDA</a></li>
            <li><a href="login">PRISIJUNGTI</a></li>
            <li><a href="registracija">REGISTRACIJA</a></li>
        </ul>
    </header>
</div>
         
            <div class="maxWidthWrapper">
                <div style="display:flex;  flex-direction: row">
                        <div class="main-wrapper-2 ">
                                <div class="priceOverviewMob" style="align-items: center">
                                        <h1 id="blockHeader">APZIURA</h1>
                                        <div class="pillWrapper">
                                            <div class="pillBox">
                                                <ul style="margin: 0px">
                                                    <li class="pill1 statPill activePill">PILOTAI</li>
                                                    <li class="pill2 statPill">KOMANDOS</li>
                                                </ul>
                                            </div>
                                        </div>
                                </div>
                                    <div class="constructorTable">
                                            <table id="constructorTable" class="tablesorter priceTable tablesorter-default tablesorter9ae751dce19a5" role="grid">
                                                    <thead>
                                                        <tr style="height: auto" role="row" class="tablesorter-headerRow">
                                                        <th class="firsttableHeader2 tablesorter-header tablesorter-headerUnSorted" data-column="0" tabindex="0" scope="col" role="columnheader" aria-disabled="false" aria-controls="constructorTable" unselectable="on" aria-sort="none" aria-label="Team: No sort applied, activate to apply an ascending sort" style="user-select: none;"><div class="tablesorter-header-inner">Team</div></th>
                                                        <th class="tableheaderWidth2 tablesorter-header tablesorter-headerDesc" data-column="1" tabindex="0" scope="col" role="columnheader" aria-disabled="false" aria-controls="constructorTable" unselectable="on" aria-sort="descending" aria-label="Live QualifyingStreakLive Q Streak: Descending sort applied, activate to apply an ascending sort" data-sortedby="sorton" style="user-select: none;"><div class="tablesorter-header-inner">
                                                            <div class="tableWrapperHeading">
                                                                <div>
                                                                    <span class="mobHide">GERU KVALIFIKACIJU<br>REZULTATAI</span><span class="mobTable">GERU KVAL REZ</span>
                                                                </div>
                                                                <div>
                                                                    <img src="/Images/Icons/down-arrow.png" class="tableSort mobHide">
                                                                </div>
                                                            </div>
                                                        </div></th>
                                                        <th class="tableheaderWidth2 tablesorter-header tablesorter-headerUnSorted" data-column="2" tabindex="0" scope="col" role="columnheader" aria-disabled="false" aria-controls="constructorTable" unselectable="on" aria-sort="none" aria-label="Live RaceStreakLive R Streak: No sort applied, activate to apply an ascending sort" style="user-select: none;"><div class="tablesorter-header-inner">
                                                            <div class="tableWrapperHeading">
                                                                <div>
                                                                        <span class="mobHide">GERU LENKTYNIU<br>REZULTATAI</span><span class="mobTable">GERU LENKT REZ</span>
                                                                </div>
                                                                <div>
                                                                    <img src="/Images/Icons/down-arrow.png" class="tableSort mobHide">
                                                                </div>
                                                            </div>
                                                        </div></th>
                                                        <th class="tableheaderWidth2 tablesorter-header tablesorter-headerUnSorted" data-column="3" tabindex="0" scope="col" role="columnheader" aria-disabled="false" aria-controls="constructorTable" unselectable="on" aria-sort="none" aria-label="Total QualifyingStreaks CompletedTotal Q Streaks: No sort applied, activate to apply an ascending sort" style="user-select: none;"><div class="tablesorter-header-inner">
                                                            <div class="tableWrapperHeading">
                                                                <div>
                                                                    <span class="mobHide">ISVISO GERU KVALIFIKACIJU<br>ATLIKTA</span><span class="mobTable">VIDO GERU KVAL</span>
                                                                </div>
                                                                <div>
                                                                    <img src="/Images/Icons/down-arrow.png" class="tableSort mobHide">
                                                                </div>
                                                            </div>
                                                        </div></th>
                                                        <th class="tableheaderWidth2 tablesorter-header tablesorter-headerUnSorted" style="border-top-right-radius: 6px; border-bottom-right-radius: 6px; user-select: none;" data-column="4" tabindex="0" scope="col" role="columnheader" aria-disabled="false" aria-controls="constructorTable" unselectable="on" aria-sort="none" aria-label="Total RaceStreaks CompletedTotal R Streaks: No sort applied, activate to apply an ascending sort"><div class="tablesorter-header-inner">
                                                            <div class="tableWrapperHeading">
                                                                <div>
                                                                        <span class="mobHide">VISO GERU<br>LENKTYNIU ATLIKTA</span><span class="mobTable">VISO GERU RACE</span>
                                                                    </div>
                                                                <div>
                                                                    <img src="/Images/Icons/down-arrow.png" class="tableSort mobHide">
                                                                </div>
                                                            </div>
                                                        </div></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody aria-live="polite" aria-relevant="all">
                                                        
                                                        
                                                                    
                                                                        
                                                                                
                                                                                        
                                                                                                
                                                                                                        
                                                                                                                
                                                                                                                        
                                                    <tr role="row">
                                                                        <td style="text-align: left;border-left: 2px solid #15185E" class="firstTD">
                                                                            <div class=" teammateStat">
                                                                                    <div class="PricesDriver" style="background-color: #15185E">
                                                                                            <img src="/Images/Constructors/RedBullIcon.jpg" class="InnerImage" style="width:20px; height: 20px">
                                                                                        </div>
                                                                                <div class="subname mobHide">
                                                                                    <div class="">Red Bull</div>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td><span id="CurrentPrice23" class="liveconstreak">3</span></td>
                                                                        <td><span id="SeasonPrice23" class="liveconstreak" style="border: 1px solid #7289DA;border-radius:6px; padding: 8px;">2</span></td>
                                                                        <td id="Million23">3</td>
                                                                        <td id="TotalRaceStreak23">2</td>
                                                                        </tr><tr role="row">
                                                        <td style="text-align: left; border-left: 2px solid #6CAEA9" class="firstTD">
                                                            <div class="teammateStat">
                                                                <div class="PricesDriver" style="background-color: #6CAEA9">
                                                                    <img src="/Images/Constructors/MercedesIcon.jpg" class="InnerImage" style="width:20px; height: 20px">
                                                                </div>
                                                            <div class="subname mobHide">
                                                                    <div class="">Mercedes</div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td><span id="CurrentPrice21" class="liveconstreak" style="border: 1px solid #7289DA;border-radius:6px; padding: 8px;">2</span></td>
                                                        <td><span id="SeasonPrice21" class="liveconstreak" style="border: 1px solid #7289DA;border-radius:6px; padding: 8px;">2</span></td>
                                                        <td id="Million21">3</td>
                                                        <td id="TotalRaceStreak21">3</td>
                                                        </tr><tr role="row">
                                                            <td style="text-align: left; border-left: 2px solid #FE0100" class="firstTD">
                                                                <div class=" teammateStat">
                                                                        <div class="PricesDriver" style="background-color: #FE0100">
                                                                            <img src="/Images/Constructors/FerrariIcon.jpg" class="InnerImage" style="width:20px; height: 20px">
                                                                        </div>
                                                                    <div class="subname mobHide">
                                                                        <div class="">Ferrari</div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td><span id="CurrentPrice22" class="liveconstreak" style="border: 1px solid #408F7A;border-radius:6px; padding: 8px;">1</span></td>
                                                            <td><span id="SeasonPrice22" class="liveconstreak" style="border: 1px solid #408F7A;border-radius:6px; padding: 8px;">1</span></td>
                                                            <td id="Million22">4</td>
                                                            <td id="TotalRaceStreak22">1</td>
                                                        </tr><tr role="row">
                                                                            <td style="text-align: left;border-left: 2px solid #FF8700" class="firstTD">
                                                                                <div class=" teammateStat">
                                                                                        <div class="PricesDriver" style="background-color: #FF8700">
                                                                                            <img src="/Images/Constructors/MclarenIcon.jpg" class="InnerImage" style="width:20px; height: 20px">
                                                                                        </div>                                                                                <div class="subname mobHide">
                                                                                        <div class="">Mclaren</div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td><span id="CurrentPrice24" class="liveconstreak" style="border: 1px solid #408F7A;border-radius:6px; padding: 8px;">1</span></td>
                                                                            <td><span id="SeasonPrice24" class="liveconstreak">0</span></td>
                                                                            <td id="Million24">0</td>
                                                                            <td id="TotalRaceStreak24">0</td>
                                                                            </tr><tr role="row">
                                                                                    <td style="text-align: left;border-left: 2px solid #02574F" class="firstTD">
                                                                                        <div class=" teammateStat">
                                                                                                <div class="PricesDriver" style="background-color: #02574F">
                                                                                                    <img src="/Images/Constructors/AstonMartinIcon.jpg" class="InnerImage" style="width:20px; height: 20px">
                                                                                                </div>                                                                                           <div class="subname mobHide">
                                                                                                <div class="">Aston Martin</div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td><span id="CurrentPrice25" class="liveconstreak">0</span></td>
                                                                                    <td><span id="SeasonPrice25" class="liveconstreak">0</span></td>
                                                                                    <td id="Million25">0</td>
                                                                                    <td id="TotalRaceStreak25">0</td>
                                                                                    </tr><tr role="row">
                                                                                            <td style="text-align: left; border-left: 2px solid #0F1D2B" class="firstTD">
                                                                                                <div class=" teammateStat">
                                                                                                        <div class="PricesDriver" style="background-color: #0F1D2B">
                                                                                                            <img src="/Images/Constructors/AlpineIcon.jpg" class="InnerImage" style="width:20px; height: 20px">
                                                                                                        </div>                                                                                                 <div class="subname mobHide">
                                                                                                        <div class="">Alpine</div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </td>
                                                                                            <td><span id="CurrentPrice26" class="liveconstreak">0</span></td>
                                                                                            <td><span id="SeasonPrice26" class="liveconstreak">0</span></td>
                                                                                            <td id="Million26">0</td>
                                                                                            <td id="TotalRaceStreak26">1</td>
                                                                                            </tr><tr role="row">
                                                                                                    <td style="text-align: left; border-left: 2px solid #272850" class="firstTD">
                                                                                                        <div class=" teammateStat">
                                                                                                                <div class="PricesDriver" style="background-color: #272850">
                                                                                                                    <img src="/Images/Constructors/AlphaTauriIcon.jpg" class="InnerImage" style="width:20px; height: 20px">
                                                                                                                </div>                                                                                                          <div class="subname mobHide">
                                                                                                                <div class="">AlphaTauri</div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </td>
                                                                                                    <td><span id="CurrentPrice27" class="liveconstreak">0</span></td>
                                                                                                    <td><span id="SeasonPrice27" class="liveconstreak">0</span></td>
                                                                                                    <td id="Million27">0</td>
                                                                                                    <td id="TotalRaceStreak27">0</td>
                                                                                                    </tr><tr role="row">
                                                                                                            <td style="text-align: left;border-left: 2px solid #00A0DF" class="firstTD">
                                                                                                                <div class=" teammateStat">
                                                                                                                        <div class="PricesDriver" style="background-color: #00A0DF">
                                                                                                                                <img src="/Images/Constructors/WilliamsIcon.jpg" class="InnerImage" style="width:20px; height: 20px">
                                                                                                                            </div>                                                                                                                 <div class="subname mobHide">
                                                                                                                        <div class="">Williams</div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </td>
                                                                                                            <td><span id="CurrentPrice28" class="liveconstreak">0</span></td>
                                                                                                            <td><span id="SeasonPrice28" class="liveconstreak">0</span></td>
                                                                                                            <td id="Million28">0</td>
                                                                                                            <td id="TotalRaceStreak28">0</td>
                                                                                                            </tr><tr role="row">
                                                                                                                    <td style="text-align: left;border-left: 2px solid #9A0000" class="firstTD">
                                                                                                                        <div class=" teammateStat">
                                                                                                                                <div class="PricesDriver" style="background-color: #9A0000">
                                                                                                                                    <img src="/Images/Constructors/AlfaRomeoIcon.jpg" class="InnerImage" style="width:20px; height: 20px">
                                                                                                                                </div>                                                                                                                         <div class="subname mobHide">
                                                                                                                                <div class="">Alfa Romeo</div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </td>
                                                                                                                    <td><span id="CurrentPrice29" class="liveconstreak">0</span></td>
                                                                                                                    <td><span id="SeasonPrice29" class="liveconstreak">0</span></td>
                                                                                                                    <td id="Million29">0</td>
                                                                                                                    <td id="TotalRaceStreak29">0</td>
                                                                                                                    </tr><tr role="row">
                                                                                                                            <td style="text-align: left;border-left: 2px solid #EE193B" class="firstTD">
                                                                                                                                <div class=" teammateStat">
                                                                                                                                        <div class="PricesDriver" style="background-color: #EE193B">
                                                                                                                                                <img src="/Images/Constructors/HaasIcon.jpg" class="InnerImage" style="width:20px; height: 20px">
                                                                                                                                            </div>                                                                                                                                    <div class="subname mobHide">
                                                                                                                                        <div class="">Haas</div>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </td>
                                                                                                                            <td><span id="CurrentPrice30" class="liveconstreak">0</span></td>
                                                                                                                            <td><span id="SeasonPrice30" class="liveconstreak">0</span></td>
                                                                                                                            <td id="Million30">0</td>
                                                                                                                            <td id="TotalRaceStreak30">0</td>
                                                                                                                            </tr></tbody>
                                            </table>
                                    </div>
                                <div class="driverTable">
                                    <table id="driverTable" class="tablesorter priceTable tablesorter-default tablesortere7caf6655dbea" role="grid">
                                            <thead>
                                                    <tr style="height: auto" role="row" class="tablesorter-headerRow">
                                                    <th class="firsttableHeader2 tablesorter-header tablesorter-headerUnSorted" data-column="0" tabindex="0" scope="col" role="columnheader" aria-disabled="false" aria-controls="driverTable" unselectable="on" aria-sort="none" aria-label="Driver: No sort applied, activate to apply an ascending sort" style="user-select: none;"><div class="tablesorter-header-inner">PILOTAS</div></th>
                                                    <th class="tableheaderWidth2 tablesorter-header tablesorter-headerDesc" data-column="1" tabindex="0" scope="col" role="columnheader" aria-disabled="false" aria-controls="driverTable" unselectable="on" aria-sort="descending" aria-label="Live QualifyingStreakLive Q Streak: Descending sort applied, activate to apply an ascending sort" data-sortedby="sorton" style="user-select: none;"><div class="tablesorter-header-inner">
                                                        <div class="tableWrapperHeading">
                                                            <div>
                                                                <span class="mobHide">GERU KVALIFIKACIJU<br>REZULTATAI</span><span class="mobTable">GERU KVAL REZ</span>
                                                            </div>
                                                            <div>
                                                                <img src="/Images/Icons/down-arrow.png" class="tableSort mobHide">
                                                            </div>
                                                        </div>
                                                    </div></th>
                                                    <th class="tableheaderWidth2 tablesorter-header tablesorter-headerUnSorted" data-column="2" tabindex="0" scope="col" role="columnheader" aria-disabled="false" aria-controls="driverTable" unselectable="on" aria-sort="none" aria-label="Live RaceStreakLive R Streak: No sort applied, activate to apply an ascending sort" style="user-select: none;"><div class="tablesorter-header-inner">
                                                        <div class="tableWrapperHeading">
                                                            <div>
                                                                    <span class="mobHide">GERU LENKTYNIU<br>REZULTATAI</span><span class="mobTable">GERU LENKT REZ</span>
                                                            </div>
                                                            <div>
                                                                <img src="/Images/Icons/down-arrow.png" class="tableSort mobHide">
                                                            </div>
                                                        </div>
                                                    </div></th>
                                                    <th class="tableheaderWidth2 tablesorter-header tablesorter-headerUnSorted" data-column="3" tabindex="0" scope="col" role="columnheader" aria-disabled="false" aria-controls="driverTable" unselectable="on" aria-sort="none" aria-label="Total QualifyingStreaks CompletedTotal Q Streaks: No sort applied, activate to apply an ascending sort" style="user-select: none;"><div class="tablesorter-header-inner">
                                                        <div class="tableWrapperHeading">
                                                            <div>
                                                                <span class="mobHide">ISVISO GERU KVALIFIKACIJU<br>ATLIKTA</span><span class="mobTable">VIDO GERU KVAL</span>
                                                            </div>
                                                            <div>
                                                                <img src="/Images/Icons/down-arrow.png" class="tableSort mobHide">
                                                            </div>
                                                        </div>
                                                    </div></th>
                                                    <th class="tableheaderWidth2 tablesorter-header tablesorter-headerUnSorted" style="border-top-right-radius: 6px; border-bottom-right-radius: 6px; user-select: none;" data-column="4" tabindex="0" scope="col" role="columnheader" aria-disabled="false" aria-controls="driverTable" unselectable="on" aria-sort="none" aria-label="Total RaceStreaks CompletedTotal R Streaks: No sort applied, activate to apply an ascending sort"><div class="tablesorter-header-inner">
                                                        <div class="tableWrapperHeading">
                                                            <div>
                                                                    <span class="mobHide">VISO GERU<br>LENKTYNIU ATLIKTA</span><span class="mobTable">VISO GERU RACE</span>
                                                                </div>
                                                            <div>
                                                                <img src="/Images/Icons/down-arrow.png" class="tableSort mobHide">
                                                            </div>
                                                        </div>
                                                    </div></th>
                                                    </tr>
                                                </thead>
                                            <tbody aria-live="polite" aria-relevant="all">
                                                
                                                
                                                
                                                
                                                        
                                                            
                                                                
                                                                    
                                                                        
                                                                            
                                                                                
                                                                                    
                                                                                        
                                                                                            
                                                                                                
                                                                                                    
                                                                                                        
                                                                                                            
                                                                                                                
                                                                                                                    
                                            <tr role="row">
                                                                        <td style="text-align: left;border-left: 2px solid #FF8700" class="firstTD">
                                                                            <div class=" teammateStat">
                                                                                <img src="https://res.cloudinary.com/f1-fantasy/image/upload/c_scale,f_auto,w_100/v1616743177/Headshots/Norris.png" class="pricesImage">
                                                                                <div class="subname mobHide">
                                                                                    <div class="">Lando Norris</div>
                                                                                    <div><h2 class="conLogoColour mobHide">Mclaren</h2></div>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td><span id="CurrentPrice8" class="livedrivstreak">5</span></td>
                                                                        <td><span id="SeasonPrice8" class="livedrivstreak" style="border: 1px solid #FCCA01;border-radius:6px; padding: 8px;">2</span></td>
                                                                        <td id="Million8">1</td>
                                                                        <td id="TotalRaceStreak8">0</td>
                                                                        </tr><tr role="row">
                                                                <td style="text-align: left;border-left: 2px solid #15185E" class="firstTD">
                                                                    <div class=" teammateStat">
                                                                        <img src="https://res.cloudinary.com/f1-fantasy/image/upload/c_scale,f_auto,w_60/v1616743177/Headshots/Perez.png" class="pricesImage">
                                                                        <div class="subname mobHide">
                                                                            <div class="">Sergio Perez</div>
                                                                            <div><h2 class="conLogoColour">Red Bull</h2></div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td><span id="CurrentPrice6" class="livedrivstreak" style="border: 1px solid #408F7A;border-radius:6px; padding: 8px;">3</span></td>
                                                                <td><span id="SeasonPrice6" class="livedrivstreak">5</span></td>
                                                                <td id="Million6">1</td>
                                                                <td id="TotalRaceStreak6">2</td>
                                                                </tr><tr role="row">
                                                <td style="text-align: left; border-left: 2px solid #6CAEA9" class="firstTD">
                                                    <div class=" teammateStat">
                                                        <img src="https://res.cloudinary.com/f1-fantasy/image/upload/c_scale,f_auto,w_60/v1616743177/Headshots/Hamilton.png" class="pricesImage">
                                                        <div class="subname mobHide">
                                                            <div class="">Lewis Hamilton</div>
                                                            <div><h2 class="conLogoColour"> Mercedes</h2></div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td><span id="CurrentPrice1" class="livedrivstreak" style="border: 1px solid #FCCA01;border-radius:6px; padding: 8px;">2</span></td>
                                                <td><span id="SeasonPrice1" class="livedrivstreak" style="border: 1px solid #FCCA01;border-radius:6px; padding: 8px;">2</span></td>
                                                <td id="Million1">2</td>
                                                <td id="TotalRaceStreak1">1</td>
                                                </tr><tr role="row">
                                                    <td style="text-align: left; border-left: 2px solid #FE0100" class="firstTD">
                                                        <div class=" teammateStat">
                                                            <img src="https://res.cloudinary.com/f1-fantasy/image/upload/c_scale,f_auto,w_60/v1616743177/Headshots/Leclerc.png" class="pricesImage">
                                                            <div class="subname mobHide">
                                                                <div class="">Charles Leclerc</div>
                                                                <div><h2 class="conLogoColour">Ferrari</h2></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><span id="CurrentPrice3" class="livedrivstreak" style="border: 1px solid #FCCA01;border-radius:6px; padding: 8px;">2</span></td>
                                                    <td><span id="SeasonPrice3" class="livedrivstreak" style="border: 1px solid #7289DA;border-radius:6px; padding: 8px;">4</span></td>
                                                    <td id="Million3">2</td>
                                                    <td id="TotalRaceStreak3">1</td>
                                                </tr><tr role="row">
                                                    <td style="text-align: left; border-left: 2px solid #6CAEA9" class="firstTD">
                                                        <div class=" teammateStat">
                                                            <img src="https://res.cloudinary.com/f1-fantasy/image/upload/c_scale,f_auto,w_100/v1616743177/Headshots/Russell.png" class="pricesImage">
                                                            <div class="subname mobHide">
                                                                <div class="">George Russell</div>
                                                                <div><h2 class="conLogoColour mobHide"> Mercedes</h2></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><span id="CurrentPrice2" class="livedrivstreak">1</span></td>
                                                    <td><span id="SeasonPrice2" class="livedrivstreak">1</span></td>
                                                    <td id="Million2">2</td>
                                                    <td id="TotalRaceStreak2">2</td>
                                                </tr><tr role="row">
                                                        <td style="text-align: left;border-left: 2px solid #FE0100" class="firstTD">
                                                            <div class=" teammateStat">
                                                                <img src="https://res.cloudinary.com/f1-fantasy/image/upload/c_scale,f_auto,w_60/v1616743177/Headshots/Sainz.png" class="pricesImage">
                                                                <div class="subname mobHide">
                                                                    <div class="">Carlos Sainz</div>
                                                                    <div><h2 class="conLogoColour">Ferrari</h2></div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td><span id="CurrentPrice4" class="livedrivstreak">1</span></td>
                                                        <td><span id="SeasonPrice4" class="livedrivstreak">5</span></td>
                                                        <td id="Million4">3</td>
                                                        <td id="TotalRaceStreak4">1</td>
                                                        </tr><tr role="row">
                                                            <td style="text-align: left; border-left: 2px solid #15185E" class="firstTD">
                                                                <div class=" teammateStat">
                                                                    <img src="https://res.cloudinary.com/f1-fantasy/image/upload/c_scale,f_auto,w_60/v1616743177/Headshots/Verstappen.png" class="pricesImage">
                                                                    <div class="subname mobHide">
                                                                        <div class="">Max Verstappen</div>
                                                                        <div><h2 class="conLogoColour">Red Bull</h2></div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td><span id="CurrentPrice5" class="livedrivstreak">1</span></td>
                                                            <td><span id="SeasonPrice5" class="livedrivstreak" style="border: 1px solid #408F7A;border-radius:6px; padding: 8px;">3</span></td>
                                                            <td id="Million5">3</td>
                                                            <td id="TotalRaceStreak5">2</td>
                                                            </tr><tr role="row">
                                                                    <td style="text-align: left;border-left: 2px solid #FF8700" class="firstTD">
                                                                        <div class=" teammateStat">
                                                                            <img src="https://res.cloudinary.com/f1-fantasy/image/upload/c_scale,f_auto,w_100/v1616743179/Headshots/Ricciardo.png" class="pricesImage">
                                                                            <div class="subname mobHide">
                                                                                <div class="">Daniel Ricciardo</div>
                                                                                <div><h2 class="conLogoColour mobHide">Mclaren</h2></div>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td><span id="CurrentPrice7" class="livedrivstreak">1</span></td>
                                                                    <td><span id="SeasonPrice7" class="livedrivstreak">0</span></td>
                                                                    <td id="Million7">0</td>
                                                                    <td id="TotalRaceStreak7">0</td>
                                                                    </tr><tr role="row">
                                                                                    <td style="text-align: left; border-left: 2px solid #0F1D2B" class="firstTD">
                                                                                        <div class=" teammateStat">
                                                                                            <img src="https://res.cloudinary.com/f1-fantasy/image/upload/c_scale,f_auto,w_100/v1616743179/Headshots/Alonso.png" class="pricesImage">
                                                                                            <div class="subname mobHide">
                                                                                                <div class="">Fernando Alonso</div>
                                                                                                <div><h2 class="conLogoColour mobHide">Alpine</h2></div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td><span id="CurrentPrice11" class="livedrivstreak">1</span></td>
                                                                                    <td><span id="SeasonPrice11" class="livedrivstreak">0</span></td>
                                                                                    <td id="Million11">1</td>
                                                                                    <td id="TotalRaceStreak11">2</td>
                                                                                    </tr><tr role="row">
                                                                                            <td style="text-align: left; border-left: 2px solid #272850" class="firstTD">
                                                                                                <div class=" teammateStat">
                                                                                                    <img src="https://res.cloudinary.com/f1-fantasy/image/upload/c_scale,f_auto,w_100/v1616743182/Headshots/Gasly.png" class="pricesImage">
                                                                                                    <div class="subname mobHide">
                                                                                                        <div class="">Pierre Gasly</div>
                                                                                                        <div><h2 class="conLogoColour mobHide">AlphaTauri</h2></div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </td>
                                                                                            <td><span id="CurrentPrice13" class="livedrivstreak">1</span></td>
                                                                                            <td><span id="SeasonPrice13" class="livedrivstreak">1</span></td>
                                                                                            <td id="Million13">0</td>
                                                                                            <td id="TotalRaceStreak13">0</td>
                                                                                            </tr><tr role="row">
                                                                            <td style="text-align: left;border-left: 2px solid #02574F" class="firstTD">
                                                                                <div class=" teammateStat">
                                                                                    <img src="https://res.cloudinary.com/f1-fantasy/image/upload/c_scale,f_auto,w_100/v1616743178/Headshots/Vettel.png" class="pricesImage">
                                                                                    <div class="subname mobHide">
                                                                                        <div class="">Sebastian Vettel</div>
                                                                                        <div><h2 class="conLogoColour mobHide">Aston Martin</h2></div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td><span id="CurrentPrice9" class="livedrivstreak">0</span></td>
                                                                            <td><span id="SeasonPrice9" class="livedrivstreak">0</span></td>
                                                                            <td id="Million9">0</td>
                                                                            <td id="TotalRaceStreak9">0</td>
                                                                            </tr><tr role="row">
                                                                                <td style="text-align: left;border-left: 2px solid #02574F" class="firstTD">
                                                                                    <div class=" teammateStat">
                                                                                        <img src="https://res.cloudinary.com/f1-fantasy/image/upload/c_scale,f_auto,w_100/v1616743179/Headshots/Stroll.png" class="pricesImage">
                                                                                        <div class="subname mobHide">
                                                                                            <div class="">Lance Stroll</div>
                                                                                            <div><h2 class="conLogoColour mobHide">Aston Martin</h2></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td><span id="CurrentPrice10" class="livedrivstreak">0</span></td>
                                                                                <td><span id="SeasonPrice10" class="livedrivstreak">0</span></td>
                                                                                <td id="Million10">0</td>
                                                                                <td id="TotalRaceStreak10">0</td>
                                                                                </tr><tr role="row">
                                                                                        <td style="text-align: left; border-left: 2px solid #0F1D2B" class="firstTD">
                                                                                            <div class=" teammateStat">
                                                                                                <img src="https://res.cloudinary.com/f1-fantasy/image/upload/c_scale,f_auto,w_100/v1616743179/Headshots/Ocon.png" class="pricesImage">
                                                                                                <div class="subname mobHide">
                                                                                                    <div class="">Esteban Ocon</div>
                                                                                                    <div><h2 class="conLogoColour mobHide">Alpine</h2></div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td><span id="CurrentPrice12" class="livedrivstreak">0</span></td>
                                                                                        <td><span id="SeasonPrice12" class="livedrivstreak">0</span></td>
                                                                                        <td id="Million12">0</td>
                                                                                        <td id="TotalRaceStreak12">1</td>
                                                                                        </tr><tr role="row">
                                                                                                <td style="text-align: left;border-left: 2px solid #272850" class="firstTD">
                                                                                                    <div class=" teammateStat">
                                                                                                        <img src="https://res.cloudinary.com/f1-fantasy/image/upload/c_scale,f_auto,w_100/v1616743181/Headshots/Tsunoda.png" class="pricesImage">
                                                                                                        <div class="subname mobHide">
                                                                                                            <div class=" ">Yuki Tsunoda</div>
                                                                                                            <div><h2 class="conLogoColour  mobHide">AlphaTauri</h2></div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </td>
                                                                                                <td><span id="CurrentPrice14" class="livedrivstreak">0</span></td>
                                                                                                <td><span id="SeasonPrice14" class="livedrivstreak">0</span></td>
                                                                                                <td id="Million14">0</td>
                                                                                                <td id="TotalRaceStreak14">0</td>
                                                                                                </tr><tr role="row">
                                                                                                    <td style="text-align: left;border-left: 2px solid #00A0DF" class="firstTD">
                                                                                                        <div class=" teammateStat">
                                                                                                            <img src="https://res.cloudinary.com/f1-fantasy/image/upload/c_scale,f_auto,w_100/v1616743178/Headshots/Albon.png" class="pricesImage">
                                                                                                            <div class="subname mobHide">
                                                                                                                <div class="">Alex Albon</div>
                                                                                                                <div><h2 class="conLogoColour mobHide">Williams</h2></div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </td>
                                                                                                    <td><span id="CurrentPrice15" class="livedrivstreak">0</span></td>
                                                                                                    <td><span id="SeasonPrice15" class="livedrivstreak">1</span></td>
                                                                                                    <td id="Million15">0</td>
                                                                                                    <td id="TotalRaceStreak15">0</td>
                                                                                                    </tr><tr role="row">
                                                                                                        <td style="text-align: left;border-left: 2px solid #00A0DF" class="firstTD">
                                                                                                            <div class=" teammateStat">
                                                                                                                <img src="https://res.cloudinary.com/f1-fantasy/image/upload/c_scale,f_auto,w_100/v1616743176/Headshots/Latifi.png" class="pricesImage">
                                                                                                                <div class="subname mobHide ">
                                                                                                                    <div class="">Nicholas Latifi</div>
                                                                                                                    <div><h2 class="conLogoColour">Williams</h2></div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </td>
                                                                                                        <td><span id="CurrentPrice16" class="livedrivstreak">0</span></td>
                                                                                                        <td><span id="SeasonPrice16" class="livedrivstreak">0</span></td>
                                                                                                        <td id="Million16">0</td>
                                                                                                        <td id="TotalRaceStreak16">0</td>
                                                                                                        </tr><tr role="row">
                                                                                                            <td style="text-align: left;border-left: 2px solid #9A0000" class="firstTD">
                                                                                                                <div class=" teammateStat">
                                                                                                                    <img src="https://res.cloudinary.com/f1-fantasy/image/upload/c_scale,f_auto,w_100/v1616743176/Headshots/Bottas.png" class="pricesImage">
                                                                                                                    <div class="subname mobHide">
                                                                                                                        <div class=" ">Valtteri Bottas</div>
                                                                                                                        <div><h2 class="conLogoColour  ">Alfa Romeo</h2></div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </td>
                                                                                                            <td><span id="CurrentPrice17" class="livedrivstreak">0</span></td>
                                                                                                            <td><span id="SeasonPrice17" class="livedrivstreak">0</span></td>
                                                                                                            <td id="Million17">0</td>
                                                                                                            <td id="TotalRaceStreak17">1</td>
                                                                                                            </tr><tr role="row">
                                                                                                                <td style="text-align: left;border-left: 2px solid #9A0000" class="firstTD">
                                                                                                                    <div class=" teammateStat">
                                                                                                                        <img src="https://res.cloudinary.com/f1-fantasy/image/upload/c_scale,f_auto,w_100/v1616743179/Headshots/Zhou.png" class="pricesImage">
                                                                                                                        <div class="subname mobHide">
                                                                                                                            <div class=" ">Guanyu Zhou</div>
                                                                                                                            <div><h2 class="conLogoColour  ">Alfa Romeo</h2></div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </td>
                                                                                                                <td><span id="CurrentPrice18" class="livedrivstreak">0</span></td>
                                                                                                                <td><span id="SeasonPrice18" class="livedrivstreak">1</span></td>
                                                                                                                <td id="Million18">0</td>
                                                                                                                <td id="TotalRaceStreak18">0</td>
                                                                                                                </tr><tr role="row">
                                                                                                                    <td style="text-align: left;border-left: 2px solid #EE193B" class="firstTD">
                                                                                                                        <div class=" teammateStat">
                                                                                                                            <img src="https://res.cloudinary.com/f1-fantasy/image/upload/c_scale,f_auto,w_100/v1616743178/Headshots/Schumacher.png" class="pricesImage">
                                                                                                                            <div class="subname mobHide">
                                                                                                                                <div class="">Mick Schumacher</div>
                                                                                                                                <div><h2 class="conLogoColour ">Haas</h2></div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </td>
                                                                                                                    <td><span id="CurrentPrice19" class="livedrivstreak">0</span></td>
                                                                                                                    <td><span id="SeasonPrice19" class="livedrivstreak">0</span></td>
                                                                                                                    <td id="Million19">0</td>
                                                                                                                    <td id="TotalRaceStreak19">0</td>
                                                                                                                    </tr><tr role="row">
                                                                                                                        <td style="text-align: left;border-left: 2px solid #EE193B" class="firstTD">
                                                                                                                            <div class=" teammateStat">
                                                                                                                                <img src="https://res.cloudinary.com/f1-fantasy/image/upload/c_scale,f_auto,w_100/v1616743177/Headshots/Magnussen.png" class="pricesImage">
                                                                                                                                <div class="subname mobHide">
                                                                                                                                    <div class="">Kevin Magnussen</div>
                                                                                                                                    <div><h2 class="conLogoColour ">Haas</h2></div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </td>
                                                                                                                        <td><span id="CurrentPrice20" class="livedrivstreak">0</span></td>
                                                                                                                        <td><span id="SeasonPrice20" class="livedrivstreak">0</span></td>
                                                                                                                        <td id="Million20">0</td>
                                                                                                                        <td id="TotalRaceStreak20">0</td>
                                                                                                                        </tr></tbody>
                                    </table>
                                </div>
                        </div>
                        <div class="column-wrapper-2">
                            <div class=" pricesStats">
                                <div class="pricesHeader">
                                    <img src="" style="width: 25px; height: 25px; margin-right: 10px">
                                    SPALVU REIKSME
                                </div>
                                <div class="indicatorFlex">
                                    <div style="display:flex; align-items: center;">
                                        <div class="streakpageMarker" style="background-color:#7289DA "></div>
                                    </div>
                                    <h2>BUS UZSAKITYTA, JEI KITOS LENKTYNES BUS SEKMINGOS</h2>
                                </div>
                                <div class="indicatorFlex">
                                    <div style="display:flex; align-items: center;">
                                        <div class="streakpageMarker" style="background-color:#408F7A "></div>
                                    </div>
                                    <h2>BUS UZSAKITYTA, JEI SIOS LENKTYNES BUS SEKMINGOS</h2>
                                </div>
                                <div class="indicatorFlex">
                                    <div style="display:flex; align-items: center;">
                                        <div class="streakpageMarker" style="background-color:rgb(207, 184, 90)"></div>
                                    </div>
                                    <h2>BUS UZSAKITYTA, JEI KITOS 3 LENKTYNES BUS SEKMINGOS</h2>
                                </div>
                            </div>

                        </div>
                </div>
            </div>
          
               <footer class="site-footer">        
    <div class="footer-2022">FORMULA 1 © 2022</div>
</div>
</footer>
      </body></html>