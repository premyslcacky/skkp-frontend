<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Strategie KKP</title>

        <link rel="stylesheet" href="{{ mix('/css/web/app.css') }}">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&family=Taviraj:wght@400;600&display=swap" rel="stylesheet">

        <script>
            var webUrl = "{{ url('') }}";
            var webApiUrl = "{{ url('') }}/web/api/";         
        </script>        
    </head>
    <body>
        <header id="fixed-header">
            <div class="wrap">
                <div class="cols">
                    <div class="col-logo">
                        <div class="logo-text">
                            <a class="short" href="{{ url('/') }}">Strategie KKP</a>
                            <a class="long" href="{{ url('/') }}">Strategie kulturních a kreativních průmyslů</a>
                        </div>
                    </div>
                    <div class="col-social">
                        <ul>
                            <li>
                                <a class="icon-fb" href="https://www.facebook.com/ministerstvokulturycr" target="_blank"></a>
                            </li>
                            <li>
                                <a class="icon-in" href="https://www.instagram.com/ministerstvokultury/" target="_blank"></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-menu">
                        <div id="main-menu">
                            <main-menu></main-menu>
                        </div>
                    </div>            
                </div>   
            </div>   
        </header>

        <main>            
            <section id="section-cultural-heroes">
                <div id="cultural-heroes">
                    <cultural-heroes></cultural-heroes>
                </div>

                <div class="wrap">
                    <h1 class="hid">Strategie kulturních a kreativních průmyslů</h1>
                    <h2>Hrdinové kulturních a kreativních průmyslů</h2>
                    <h3>12 příběhů inspirativních osobností z kulturních a kreativních průmyslů</h3>
                    <p>
                        Seriál Hrdinové kulturních a kreativních průmyslů - dvanáct příběhů inspirativních osobností od produktového a módního designu, přes nový cirkus, divadlo, oživení české sklářské tradice až po literaturu a filmovou a televizní scenáristiku.
                        <br><br>
                        Dozvíte se, jaké to je napsat knihu nebo dobrou komedii, tvořit oděvní kolekci pro tým českých olympioniků nebo prodat svou vlastní VR hru Facebooku.
                        <br><br>
                        Seriál vám přináší Ministerstvo kultury ČR ve spolupráci s Kreativním Českem, Institutem umění - Divadelním ústavem. Seznamte se s profesionály kulturních a kreativních průmyslů z celé republiky, kteří mají co říct, ukázat a čím inspirovat!
                    </p>
                    
                    <a class="btn-dark-base" href="https://www.kreativnicesko.cz/" target="_blank">příběhy hrdinů KKP</a>
                </div>
            </section>

            <section id="section-strategy">
                <div class="wrap">
                    <h2>O strategii</h2>

                    <h3>Strategie kulturních a kreativních průmyslů představuje první krok k systémové podpoře kulturního a kreativního potenciálu ČR</h3>
                    <p>
                        Některé státy těží ze svého geografického postavení, jiné z nerostných surovin. Pro Českou republiku vždy byly zásadní kreativita jejích obyvatel a kultura. V této oblasti patří mezi světovou elitu. Kulturní dědictví navíc stát nezíská přes noc, ale jen díky dlouhodobé podpoře a péči. V této oblasti má proto Česká republika značnou výhodu. Kreativita a kultura jsou strategickými surovinami nového tisíciletí a na rozdíl od nerostného bohatství se jedná o nevyčerpatelné zdroje. Zároveň představují dvě nutné podmínky pro rozvoj kulturního a kreativního průmyslu. Ten v posledních desetiletích nabývá celosvětově na důležitosti. V Německu již například předstihl chemický, finanční nebo energetický průmysl co se přidané hodnoty týče.
                        <br><br>
                        V České republice však zatím nebyl kulturní a kreativní průmysl dostatečně podpořen. Samotný potenciál nestačí a je nutné se o tato odvětví zajímat přímo. Nastavení podpory přitom není jednoduché, jelikož představují pestrou škálu činností. Architektura, design, film, knihy a vydavatelství, počítačové hry, řemesla jako sklářství, nebo módní návrhářství aj. mají často rozdílné potřeby. Z toho důvodu je nutné nejprve nastavit dobře fungující strukturu, a to nejen v rámci jednoho resortu. Zásadní proto bude spolupráce s dalšími ministerstvy, zejména Ministerstvem průmyslu a obchodu. Nutnou součástí je i podpora na lokální úrovni, jelikož každý region má svá specifika a odlišné možnosti.
                        <br><br>
                        Strategie kulturních a kreativních průmyslů tak představuje první krok na cestě k využití potenciálu České republiky a kombinuje rok a půl práce projektového týmu i poučení ze současné zdravotní krize.
                    </p>

                    <h3>Strategický rámec</h3>
                    
                    <div id="strategic-framework">
                        <strategic-framework></strategic-framework>
                    </div>
                <div>
            </section>

            <section id="phase-strategy">
                <div class="wrap">
                    <h2>Fáze identifikace potřeby tvorby Strategie KKP</h2>

                    <div class="timeline">
                        <div class="row-r">                            
                            <div class="cols">
                                <div class="col-date">
                                    <div class="dot"></div>
                                    <span class="date">11/2008</span>
                                    <div class="border-box">
                                        <span class="text">schválení Státní kulturní politiky na léta 2009–2014</span>
                                    </div>
                                </div>
                                <div class="col-blank">
                                    
                                </div>
                            </div>
                        </div>
                        <div class="row-l">                            
                            <div class="cols">
                                <div class="col-date">
                                    <div class="dot"></div>
                                    <span class="date">08/2009</span>
                                    <div class="border-box">
                                        <span class="text">schválení Plánu implementace Státní kulturní politiky na léta 2009–2014</span>
                                    </div>
                                </div>
                                <div class="col-blank">
                                    
                                </div>
                            </div>
                        </div>
                        <div class="row-r">                            
                            <div class="cols">
                                <div class="col-date">
                                    <div class="dot"></div>
                                    <span class="date">2011</span>
                                    <div class="border-box">
                                        <span class="text">zahájení projektu Mapování KKP</span>
                                    </div>
                                </div>
                                <div class="col-blank">
                                    
                                </div>
                            </div>
                        </div>
                        <div class="row-l">                            
                            <div class="cols">
                                <div class="col-date">
                                    <div class="dot"></div>
                                    <span class="date">04/2015</span>
                                    <div class="border-box">
                                        <span class="text">schválení Státní kulturní politiky na léta 2015–2020 (s výhledem do roku 2025)</span>
                                    </div>
                                </div>
                                <div class="col-blank">
                                    
                                </div>
                            </div>
                        </div>
                        <div class="row-r">                            
                            <div class="cols">
                                <div class="col-date">
                                    <div class="dot"></div>
                                    <span class="date">2015</span>
                                    <div class="border-box">
                                        <span class="text">dokončení projektu Mapování KKP</span>
                                    </div>
                                </div>
                                <div class="col-blank">
                                    
                                </div>
                            </div>
                        </div>
                        <div class="row-l">                            
                            <div class="cols">
                                <div class="col-date">
                                    <div class="dot"></div>
                                    <span class="date">12/2015</span>
                                    <div class="border-box">
                                        <span class="text">schválení Koncepce podpory umění v České republice na léto 2015–2020</span>
                                    </div>
                                </div>
                                <div class="col-blank">
                                    
                                </div>
                            </div>
                        </div>
                        <div class="row-r">                            
                            <div class="cols">
                                <div class="col-date">
                                    <div class="dot"></div>
                                    <span class="date">02/2016</span>
                                    <div class="border-box">
                                        <span class="text">schválení Plánu implementace státní kulturní politiky na léta 2009–2014</span>
                                    </div>
                                </div>
                                <div class="col-blank">
                                    
                                </div>
                            </div>
                        </div>
                        <div class="row-l">                            
                            <div class="cols">
                                <div class="col-date">
                                    <div class="dot"></div>
                                    <span class="date">2017</span>
                                    <div class="border-box">
                                        <span class="text">záhájení vyjednávání o získání prostředků na tvorbu Strategie KKP</span>
                                    </div>
                                </div>
                                <div class="col-blank">
                                    
                                </div>
                            </div>
                        </div>
                        <div class="row-r">                            
                            <div class="cols">
                                <div class="col-date">
                                    <div class="dot"></div>
                                    <span class="date">2018</span>
                                    <div class="border-box">
                                        <span class="text">získání prostředků z OP Zaměstnanost – rozhodnutí o tvorbě Strategie KKP</span>
                                    </div>
                                </div>
                                <div class="col-blank">
                                    
                                </div>
                            </div>
                        </div>
                        <div class="row-l">                            
                            <div class="cols">
                                <div class="col-date">
                                    <div class="dot"></div>
                                    <span class="date">05/2018</span>
                                    <div class="border-box">
                                        <span class="text">zahájení prací na projektu Strategie KKP</span>
                                    </div>
                                </div>
                                <div class="col-blank">
                                    
                                </div>
                            </div>
                        </div>
                        <div class="row-r">                            
                            <div class="cols">
                                <div class="col-date">
                                    <div class="dot"></div>
                                    <span class="date">04/2019</span>
                                    <div class="border-box">
                                        <span class="text">dokončení Analýzy zacílení finančních prostředků</span>
                                    </div>
                                </div>
                                <div class="col-blank">
                                    
                                </div>
                            </div>
                        </div>
                        <div class="row-l">                            
                            <div class="cols">
                                <div class="col-date">
                                    <div class="dot"></div>
                                    <span class="date">06/2019</span>
                                    <div class="border-box">
                                        <span class="text">dokončení kvalitativní analýzy KKP a vyhodnocení závěrů Mapování 2015</span>
                                    </div>
                                </div>
                                <div class="col-blank">
                                    
                                </div>
                            </div>
                        </div>
                        <div class="row-r">                            
                            <div class="cols">
                                <div class="col-date">
                                    <div class="dot"></div>
                                    <span class="date">07/2019</span>
                                    <div class="border-box">
                                        <span class="text">spuštění pilotního projektu Kreativního inkubátoru</span>
                                    </div>
                                </div>
                                <div class="col-blank">
                                    
                                </div>
                            </div>
                        </div>
                        <div class="row-l">                            
                            <div class="cols">
                                <div class="col-date">
                                    <div class="dot"></div>
                                    <span class="date">07/2020</span>
                                    <div class="border-box">
                                        <span class="text">dokončení Strategie KKP na období 2020–2015 (s výhledem do r. 2030) a Akčního plánu na období 2020–2023</span>
                                    </div>
                                </div>
                                <div class="col-blank">
                                    
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="actions">
                        <h3>Akce</h3>

                        <div class="cols">
                            <div class="col-l">                                
                                <ul>
                                    <li class="text-l">
                                        <span class="item green">14 regionálních workshopů<br>k analytické části Strategie</span>
                                    </li>
                                    <li class="text-r">
                                        <span class="item">konference<br>Power of Culture</span>
                                    </li>
                                    <li class="text-l">
                                        <span class="item green">Kreativní<br>inkubátor</span>
                                    </li>
                                    <li class="text-r">
                                        <span class="item">14 regionálních workshopů<br>k návrhové části Strategie</span>
                                    </li>                                    
                                </ul>                                
                            </div>
                            <div class="col-r">                                
                                <ul>
                                    <li class="text-l">
                                        <span class="item green">vzdělávací<br>moduly</span>
                                    </li>
                                    <li class="text-r">
                                        <span class="item">seriál Hrdinové<br>KKP</span>
                                    </li>
                                    <li class="text-l">
                                        <span class="item green">mapa příkladů<br>dobré praxe</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="section-map-practice">
                <div class="wrap">
                    <h2>Mapa příkladů dobré praxe</h2>
                    <div id="map-practice">
                        <map-practice></map-practice>
                    </div>

                    <p class="note">
                        (připravujeme)
                    </p>
                </div>
            </section>

            <section id="section-creative-incubator">
                <div class="wrap">
                    <h2>Kreativní inkubátor</h2>
                    <div class="video-box">
                        <div class="video-container">
                            <iframe width="800" height="450" src="https://www.youtube-nocookie.com/embed/RECKZEWWo7A" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                    <p>
                        Kreativní Inkubátor je pilotním projektem plzeňské Fakulty designu a umění Ladislava Sutnara ve spolupráci s Ministerstvem kultury. Proces inkubace ověřil, jaké kompetence jsou pro studenty oborů KKP klíčové pro budoucí uplatnění na trhu práce a jakým bariérám čelí při práci s kulturním dědictvím. Podívejte se na video o procesu, kterým studenti plzeňské Sutnarky prošli a co jim proces inkubace dal. 
                    </p>
                </div>
            </section>

            <section id="section-communication-platform">
                <div class="wrap">
                    <h2>Komunikační platforma</h2>                    
                    
                    <div class="buttons">
                        <a class="btn-light-base" href="{{ url('komunikacni-platforma') }}">Vstoupit</a>
                    </div>                    
                </div>
            </section>

            <section id="section-project-team">
                <div class="wrap">
                    <h2>Projektový tým</h2>                    
                    <div class="people-list">
                        <div class="cols">
                            <div class="col-l">
                                <ul>                                    
                                    <li>
                                        <span class="name">Petr Peřinka</span>
                                        <span class="function">projektový manažer</span>
                                        <a class="email" href="mailto: petr.perinka@mkcr.cz">petr.perinka@mkcr.cz</a>
                                    </li>
                                    <li>
                                        <span class="name">Jakub Bakule</span>
                                        <span class="function">člen kabinetu ministra ČR</span>
                                    </li>
                                    <li>
                                        <span class="name">Tereza Marošková</span>
                                        <span class="function">odborná garantka</span>
                                    </li>
                                    <li>
                                        <span class="name">Jana Adamcová</span>
                                        <span class="function">odborná garantka – KKP nové</span>
                                    </li>
                                    <li>
                                        <span class="name">Naďa Machková Prajzová</span>
                                        <span class="function">odborná garantka – KKP tradiční</span>
                                    </li>
                                    <li>
                                        <span class="name">Miroslava Novotná</span>
                                        <span class="function">finanční manažerka</span>
                                    </li>
                                    <li>
                                        <span class="name">Naďa Šindelářová</span>
                                        <span class="function">asistentka</span>
                                    </li>                                    
                                </ul>
                            </div>
                            <div class="col-r">
                                <ul>
                                    <li>
                                        <span class="name">Michaela Komanová</span>
                                        <span class="function">asistentka</span>
                                    </li>
                                    <li>
                                        <span class="name">Andrea Bártová (Švandová)</span>
                                        <span class="function">koordinátorka</span>
                                        <a class="email" href="mailto:svandova.kkp@mkcr.cz">svandova.kkp@mkcr.cz</a>
                                    </li>
                                    <li>
                                        <span class="name">Michaela Hečková</span>
                                        <span class="function">redaktorka seriálu hrdinové KKP</span>
                                    </li>
                                    <li>
                                        <span class="name">Jiří Dužár</span>
                                        <span class="function">fotograf seriálu hrdinové KKP</span>
                                    </li>
                                    <li>
                                        <span class="name">Matěj Čech</span>
                                        <span class="function">grafický designer</span>
                                    </li>
                                    <li>
                                        <span class="name">Sára Pospíšilová</span>
                                        <span class="function">správa sociálních sítí</span>
                                    </li>
                                    <li>
                                        <span class="name">Michaela Kuříková</span>
                                        <span class="function">odborné semináře</span>
                                    </li>
                                </ul>
                            </div>
                        </div>                        
                    </div>
                </div>
            </section>

            <section id="section-expert-team">
                <div class="wrap">
                    <h2>Odborný tým</h2>
                    <div class="people-list">
                        <div class="cols">
                            <div class="col-l">
                                <ul>
                                    <li>
                                        <span class="name">Ivo Frolec </span>
                                    </li>
                                    <li>
                                        <span class="name">Jan Klesla</span>
                                    </li>
                                    <li>
                                        <span class="name">Helena Koenigsmarková</span>
                                    </li>
                                    <li>
                                        <span class="name">Barbora Netopilová</span>
                                    </li>
                                    <li>
                                        <span class="name">Andrea Opavská</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-r">
                                <ul>
                                    <li>
                                        <span class="name">Lucie Skřivánková</span>
                                    </li>
                                    <li>
                                        <span class="name">Maria Staczkiewicz</span>
                                    </li>
                                    <li>
                                        <span class="name">Marek Toušek</span>
                                    </li>
                                    <li>
                                        <span class="name">Alena Wagner</span>
                                    </li>
                                </ul>
                            </div>
                        </div>                        
                    </div>
                </div>
            </section>
                
            <section id="section-coordinators">
                <div class="wrap">
                    <h2>Koordinátoři v krajích ČR</h2>
                    <div class="people-list">
                        <div class="cols">
                            <div class="col-l">
                                <ul>
                                    <li>
                                        <span class="name">Jakub Deml</span>
                                        <span class="function">územní koordinátor pro kraj Vysočina</span>
                                        <a class="email" href="mailto:vysocina.kkp@mkcr.cz">vysocina.kkp@mkcr.cz</a>
                                    </li>
                                    <li>
                                        <span class="name">Petr Dubovský</span>
                                        <span class="function">územní koordinátor pro Zlínský kraj</span>
                                        <a class="email" href="mailto:zlinsky.kkp@mkcr.cz">zlinsky.kkp@mkcr.cz</a>
                                    </li>
                                    <li>
                                        <span class="name">Marika Gottwaldová</span>
                                        <span class="function">územní koordinátor pro Olomoucký kraj</span>
                                        <a class="email" href="mailto:olomoucky.kkp@mkcr.cz">olomoucky.kkp@mkcr.cz</a>
                                    </li>
                                    <li>
                                        <span class="name">Tereza Chrástová</span>
                                        <span class="function">územní koordinátor pro Jihomoravský kraj</span>
                                        <a class="email" href="mailto:jihomoravsky.kkp@mkcr.cz">jihomoravsky.kkp@mkcr.cz</a>
                                    </li>
                                    <li>
                                        <span class="name">Kateřina Churtajeva</span>
                                        <span class="function">územní koordinátor pro Královéhradecký kraj</span>
                                        <a class="email" href="mailto:kralovehradecky.kkp@mkcr.cz">kralovehradecky.kkp@mkcr.cz</a>
                                    </li>
                                    <li>
                                        <span class="name">Jana Juříčková</span>
                                        <span class="function">územní koordinátor pro Moravskoslezský kraj</span>
                                        <a class="email" href="mailto:moravskoslezsky.kkp@mkcr.cz">moravskoslezsky.kkp@mkcr.cz</a>
                                    </li>
                                    <li>
                                        <span class="name">Martin Karas</span>
                                        <span class="function">územní koordinátor pro Pardubický kraj</span>
                                        <a class="email" href="mailto:pardubicky.kkp@mkcr.cz">pardubicky.kkp@mkcr.cz</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-r">
                                <ul>
                                    <li>
                                        <span class="name">Zdeňka Kučerová</span>
                                        <span class="function">územní koordinátor pro Plzeňský kraj a projektová manažerka Kreativního inkubátoru</span>
                                        <a class="email" href="mailto:plzensky.kkp@mkcr.cz">plzensky.kkp@mkcr.cz</a>
                                    </li>
                                    <li>
                                        <span class="name">Vladimír Lieberzeit</span>
                                        <span class="function">územní koordinátor pro hl. m. Praha</span>
                                        <a class="email" href="mailto:">praha.kkp@mkcr.cz</a>
                                    </li>
                                    <li>
                                        <span class="name">Marcela Magdová </span>
                                        <span class="function">územní koordinátor Ústecký kraj</span>
                                        <a class="email" href="mailto:">ustecky.kkp@mkcr.cz</a>
                                    </li>
                                    <li>
                                        <span class="name">Josef Říkovský</span>
                                        <span class="function">územní koordinátor Středočeský kraj</span>
                                        <a class="email" href="mailto:stredocesky.kkp@mkcr.cz">stredocesky.kkp@mkcr.cz</a>
                                    </li>
                                    <li>
                                        <span class="name">Jana Spirová</span>
                                        <span class="function">územní koordinátor Karlovarský kraj</span>
                                        <a class="email" href="mailto:karlovarsky.kkp@mkcr.cz">karlovarsky.kkp@mkcr.cz</a>
                                    </li>
                                    <li>
                                        <span class="name">Josef Večeřa</span>
                                        <span class="function">územní koordinátor Jihomoravský kraj</span>
                                        <a class="email" href="mailto:jihomoravsky.kkp@mkcr.cz">jihomoravsky.kkp@mkcr.cz</a>
                                    </li>
                                    <li>
                                        <span class="name">Petr Vondřich</span>
                                        <span class="function">územní koordinátor Liberecký kraj</span>
                                        <a class="email" href="mailto:liberecky.kkp@mkcr.cz">liberecky.kkp@mkcr.cz</a>
                                    </li>
                                    <li>
                                        <span class="name">Monika Zárybnická</span>
                                        <span class="function">územní koordinátor Jihočeský kraj</span>
                                        <a class="email" href="mailto:jihocesky.kkp@mkcr.cz">jihocesky.kkp@mkcr.cz</a>
                                    </li>
                                </ul>
                            </div>
                        </div>                        
                    </div>                    
                </div>
            </section>            
            
        </main>


        <footer id="section-contact">
            <div class="footer-box">
                <div class="wrap">
                    <div class="cols">
                        <div class="col-l">
                            <p class="contact">
                                <span class="name">Andrea Bártová (Švandová)</span><br>
                                
                                koordinátorka Strategie KKP<br>

                                <a href="mailto:svandova.kkp@mkcr.cz">svandova.kkp@mkcr.cz</a>
                            </p>
                            <p class="register">
                                Zpracování systému rozvoje a podpory kulturních a kreativních průmyslů Ministerstvem kultury, registrační číslo CZ.03.4.74/0.0/0.0/15_025/0009160
                            </p>
                        </div>
                        <div class="col-r">
                            <div id="email-form">
                                <email-form></email-form>
                            </div>
                            <div class="logos">
                                <ul>
                                    <li>
                                        <a class="icon-eu" href="" target="_blank"></a>
                                        <a class="icon-mk" href="https://www.mkcr.cz/" target="_blank"></a>
                                    </li>
                                    <li>
                                        <a class="icon-creative" href="https://www.kreativnicesko.cz/" target="_blank"></a>
                                    </li>
                                    <li>
                                        <a class="icon-fb" href="https://www.facebook.com/ministerstvokulturycr" target="_blank"></a>
                                        <a class="icon-in" href="https://www.instagram.com/ministerstvokultury/" target="_blank"></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="subfooter-box">
                <p>
                    Copyright © 2019 – 2019 SKKP / IČO: 29129010 / Kloboukova 1231/75, Chodov, 148 00 Praha 4 / Privacy Policy
                </p>
            </div>
        </footer>


        <script src="{{ mix('/js/web/manifest.js') }}"></script>
        <script src="{{ mix('/js/web/vendor.js') }}"></script>
        <script src="{{ mix('/js/web/app-homepage.js') }}"></script>
    </body>
</html>
