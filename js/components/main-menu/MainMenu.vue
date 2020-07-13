<template>
    <div class="component-container">
        <MenuList 
            :headerTagId="headerTagId"
            :headerClassScroll="headerClassScroll"
            :scrollDuration="scrollDuration"
            :fixLastActiveItem="fixLastActiveItem"
            :items="menuItems"          
        />
    </div>
</template>

<script>
    import MenuList from './MenuList.vue';

    export default {
        name: 'MainMenu',
        components: {
            MenuList,
        },

        data: function () {
            return {
                headerTagId: 'fixed-header',      // id fixnututeho tagu - slouzi k vypoctu aktualni vysky fixnuteho menu pro idealni pozici scrollnuti
                headerClassScroll: 'scroll',        // jakmile neni scrollbar uplne nahore, prida se k fixnutemu mennu tata trida
                scrollDuration: 400,        // ms
                fixLastActiveItem: true,        // pokud true, a pokud je scrollbar na konci stranky tak bude posledni item v menu s anchorem nastaven jako aktivni, i kdyz scrollbar neni na urovni bloku                
                menuItems: [
                    { 
                        id: 0, 
                        title: 'Hrdinové kulturních a kreativních průmyslů', 
                        anchor: 'section-cultural-heroes',
                        url: '',
                        isUrlExternal: false,
                        isActive: false,
                    },
                    { 
                        id: 1, 
                        title: 'O strategii', 
                        anchor: 'section-strategy',
                        url: '',
                        isUrlExternal: false,
                        isActive: false,
                    },
                    { 
                        id: 2, 
                        title: 'Fáze identifikace potřeby tvorby Strategi KKP', 
                        anchor: 'phase-strategy',
                        url: '',
                        isUrlExternal: false,
                        isActive: false,
                    },
                    { 
                        id: 3, 
                        title: 'Mapa příkladů dobré praxe', 
                        anchor: 'section-map-practice',
                        url: '',
                        isUrlExternal: false,
                        isActive: false,
                    },
                    { 
                        id: 4, 
                        title: 'Kreativní inkubátor', 
                        anchor: 'section-creative-incubator',
                        url: '',
                        isUrlExternal: false,
                        isActive: false,
                    },
                    { 
                        id: 5, 
                        title: 'Komunikační platforma', 
                        anchor: 'section-communication-platform',
                        url: '',
                        isUrlExternal: false,
                        isActive: false,
                    },
                    { 
                        id: 6, 
                        title: 'Projektový tým', 
                        anchor: 'section-project-team',
                        url: '',
                        isUrlExternal: false,
                        isActive: false,
                    },
                    { 
                        id: 7, 
                        title: 'Odborný tým', 
                        anchor: 'section-expert-team',
                        url: '',
                        isUrlExternal: false,
                        isActive: false,
                    },
                    { 
                        id: 8, 
                        title: 'Koordinátoři v krajích ČR', 
                        anchor: 'section-coordinators',
                        url: '',
                        isUrlExternal: false,
                        isActive: false,
                    },
                    { 
                        id: 9, 
                        title: 'Kontakt', 
                        anchor: 'section-contact',
                        url: '',
                        isUrlExternal: false,
                        isActive: false,
                    },
                ]
            }
        },
        
        mounted() {
            //console.log('Component MainMenu mounted.')
        }
    }
</script>
