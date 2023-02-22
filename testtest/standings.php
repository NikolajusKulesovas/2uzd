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

    </head>
    <div class="banner">
        <header class="maxWidthWrapper">
            <a href="index" class="logo-text">FORMULA 1</a>
            <div class="toggleMenu" onclick="toggleMenu();"></div>
            <ul class="navigation">
                <li><a href="drivers-teams">PILOTAI IR KOMANDOS</a></li>
                <li><a href="standings" class="aktualu">REITINGAS</a></li>
                <li><a href="prices">UZDARBIS</a></li>
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
            <h1 id="blockHeader">REITINGAS</h1>
            <div class="pillWrapper">
                <div class="pillBox">
                    <ul style="margin: 0px">
                        <li class="pill1 statPill activePill">PILOTAI</li>
                        <li class="pill2 statPill">KOMANDOS</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="constructorTable standingsDriver " style="overflow-x: auto; display: none;">
            <table id="constructorTable" class="tablesorter priceTable tablesorter-default tablesorterfba5990c16643" role="grid">
                <thead>
                    <tr role="row" class="tablesorter-headerRow">
                        <th class="firsttableHeader tablesorter-header tablesorter-headerUnSorted" data-column="0" tabindex="0" scope="col" role="columnheader" aria-disabled="false" aria-controls="constructorTable" unselectable="on" aria-sort="none" aria-label="Team: No sort applied, activate to apply an ascending sort" style="user-select: none;"><div class="tablesorter-header-inner">KOMANDA</div></th>
                        <th class="tableheaderWidth tablesorter-header tablesorter-headerUnSorted" data-column="1" tabindex="0" scope="col" role="columnheader" aria-disabled="false" aria-controls="constructorTable" unselectable="on" aria-sort="none" aria-label="BAH: No sort applied, activate to apply an ascending sort" style="user-select: none;"><div class="tablesorter-header-inner">BAH</div></th>
                        <th class="tableheaderWidth tablesorter-header tablesorter-headerUnSorted" data-column="2" tabindex="0" scope="col" role="columnheader" aria-disabled="false" aria-controls="constructorTable" unselectable="on" aria-sort="none" aria-label="SAU: No sort applied, activate to apply an ascending sort" style="user-select: none;"><div class="tablesorter-header-inner">SAU</div></th>
                        <th class="tableheaderWidth tablesorter-header tablesorter-headerUnSorted" data-column="3" tabindex="0" scope="col" role="columnheader" aria-disabled="false" aria-controls="constructorTable" unselectable="on" aria-sort="none" aria-label="AUS: No sort applied, activate to apply an ascending sort" style="user-select: none;"><div class="tablesorter-header-inner">AUS</div></th>
                        <th class="tableheaderWidth tablesorter-header tablesorter-headerUnSorted" data-column="4" tabindex="0" scope="col" role="columnheader" aria-disabled="false" aria-controls="constructorTable" unselectable="on" aria-sort="none" aria-label="ITA: No sort applied, activate to apply an ascending sort" style="user-select: none;"><div class="tablesorter-header-inner">ITA</div></th>
                        <th class="tableheaderWidth tablesorter-header tablesorter-headerUnSorted" data-column="5" tabindex="0" scope="col" role="columnheader" aria-disabled="false" aria-controls="constructorTable" unselectable="on" aria-sort="none" aria-label="USA: No sort applied, activate to apply an ascending sort" style="user-select: none;"><div class="tablesorter-header-inner">USA</div></th>
                        <th class="tableheaderWidth tablesorter-header tablesorter-headerUnSorted" data-column="6" tabindex="0" scope="col" role="columnheader" aria-disabled="false" aria-controls="constructorTable" unselectable="on" aria-sort="none" aria-label="SPA: No sort applied, activate to apply an ascending sort" style="user-select: none;"><div class="tablesorter-header-inner">SPA</div></th>
                        <th class="tableheaderWidth tablesorter-header tablesorter-headerUnSorted" data-column="7" tabindex="0" scope="col" role="columnheader" aria-disabled="false" aria-controls="constructorTable" unselectable="on" aria-sort="none" aria-label="MON: No sort applied, activate to apply an ascending sort" style="user-select: none;"><div class="tablesorter-header-inner">MON</div></th>
                        <th class="tableheaderWidth tablesorter-header tablesorter-headerUnSorted" data-column="8" tabindex="0" scope="col" role="columnheader" aria-disabled="false" aria-controls="constructorTable" unselectable="on" aria-sort="none" aria-label="AZE: No sort applied, activate to apply an ascending sort" style="user-select: none;"><div class="tablesorter-header-inner">AZE</div></th>
                        <th class="tableheaderWidth tablesorter-header tablesorter-headerUnSorted" data-column="9" tabindex="0" scope="col" role="columnheader" aria-disabled="false" aria-controls="constructorTable" unselectable="on" aria-sort="none" aria-label="CAN: No sort applied, activate to apply an ascending sort" style="user-select: none;"><div class="tablesorter-header-inner">CAN</div></th>
                        <th class="tableheaderWidth tablesorter-header tablesorter-headerUnSorted" data-column="10" tabindex="0" scope="col" role="columnheader" aria-disabled="false" aria-controls="constructorTable" unselectable="on" aria-sort="none" aria-label="BRI: No sort applied, activate to apply an ascending sort" style="user-select: none;"><div class="tablesorter-header-inner">BRI</div></th>
                        <th class="tableheaderWidth tablesorter-header tablesorter-headerUnSorted" data-column="11" tabindex="0" scope="col" role="columnheader" aria-disabled="false" aria-controls="constructorTable" unselectable="on" aria-sort="none" aria-label="AUS: No sort applied, activate to apply an ascending sort" style="user-select: none;"><div class="tablesorter-header-inner">AUS</div></th>
                        <th class="tableheaderWidth tablesorter-header tablesorter-headerUnSorted" data-column="12" tabindex="0" scope="col" role="columnheader" aria-disabled="false" aria-controls="constructorTable" unselectable="on" aria-sort="none" aria-label="FRA: No sort applied, activate to apply an ascending sort" style="user-select: none;"><div class="tablesorter-header-inner">FRA</div></th>
                        <th class="tableheaderWidth tablesorter-header tablesorter-headerUnSorted" data-column="13" tabindex="0" scope="col" role="columnheader" aria-disabled="false" aria-controls="constructorTable" unselectable="on" aria-sort="none" aria-label="HUN: No sort applied, activate to apply an ascending sort" style="user-select: none;"><div class="tablesorter-header-inner">HUN</div></th>
                        <th class="tableheaderWidth tablesorter-header tablesorter-headerUnSorted" data-column="14" tabindex="0" scope="col" role="columnheader" aria-disabled="false" aria-controls="constructorTable" unselectable="on" aria-sort="none" aria-label="BEL: No sort applied, activate to apply an ascending sort" style="user-select: none;"><div class="tablesorter-header-inner">BEL</div></th>
                        <th class="tableheaderWidth tablesorter-header tablesorter-headerUnSorted" data-column="15" tabindex="0" scope="col" role="columnheader" aria-disabled="false" aria-controls="constructorTable" unselectable="on" aria-sort="none" aria-label="NET: No sort applied, activate to apply an ascending sort" style="user-select: none;"><div class="tablesorter-header-inner">NET</div></th>
                        <th class="tableheaderWidth tablesorter-header tablesorter-headerUnSorted" data-column="16" tabindex="0" scope="col" role="columnheader" aria-disabled="false" aria-controls="constructorTable" unselectable="on" aria-sort="none" aria-label="ITA: No sort applied, activate to apply an ascending sort" style="user-select: none;"><div class="tablesorter-header-inner">ITA</div></th>
                        <th style="border-top-right-radius: 6px; border-bottom-right-radius: 6px; user-select: none;" class="tableheaderWidth tablesorter-header tablesorter-headerUnSorted" data-column="23" tabindex="0" scope="col" role="columnheader" aria-disabled="false" aria-controls="constructorTable" unselectable="on" aria-sort="none" aria-label="Total: No sort applied, activate to apply an ascending sort"><div class="tablesorter-header-inner">Total</div></th>
                    </tr>
                </thead>
                <tbody aria-live="polite" aria-relevant="all">
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                <tr role="row">
                        <td style="text-align: left; border-left: 2px solid #6CAEA9" class="firstTD">
                                <a href="mercedes.html" class="teammateStat">
                                <div class="PricesDriver" style="background-color: #6CAEA9">
                                    <img src="/Images/Constructors/MercedesIcon.jpg" class="InnerImage" style="width:20px; height: 20px">
                                </div>
                                <div class="subname mobHide">
                                    <div class="">Mercedes</div>
                                </div>
                            </a>
                        </td>
                        <td id="ConRace11">57</td>
                        <td id="ConRace21">34</td>
                        <td id="ConRace31">64</td>
                        <td id="ConRace41">31</td>
                        <td id="ConRace51">40</td>
                        <td id="ConRace61">49</td>
                        <td id="ConRace71">42</td>
                        <td id="ConRace81">60</td>
                        <td id="ConRace91">55</td>
                        <td id="ConRace101">30</td>
                        <td id="ConRace111">72</td>
                        <td id="ConRace121">63</td>
                        <td id="ConRace131">76</td>
                        <td id="ConRace141">29</td>
                        <td id="ConRace151">58</td>
                        <td id="ConRace161">50</td>
                        <td id="Total21">810.0</td>
                    </tr><tr role="row">
                        <td style="text-align: left;border-left: 2px solid #15185E" class="firstTD">
                                <a href="redbull.html" class=" teammateStat">
                                <div class="PricesDriver" style="background-color: #15185E">
                                    <img src="/Images/Constructors/RedBullIcon.jpg" class="InnerImage" style="width:20px; height: 20px">
                                </div>
                                <div class="subname mobHide">
                                    <div class="">Red Bull</div>
                                </div>
                            </a>
                        </td>
                        <td id="ConRace13">4</td>
                        <td id="ConRace23">62</td>
                        <td id="ConRace33">39</td>
                        <td id="ConRace43">99</td>
                        <td id="ConRace53">69</td>
                        <td id="ConRace63">94</td>
                        <td id="ConRace73">69</td>
                        <td id="ConRace83">77</td>
                        <td id="ConRace93">31</td>
                        <td id="ConRace103">42</td>
                        <td id="ConRace113">50</td>
                        <td id="ConRace123">62</td>
                        <td id="ConRace133">63</td>
                        <td id="ConRace143">86</td>
                        <td id="ConRace153">64</td>
                        <td id="ConRace163">65</td>
                        <td id="Total23">976.0</td>
                    </tr><tr role="row">
                        <td style="text-align: left; border-left: 2px solid #0F1D2B" class="firstTD">
                            <a href="alpine.html" class=" teammateStat">
                                <div class="PricesDriver" style="background-color: #0F1D2B">
                                    <img src="/Images/Constructors/AlpineIcon.jpg" class="InnerImage" style="width:20px; height: 20px">
                                </div>
                                <div class="subname mobHide">
                                    <div class="">Alpine</div>
                                </div>
                            </a>
                        </td>
                        <td id="ConRace16">24</td>
                        <td id="ConRace26">13</td>
                        <td id="ConRace36">10</td>
                        <td id="ConRace46">8</td>
                        <td id="ConRace56">13</td>
                        <td id="ConRace66">33</td>
                        <td id="ConRace76">15</td>
                        <td id="ConRace86">27</td>
                        <td id="ConRace96">23</td>
                        <td id="ConRace106">14</td>
                        <td id="ConRace116">40</td>
                        <td id="ConRace126">33</td>
                        <td id="ConRace136">23</td>
                        <td id="ConRace146">33</td>
                        <td id="ConRace156">32</td>
                        <td id="ConRace166">-3</td>
                        <td id="Total26">338.0</td>
                    </tr><tr role="row">
                        <td style="text-align: left; border-left: 2px solid #FE0100" class="firstTD">
                                <a href="ferrari.html" class=" teammateStat">
                                <div class="PricesDriver" style="background-color: #FE0100">
                                    <img src="/Images/Constructors/FerrariIcon.jpg" class="InnerImage" style="width:20px; height: 20px">
                                </div>
                                <div class="subname mobHide">
                                    <div class="">Ferrari</div>
                                </div>
                            </a>
                        </td>
                        <td id="ConRace12">76</td>
                        <td id="ConRace22">63</td>
                        <td id="ConRace32">44</td>
                        <td id="ConRace42">30</td>
                        <td id="ConRace52">56</td>
                        <td id="ConRace62">30</td>
                        <td id="ConRace72">51</td>
                        <td id="ConRace82">3</td>
                        <td id="ConRace92">60</td>
                        <td id="ConRace102">61</td>
                        <td id="ConRace112">63</td>
                        <td id="ConRace122">37</td>
                        <td id="ConRace132">35</td>
                        <td id="ConRace142">41</td>
                        <td id="ConRace152">47</td>
                        <td id="ConRace162">52</td>
                        <td id="Total22">749.0</td>
                    </tr><tr role="row">
                        <td style="text-align: left; border-left: 2px solid #272850" class="firstTD">
                                <a href="alphatauri.html" class=" teammateStat">
                                <div class="PricesDriver" style="background-color: #272850">
                                    <img src="/Images/Constructors/AlphaTauriIcon.jpg" class="InnerImage" style="width:20px; height: 20px">
                                </div>
                                <div class="subname mobHide">
                                    <div class="">AlphaTauri</div>
                                </div>
                            </a>
                        </td>
                        <td id="ConRace17">10</td>
                        <td id="ConRace27">-3</td>
                        <td id="ConRace37">8</td>
                        <td id="ConRace47">36</td>
                        <td id="ConRace57">-3</td>
                        <td id="ConRace67">15</td>
                        <td id="ConRace77">5</td>
                        <td id="ConRace87">18</td>
                        <td id="ConRace97">-3</td>
                        <td id="ConRace107">-7</td>
                        <td id="ConRace117">4</td>
                        <td id="ConRace127">6</td>
                        <td id="ConRace137">8</td>
                        <td id="ConRace147">23</td>
                        <td id="ConRace157">-2</td>
                        <td id="ConRace167">17</td>
                        <td id="Total27">132.0</td>
                    </tr><tr role="row">
                        <td style="text-align: left;border-left: 2px solid #02574F" class="firstTD">
                                <a href="astonmartin.html" class=" teammateStat">
                                <div class="PricesDriver" style="background-color: #02574F">
                                    <img src="/Images/Constructors/AstonMartinIcon.jpg" class="InnerImage" style="width:20px; height: 20px">
                                </div>
                                <div class="subname mobHide">
                                    <div class="">Aston Martin</div>
                                </div>
                            </a>
                        </td>
                        <td id="ConRace15">14</td>
                        <td id="ConRace25">19</td>
                        <td id="ConRace35">-3</td>
                        <td id="ConRace45">32</td>
                        <td id="ConRace55">1</td>
                        <td id="ConRace65">20</td>
                        <td id="ConRace75">15</td>
                        <td id="ConRace85">28</td>
                        <td id="ConRace95">25</td>
                        <td id="ConRace105">26</td>
                        <td id="ConRace115">15</td>
                        <td id="ConRace125">22</td>
                        <td id="ConRace135">22</td>
                        <td id="ConRace145">25</td>
                        <td id="ConRace155">18</td>
                        <td id="ConRace165">-18</td>
                        <td id="ConRace175">0</td>
                        <td id="Total25">261.0</td>
                    </tr><tr role="row">
                        <td style="text-align: left;border-left: 2px solid #9A0000" class="firstTD">
                                <a href="alfaromeo.html" class=" teammateStat">
                                <div class="PricesDriver" style="background-color: #9A0000">
                                    <img src="/Images/Constructors/AlfaRomeoIcon.jpg" class="InnerImage" style="width:20px; height: 20px">
                                </div>
                                <div class="subname mobHide">
                                    <div class="">Alfa Romeo</div>
                                </div>
                            </a>
                        </td>
                        <td id="ConRace19">31</td>
                        <td id="ConRace29">3</td>
                        <td id="ConRace39">24</td>
                        <td id="ConRace49">35</td>
                        <td id="ConRace59">3</td>
                        <td id="ConRace69">10</td>
                        <td id="ConRace79">21</td>
                        <td id="ConRace89">3</td>
                        <td id="ConRace99">30</td>
                        <td id="ConRace109">-13</td>
                        <td id="ConRace119">12</td>
                        <td id="ConRace129">7</td>
                        <td id="ConRace139">-2</td>
                        <td id="ConRace149">-8</td>
                        <td id="ConRace159">-10</td>
                        <td id="ConRace169">13</td>
                        <td id="Total29">159.0</td>
                    </tr><tr role="row">
                        <td style="text-align: left;border-left: 2px solid #00A0DF" class="firstTD">
                                <a href="williams.html" class=" teammateStat">
                                <div class="PricesDriver" style="background-color: #00A0DF">
                                    <img src="/Images/Constructors/WilliamsIcon.jpg" class="InnerImage" style="width:20px; height: 20px">
                                </div>
                                <div class="subname mobHide">
                                    <div class="">Williams</div>
                                </div>
                            </a>
                        </td>
                        <td id="ConRace18">15</td>
                        <td id="ConRace28">-1</td>
                        <td id="ConRace38">8</td>
                        <td id="ConRace48">17</td>
                        <td id="ConRace58">26</td>
                        <td id="ConRace68">14</td>
                        <td id="ConRace78">1</td>
                        <td id="ConRace88">20</td>
                        <td id="ConRace98">9</td>
                        <td id="ConRace108">-8</td>
                        <td id="ConRace118">0</td>
                        <td id="ConRace128">-2</td>
                        <td id="ConRace138">8</td>
                        <td id="ConRace148">5</td>
                        <td id="ConRace158">15</td>
                        <td id="ConRace168">17</td>
                        <td id="Total28">144.0</td>
                    </tr><tr role="row">
                        <td style="text-align: left;border-left: 2px solid #EE193B" class="firstTD">
                            <a href="haas.html" class=" teammateStat">
                                <div class="PricesDriver" style="background-color: #EE193B">
                                    <img src="/Images/Constructors/haasIcon.jpg" class="InnerImage" style="width:20px; height: 20px">
                                </div>
                                <div class="subname mobHide">
                                    <div class="">Haas</div>
                                </div>
                            </a>
                        </td>
                        <td id="ConRace110">27</td>
                        <td id="ConRace210">11</td>
                        <td id="ConRace310">13</td>
                        <td id="ConRace410">8</td>
                        <td id="ConRace510">5</td>
                        <td id="ConRace610">-6</td>
                        <td id="ConRace710">-16</td>
                        <td id="ConRace810">3</td>
                        <td id="ConRace910">-2</td>
                        <td id="ConRace1010">29</td>
                        <td id="ConRace1110">38</td>
                        <td id="ConRace1210">4</td>
                        <td id="ConRace1310">2</td>
                        <td id="ConRace1410">5</td>
                        <td id="ConRace1510">5</td>
                        <td id="ConRace1610">20</td>
                        <td id="Total30">146.0</td>
                    </tr><tr role="row">
                        <td style="text-align: left;border-left: 2px solid #FF8700" class="firstTD">
                                <a href="mclaren.html" class=" teammateStat">
                                <div class="PricesDriver" style="background-color: #FF8700">
                                    <img src="/Images/Constructors/MclarenIcon.jpg" class="InnerImage" style="width:20px; height: 20px">
                                </div>
                                <div class="subname mobHide">
                                    <div class="">Mclaren</div>
                                </div>
                            </a>
                        </td>
                        <td id="ConRace14">9</td>
                        <td id="ConRace24">9</td>
                        <td id="ConRace34">37</td>
                        <td id="ConRace44">41</td>
                        <td id="ConRace54">1</td>
                        <td id="ConRace64">13</td>
                        <td id="ConRace74">26</td>
                        <td id="ConRace84">24</td>
                        <td id="ConRace94">3</td>
                        <td id="ConRace104">22</td>
                        <td id="ConRace114">37</td>
                        <td id="ConRace124">21</td>
                        <td id="ConRace134">7</td>
                        <td id="ConRace144">-4</td>
                        <td id="ConRace154">16</td>
                        <td id="ConRace164">10</td>
                        <td id="Total24">272.0</td>
                    </tr></tbody>
            </table>
        </div>
        <div class="driverTable standingsDriver" style="overflow-x: auto;">
            <table id="driverTable" class="priceTable tablesorter tablesorter-default tablesortere159079bc3c7a" role="grid">
                <thead>
                    <tr role="row" class="tablesorter-headerRow">
                        <th class="firsttableHeader tablesorter-header tablesorter-headerUnSorted" data-column="0" tabindex="0" scope="col" role="columnheader" aria-disabled="false" aria-controls="driverTable" unselectable="on" aria-sort="none" aria-label="Driver: No sort applied, activate to apply an ascending sort" style="user-select: none;"><div class="tablesorter-header-inner">PILOTAI</div></th>
                        <th class="tableheaderWidth tablesorter-header tablesorter-headerUnSorted" data-column="1" tabindex="0" scope="col" role="columnheader" aria-disabled="false" aria-controls="driverTable" unselectable="on" aria-sort="none" aria-label="BAH: No sort applied, activate to apply an ascending sort" style="user-select: none;"><div class="tablesorter-header-inner">BAH</div></th>
                        <th class="tableheaderWidth tablesorter-header tablesorter-headerUnSorted" data-column="2" tabindex="0" scope="col" role="columnheader" aria-disabled="false" aria-controls="driverTable" unselectable="on" aria-sort="none" aria-label="SAU: No sort applied, activate to apply an ascending sort" style="user-select: none;"><div class="tablesorter-header-inner">SAU</div></th>
                        <th class="tableheaderWidth tablesorter-header tablesorter-headerUnSorted" data-column="3" tabindex="0" scope="col" role="columnheader" aria-disabled="false" aria-controls="driverTable" unselectable="on" aria-sort="none" aria-label="AUS: No sort applied, activate to apply an ascending sort" style="user-select: none;"><div class="tablesorter-header-inner">AUS</div></th>
                        <th class="tableheaderWidth tablesorter-header tablesorter-headerUnSorted" data-column="4" tabindex="0" scope="col" role="columnheader" aria-disabled="false" aria-controls="driverTable" unselectable="on" aria-sort="none" aria-label="ITA: No sort applied, activate to apply an ascending sort" style="user-select: none;"><div class="tablesorter-header-inner">ITA</div></th>
                        <th class="tableheaderWidth tablesorter-header tablesorter-headerUnSorted" data-column="5" tabindex="0" scope="col" role="columnheader" aria-disabled="false" aria-controls="driverTable" unselectable="on" aria-sort="none" aria-label="USA: No sort applied, activate to apply an ascending sort" style="user-select: none;"><div class="tablesorter-header-inner">USA</div></th>
                        <th class="tableheaderWidth tablesorter-header tablesorter-headerUnSorted" data-column="6" tabindex="0" scope="col" role="columnheader" aria-disabled="false" aria-controls="driverTable" unselectable="on" aria-sort="none" aria-label="SPA: No sort applied, activate to apply an ascending sort" style="user-select: none;"><div class="tablesorter-header-inner">SPA</div></th>
                        <th class="tableheaderWidth tablesorter-header tablesorter-headerUnSorted" data-column="7" tabindex="0" scope="col" role="columnheader" aria-disabled="false" aria-controls="driverTable" unselectable="on" aria-sort="none" aria-label="MON: No sort applied, activate to apply an ascending sort" style="user-select: none;"><div class="tablesorter-header-inner">MON</div></th>
                        <th class="tableheaderWidth tablesorter-header tablesorter-headerUnSorted" data-column="8" tabindex="0" scope="col" role="columnheader" aria-disabled="false" aria-controls="driverTable" unselectable="on" aria-sort="none" aria-label="AZE: No sort applied, activate to apply an ascending sort" style="user-select: none;"><div class="tablesorter-header-inner">AZE</div></th>
                        <th class="tableheaderWidth tablesorter-header tablesorter-headerUnSorted" data-column="9" tabindex="0" scope="col" role="columnheader" aria-disabled="false" aria-controls="driverTable" unselectable="on" aria-sort="none" aria-label="CAN: No sort applied, activate to apply an ascending sort" style="user-select: none;"><div class="tablesorter-header-inner">CAN</div></th>
                        <th class="tableheaderWidth tablesorter-header tablesorter-headerUnSorted" data-column="10" tabindex="0" scope="col" role="columnheader" aria-disabled="false" aria-controls="driverTable" unselectable="on" aria-sort="none" aria-label="BRI: No sort applied, activate to apply an ascending sort" style="user-select: none;"><div class="tablesorter-header-inner">BRI</div></th>
                        <th class="tableheaderWidth tablesorter-header tablesorter-headerUnSorted" data-column="11" tabindex="0" scope="col" role="columnheader" aria-disabled="false" aria-controls="driverTable" unselectable="on" aria-sort="none" aria-label="AUS: No sort applied, activate to apply an ascending sort" style="user-select: none;"><div class="tablesorter-header-inner">AUS</div></th>
                        <th class="tableheaderWidth tablesorter-header tablesorter-headerUnSorted" data-column="12" tabindex="0" scope="col" role="columnheader" aria-disabled="false" aria-controls="driverTable" unselectable="on" aria-sort="none" aria-label="FRA: No sort applied, activate to apply an ascending sort" style="user-select: none;"><div class="tablesorter-header-inner">FRA</div></th>
                        <th class="tableheaderWidth tablesorter-header tablesorter-headerUnSorted" data-column="13" tabindex="0" scope="col" role="columnheader" aria-disabled="false" aria-controls="driverTable" unselectable="on" aria-sort="none" aria-label="HUN: No sort applied, activate to apply an ascending sort" style="user-select: none;"><div class="tablesorter-header-inner">HUN</div></th>
                        <th class="tableheaderWidth tablesorter-header tablesorter-headerUnSorted" data-column="14" tabindex="0" scope="col" role="columnheader" aria-disabled="false" aria-controls="driverTable" unselectable="on" aria-sort="none" aria-label="BEL: No sort applied, activate to apply an ascending sort" style="user-select: none;"><div class="tablesorter-header-inner">BEL</div></th>
                        <th class="tableheaderWidth tablesorter-header tablesorter-headerUnSorted" data-column="15" tabindex="0" scope="col" role="columnheader" aria-disabled="false" aria-controls="driverTable" unselectable="on" aria-sort="none" aria-label="NET: No sort applied, activate to apply an ascending sort" style="user-select: none;"><div class="tablesorter-header-inner">NET</div></th>
                        <th class="tableheaderWidth tablesorter-header tablesorter-headerUnSorted" data-column="16" tabindex="0" scope="col" role="columnheader" aria-disabled="false" aria-controls="driverTable" unselectable="on" aria-sort="none" aria-label="ITA: No sort applied, activate to apply an ascending sort" style="user-select: none;"><div class="tablesorter-header-inner">ITA</div></th>
                        <th style="border-top-right-radius: 6px; border-bottom-right-radius: 6px; user-select: none;" class="tableheaderWidth tablesorter-header tablesorter-headerUnSorted" data-column="23" tabindex="0" scope="col" role="columnheader" aria-disabled="false" aria-controls="driverTable" unselectable="on" aria-sort="none" aria-label="Total: No sort applied, activate to apply an ascending sort"><div class="tablesorter-header-inner">Total</div></th>
                    </tr>
                </thead>
                <tbody aria-live="polite" aria-relevant="all">
                    
                    
                    
            
                    
                    
                    
                <tr role="row">
                        <td style="text-align: left; border-left: 2px solid #6CAEA9" class="firstTD">
                            <a href="hamilton.html" class=" teammateStat">
                                <img src="https://res.cloudinary.com/f1-fantasy/image/upload/c_scale,f_auto,w_80/v1616743177/Headshots/Hamilton.png" class="pricesImage">
                                <div class="subname mobHide">
                                    <div class="">Hamilton</div>
                                    <div>
                                        <h2 class="conLogoColour"> Mercedes</h2>
                                    </div>
                                </div>
                            </a>
                        </td>
                        <td id="Race11">34</td>
                        <td id="Race21B">13</td>
                        <td id="Race31">26</td>
                        <td id="Race41">5</td>
                        <td id="Race51">19</td>
                        <td id="Race61">21</td>
                        <td id="Race71">11</td>
                        <td id="Race81">26</td>
                        <td id="Race91">48</td>
                        <td id="Race101">39</td>
                        <td id="Race111B">39</td>
                        <td id="Race121">38</td>
                        <td id="Race131">44</td>
                        <td id="Race141">4</td>
                        <td id="Race151">25</td>
                        <td id="Race161">22</td>
                        <td id="Total1">414</td>
                    </tr><tr role="row">
                        <td style="text-align: left; border-left: 2px solid #15185E" class="firstTD">
                                <a href="verstappen.html" class=" teammateStat">
                                <img src="https://res.cloudinary.com/f1-fantasy/image/upload/c_scale,f_auto,w_80/v1616743177/Headshots/Verstappen.png" class="pricesImage">
                                <div class="subname mobHide">
                                    <div class="">Verstappen</div>
                                    <div>
                                        <h2 class="conLogoColour">Red Bull</h2>
                                    </div>
                                </div>
                            </a>
                        </td>
                        <td id="Race15">5</td>
                        <td id="Race25B">45</td>
                        <td id="Race35">4</td>
                        <td id="Race45">62</td>
                        <td id="Race55">56</td>
                        <td id="Race65">45</td>
                        <td id="Race75">28</td>
                        <td id="Race85">54</td>
                        <td id="Race95">44</td>
                        <td id="Race105">16</td>
                        <td id="Race115B">53</td>
                        <td id="Race125">45</td>
                        <td id="Race135">55</td>
                        <td id="Race145">49</td>
                        <td id="Race155">54</td>
                        <td id="Race165">45</td>
                        <td id="Total5">660</td>
                    </tr><tr role="row">
                        <td style="text-align: left; border-left: 2px solid #6CAEA9" class="firstTD">
                            <a class=" teammateStat">
                                <img src="https://res.cloudinary.com/f1-fantasy/image/upload/c_scale,f_auto,w_100/v1616743177/Headshots/Russell.png" class="pricesImage">
                                <div class="subname mobHide">
                                    <div class="">Russell</div>
                                    <div><h2 class="conLogoColour mobHide"> Mercedes</h2></div>
                                </div>
                            </a>
                        </td>
                        <td id="Race12">28</td>
                        <td id="Race22B">26</td>
                        <td id="Race32">33</td>
                        <td id="Race42">33</td>
                        <td id="Race52">36</td>
                        <td id="Race62">33</td>
                        <td id="Race72">26</td>
                        <td id="Race82">34</td>
                        <td id="Race92">27</td>
                        <td id="Race102">1</td>
                        <td id="Race112B">35</td>
                        <td id="Race122">30</td>
                        <td id="Race132">27</td>
                        <td id="Race142">30</td>
                        <td id="Race152">53</td>
                        <td id="Race162">33</td>
                        <td id="Total2">485</td>
                    </tr><tr role="row">
                        <td style="text-align: left;border-left: 2px solid #15185E" class="firstTD">
                                <a href="perez.html" class=" teammateStat">
                                <img src="https://res.cloudinary.com/f1-fantasy/image/upload/c_scale,f_auto,w_80/v1616743177/Headshots/Perez.png" class="pricesImage">
                                <div class="subname mobHide">
                                    <div class="">Perez</div>
                                    <div>
                                        <h2 class="conLogoColour">Red Bull</h2>
                                    </div>
                                </div>
                            </a>
                        </td>
                        <td id="Race16">4</td>
                        <td id="Race26B">22</td>
                        <td id="Race36">35</td>
                        <td id="Race46">44</td>
                        <td id="Race56">28</td>
                        <td id="Race66">49</td>
                        <td id="Race76">46</td>
                        <td id="Race86">38</td>
                        <td id="Race96">-8</td>
                        <td id="Race106">36</td>
                        <td id="Race116B">4</td>
                        <td id="Race126">22</td>
                        <td id="Race136">23</td>
                        <td id="Race146">32</td>
                        <td id="Race156">20</td>
                        <td id="Race166">30</td>
                        <td id="Total6">425</td>
                    </tr><tr role="row">
                        <td style="text-align: left; border-left: 2px solid #0F1D2B" class="firstTD">
                            <a class=" teammateStat">
                                <img src="https://res.cloudinary.com/f1-fantasy/image/upload/c_scale,f_auto,w_100/v1616743179/Headshots/Alonso.png" class="pricesImage">
                                <div class="subname mobHide">
                                    <div class="">Alonso</div>
                                    <div><h2 class="conLogoColour mobHide">Alpine</h2></div>
                                </div>
                            </a>
                        </td>
                        <td id="Race111">9</td>
                        <td id="Race211B">-3</td>
                        <td id="Race311">-5</td>
                        <td id="Race411">2</td>
                        <td id="Race511">5</td>
                        <td id="Race611">14</td>
                        <td id="Race711">19</td>
                        <td id="Race811">22</td>
                        <td id="Race911">7</td>
                        <td id="Race1011">37</td>
                        <td id="Race1111B">18</td>
                        <td id="Race1211">23</td>
                        <td id="Race1311">12</td>
                        <td id="Race1411">24</td>
                        <td id="Race1511">34</td>
                        <td id="Race1611">-4</td>
                        <td id="Total11">214</td>
                    </tr><tr role="row">
                        <td style="text-align: left; border-left: 2px solid #FE0100" class="firstTD">
                                <a href="leclerc.html" class=" teammateStat">
                                <img src="https://res.cloudinary.com/f1-fantasy/image/upload/c_scale,f_auto,w_80/v1616743177/Headshots/Leclerc.png" class="pricesImage">
                                <div class="subname mobHide">
                                    <div class="">Leclerc</div>
                                    <div>
                                        <h2 class="conLogoColour">Ferrari</h2>
                                    </div>
                                </div>
                            </a>
                        </td>
                        <td id="Race13">49</td>
                        <td id="Race23B">41</td>
                        <td id="Race33">49</td>
                        <td id="Race43">30</td>
                        <td id="Race53">50</td>
                        <td id="Race63">5</td>
                        <td id="Race73">22</td>
                        <td id="Race83">5</td>
                        <td id="Race93">23</td>
                        <td id="Race103">22</td>
                        <td id="Race113B">60</td>
                        <td id="Race123">5</td>
                        <td id="Race133">14</td>
                        <td id="Race143">20</td>
                        <td id="Race153">31</td>
                        <td id="Total3">461</td>
                    </tr><tr role="row">
                        <td style="text-align: left; border-left: 2px solid #272850" class="firstTD">
                            <a class=" teammateStat">
                                <img src="https://res.cloudinary.com/f1-fantasy/image/upload/c_scale,f_auto,w_100/v1616743182/Headshots/Gasly.png" class="pricesImage">
                                <div class="subname mobHide">
                                    <div class="">Gasly</div>
                                    <div><h2 class="conLogoColour mobHide">AlphaTauri</h2></div>
                                </div>
                            </a>
                        </td>
                        <td id="Race113">-4</td>
                        <td id="Race213B">17</td>
                        <td id="Race313">14</td>
                        <td id="Race413">13</td>
                        <td id="Race513">-1</td>
                        <td id="Race613">5</td>
                        <td id="Race713">15</td>
                        <td id="Race813">26</td>
                        <td id="Race913">11</td>
                        <td id="Race1013">-6</td>
                        <td id="Race1113B">8</td>
                        <td id="Race1213">13</td>
                        <td id="Race1313">15</td>
                        <td id="Race1413">16</td>
                        <td id="Race1513">6</td>
                        <td id="Race1613">17</td>
                        <td id="Total13">165</td>
                    </tr><tr role="row">
                        <td style="text-align: left;border-left: 2px solid #02574F" class="firstTD">
                            <a class=" teammateStat">
                                <img src="https://res.cloudinary.com/f1-fantasy/image/upload/c_scale,f_auto,w_100/v1616743178/Headshots/Vettel.png" class="pricesImage">
                                <div class="subname mobHide">
                                    <div class="">Vettel</div>
                                    <div><h2 class="conLogoColour mobHide">Aston Martin</h2></div>
                                </div>
                            </a>
                        </td>
                        <td id="Race19">4</td>
                        <td id="Race29B">15</td>
                        <td id="Race39">-7</td>
                        <td id="Race49">24</td>
                        <td id="Race59">-5</td>
                        <td id="Race69">17</td>
                        <td id="Race79">10</td>
                        <td id="Race89">25</td>
                        <td id="Race99">14</td>
                        <td id="Race109">19</td>
                        <td id="Race119B">8</td>
                        <td id="Race129">11</td>
                        <td id="Race139">16</td>
                        <td id="Race149">19</td>
                        <td id="Race159">12</td>
                        <td id="Race169">-7</td>
                        <td id="Total9">175</td>
                    </tr><tr role="row">
                        <td style="text-align: left;border-left: 2px solid #FE0100" class="firstTD">
                                <a href="sainz.html" class=" teammateStat">
                                <img src="https://res.cloudinary.com/f1-fantasy/image/upload/c_scale,f_auto,w_80/v1616743177/Headshots/Sainz.png" class="pricesImage">
                                <div class="subname mobHide">
                                    <div class="">Sainz</div>
                                    <div>
                                        <h2 class="conLogoColour">Ferrari</h2>
                                    </div>
                                </div>
                            </a>
                        </td>
                        <td id="Race14">32</td>
                        <td id="Race24B">27</td>
                        <td id="Race34">-5</td>
                        <td id="Race44">7</td>
                        <td id="Race54">31</td>
                        <td id="Race64">25</td>
                        <td id="Race74">34</td>
                        <td id="Race84">0</td>
                        <td id="Race94">42</td>
                        <td id="Race104">49</td>
                        <td id="Race114B">10</td>
                        <td id="Race124">32</td>
                        <td id="Race134">26</td>
                        <td id="Race144">31</td>
                        <td id="Race154">11</td>
                        <td id="Race164">32</td>
                        <td id="Total4">384</td>
                    </tr><tr role="row">
                        <td style="text-align: left;border-left: 2px solid #272850" class="firstTD">
                            <a class=" teammateStat">
                                <img src="https://res.cloudinary.com/f1-fantasy/image/upload/c_scale,f_auto,w_100/v1616743181/Headshots/Tsunoda.png" class="pricesImage">
                                <div class="subname mobHide">
                                    <div class=" ">Tsunoda</div>
                                    <div><h2 class="conLogoColour  mobHide">AlphaTauri</h2></div>
                                </div>
                            </a>
                        </td>
                        <td id="Race114">19</td>
                        <td id="Race214B">-15</td>
                        <td id="Race314">-1</td>
                        <td id="Race414">30</td>
                        <td id="Race514">3</td>
                        <td id="Race614">15</td>
                        <td id="Race714">-5</td>
                        <td id="Race814">-3</td>
                        <td id="Race914">-9</td>
                        <td id="Race1014">4</td>
                        <td id="Race1114B">3</td>
                        <td id="Race1214">-2</td>
                        <td id="Race1314">-2</td>
                        <td id="Race1414">12</td>
                        <td id="Race1514">-3</td>
                        <td id="Race1614">5</td>

                        <td id="Total14">51</td>
                    </tr><tr role="row">
                        <td style="text-align: left; border-left: 2px solid #0F1D2B" class="firstTD">
                            <a class=" teammateStat">
                                <img src="https://res.cloudinary.com/f1-fantasy/image/upload/c_scale,f_auto,w_100/v1616743179/Headshots/Ocon.png" class="pricesImage">
                                <div class="subname mobHide">
                                    <div class="">Ocon</div>
                                    <div><h2 class="conLogoColour mobHide">Alpine</h2></div>
                                </div>
                            </a>
                        </td>
                        <td id="Race112">20</td>
                        <td id="Race212B">21</td>
                        <td id="Race312">20</td>
                        <td id="Race412">13</td>
                        <td id="Race512">13</td>
                        <td id="Race612">24</td>
                        <td id="Race712">1</td>
                        <td id="Race812">10</td>
                        <td id="Race912">21</td>
                        <td id="Race1012">-8</td>
                        <td id="Race1112B">34</td>
                        <td id="Race1212">15</td>
                        <td id="Race1312">6</td>
                        <td id="Race1412">14</td>
                        <td id="Race1512">23</td>
                        <td id="Race1612">6</td>

                        <td id="Total12">233</td>
                    </tr><tr role="row">
                        <td style="text-align: left;border-left: 2px solid #9A0000" class="firstTD">
                            <a class=" teammateStat">
                                <img src="https://res.cloudinary.com/f1-fantasy/image/upload/c_scale,f_auto,w_100/v1616743176/Headshots/Bottas.png" class="pricesImage">
                                <div class="subname mobHide">
                                    <div class=" ">Bottas</div>
                                    <div><h2 class="conLogoColour  ">Alfa Romeo</h2></div>
                                </div>
                            </a>
                        </td>
                        <td id="Race117">22</td>
                        <td id="Race217B">-2</td>
                        <td id="Race317">20</td>
                        <td id="Race417">34</td>
                        <td id="Race517">17</td>
                        <td id="Race617">23</td>
                        <td id="Race717">26</td>
                        <td id="Race817">14</td>
                        <td id="Race917">20</td>
                        <td id="Race1017">-8</td>
                        <td id="Race1117B">12</td>
                        <td id="Race1217">6</td>
                        <td id="Race1317">-1</td>
                        <td id="Race1417">-9</td>
                        <td id="Race1517">-9</td>
                        <td id="Race1617">3</td>

                        <td id="Total17">168</td>
                    </tr><tr role="row">
                        <td style="text-align: left;border-left: 2px solid #02574F" class="firstTD">
                            <a class=" teammateStat">
                                <img src="https://res.cloudinary.com/f1-fantasy/image/upload/c_scale,f_auto,w_100/v1616743179/Headshots/Stroll.png" class="pricesImage">
                                <div class="subname mobHide">
                                    <div class="">Stroll</div>
                                    <div><h2 class="conLogoColour mobHide">Aston Martin</h2></div>
                                </div>
                            </a>
                        </td>
                        <td id="Race110">15</td>
                        <td id="Race210B">9</td>
                        <td id="Race310">9</td>
                        <td id="Race410">15</td>
                        <td id="Race510">11</td>
                        <td id="Race610">8</td>
                        <td id="Race710">10</td>
                        <td id="Race810">8</td>
                        <td id="Race910">16</td>
                        <td id="Race1010">12</td>
                        <td id="Race1110B">14</td>
                        <td id="Race1210">16</td>
                        <td id="Race1310">11</td>
                        <td id="Race1410">11</td>
                        <td id="Race1510">11</td>
                        <td id="Race1610">-9</td>

                        <td id="Total10">167</td>
                    </tr><tr role="row">
                        <td style="text-align: left;border-left: 2px solid #00A0DF" class="firstTD">
                            <a class=" teammateStat">
                                <img src="https://res.cloudinary.com/f1-fantasy/image/upload/c_scale,f_auto,w_100/v1616743178/Headshots/Albon.png" class="pricesImage">
                                <div class="subname mobHide">
                                    <div class="">Albon</div>
                                    <div><h2 class="conLogoColour mobHide">Williams</h2></div>
                                </div>
                            </a>
                        </td>
                        <td id="Race115">10</td>
                        <td id="Race215B">13</td>
                        <td id="Race315">5</td>
                        <td id="Race415">14</td>
                        <td id="Race515">19</td>
                        <td id="Race615">6</td>
                        <td id="Race715">-7</td>
                        <td id="Race815">17</td>
                        <td id="Race915">6</td>
                        <td id="Race1015">-9</td>
                        <td id="Race1115B">14</td>
                        <td id="Race1215">12</td>
                        <td id="Race1315">7</td>
                        <td id="Race1415">10</td>
                        <td id="Race1515">14</td>
                        <td id="Race1615">18</td>

                        <td id="Total15">149</td>
                    </tr><tr role="row">
                        <td style="text-align: left;border-left: 2px solid #9A0000" class="firstTD">
                            <a class=" teammateStat">
                                <img src="https://res.cloudinary.com/f1-fantasy/image/upload/c_scale,f_auto,w_100/v1616743179/Headshots/Zhou.png" class="pricesImage">
                                <div class="subname mobHide">
                                    <div class=" ">Zhou</div>
                                    <div><h2 class="conLogoColour  ">Alfa Romeo</h2></div>
                                </div>
                            </a>
                        </td>
                        <td id="Race118">14</td>
                        <td id="Race218B">10</td>
                        <td id="Race318">9</td>
                        <td id="Race418">8</td>
                        <td id="Race518">-9</td>
                        <td id="Race618">-8</td>
                        <td id="Race718">10</td>
                        <td id="Race818">-6</td>
                        <td id="Race918">15</td>
                        <td id="Race1018">-3</td>
                        <td id="Race1118B">7</td>
                        <td id="Race1218">6</td>
                        <td id="Race1318">4</td>
                        <td id="Race1418">6</td>
                        <td id="Race1518">4</td>
                        <td id="Race1618">15</td>
                        <td id="Total18">82</td>
                    </tr><tr role="row">
                        <td style="text-align: left;border-left: 2px solid #00A0DF" class="firstTD">
                            <a class=" teammateStat">
                                <img src="https://res.cloudinary.com/f1-fantasy/image/upload/c_scale,f_auto,w_100/v1616743176/Headshots/Latifi.png" class="pricesImage">
                                <div class="subname mobHide ">
                                    <div class="">Latifi</div>
                                    <div><h2 class="conLogoColour">Williams</h2></div>
                                </div>
                            </a>
                        </td>
                        <td id="Race116">10</td>
                        <td id="Race216B">-9</td>
                        <td id="Race316">8</td>
                        <td id="Race416">10</td>
                        <td id="Race516">12</td>
                        <td id="Race616">13</td>
                        <td id="Race716">13</td>
                        <td id="Race816">8</td>
                        <td id="Race916">8</td>
                        <td id="Race1016">6</td>
                        <td id="Race1116B">-7</td>
                        <td id="Race1216">-9</td>
                        <td id="Race1316">6</td>
                        <td id="Race1416">0</td>
                        <td id="Race1516">6</td>
                        <td id="Race1616">4</td>

                        <td id="Total16">79</td>
                    </tr><tr role="row">
                        <td style="text-align: left;border-left: 2px solid #EE193B" class="firstTD">
                            <a class=" teammateStat">
                                <img src="https://res.cloudinary.com/f1-fantasy/image/upload/c_scale,f_auto,w_100/v1616743177/Headshots/Magnussen.png" class="pricesImage">
                                <div class="subname mobHide">
                                    <div class="">Magnussen</div>
                                    <div><h2 class="conLogoColour ">Haas</h2></div>
                                </div>
                            </a>
                        </td>
                        <td id="Race120">27</td>
                        <td id="Race220B">14</td>
                        <td id="Race320">6</td>
                        <td id="Race420">18</td>
                        <td id="Race520">2</td>
                        <td id="Race620">-1</td>
                        <td id="Race720">-6</td>
                        <td id="Race820">-7</td>
                        <td id="Race920">5</td>
                        <td id="Race1020">15</td>
                        <td id="Race1120B">19</td>
                        <td id="Race1220">-4</td>
                        <td id="Race1320">-1</td>
                        <td id="Race1420">9</td>
                        <td id="Race1520">8</td>
                        <td id="Race1620">10</td>
                        <td id="Total20">114</td>
                    </tr><tr role="row">
                        <td style="text-align: left;border-left: 2px solid #EE193B" class="firstTD">
                            <a class=" teammateStat">
                                <img src="https://res.cloudinary.com/f1-fantasy/image/upload/c_scale,f_auto,w_100/v1616743178/Headshots/Schumacher.png" class="pricesImage">
                                <div class="subname mobHide">
                                    <div class="">Schumacher</div>
                                    <div><h2 class="conLogoColour ">Haas</h2></div>
                                </div>
                            </a>
                        </td>
                        <td id="Race119">5</td>
                        <td id="Race219B">2</td>
                        <td id="Race319">12</td>
                        <td id="Race419">-3</td>
                        <td id="Race519">8</td>
                        <td id="Race619">0</td>
                        <td id="Race719">-8</td>
                        <td id="Race819">15</td>
                        <td id="Race919">-2</td>
                        <td id="Race1019">19</td>
                        <td id="Race1119B">26</td>
                        <td id="Race1219">13</td>
                        <td id="Race1319">8</td>
                        <td id="Race1419">1</td>
                        <td id="Race1519">2</td>
                        <td id="Race1619">15</td>

                        <td id="Total19">113</td>
                    </tr><tr role="row">
                        <td style="text-align: left;border-left: 2px solid #FF8700" class="firstTD">
                            <a class=" teammateStat">
                                <img src="https://res.cloudinary.com/f1-fantasy/image/upload/c_scale,f_auto,w_100/v1616743179/Headshots/Ricciardo.png" class="pricesImage">
                                <div class="subname mobHide">
                                    <div class="">Ricciardo</div>
                                    <div><h2 class="conLogoColour mobHide">Mclaren</h2></div>
                                </div>
                            </a>
                        </td>
                        <td id="Race17">13</td>
                        <td id="Race27B">-8</td>
                        <td id="Race37">18</td>
                        <td id="Race47">5</td>
                        <td id="Race57">8</td>
                        <td id="Race67">2</td>
                        <td id="Race77">5</td>
                        <td id="Race87">18</td>
                        <td id="Race97">7</td>
                        <td id="Race107">5</td>
                        <td id="Race117B">15</td>
                        <td id="Race127">9</td>
                        <td id="Race137">-4</td>
                        <td id="Race147">-5</td>
                        <td id="Race157">2</td>
                        <td id="Race167">-4</td>

                        <td id="Total7">86</td>
                    </tr><tr role="row">
                        <td style="text-align: left;border-left: 2px solid #FF8700" class="firstTD">
                            <a class=" teammateStat">
                                <img src="https://res.cloudinary.com/f1-fantasy/image/upload/c_scale,f_auto,w_100/v1616743177/Headshots/Norris.png" class="pricesImage">
                                <div class="subname mobHide">
                                    <div class="">Norris</div>
                                    <div><h2 class="conLogoColour mobHide">Mclaren</h2></div>
                                </div>
                            </a>
                        </td>
                        <td id="Race18">1</td>
                        <td id="Race28B">22</td>
                        <td id="Race38">24</td>
                        <td id="Race48">43</td>
                        <td id="Race58">-2</td>
                        <td id="Race68">16</td>
                        <td id="Race78">26</td>
                        <td id="Race88">11</td>
                        <td id="Race98">1</td>
                        <td id="Race108">22</td>
                        <td id="Race118B">29</td>
                        <td id="Race128">17</td>
                        <td id="Race138">16</td>
                        <td id="Race148">6</td>
                        <td id="Race158">19</td>
                        <td id="Race168">24</td>

                        <td id="Total8">275</td>
                    </tr></tbody>
            </table>
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
            <a href="https://fueler.store/collections/men-1/products/mercedes-amg-petronas-special-edition-2020-team-cap?ref=f1fantasytracker" target="_blank" class="HomeMercedesCap" style="display: none;">
                <div class="merchStats hovereffect">
                    <img src="https://res.cloudinary.com/f1-fantasy-tracker/image/upload/f_auto/v1620406449/Merchandise/HomeMerch.jpg" class="HomeMerchLarge">
                    <img src="https://res.cloudinary.com/f1-fantasy-tracker/image/upload/c_scale,f_auto,w_200/v1620406449/Merchandise/HomeMerch.jpg" class="HomeMerchMedium">
                 </div>
            </a>

</div>
    </div>
    </div>
</body>

<footer class="site-footer">        
    <div class="footer-2022">FORMULA 1 © 2022</div>
</div>
</footer>
</html>