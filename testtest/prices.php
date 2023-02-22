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
            <li><a href="prices" class="aktualu">UZDARBIS</a></li>
            <li><a href="streaks">STATISTIKA</a></li>
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
                                    <h1 id="blockHeader">PERZIURA</h1>
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
                                        <table id="constructorTable" class="tablesorter priceTable tablesorter-default tablesorter185affe7df298" role="grid">
                                                <thead>
                                                    <tr role="row" class="tablesorter-headerRow">
                                                    <th class="firsttableHeader tablesorter-header tablesorter-headerUnSorted" data-column="0" tabindex="0" scope="col" role="columnheader" aria-disabled="false" aria-controls="constructorTable" unselectable="on" aria-sort="none" aria-label="Team: No sort applied, activate to apply an ascending sort" style="user-select: none;"><div class="tablesorter-header-inner">KOMANDA</div></th>
                                                    <th class="tableheaderWidth tablesorter-header tablesorter-headerDesc" data-column="1" tabindex="0" scope="col" role="columnheader" aria-disabled="false" aria-controls="constructorTable" unselectable="on" aria-sort="descending" aria-label="Current Price: Descending sort applied, activate to apply an ascending sort" data-sortedby="sorton" style="user-select: none;"><div class="tablesorter-header-inner">DABARTINE KAINA<img src="/Images/Ico                                                 </tr>ns/down-arrow.png" class="tableSort mobHide"></div></th>
                                                    <th class="tableheaderWidth tablesorter-header tablesorter-headerUnSorted" data-column="2" tabindex="0" scope="col" role="columnheader" aria-disabled="false" aria-controls="constructorTable" unselectable="on" aria-sort="none" aria-label="Season Start PriceSeason Price: No sort applied, activate to apply an ascending sort" style="user-select: none;"><div class="tablesorter-header-inner"><span class="mobHide">SEZONO PRADZIOS KAINA</span><span class="mobTable">SEZONO KAINA</span><img src="/Images/Icons/down-arrow.png" class="tableSort mobHide "></div></th>
                                                    <th style="border-top-right-radius: 6px; border-bottom-right-radius: 6px; user-select: none;" class="tableheaderWidth tablesorter-header tablesorter-headerUnSorted" data-column="3" tabindex="0" scope="col" role="columnheader" aria-disabled="false" aria-controls="constructorTable" unselectable="on" aria-sort="none" aria-label="Points/Million: No sort applied, activate to apply an ascending sort"><div class="tablesorter-header-inner">TASKAI/MILIJONAS<img src="/Images/Icons/down-arrow.png" class="tableSort mobHide"></div></th>
   
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
                                                                    <td>$<span id="CurrentPrice23">34.1</span>m</td>
                                                                    <td>$<span id="SeasonPrice23">32.5</span>m</td>
                                                                    <td id="Million23">1.79</td>
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
                                                    <td>$<span id="CurrentPrice21">34.0</span>m</td>
                                                    <td>$<span id="SeasonPrice21">34.5</span>m</td>
                                                    <td id="Million21">1.49</td>
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
                                                        <td>$<span id="CurrentPrice22">26.7</span>m</td>
                                                        <td>$<span id="SeasonPrice22">25.0</span>m</td>
                                                        <td id="Million22">1.75</td>
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
                                                                        <td>$<span id="CurrentPrice24">16.3</span>m</td>
                                                                        <td>$<span id="SeasonPrice24">18.5</span>m</td>
                                                                        <td id="Million24">1.04</td>
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
                                                                                        <td>$<span id="CurrentPrice26">14.1</span>m</td>
                                                                                        <td>$<span id="SeasonPrice26">14.0</span>m</td>
                                                                                        <td id="Million26">1.50</td>
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
                                                                                <td>$<span id="CurrentPrice25">11.7</span>m</td>
                                                                                <td>$<span id="SeasonPrice25">11.5</span>m</td>
                                                                                <td id="Million25">1.39</td>
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
                                                                                                <td>$<span id="CurrentPrice27">9.5</span>m</td>
                                                                                                <td>$<span id="SeasonPrice27">10.5</span>m</td>
                                                                                                <td id="Million27">0.87</td>
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
                                                                                                                <td>$<span id="CurrentPrice29">8.3</span>m</td>
                                                                                                                <td>$<span id="SeasonPrice29">8.0</span>m</td>
                                                                                                                <td id="Million29">1.20</td>
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
                                                                                                                        <td>$<span id="CurrentPrice30">6.4</span>m</td>
                                                                                                                        <td>$<span id="SeasonPrice30">6.0</span>m</td>
                                                                                                                        <td id="Million30">1.43</td>
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
                                                                                                        <td>$<span id="CurrentPrice28">6.2</span>m</td>
                                                                                                        <td>$<span id="SeasonPrice28">7.0</span>m</td>
                                                                                                        <td id="Million28">1.45</td>
                                                                                                        </tr></tbody>
                                        </table>
                                        <div class="mainStatsGraph desktopGraph">
                                            <iframe width="948" height="400" seamless="" frameborder="0" scrolling="no" id="Graph1" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQyzj36Opl53FlSEW5WxMLbZBdFcakCivTGmgsB015rIvzPu9iYY-XJXsrlxaXhL-kLgPCN3dNsni8f/pubchart?oid=1407141904&amp;format=interactive"></iframe>
                                        </div>
                                        <div class="mainStatsGraph laptopGraph">
                                            <iframe width="847" height="400" seamless="" frameborder="0" scrolling="no" id="Graph2" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQyzj36Opl53FlSEW5WxMLbZBdFcakCivTGmgsB015rIvzPu9iYY-XJXsrlxaXhL-kLgPCN3dNsni8f/pubchart?oid=1818699036&amp;format=interactive"></iframe>
                                        </div>
                                        <div class="mainStatsGraph ipadGraph">
                                            <iframe width="651" height="327" seamless="" frameborder="0" scrolling="no" id="Graph3" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQyzj36Opl53FlSEW5WxMLbZBdFcakCivTGmgsB015rIvzPu9iYY-XJXsrlxaXhL-kLgPCN3dNsni8f/pubchart?oid=211890317&amp;format=interactive"></iframe>
                                        </div>
                                </div>
                            <div class="driverTable">
                                <table id="driverTable" class="tablesorter priceTable tablesorter-default tablesorter820ef3633700a" role="grid">
                                        <thead>
                                            <tr role="row" class="tablesorter-headerRow">
                                            <th class="firsttableHeader tablesorter-header tablesorter-headerUnSorted" data-column="0" tabindex="0" scope="col" role="columnheader" aria-disabled="false" aria-controls="driverTable" unselectable="on" aria-sort="none" aria-label="PILOTAS: No sort applied, activate to apply an ascending sort" style="user-select: none;"><div class="tablesorter-header-inner">PILOTAS</div></th>
                                            <th class="tableheaderWidth tablesorter-header tablesorter-headerDesc" data-column="1" tabindex="0" scope="col" role="columnheader" aria-disabled="false" aria-controls="driverTable" unselectable="on" aria-sort="descending" aria-label="DABARTINE KAINA: Descending sort applied, activate to apply an ascending sort" data-sortedby="sorton" style="user-select: none;"><div class="tablesorter-header-inner">DABARTINE KAINA<img src="/Images/Icons/down-arrow.png" class="tableSort mobHide "></div></th>
                                            <th class="tableheaderWidth tablesorter-header tablesorter-headerUnSorted" data-column="2" tabindex="0" scope="col" role="columnheader" aria-disabled="false" aria-controls="driverTable" unselectable="on" aria-sort="none" aria-label="Season Start PriceSeason Price: No sort applied, activate to apply an ascending sort" style="user-select: none;"><div class="tablesorter-header-inner"><span class="mobHide">SEZONO PRADZIOS KAINA</span><span class="mobTable">Season Price</span><img src="/Images/Icons/down-arrow.png" class="tableSort mobHide "></div></th>
                                            <th style="border-top-right-radius: 6px; border-bottom-right-radius: 6px; user-select: none;" class="tableheaderWidth tablesorter-header tablesorter-headerUnSorted" data-column="3" tabindex="0" scope="col" role="columnheader" aria-disabled="false" aria-controls="driverTable" unselectable="on" aria-sort="none" aria-label="Points/Million: No sort applied, activate to apply an ascending sort"><div class="tablesorter-header-inner">TASKAI/MILIJONAS<img src="/Images/Icons/down-arrow.png" class="tableSort mobHide "></div></th>
                                            </tr>
                                        </thead>
                                        <tbody aria-live="polite" aria-relevant="all">
                                            
                                            
                                            
                                            
                                                    
                                                        
                                                            
                                                                
                                                                    
                                                                        
                                                                            
                                                                                
                                                                                    
                                                                                        
                                                                                            
                                                                                                
                                                                                                    
                                                                                                        
                                                                                                            
                                                                                                                
                                        <tr role="row">
                                                        <td style="text-align: left; border-left: 2px solid #15185E" class="firstTD">
                                                            <div class=" teammateStat">
                                                                <img src="https://res.cloudinary.com/f1-fantasy/image/upload/c_scale,f_auto,w_100/v1616743181/Headshots/Verstappen.png" class="pricesImage">
                                                                <div class="subname ">
                                                                    <div class="mobHide">Max Verstappen</div>
                                                                    <div class="mobTable">VER</div>
                                                                    <div><h2 class="conLogoColour mobHide">Red Bull</h2></div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>$<span id="CurrentPrice5">30.9</span>mil</td>
                                                        <td>$<span id="SeasonPrice5">30.5</span>mil</td>
                                                        <td id="Million5">1.33</td>
                                                        </tr><tr role="row">
                                            <td style="text-align: left; border-left: 2px solid #6CAEA9" class="firstTD">
                                                <div class=" teammateStat">
                                                    <img src="https://res.cloudinary.com/f1-fantasy/image/upload/c_scale,f_auto,w_100/v1616743177/Headshots/Hamilton.png" class="pricesImage">
                                                    <div class="subname ">
                                                        <div class="mobHide">Lewis Hamilton</div>
                                                        <div class="mobTable">HAM</div>
                                                        <div><h2 class="conLogoColour mobHide"> Mercedes</h2></div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>$<span id="CurrentPrice1">28.6</span>mil</td>
                                            <td>$<span id="SeasonPrice1">31.0</span>mil</td>
                                            <td id="Million1">0.90</td>
                                            </tr><tr role="row">
                                                <td style="text-align: left; border-left: 2px solid #6CAEA9" class="firstTD">
                                                    <div class=" teammateStat">
                                                        <img src="https://res.cloudinary.com/f1-fantasy/image/upload/c_scale,f_auto,w_100/v1616743177/Headshots/Russell.png" class="pricesImage">
                                                        <div class="subname ">
                                                            <div class="mobHide">George Russell</div>
                                                            <div class="mobTable">RUS</div>
                                                            <div><h2 class="conLogoColour mobHide"> Mercedes</h2></div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>$<span id="CurrentPrice2">24.0</span>mil</td>
                                                <td>$<span id="SeasonPrice2">24.0</span>mil</td>
                                                <td id="Million2">1.26</td>
                                            </tr><tr role="row">
                                                <td style="text-align: left; border-left: 2px solid #FE0100" class="firstTD">
                                                    <div class=" teammateStat">
                                                        <img src="https://res.cloudinary.com/f1-fantasy/image/upload/c_scale,f_auto,w_100/v1616743177/Headshots/Leclerc.png" class="pricesImage">
                                                        <div class="subname ">
                                                            <div class="mobHide">Charles Leclerc</div>
                                                            <div class="mobTable">LEC</div>
                                                            <div><h2 class="conLogoColour mobHide">Ferrari</h2></div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>$<span id="CurrentPrice3">19.4</span>mil</td>
                                                <td>$<span id="SeasonPrice3">18.0</span>mil</td>
                                                <td id="Million3">1.49</td>
                                            </tr><tr role="row">
                                                            <td style="text-align: left;border-left: 2px solid #15185E" class="firstTD">
                                                                <div class=" teammateStat">
                                                                    <img src="https://res.cloudinary.com/f1-fantasy/image/upload/c_scale,f_auto,w_100/v1616743179/Headshots/Perez.png" class="pricesImage">
                                                                    <div class="subname ">
                                                                        <div class="mobHide">Sergio Perez</div>
                                                                        <div class="mobTable">PER</div>
                                                                        <div><h2 class="conLogoColour mobHide">Red Bull</h2></div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>$<span id="CurrentPrice6">18.4</span>mil</td>
                                                            <td>$<span id="SeasonPrice6">17.5</span>mil</td>
                                                            <td id="Million6">1.44</td>
                                                            </tr><tr role="row">
                                                    <td style="text-align: left;border-left: 2px solid #FE0100" class="firstTD">
                                                        <div class=" teammateStat">
                                                            <img src="https://res.cloudinary.com/f1-fantasy/image/upload/c_scale,f_auto,w_100/v1616743180/Headshots/Sainz.png" class="pricesImage">
                                                            <div class="subname ">
                                                                <div class="mobTable">SAI</div>
                                                                <div class="mobHide">Carlos Sainz</div>
                                                                <div><h2 class="conLogoColour mobHide">Ferrari</h2></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>$<span id="CurrentPrice4">17.5</span>mil</td>
                                                    <td>$<span id="SeasonPrice4">17.0</span>mil</td>
                                                    <td id="Million4">1.37</td>
                                                    </tr><tr role="row">
                                                                    <td style="text-align: left;border-left: 2px solid #FF8700" class="firstTD">
                                                                        <div class=" teammateStat">
                                                                            <img src="https://res.cloudinary.com/f1-fantasy/image/upload/c_scale,f_auto,w_100/v1616743177/Headshots/Norris.png" class="pricesImage">
                                                                            <div class="subname ">
                                                                                <div class="mobHide">Lando Norris</div>
                                                                                <div class="mobTable">NOR</div>
                                                                                <div><h2 class="conLogoColour mobHide">Mclaren</h2></div>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>$<span id="CurrentPrice8">15.7</span>mil</td>
                                                                    <td>$<span id="SeasonPrice8">16.0</span>mil</td>
                                                                    <td id="Million8">1.09</td>
                                                                    </tr><tr role="row">
                                                                                <td style="text-align: left; border-left: 2px solid #0F1D2B" class="firstTD">
                                                                                    <div class=" teammateStat">
                                                                                        <img src="https://res.cloudinary.com/f1-fantasy/image/upload/c_scale,f_auto,w_100/v1616743179/Headshots/Alonso.png" class="pricesImage">
                                                                                        <div class="subname ">
                                                                                            <div class="mobHide">Fernando Alonso</div>
                                                                                            <div class="mobTable">ALO</div>
                                                                                            <div><h2 class="conLogoColour mobHide">Alpine</h2></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td>$<span id="CurrentPrice11">12.5</span>mil</td>
                                                                                <td>$<span id="SeasonPrice11">12.5</span>mil</td>
                                                                                <td id="Million11">1.07</td>
                                                                                </tr><tr role="row">
                                                                                        <td style="text-align: left; border-left: 2px solid #272850" class="firstTD">
                                                                                            <div class=" teammateStat">
                                                                                                <img src="https://res.cloudinary.com/f1-fantasy/image/upload/c_scale,f_auto,w_100/v1616743182/Headshots/Gasly.png" class="pricesImage">
                                                                                                <div class="subname ">
                                                                                                    <div class="mobHide">Pierre Gasly</div>
                                                                                                    <div class="mobTable">GAS</div>
                                                                                                    <div><h2 class="conLogoColour mobHide">AlphaTauri</h2></div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td>$<span id="CurrentPrice13">12.4</span>mil</td>
                                                                                        <td>$<span id="SeasonPrice13">13.5</span>mil</td>
                                                                                        <td id="Million13">0.83</td>
                                                                                        </tr><tr role="row">
                                                                                    <td style="text-align: left; border-left: 2px solid #0F1D2B" class="firstTD">
                                                                                        <div class=" teammateStat">
                                                                                            <img src="https://res.cloudinary.com/f1-fantasy/image/upload/c_scale,f_auto,w_100/v1616743179/Headshots/Ocon.png" class="pricesImage">
                                                                                            <div class="subname ">
                                                                                                <div class="mobHide">Esteban Ocon</div>
                                                                                                <div class="mobTable">OCO</div>
                                                                                                <div><h2 class="conLogoColour mobHide">Alpine</h2></div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>$<span id="CurrentPrice12">12.3</span>mil</td>
                                                                                    <td>$<span id="SeasonPrice12">12.0</span>mil</td>
                                                                                    <td id="Million12">1.18</td>
                                                                                    </tr><tr role="row">
                                                                <td style="text-align: left;border-left: 2px solid #FF8700" class="firstTD">
                                                                    <div class=" teammateStat">
                                                                        <img src="https://res.cloudinary.com/f1-fantasy/image/upload/c_scale,f_auto,w_100/v1616743179/Headshots/Ricciardo.png" class="pricesImage">
                                                                        <div class="subname ">
                                                                            <div class="mobHide">Daniel Ricciardo</div>
                                                                            <div class="mobTable">RIC</div>
                                                                            <div><h2 class="conLogoColour mobHide">Mclaren</h2></div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>$<span id="CurrentPrice7">12.1</span>mil</td>
                                                                <td>$<span id="SeasonPrice7">14.5</span>mil</td>
                                                                <td id="Million7">0.44</td>
                                                                </tr><tr role="row">
                                                                        <td style="text-align: left;border-left: 2px solid #02574F" class="firstTD">
                                                                            <div class=" teammateStat">
                                                                                <img src="https://res.cloudinary.com/f1-fantasy/image/upload/c_scale,f_auto,w_100/v1616743178/Headshots/Vettel.png" class="pricesImage">
                                                                                <div class="subname ">
                                                                                    <div class="mobHide">Sebastian Vettel</div>
                                                                                    <div class="mobTable">VET</div>
                                                                                    <div><h2 class="conLogoColour mobHide">Aston Martin</h2></div>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>$<span id="CurrentPrice9">11.5</span>mil</td>
                                                                        <td>$<span id="SeasonPrice9">11.5</span>mil</td>
                                                                        <td id="Million9">0.95</td>
                                                                        </tr><tr role="row">
                                                                                                        <td style="text-align: left;border-left: 2px solid #9A0000" class="firstTD">
                                                                                                            <div class=" teammateStat">
                                                                                                                <img src="https://res.cloudinary.com/f1-fantasy/image/upload/c_scale,f_auto,w_100/v1616743176/Headshots/Bottas.png" class="pricesImage">
                                                                                                                <div class="subname">
                                                                                                                    <div class=" mobHide">Valtteri Bottas</div>
                                                                                                                    <div class="mobTable">BOT</div>
                                                                                                                    <div><h2 class="conLogoColour  mobHide">Alfa Romeo</h2></div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </td>
                                                                                                        <td>$<span id="CurrentPrice17">9.4</span>mil</td>
                                                                                                        <td>$<span id="SeasonPrice17">9.0</span>mil</td>
                                                                                                        <td id="Million17">1.12</td>
                                                                                                        </tr><tr role="row">
                                                                            <td style="text-align: left;border-left: 2px solid #02574F" class="firstTD">
                                                                                <div class=" teammateStat">
                                                                                    <img src="https://res.cloudinary.com/f1-fantasy/image/upload/c_scale,f_auto,w_100/v1616743179/Headshots/Stroll.png" class="pricesImage">
                                                                                    <div class="subname ">
                                                                                        <div class="mobHide">Lance Stroll</div>
                                                                                        <div class="mobTable">STR</div>
                                                                                        <div><h2 class="conLogoColour mobHide">Aston Martin</h2></div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>$<span id="CurrentPrice10">9.1</span>mil</td>
                                                                            <td>$<span id="SeasonPrice10">9.5</span>mil</td>
                                                                            <td id="Million10">1.15</td>
                                                                            </tr><tr role="row">
                                                                                                <td style="text-align: left;border-left: 2px solid #00A0DF" class="firstTD">
                                                                                                    <div class=" teammateStat">
                                                                                                        <img src="https://res.cloudinary.com/f1-fantasy/image/upload/c_scale,f_auto,w_100/v1616743178/Headshots/Albon.png" class="pricesImage">
                                                                                                        <div class="subname ">
                                                                                                            <div class="mobHide">Alex Albon</div>
                                                                                                            <div class="mobTable">ALB</div>
                                                                                                            <div><h2 class="conLogoColour mobHide">Williams</h2></div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </td>
                                                                                                <td>$<span id="CurrentPrice15">7.7</span>mil</td>
                                                                                                <td>$<span id="SeasonPrice15">7.5</span>mil</td>
                                                                                                <td id="Million15">1.21</td>
                                                                                                </tr><tr role="row">
                                                                                            <td style="text-align: left;border-left: 2px solid #272850" class="firstTD">
                                                                                                <div class=" teammateStat">
                                                                                                    <img src="https://res.cloudinary.com/f1-fantasy/image/upload/c_scale,f_auto,w_100/v1616743181/Headshots/Tsunoda.png" class="pricesImage">
                                                                                                    <div class="subname">
                                                                                                        <div class=" mobHide">Yuki Tsunoda</div>
                                                                                                        <div class="mobTable">TSU</div>
                                                                                                        <div><h2 class="conLogoColour  mobHide">AlphaTauri</h2></div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </td>
                                                                                            <td>$<span id="CurrentPrice14">7.6</span>mil</td>
                                                                                            <td>$<span id="SeasonPrice14">8.5</span>mil</td>
                                                                                            <td id="Million14">0.42</td>
                                                                                            </tr><tr role="row">
                                                                                                            <td style="text-align: left;border-left: 2px solid #9A0000" class="firstTD">
                                                                                                                <div class=" teammateStat">
                                                                                                                    <img src="https://res.cloudinary.com/f1-fantasy/image/upload/c_scale,f_auto,w_100/v1616743179/Headshots/Zhou.png" class="pricesImage">
                                                                                                                    <div class="subname">
                                                                                                                        <div class=" mobHide">Guanyu Zhou</div>
                                                                                                                        <div class="mobTable">ZHO</div>
                                                                                                                        <div><h2 class="conLogoColour  mobHide">Alfa Romeo</h2></div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </td>
                                                                                                            <td>$<span id="CurrentPrice18">7.6</span>mil</td>
                                                                                                            <td>$<span id="SeasonPrice18">8.0</span>mil</td>
                                                                                                            <td id="Million18">0.67</td>
                                                                                                            </tr><tr role="row">
                                                                                                    <td style="text-align: left;border-left: 2px solid #00A0DF" class="firstTD">
                                                                                                        <div class=" teammateStat">
                                                                                                            <img src="https://res.cloudinary.com/f1-fantasy/image/upload/c_scale,f_auto,w_100/v1616743176/Headshots/Latifi.png" class="pricesImage">
                                                                                                            <div class="subname ">
                                                                                                                <div class="mobHide">Nicholas Latifi</div>
                                                                                                                <div class="mobTable">LAT</div>
                                                                                                                <div><h2 class="conLogoColour mobHide">Williams</h2></div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </td>
                                                                                                    <td>$<span id="CurrentPrice16">6.6</span>mil</td>
                                                                                                    <td>$<span id="SeasonPrice16">7.0</span>mil</td>
                                                                                                    <td id="Million16">0.75</td>
                                                                                                    </tr><tr role="row">
                                                                                                                <td style="text-align: left;border-left: 2px solid #EE193B" class="firstTD">
                                                                                                                    <div class=" teammateStat">
                                                                                                                        <img src="https://res.cloudinary.com/f1-fantasy/image/upload/c_scale,f_auto,w_100/v1616743178/Headshots/Schumacher.png" class="pricesImage">
                                                                                                                        <div class="subname ">
                                                                                                                            <div class="mobHide">Mick Schumacher</div>
                                                                                                                            <div class="mobTable">SCH</div>
                                                                                                                            <div><h2 class="conLogoColour mobHide">Haas</h2></div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </td>
                                                                                                                <td>$<span id="CurrentPrice19">6.3</span>mil</td>
                                                                                                                <td>$<span id="SeasonPrice19">6.5</span>mil</td>
                                                                                                                <td id="Million19">1.12</td>
                                                                                                                </tr><tr role="row">
                                                                                                                    <td style="text-align: left;border-left: 2px solid #EE193B" class="firstTD">
                                                                                                                        <div class=" teammateStat">
                                                                                                                            <img src="https://res.cloudinary.com/f1-fantasy/image/upload/c_scale,f_auto,w_100/v1616743177/Headshots/Magnussen.png" class="pricesImage">
                                                                                                                            <div class="subname ">
                                                                                                                                <div class="mobHide">Kevin Magnussen</div>
                                                                                                                                <div class="mobTable">MAG</div>
                                                                                                                                <div><h2 class="conLogoColour mobHide">Haas</h2></div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </td>
                                                                                                                    <td>$<span id="CurrentPrice20">6.1</span>mil</td>
                                                                                                                    <td>$<span id="SeasonPrice20">5.5</span>mil</td>
                                                                                                                    <td id="Million20">1.17</td>
                                                                                                                    </tr></tbody>
                                </table>
                            
                            </div>
                    </div>
                    <div class="column-wrapper-2">
                        <div class=" pricesStats">
                            <div class="pricesHeader">
                                <img src="/Images/Icons/prices-icon.png" style="width: 25px; height: 25px; margin-right: 10px">
                                PAKEITIMAI PO PASKUTINIU LENKTYNIU
                            </div>
                            <div class="weeklyGrid">
                                <div>
                                    <div class="PricesDriver" style="background-color: #15185E">
                                        <img src="/Images/Constructors/RedbullIcon.jpg" class="InnerImage" style="width:20px; height: 20px">
                                    </div>
                                </div>
                                <div class="streaks-bar WeekName" id="WeekName1">Red Bull</div>
                                <div class="streaks-bar" style="justify-content: flex-end;">
                                 <div class="badge greenback WeekChange"><span id="WeekChange1">+1.4</span>mil</div>
                                </div>
                            </div>
                            <div class="weeklyGrid">
                                <div>
                                    <div class="PricesDriver" style="background-color: #FE0100">
                                        <img src="/Images/Constructors/FerrariIcon.jpg" class="InnerImage" style="width:20px; height: 20px">
                                    </div>
                                </div>
                                <div class="streaks-bar WeekName" id="WeekName2">Ferrari</div>
                                <div class="streaks-bar" style="justify-content: flex-end;">
                                    <div class="badge greenback WeekChange"><span id="WeekChange2">+0.9</span>mil</div>
                                </div>
                            </div>
                            <div class="weeklyGrid">
                                <div>
                                    <div class="PricesDriver">
                                        <img src="https://res.cloudinary.com/f1-fantasy/image/upload/c_scale,f_auto,w_100/v1616743177/Headshots/Leclerc.png" class="InnerImage">
                                    </div>
                                </div>
                                <div class="streaks-bar WeekName" id="WeekName3">Charles Leclerc</div>
                                <div class="streaks-bar" style="justify-content: flex-end;">
                                    <div class="badge greenback WeekChange"><span id="WeekChange3">+0.7</span>mil</div>
                                </div>
                            </div>
                            <div class="weeklyGrid">
                                <div>
                                    <div class="PricesDriver">
                                        <img src="https://res.cloudinary.com/f1-fantasy/image/upload/c_scale,f_auto,w_100/v1616743181/Headshots/Verstappen.png" class="InnerImage">
                                    </div>
                                </div>
                                <div class="streaks-bar WeekName" id="WeekName4">Max Verstappen</div>
                                <div class="streaks-bar" style="justify-content: flex-end;">
                                    <div class="badge greenback WeekChange"><span id="WeekChange4">+0.5</span>mil</div>
                                </div>
                            </div>
                            <div class="weeklyGrid">
                                <div>
                                    <div class="PricesDriver">
                                        <img src="https://res.cloudinary.com/f1-fantasy/image/upload/c_scale,f_auto,w_100/v1616743179/Headshots/Perez.png" class="InnerImage">
                                    </div>
                                </div>
                                <div class="streaks-bar WeekName" id="WeekName5">Sergio Perez</div>
                                <div class="streaks-bar" style="justify-content: flex-end;">
                                    <div class="badge greenback WeekChange"><span id="WeekChange5">+0.5</span>mil</div>
                                </div>
                            </div>
                            <div class="weeklyGrid">
                                <div>
                                    <div class="PricesDriver">
                                        <img src="https://res.cloudinary.com/f1-fantasy/image/upload/c_scale,f_auto,w_100/v1616743180/Headshots/Sainz.png" class="InnerImage">
                                    </div>
                                </div>
                                <div class="streaks-bar WeekName" id="WeekName6">Carlos Sainz</div>
                                <div class="streaks-bar" style="justify-content: flex-end;">
                                    <div class="badge greenback WeekChange"><span id="WeekChange6">+0.3</span>mil</div>
                                </div>
                            </div>
                            <div class="weeklyGrid">
                                <div>
                                    <div class="PricesDriver">
                                        <img src="https://res.cloudinary.com/f1-fantasy/image/upload/c_scale,f_auto,w_100/v1616743177/Headshots/Russell.png" class="InnerImage">
                                    </div>
                                </div>
                                <div class="streaks-bar WeekName" id="WeekName7">George Russell</div>
                                <div class="streaks-bar" style="justify-content: flex-end;">
                                    <div class="badge greenback WeekChange"><span id="WeekChange7">+0.2</span>mil</div>
                                </div>
                            </div>
                            <div class="weeklyGrid" style="display: none;">
                                    <div>
                                        <div class="PricesDriver">
                                            <img src="https://res.cloudinary.com/f1-fantasy/image/upload/c_scale,f_auto,w_100/v1616743181/Headshots/Stroll.png" class="InnerImage">
                                        </div>
                                    </div>
                                    <div class="streaks-bar WeekName" id="WeekName8">Lance Stroll</div>
                                    <div class="streaks-bar" style="justify-content: flex-end;">
                                        <div class="badge greenback WeekChange"><span id="WeekChange8">+0.0</span>mil</div>
                                    </div>
                                </div>
                                <div class="weeklyGrid" style="display: none;">
                                        <div>
                                            <div class="PricesDriver">
                                                <img src="https://res.cloudinary.com/f1-fantasy/image/upload/c_scale,f_auto,w_100/v1616743179/Headshots/Ocon.png" class="InnerImage">
                                            </div>
                                        </div>
                                        <div class="streaks-bar WeekName" id="WeekName9">Esteban Ocon</div>
                                        <div class="streaks-bar" style="justify-content: flex-end;">
                                            <div class="badge greenback WeekChange"><span id="WeekChange9">+0.0</span>mil</div>
                                        </div>
                                    </div>
                                    <div class="weeklyGrid" style="display: none;">
                                            <div>
                                                <div class="PricesDriver">
                                                    <img src="https://res.cloudinary.com/f1-fantasy/image/upload/c_scale,f_auto,w_100/v1616743178/Headshots/Albon.png" class="InnerImage">
                                                </div>
                                            </div>
                                            <div class="streaks-bar WeekName" id="WeekName10">Alex Albon</div>
                                            <div class="streaks-bar" style="justify-content: flex-end;">
                                                <div class="badge greenback WeekChange"><span id="WeekChange10">+0.0</span>mil</div>
                                            </div>
                                        </div>
                                        <div class="weeklyGrid" style="display: none;">
                                                <div>
                                                    <div class="PricesDriver">
                                                        <img src="https://res.cloudinary.com/f1-fantasy/image/upload/c_scale,f_auto,w_100/v1616743179/Headshots/Schumacher.png" class="InnerImage">
                                                    </div>
                                                </div>
                                                <div class="streaks-bar WeekName" id="WeekName11">Mick Schumacher</div>
                                                <div class="streaks-bar" style="justify-content: flex-end;">
                                                    <div class="badge greenback WeekChange"><span id="WeekChange11">+0.0</span>mil</div>
                                                </div>
                                            </div>
                                            <div class="weeklyGrid" style="display: none;">
                                                    <div>
                                                        <div class="PricesDriver">
                                                            <img src="https://res.cloudinary.com/f1-fantasy/image/upload/c_scale,f_auto,w_100/v1616743177/Headshots/Magnussen.png" class="InnerImage">
                                                        </div>
                                                    </div>
                                                    <div class="streaks-bar WeekName" id="WeekName12">Kevin Magnussen</div>
                                                    <div class="streaks-bar" style="justify-content: flex-end;">
                                                        <div class="badge greenback WeekChange"><span id="WeekChange12">+0.0</span>mil</div>
                                                    </div>
                                                </div>
                                                <div class="weeklyGrid" style="display: none;">
                                                        <div>
                                                            <div class="PricesDriver" style="background-color: #0F1D2B">
                                                                <img src="/Images/Constructors/AlpineIcon.jpg" class="InnerImage" style="width:20px; height: 20px">
                                                            </div>
                                                        </div>
                                                        <div class="streaks-bar WeekName" id="WeekName13">Alpine</div>
                                                        <div class="streaks-bar" style="justify-content: flex-end;">
                                                            <div class="badge greenback WeekChange"><span id="WeekChange13">+0.0</span>mil</div>
                                                        </div>
                                                    </div>
                                                    <div class="weeklyGrid" style="display: none;">
                                                            <div>
                                                                <div class="PricesDriver" style="background-color: #00A0DF">
                                                                    <img src="/Images/Constructors/WilliamsIcon.jpg" class="InnerImage" style="width:20px; height: 20px">
                                                                </div>
                                                            </div>
                                                            <div class="streaks-bar WeekName" id="WeekName14">Williams</div>
                                                            <div class="streaks-bar" style="justify-content: flex-end;">
                                                                <div class="badge greenback WeekChange"><span id="WeekChange14">+0.0</span>mil</div>
                                                            </div>
                                                        </div>
                                                        <div class="weeklyGrid" style="display: none;">
                                                                <div>
                                                                    <div class="PricesDriver" style="background-color: #EE193B">
                                                                        <img src="/Images/Constructors/HaasIcon.jpg" class="InnerImage" style="width:20px; height: 20px">
                                                                    </div>
                                                                </div>
                                                                <div class="streaks-bar WeekName" id="WeekName15">Haas</div>
                                                                <div class="streaks-bar" style="justify-content: flex-end;">
                                                                    <div class="badge greenback WeekChange"><span id="WeekChange15">+0.0</span>mil</div>
                                                                </div>
                                                            </div>
                                                            <div class="weeklyGrid">
                                                                    <div>
                                                                        <div class="PricesDriver">
                                                                            <img src="https://res.cloudinary.com/f1-fantasy/image/upload/c_scale,f_auto,w_100/v1616743178/Headshots/Bottas.png" class="InnerImage">
                                                                        </div>
                                                                    </div>
                                                                    <div class="streaks-bar WeekName" id="WeekName16">Valtteri Bottas</div>
                                                                    <div class="streaks-bar" style="justify-content: flex-end;">
                                                                        <div class="badge WeekChange redback"><span id="WeekChange16">-0.1</span>mil</div>
                                                                    </div>
                                                                </div>
                                                                <div class="weeklyGrid">
                                                                        <div>
                                                                            <div class="PricesDriver" style="background-color: #02574F">
                                                                                <img src="/Images/Constructors/AstonmartinIcon.jpg" class="InnerImage" style="width:20px; height: 20px">
                                                                            </div>
                                                                        </div>
                                                                        <div class="streaks-bar WeekName" id="WeekName17">Aston Martin</div>
                                                                        <div class="streaks-bar" style="justify-content: flex-end;">
                                                                            <div class="badge WeekChange redback"><span id="WeekChange17">-0.1</span>mil</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="weeklyGrid">
                                                                            <div>
                                                                                <div class="PricesDriver">
                                                                                    <img src="https://res.cloudinary.com/f1-fantasy/image/upload/c_scale,f_auto,w_100/v1616743179/Headshots/Norris.png" class="InnerImage">
                                                                                </div>
                                                                            </div>
                                                                            <div class="streaks-bar WeekName" id="WeekName18">Lando Norris</div>
                                                                            <div class="streaks-bar" style="justify-content: flex-end;">
                                                                                <div class="badge WeekChange redback"><span id="WeekChange18">-0.2</span>mil</div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="weeklyGrid">
                                                                                <div>
                                                                                    <div class="PricesDriver">
                                                                                        <img src="https://res.cloudinary.com/f1-fantasy/image/upload/c_scale,f_auto,w_100/v1616743178/Headshots/Alonso.png" class="InnerImage">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="streaks-bar WeekName" id="WeekName19">Fernando Alonso</div>
                                                                                <div class="streaks-bar" style="justify-content: flex-end;">
                                                                                    <div class="badge WeekChange redback"><span id="WeekChange19">-0.2</span>mil</div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="weeklyGrid">
                                                                                    <div>
                                                                                        <div class="PricesDriver" style="background-color: #6CAEA9">
                                                                                            <img src="/Images/Constructors/MercedesIcon.jpg" class="InnerImage" style="width:20px; height: 20px">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="streaks-bar WeekName" id="WeekName20">Mercedes</div>
                                                                                    <div class="streaks-bar" style="justify-content: flex-end;">
                                                                                        <div class="badge WeekChange redback"><span id="WeekChange20">-0.2</span>mil</div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="weeklyGrid">
                                                                                        <div>
                                                                                            <div class="PricesDriver">
                                                                                                <img src="https://res.cloudinary.com/f1-fantasy/image/upload/c_scale,f_auto,w_100/v1616743182/Headshots/Vettel.png" class="InnerImage">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="streaks-bar WeekName" id="WeekName21">Sebastian Vettel</div>
                                                                                        <div class="streaks-bar" style="justify-content: flex-end;">
                                                                                            <div class="badge WeekChange redback"><span id="WeekChange21">-0.3</span>mil</div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="weeklyGrid">
                                                                                            <div>
                                                                                                <div class="PricesDriver">
                                                                                                    <img src="https://res.cloudinary.com/f1-fantasy/image/upload/c_scale,f_auto,w_100/v1616743177/Headshots/Latifi.png" class="InnerImage">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="streaks-bar WeekName" id="WeekName22">Nicholas Latifi</div>
                                                                                            <div class="streaks-bar" style="justify-content: flex-end;">
                                                                                                <div class="badge WeekChange redback"><span id="WeekChange22">-0.3</span>mil</div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="weeklyGrid">
                                                                                                <div>
                                                                                                    <div class="PricesDriver" style="background-color: #9A0000">
                                                                                                        <img src="/Images/Constructors/AlfaromeoIcon.jpg" class="InnerImage" style="width:20px; height: 20px">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="streaks-bar WeekName" id="WeekName23">Alfa Romeo</div>
                                                                                                <div class="streaks-bar" style="justify-content: flex-end;">
                                                                                                    <div class="badge WeekChange redback"><span id="WeekChange23">-0.3</span>mil</div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="weeklyGrid">
                                                                                                    <div>
                                                                                                        <div class="PricesDriver">
                                                                                                            <img src="https://res.cloudinary.com/f1-fantasy/image/upload/c_scale,f_auto,w_100/v1616743176/Headshots/Zhou.png" class="InnerImage">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="streaks-bar WeekName" id="WeekName24">Guanyu Zhou</div>
                                                                                                    <div class="streaks-bar" style="justify-content: flex-end;">
                                                                                                        <div class="badge WeekChange redback"><span id="WeekChange24">-0.5</span>mil</div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="weeklyGrid">
                                                                                                        <div>
                                                                                                            <div class="PricesDriver">
                                                                                                                <img src="https://res.cloudinary.com/f1-fantasy/image/upload/c_scale,f_auto,w_100/v1616743176/Headshots/Gasly.png" class="InnerImage">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="streaks-bar WeekName" id="WeekName25">Pierre Gasly</div>
                                                                                                        <div class="streaks-bar" style="justify-content: flex-end;">
                                                                                                            <div class="badge WeekChange redback"><span id="WeekChange25">-0.6</span>mil</div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="weeklyGrid">
                                                                                                            <div>
                                                                                                                <div class="PricesDriver" style="background-color: #272850">
                                                                                                                    <img src="/Images/Constructors/AlphatauriIcon.jpg" class="InnerImage" style="width:20px; height: 20px">
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="streaks-bar WeekName" id="WeekName26">AlphaTauri</div>
                                                                                                            <div class="streaks-bar" style="justify-content: flex-end;">
                                                                                                                <div class="badge WeekChange redback"><span id="WeekChange26">-0.7</span>mil</div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="weeklyGrid">
                                                                                                                <div>
                                                                                                                    <div class="PricesDriver">
                                                                                                                        <img src="https://res.cloudinary.com/f1-fantasy/image/upload/c_scale,f_auto,w_100/v1616743179/Headshots/Tsunoda.png" class="InnerImage">
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="streaks-bar WeekName" id="WeekName27">Yuki Tsunoda</div>
                                                                                                                <div class="streaks-bar" style="justify-content: flex-end;">
                                                                                                                    <div class="badge WeekChange redback"><span id="WeekChange27">-0.8</span>mil</div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="weeklyGrid">
                                                                                                                    <div>
                                                                                                                        <div class="PricesDriver" style="background-color: #FF8700">
                                                                                                                            <img src="/Images/Constructors/MclarenIcon.jpg" class="InnerImage" style="width:20px; height: 20px">
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                    <div class="streaks-bar WeekName" id="WeekName28">Mclaren</div>
                                                                                                                    <div class="streaks-bar" style="justify-content: flex-end;">
                                                                                                                        <div class="badge WeekChange redback"><span id="WeekChange28">-1.4</span>mil</div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="weeklyGrid">
                                                                                                                        <div>
                                                                                                                            <div class="PricesDriver">
                                                                                                                                <img src="https://res.cloudinary.com/f1-fantasy/image/upload/c_scale,f_auto,w_100/v1616743177/Headshots/Hamilton.png" class="InnerImage">
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <div class="streaks-bar WeekName" id="WeekName29">Lewis Hamilton</div>
                                                                                                                        <div class="streaks-bar" style="justify-content: flex-end;">
                                                                                                                            <div class="badge WeekChange redback"><span id="WeekChange29">-2.0</span>mil</div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                    <div class="weeklyGrid">
                                                                                                                            <div>
                                                                                                                                <div class="PricesDriver">
                                                                                                                                    <img src="https://res.cloudinary.com/f1-fantasy/image/upload/c_scale,f_auto,w_100/v1616743179/Headshots/Ricciardo.png" class="InnerImage">
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                            <div class="streaks-bar WeekName" id="WeekName30">Daniel Ricciardo</div>
                                                                                                                            <div class="streaks-bar" style="justify-content: flex-end;">
                                                                                                                                <div class="badge WeekChange redback"><span id="WeekChange30">-2.1</span>mil</div>
                                                                                                                            </div>
                                                                                                                        </div>
                        </div>
                    </div>
            </div>
        </div>
        <div class="loaderWrapper" style="display: none;">
                <span class="loader"><span class="loader-inner"></span></span>
            </div>
            <footer class="site-footer">
                        <div class="footer-2022">FORMULA 1 © 2022</div>
                    </div>
            </footer>
</body></html>