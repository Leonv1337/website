<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" prefix="og: http://ogp.me/ns#">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="We are an organization of young adults for young adults. We collect funds to buy a ship. With this ship, we will conduct private sea rescue on the Mediterranean Sea" />
        <meta name="author" content="Jugend Rettet" />
        <meta name="keywords" content="Jugend, Rettet, Jugend Rettet, Jugend Rettet e. V., Seenotrettung, Mittelmeer, Flüchtlinge, Spenden, Europa, Organisation, sea, rescue, Mediterranean, refugee, fund, donate, europe" />

        <meta property="og:title" content="Jugend Rettet" />
        <meta property="og:description" content="We are an organization of young adults for young adults. We collect funds to buy a ship. With this ship, we will conduct private sea rescue on the Mediterranean Sea" />
        <meta property="og:url" content="https://en.jugendrettet.org/spenden" />
        <meta property="og:image" content="http://jugendrettet.org/images/jr-banner.jpg" />
        <meta property="og:image:secure_url" content="https://jugendrettet.org/images/jr-banner.jpg" />
        <meta property="og:type" content="website" />
        <meta property="og:site_name" content="Jugend Rettet" />

        <link rel="alternate" hreflang="de" href="http://jugendrettet.org/spenden" />

        <title>Donate — Jugend Rettet</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <link rel="shortcut icon" type="image/x-icon" href="../graphics/jr.ico"/>
        <link rel="mask-icon" href="../graphics/jr-mask.svg" color="rgb(40,100,130)">
        <link rel="apple-touch-icon" href="../graphics/apple-touch-icon.png"/>
        <link rel="stylesheet" href="../css/waves.1.css" type="text/css" />

        <link href="../css/general.css" rel="stylesheet" type="text/css">
        <link href="../css/main.css?9" rel="stylesheet" type="text/css">
        <link href="../css/desktop.css?5" media="screen and (min-width: 851px)" rel="stylesheet" type="text/css">
        <link href="../css/mobile.css?6" media="screen and (max-width: 850px)" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="../css/animations.1.css?1" type="text/css" />
        <link rel="stylesheet" media="screen and (min-width: 851px)" href="../css/ship-pos.css?0" type="text/css" />
        <link rel="stylesheet" media="screen and (max-width: 850px)" href="../css/ship-pos-hide.css?1" type="text/css" />
        <!--[if IE]>
            <link rel="stylesheet" href="../ie-css/noship.css" type="text/css" />
        <![endif]-->

        <script src="../js/jquery-1.10.2.min.js"></script>
        <!--<script src="../js/rechner.1.js?11"></script>-->
        <script src="../js/hideme.js"></script>
        <script type="text/javascript">
            $(window).load(function() {
                $('#phase hr#ph-eins-progress').addClass('load')
                $('#phase hr#ph-zwei-progress').delay(200).queue(function (next) {
                    $(this).addClass('load');
                    next();
                });
                $('#phase hr#ph-drei-progress').delay(400).queue(function (next) {
                    $(this).addClass('load');
                    next();
                });
            });
            function changeColor(id) {
              $(id).css('background-color', 'inherit');
              setTimeout(function() {
                $(id).css('background-color', '#286482');
              }, 500);
            }
            function toDiv(id) {
                var div = $(id);
                var pos = div.offset().top;
                $('html, body').animate({scrollTop:0},500); // will take two seconds to scroll to the element
              }
        </script>
        <style type="text/css">
            #phase hr.load#ph-eins-progress {
                transition: 800ms ease;
                width: <?php
                    $phase1 = file_get_contents('../donations/phase1.txt');
                    $needed = file_get_contents('../donations/needed.txt');
                    $value1 = number_format((float)$phase1,0,".",",");
                    $needed_format = number_format((float)$needed,0,".",",");
                    $sd = ( 1000 - ( 1000 * ( $phase1 / $needed ) ) );
                    $percent = file_get_contents('../donations/perc.txt');
                    echo $percent;
                    ?>%;
            }
        </style>
    </head>

    <body>
        <div id="pop-back"></div>
        <div id="header-back"></div>
        <div id="wrap">
            <header>
                <a id="logo-wrap" href="/">
                    <img id="logo" src="../graphics/logo.svg" alt="Jugent Rettet">
                    <div id="title">Jugend <b>Rettet</b></div>
                </a>
                <div id="bread">
                    <div class="stroke" id="br-top-stroke"></div>
                    <div class="stroke" id="br-bottom-stroke"></div>
                </div>
                <div id="popup-close">
                    <div id="cross">
                        <div class="stroke rotate-open-top rotate-close-top" id="cr-top-stroke"></div>
                        <div class="stroke rotate-open-bottom rotate-close-bottom" id="cr-bottom-stroke"></div>
                    </div>
                </div>
                <nav>
                    <ul class="hidden">
                        <li><a href="news">News</a></li>
                        <li><a href="schiff">The Ship</a></li>
                        <li><a href="team">Team</a></li>
                        <li><a href="retten">Rescue</a></li>
                        <li><a href="spenden" class="indicator">Donate</a></li>
                        <li><a href="europe">Jugend Rettet <span class="lowercase">europe</span></a></li>
                    </ul>
                </nav>
            </header>
            <div class="popup-flat">
                <div id=top>
                </div>
                <div class="triple">
                    <h3>Donate</h3>
                    <p>People are dying on the Mediterranean right now. Therefore we need your support to finance and continue our rescue missions with our ship IUVENTA. Please donate.</p>
                </div>
                <div class="container triple">

                    <div style="margin-right:10px" class="column">
                        <div style="padding-left:5px;padding-right:5px">
                            <h4 id="spendenkonto">Account for Donations</h4>
                            <p><b>Beneficiary:</b> Jugend Rettet e.V.</p>
                            <p><b>Account number:</b> 0190465743</p>
                            <p><b>IBAN:</b> DE28 1005 0000 0190 4657 43</p>
                            <p><b>BIC:</b> BELADEBEXXX</p>
                            <p><b>Bank:</b> Berliner Sparkasse</p>
                        </div>
                        <br>
                        <h4>Merchandise</h4>
                        <p>
                            <a target="_blank" href="/merch">Sea rescue with a T-shirt? You asked for it - we did it. Join the rescue and wear our lovely T-shirts, zippers and jumpers. The profits go directly to our missions. By the way, the merchandise is not only completely fair-trade, but also from organic cotton and very comfy.</a>
                        </p>
                        <br>
                        <h4>donate directly</h4>
                        <script type="text/javascript">
                          /* Configure at https://www.betterplace.org/de/projects/42019-rette-mit-einsatz-zur-seenotrettung-auf-dem-mittelmeer/manage/iframe_donation_form */
                          var _bp_iframe        = _bp_iframe || {};
                          _bp_iframe.project_id = 52216; /* REQUIRED */
                          /*_bp_iframe.project_id = 48425;*/
                          _bp_iframe.lang       = 'en'; /* Language of the form */
                          /* Remove "//" for further customization but *only* if you really need to! */
                          // _bp_iframe.width = 600; /* Custom iframe-tag-width, integer */
                           _bp_iframe.color = '286482'; /* Button and banderole color, hex without "#" */
                           _bp_iframe.background_color = '142D3C'; /* Background-color, hex without "#" */
                          // _bp_iframe.default_amount = 50; /* Donation-amount, integer 1-99 */
                          // _bp_iframe.default_data_transfer_accepted = false; /* true (default), false */
                          // _bp_iframe.recurring_interval = 'single'; /* Interval for recurring donations, string out of ["single", "monthly", "quarter_yearly", "half_yearly", "yearly"] */
                          (function() {
                            var bp = document.createElement('script'); bp.type = 'text/javascript'; bp.async = true;
                            bp.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'asset1.betterplace.org/assets/load_donation_iframe.js';
                            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(bp, s);
                          })();
                        </script>
                        <div id="betterplace_donation_iframe" style="background: transparent url('https://www.betterplace.org/assets/new_spinner.gif') 275px 20px no-repeat;"><strong><a href="https://www.betterplace.org/en/projects/48425-rette-mit-spende-fur-rettungseinsatze-auf-dem-mittelmeer/donations/new">"Join the rescue: sea rescue on the Mediterranean". The donation is processed by our partner betterplace.org</a></strong></div>
                        <!--<h4>Calculator</h4>
                        <div id="rechner">
                            <input type="Text" id="spendeinput" oninput="rechnen()"> €
                            <br><br>
                            <div id="spendentext" style="display:none">

                                <p id="text-schiffsteil-prozent">With your <b class="EUR"></b> <b>€</b> a total of <b id="prozent"></b> <b>%</b> would be added to our next need – a dinghy with a holder.</p>
                                <p id="text-schiffsteil-komplett">With your <b class="EUR"></b> <b>€</b> our next need – a dinghy with a holder – would be completed!</p>
                                <p id="text-schiffsteil-mehr">And even more:</p>

                                <p id="text-schiff-meter">Summed up, with this money <b id="meter"></b> <b id="unitmeter">m</b> of the ship are funded. That's <b id="qmeter"></b> <b id="unitqmeter">m²</b> for the sea rescue.</p>

                                <p id="text-schiff-komplett">With your <b class="EUR"></b> <b>€</b> the whole ship would be funded! With a length of <b>32 m / 105ft</b> and <b>160 m² / 1722ft²</b> on deck, there is enough space for the sea rescue of up to <b>80 people</b> at once.</p>

                                <p id="button"><br><br><a id="aendern-btn" onclick="changeColor('#spendenbox');toDiv('#top');">I WANT TO RESCUE TOO!</a></p>
                            </div>

                            <div id="spendentext-fehler" style="display:none">
                                <p>Please try again with numbers only.</p>
                            </div>
                        </div>-->
                    </div>

                    <div class="column">
                    </div>

                    <div class="column hideme">
                        <!--<h4>RAISED FUNDS</h4>-->
                        <div id="mission-container" class="center incolumn">
                            <div class="incolumn" id="belt-progress">
                                <svg viewBox="-238.725 -238.725 477.45 477.45" class="incolumn" alt="life belt" style="stroke-dashoffset:<?php echo $sd;?>">
                                    <!-- viewBox="-(2000 / 3pi) (4000 / 3pi)"-->
                                    <circle r="159.15" cy="7" cx="7"/> <!-- r=(1000 / 2pi); cy, cx offset to match svg-->
                                </svg>
                            </div>
                            <div class="belt incolumn">
                              <img class="belt incolumn" src="../graphics/belt.svg" alt="Rettungsring">
                            </div>
                        </div>
                        <br>
                        <div style="display:initial;" id="phase">
                            <div class="ph-container" id="ph-eins">
                                <div class="header" style="text-align:center;">
                                    <span class="percentage">Now: <?php echo $percent;?>% funded</span>
                                    <!--<span class="percentage">Month 2</span>-->
                                    <hr id="ph-eins-progress">
                                </div>
                                <div class="content" id="ph-eins-content">
                                    <p><a target="_blank" href="umbau">→ Breakdown</a></p>
<p>Last Year, 4579 People died because of their fleeing by crossing the Mediterranean sea. Rather than organizing a sea rescue programme, the EU has prepared a 10-point-plan to end this "irregular flood of migration“. The goal being, to close the last immigration route over the central Mediterranean.</p>
<br>
<p>2016 we bought our ship, renovated it and saved 6,526 people in maritime distress. We'll continue our efforts starting March 2017.</p>
<br>
<p>Until then we need your help: We are already busy preparing our IUVENTA for the months and missions to come. We are not being deterred by European foreclosure policy and will continue to uphold the European values of a young EU - our EU.</p>
<br>
<p>Each donation brings us closer to fulfill the duty the EU is sadly neglecting. We will rebuild our IUVENTA to send it back to its mission as soon as possible: saving lives.</p>
                                    <br>
                                    <p>You can find further information on our ship <a href="schiff#wie">here</a>.</p>
                                </div>
                            </div>
                        </div>
                        <div class="content ie">
                          <p><a target="_blank" href="umbau">→ Breakdown</a></p>
<p>Last Year, 4579 People died because of their fleeing by crossing the Mediterranean sea. Rather than organizing a sea rescue programme, the EU has prepared a 10-point-plan to end this "irregular flood of migration“. The goal being, to close the last immigration route over the central Mediterranean.</p>
<br>
<p>2016 we bought our ship, renovated it and saved 6,526 people in maritime distress. We'll continue our efforts starting March 2017.</p>
<br>
<p>Until then we need your help: We are already busy preparing our IUVENTA for the months and missions to come. We are not being deterred by European foreclosure policy and will continue to uphold the European values of a young EU - our EU.</p>
<br>
<p>Each donation brings us closer to fulfill the duty the EU is sadly neglecting. We will rebuild our IUVENTA to send it back to its mission as soon as possible: saving lives.</p>
                          <br>
                          <p>You can find further information on our ship <a href="schiff#wie">here</a>.</p>
                        </div>
                    </div>

                </div>
            </div>
            <div id="content">
                <footer>
                    <div id="peek-container"></div>
                    <nav class="footer">
                        <ul>
                            <li><a href="faq">FAQ</a></li>
                            <li class="likelink"><span class="peek" id="follow">Follow</span></li>
                            <li><a href="presse">Press</a></li>
                            <li><a href="impressum">Legal Notice</a></li>
                            <li><a href="https://jugendrettet.org/transparenz">Transparency (de)</a></li>
                            <li class="br"></li>
                            <li><a href="https://jugendrettet.org/spenden">de</a></li>
                        </ul>
                    </nav>
                </footer>
            </div>
        </div>

        <!-- Scripts -->
        <script src="../js/main.js?0"></script>
        <script src="../js/peekfield.js?2"></script>
          <div id="ship-pos-container">
            <div id="ship-pos">
              <script type="text/javascript"
                src="./js/vesselfinder-vars.js">
              </script>
              <script type="text/javascript"
                src="https://www.vesselfinder.com/aismap.js">
              </script>
            </div>
          </div>
    </body>
</html>
