<template>
    <div class="component-container">
        <div class="main-hero">
            <div class="list">
                <div class="hero" :class="{ show: item.isActive }" v-for="(item) in heroItems" :key="item.id">
                    <div class="hero-container">
                        <div class="hero-img" :class="{ show: item.isActiveImg }" :style="item.imgBg">
                            <div class="hero-wrap">                                
                                <div class="bottom-box">
                                    <div class="cols">
                                        <div class="col-l">
                                            <p class="name">{{ item.name }}</p>
                                            <span class="btn-more" @click="switchHeroToDetail(item.id, true)">více</span>
                                        </div>
                                        <div class="col-r">
                                            <a class="btn-link" v-if="item.url" :href="item.url" target="_blank">rozhovor</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hero-detail" :class="{ show: item.isActiveDetail }">
                            <div class="hero-wrap">
                                <div class="info-box">
                                    <p class="catchword">&bdquo;{{ item.catchword }}&rdquo;</p>
                                    <p class="name">{{ item.name }}</p>
                                    <p class="function">{{ item.function }}</p>                                    
                                </div>
                                <div class="bottom-box">
                                    <div class="cols">
                                        <div class="col-l">
                                            <span class="btn-close" @click="switchHeroToImg(item.id, true)">zpět</span>
                                        </div>
                                        <div class="col-r">
                                            <a class="btn-link" v-if="item.url" :href="item.url" target="_blank">rozhovor</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>                
        </div>
        <div class="hero-delay-line">
            <div class="line-box">
                <div class="line" :style="delayLineStyle"></div>
            </div>
        </div>
        <div class="hero-list">
            <div class="cols">
                <div class="col" v-for="(item) in heroItems" :key="item.id">
                    <span class="img-box" v-if="item.name" :class="{ active: item.isActive }" @click="changeHero(item.id)" ><img :src="item.src" alt=""><span class="overlay"></span></span>                    
                    <span class="img-box" v-else :class="{ active: item.isActive }"><img :src="item.src" alt=""></span>                    
                </div>                
            </div>
        </div>
    </div>
</template>

<script>    

    export default {
        name: 'CulturalHeroes',
        
        data: function () {
            return {
                timer: null,
                delayLineStyle: {
                    transitionProperty: 'width',
                    transitionDuration: '0ms',
                    width: '0%'
                },
                delayLineWidth: 0,
                delayLineTransitionTime: 0,
                timeoutToImg: 5000,
                timeoutToDetail: 9000,
                actualId: 0,
                actualImgBg: '',
                heroItems: [
                    { 
                        id: 0,                        
                        name: 'Petr Bilík',
                        function: 'prorektor pro vnější vztahy na Univerzitě Palackého v Olomouci',                        
                         catchword: 'Ukazuje se, že samým základem je jednotlivé aktéry vzájemně seznámit, propojit, zasíťovat. Město nemusí investovat horentní sumy, aby dosáhlo zajímavých efektů.',
                        url: 'https://www.kreativnicesko.cz/clanky/kreativni-prumysly-nepotrebuji-ani-tak-velkolepe-investice-jako-zmenu-uhlu-pohle',
                        src: '/images/heroes/hero-01.jpg',   
                        imgBg: 'background-image: url("/images/heroes/hero-01.jpg")',                    
                        isActive: true,
                        isActiveImg: true,
                        isActiveDetail: false,
                    },
                    { 
                        id: 1,                         
                        name: 'Zuzana Osako',
                        function: 'módní návrhářka a ilustrátorka, majitelka značky Tradice',                        
                        catchword: 'Tradice ne jako svátek, ale jako běžná každodenní věc.',
                        url: 'https://www.kreativnicesko.cz/clanky/tradici-by-si-mel-clovek-uzivat', 
                        src: '/images/heroes/hero-02.jpg',     
                        imgBg: 'background-image: url("/images/heroes/hero-02.jpg")',                  
                        isActive: false,
                        isActiveImg: false,
                        isActiveDetail: false,
                    },
                    { 
                        id: 2,                         
                        name: 'Petr Kolečko',
                        function: 'scénárista',                        
                        catchword: 'Člověk musí psát, i když se mu nechce. Vnitřní disciplína je potřeba.',
                        url: 'https://www.kreativnicesko.cz/clanky/clovek-musi-psat-i-kdyz-se-mu-nechce',
                        src: '/images/heroes/hero-03.jpg',   
                        imgBg: 'background-image: url("/images/heroes/hero-03.jpg")',                  
                        isActive: false,
                        isActiveImg: false,
                        isActiveDetail: false,
                    },
                    { 
                        id: 3,                         
                        name: 'David Karásek',
                        function: 'produktový designér, majitel mmcité',                        
                        catchword: 'Mluvíme-li o tom, že chceme tvořit a prodávat produkty s přidanou hodnotou, měli bychom se prezentovat nikoliv jako země levné pracovní síly, ale jako země zajímavých výrobků se skvělým designem.',
                        url: 'https://www.kreativnicesko.cz/clanky/drive-jsme-hledali-nejkratsi-cestu-ted-ve-verejnem-prostoru-travime-cas',  
                        src: '/images/heroes/hero-04.jpg', 
                        imgBg: 'background-image: url("/images/heroes/hero-04.jpg")',                     
                        isActive: false,
                        isActiveImg: false,
                        isActiveDetail: false,
                    },
                    { 
                        id: 4,                         
                        name: 'Marianna Sršňová',
                        function: 'ředitelka Společnosti pro kreativitu ve vzdělávání',                        
                        catchword: 'Žijeme ve světě, kde se neustále všechno mění. Je potřeba děti naučit kriticky analyzovat a interpretovat, nikoli jim pouze servírovat informace.',
                        url: 'https://www.kreativnicesko.cz/clanky/bezpecne-a-kreativni-prostredi-je-pro-uceni-zasadni',  
                        src: '/images/heroes/hero-05.jpg',
                        imgBg: 'background-image: url("/images/heroes/hero-05.jpg")',                     
                        isActive: false,
                        isActiveImg: false,
                        isActiveDetail: false,
                    },

                    { 
                        id: 5,                         
                        name: 'Libor Kasík',
                        function: 'ředitel Společenského centra UFFO, zakladatel mezinárodního festivalu nového cirkusu Cirk-UFF',                        
                        catchword: 'S divákem je nutné komunikovat. Můžete uvádět i kontroverzní představení, ale je potřeba vysvětlit, nastínit svůj úhel pohledu. Všechno je to o komunikaci.',
                        url: 'https://www.kreativnicesko.cz/clanky/kulturou-umime-bourat-predsudky', 
                        src: '/images/heroes/hero-06.jpg', 
                        imgBg: 'background-image: url("/images/heroes/hero-06.jpg")',                      
                        isActive: false,
                        isActiveImg: false,
                        isActiveDetail: false,
                    },
                    { 
                        id: 6,                         
                        name: 'Jan a Ondřej Salanští',
                        function: 'majitelé ateliéru SCUBB',                        
                        catchword: 'Je ovšem potřeba si uvědomit, že díky českému sklu nás znají po celém světě. Držet tuto tradici je myslím nezbytné. Stejně tak je ale potřeba na ní navazovat a propojit třeba s novodobými technologiemi a přístupy.',
                        url: 'https://www.kreativnicesko.cz/clanky/vsechno-ma-svuj-cas', 
                        src: '/images/heroes/hero-07.jpg',    
                        imgBg: 'background-image: url("/images/heroes/hero-07.jpg")',                   
                        isActive: false,
                        isActiveImg: false,
                        isActiveDetail: false,
                    },
                    { 
                        id: 7,                         
                        name: 'Tomáš Popp',
                        function: 'manažer Národního týmu kuchařů a cukrářů',                        
                        catchword: 'Jídlo, které má původ. Není nic lepšího, než znát člověka, který pro vás jídlo připravil. Láska, kterou do vaření nebo výroby produktu vložíte, se okamžitě projeví.',
                        url: 'https://www.kreativnicesko.cz/clanky/nejlepsi-je-jidlo-co-ma-jasny-puvod',
                        src: '/images/heroes/hero-08.jpg', 
                        imgBg: 'background-image: url("/images/heroes/hero-08.jpg")',                        
                        isActive: false,
                        isActiveImg: false,
                        isActiveDetail: false,
                    },
                    { 
                        id: 8,                         
                        name: 'Pavla Horáková',
                        function: 'spisovatelka a překladatelka',                        
                        catchword: 'Na psaní mám nejraději ponoření se do vnitřního světa, do příběhu samotného. Možná bych to přirovnala k hraní videoher. Nasadím si 3D brýle, chodím tímhle novým světem a koukám se kolem sebe.',
                        url: 'https://www.kreativnicesko.cz/clanky/kdyz-se-ponorim-do-psani-je-to-jako-videohra', 
                        src: '/images/heroes/hero-09.jpg',       
                        imgBg: 'background-image: url("/images/heroes/hero-09.jpg")',                  
                        isActive: false,
                        isActiveImg: false,
                        isActiveDetail: false,
                    },
                    { 
                        id: 9,                         
                        name: 'Jaroslav Beck',
                        function: 'skladatel, spoluautor VR hry Beat Saber',                        
                        catchword: 'Počítačové hry jsou novodobý hokej Česka. Celý svět zná české hry.',
                        url: 'https://www.kreativnicesko.cz/clanky/ceske-hry-zna-cely-svet',
                        src: '/images/heroes/hero-10.jpg',       
                        imgBg: 'background-image: url("/images/heroes/hero-10.jpg")',                    
                        isActive: false,
                        isActiveImg: false,
                        isActiveDetail: false,
                    },
                    { 
                        id: 10,                         
                        name: 'Zlata Holušová',
                        function: 'zakladatelka a ředitelka festivalu Colours of Ostrava',                        
                        catchword: 'Člověk ve své izolovanosti (pozn. red. během pandemie koronaviru) cítil obrovské propojení.',
                        url: 'https://www.kreativnicesko.cz/clanky/ziva-setkani-nelze-nijak-nahradit',  
                        src: '/images/heroes/hero-11.jpg',       
                        imgBg: 'background-image: url("/images/heroes/hero-11.jpg")', 
                        isActive: false,
                        isActiveImg: false,
                        isActiveDetail: false, 
                    },
                    { 
                        id: 11,                         
                        name: '',
                        function: '',                        
                        catchword: '',
                        url: '', 
                        src: '/images/heroes/hero-empty.png', 
                        imgBg: 'background-image: url("/images/heroes/hero-empty.png")',   
                        isActive: false,
                        isActiveImg: false,
                        isActiveDetail: false,
                    },
                ]
            }
        },

        methods: {
            changeHero: function (id) {                
                //console.log('changee id: ' + id);
                this.clearTimer();                
                this.actualId = id;

                for (let i = 0; i < this.heroItems.length; i++) {
                    this.heroItems[i].isActive = false;
                    this.heroItems[i].isActiveImg = false;
                    this.heroItems[i].isActiveDetail = false;
                }

                let imgNumber = '';

                if (id < 9) {
                    imgNumber = '0' + (this.heroItems[id].id + 1);
                } else {
                    imgNumber = this.heroItems[id].id + 1;
                }

                this.heroItems[id].isActive = true;
                this.heroItems[id].isActiveImg = true;
                this.heroItems[id].isActiveDetail = false;
                this.actualImgBg = "background-image: url('/images/heroes/hero-" + imgNumber + ".jpg')";

                
                this.startTimer(id);
                //console.log(this.actualImgBg);
            },

            switchHeroToImg: function (id, wasClicked) {                
                //console.log('switchHeroToImg');
                this.clearTimer();
                
                for (let i = 0; i < this.heroItems.length; i++) {
                    this.heroItems[i].isActiveImg = false;
                    this.heroItems[i].isActiveDetail = false;
                }

                this.heroItems[id].isActiveImg = true;
                this.heroItems[id].isActiveDetail = false;
                
                this.startTimer(id, wasClicked);
            },

            switchHeroToDetail: function (id, wasClicked) {
                //console.log('switchHeroToDetail');
                this.clearTimer();

                for (let i = 0; i < this.heroItems.length; i++) {
                    this.heroItems[i].isActiveImg = false;
                    this.heroItems[i].isActiveDetail = false;
                }

                this.heroItems[id].isActiveImg = false;
                this.heroItems[id].isActiveDetail = true;
                
                this.startTimer(id, wasClicked);
            },

            startTimer: function (id, wasClicked) {
                let self = this;
                let timeout = 0;
                //console.log('startTimer');

                if (this.heroItems[id].isActiveImg === true && this.heroItems[id].isActiveDetail === false) {                    
                    if (wasClicked === true) {
                        timeout = 1.5 * this.timeoutToImg;
                    } else {
                        timeout = this.timeoutToImg;
                    }

                    // delay kvuli prekresleni vue.js
                    setTimeout(function(){
                        self.startDelayAnimation(timeout - 150);
                    }, 100);

                    this.timer = setTimeout(function(){ 
                        //console.log('switchHeroToDetail: ' + timeout);                        
                        self.switchHeroToDetail(id, false);
                    }, timeout);

                    

                } else if (this.heroItems[id].isActiveImg === false && this.heroItems[id].isActiveDetail === true) {                    
                    if (wasClicked === true) {
                        timeout = 2 * this.timeoutToDetail;
                    } else {
                        timeout = this.timeoutToDetail;
                    }

                    // delay kvuli prekresleni vue.js
                    setTimeout(function(){
                        self.startDelayAnimation(timeout - 150);
                    }, 100);

                    this.timer = setTimeout(function(){ 
                        //console.log('switchHeroToImg: ' + timeout);
                        //self.switchHeroToImg(id, false); 
                        let heroesNumber = 0;
                        
                        for (let i = 0; i < self.heroItems.length; i++) {
                            if (self.heroItems[i].name !== '') {
                                heroesNumber += 1;
                            }                            
                        }

                        let nextId = 0;

                        if ((id + 1) >= heroesNumber)  {
                            nextId = 0;
                        } else {
                            nextId = id + 1;
                        }
                        
                        self.changeHero(nextId);
                    }, timeout);

                }
            },

            clearTimer: function () {
                let self = this;

                //console.log('clearTimer');
                this.stopDelayAnimation();                
                clearTimeout(this.timer);                
            },

            
            startDelayAnimation: function (timeout) {
                //console.log('startDelayAnimation');        
                this.delayLineStyle = {
                    transitionProperty: 'width',
                    transitionDuration: timeout + 'ms',
                    width: '100%'
                }
                this.delayLineTransitionTime = 100;
                this.delayLineWidth = 100;
            },

            stopDelayAnimation: function (timeout) {
                //console.log('stopDelayAnimation'); 
                this.delayLineStyle = {
                    transitionProperty: 'width',
                    transitionDuration: '0ms',
                    width: '0%'              
                }

                this.delayLineTransitionTime = 0;
                this.delayLineWidth = 0;
                
            },           

        },
        
        mounted() {
            this.changeHero(0);
        }
    }
</script>
