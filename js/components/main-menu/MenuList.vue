<template>
    <div class="component-container">
        <span class="icon-menu" @click="showPopupMenu()"></span>
        <div class="popup-menu" :class="{ show: isPopupMenuVisible }">
            <div class="scroll-container" :style=" isPopupMenuVisible ? { paddingLeft: scrollBarPadding + 'px', paddingRight: scrollBarPadding + 'px' } : { paddingLeft: '0px', paddingRight: '0px' }">
                <span class="btn-close" @click="hidePopupMenu()"></span>
                <div class="box">                                        
                    <nav>
                        <ul>
                            <li v-for="(item) in items" :key="item.id">
                                <a :class="{ active: item.isActive }" :href="item.url" @click.prevent="itemClick(item)">
                                    {{ item.title }}
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>        
            </div> 
        </div>
    </div>
</template>

<script>    
    export default {
        name: 'MenuList',
        props: {
            headerTagId: String,
            headerClassScroll: String,
            scrollDuration: Number,        
            fixLastActiveItem: Boolean,
            items: Array
        },
        data: function () {
            return {
                timer: null,     // timer musi byt jen jeden a musi se resetovat při kliknuti na jiny odkaz
                isPopupMenuVisible: false
            }        
        },
        mounted: function () {
            let self = this;            

            // poprve spustit po nacteni stranky - oznaci se aktivni kotva
            self.checkItemsPositions(window.pageYOffset);    // window.scrollY - dava stejne hodnoty jako window.pageYOffset               

            window.addEventListener('scroll', function(event) {
                self.checkItemsPositions(window.pageYOffset);    // window.scrollY - dava stejne hodnoty jako window.pageYOffset               
            });
        },
        methods: {
            checkItemsPositions: function (scrollPosition) {            
                let offset = 1;        // offset 2px
                let headerTag = document.getElementById(this.headerTagId);
                let headerHeight = headerTag.offsetHeight;
                let newActiveAnchorIndex = null;
                let newActiveSubAnchorIndex = null;
                let lastAnchorIndex = null;
                let lastSubAnchorIndex = null;
                
                for (let i = 0; i < this.items.length; i++) {
                    if (this.items[i].anchor) {
                        lastAnchorIndex = i;
                        let element = document.getElementById(this.items[i].anchor);
                        let elementTopY = element.offsetTop - offset - headerHeight;
                        let elementBottomY = element.offsetTop + element.offsetHeight - headerHeight;
                        
                        if ( (scrollPosition > elementTopY) && (scrollPosition < elementBottomY) ) {
                            newActiveAnchorIndex = i;                        
                        }

                        this.items[i].isActive = false;
                    }
                }

            
                let doc = document.documentElement;
                let docOffset = doc.scrollTop + window.innerHeight;
                let docHeight = doc.offsetHeight;
                /*
                console.log('docOffset: ' + docOffset);
                console.log('docHeight: ' + docHeight);

                console.log('lastAnchorIndex: ' + lastAnchorIndex);
                console.log('lastSubAnchorIndex: ' + lastSubAnchorIndex);

                console.log('newActiveAnchorIndex: ' + newActiveAnchorIndex);
                console.log('newActiveSubAnchorIndex: ' + newActiveSubAnchorIndex);
                */

                if (this.fixLastActiveItem === true && (docOffset === docHeight)) {
                    //console.log('At the bottom');
                    if (lastAnchorIndex !== null) {
                        this.items[lastAnchorIndex].isActive = true;

                        if (lastSubAnchorIndex !== null && this.items[lastAnchorIndex].subItemsL1) {
                            this.items[lastAnchorIndex].subItemsL1[lastSubAnchorIndex].isActive = true;
                        } 
                    }            
                    
                } else {
                    if (newActiveAnchorIndex !== null) {
                        this.items[newActiveAnchorIndex].isActive = true;

                        if (newActiveSubAnchorIndex !== null && this.items[newActiveAnchorIndex].subItemsL1) {
                            this.items[newActiveAnchorIndex].subItemsL1[newActiveSubAnchorIndex].isActive = true;
                        } 
                    }
                                
                }
            

                if (scrollPosition > 0) {
                    headerTag.classList.add(this.headerClassScroll);
                } else {
                    headerTag.classList.remove(this.headerClassScroll);
                }      

            },
            itemClick: function (item) {
                //console.log('click on link with anchor: #' + anchor);
                if (item.anchor) {
                    let element = document.getElementById(item.anchor);
                    //console.log('block position top: ' + element.offsetTop);
                    //console.log('window position top: ' + window.pageYOffset);
                                    
                    this.scrollToElement(element.offsetTop, window.pageYOffset);
                } else if (item.url) {
                    if (item.isUrlExternal === true) {
                        window.open(item.url);
                    } else {
                        window.window.location.href = item.url;
                    }                
                } 
                
                this.hidePopupMenu();
            },
            scrollToElement: function (positionTo, positionFrom) {
                var self = this;
                let headerTag = document.getElementById(this.headerTagId);
                let headerHeight = headerTag.offsetHeight;
                let timerInterval = 10;
                let stepsNumber = (this.scrollDuration / timerInterval);
                let positionActual = positionFrom;
                let positionToFixed = (positionTo - headerHeight);      // odecet vysky fixnuteho menu
                let positionDistance = Math.abs(positionFrom - positionToFixed);
                //let stepDistance = (positionDistance / stepsNumber);
                let durationLeft = this.scrollDuration;
                let stepActual = 0;
                
                if (positionDistance > 0) {
                    clearInterval(self.timer);
                    self.timer = setInterval(function () {                
                        stepActual += 1;
                        let t = (stepActual / stepsNumber);                                
                        let easing = self.easing(t, 'InOutQuad');
                    
                        if (positionFrom < positionToFixed) {
                            positionActual = positionFrom + (easing * positionDistance);
                        } else {
                            positionActual = positionFrom - (easing * positionDistance);
                        }
                                            
                        //console.log('easing: ' +  easing + ' | positionActual: ' + positionActual);
                        
                        window.scrollTo(0, positionActual);
                        
                        if (stepActual >= stepsNumber) {
                            clearInterval(self.timer);
                        }
                    }, timerInterval);
                }
                            
            },
            easing: function (t, type) {
                let result;

                if (type === 'InOutQuad') {
                    result = t<.5 ? 2*t*t : -1+(4-2*t)*t;
                } else if (type === 'InOutCubic') {
                    result = t<.5 ? 4*t*t*t : (t-1)*(2*t-2)*(2*t-2)+1;
                } else {
                    // linear
                    result = t;
                }

                return result;

                // Simple Easing Functions https://gist.github.com/gre/1650294
            },
            showPopupMenu: function () {
                this.isPopupMenuVisible = true;
            },
            hidePopupMenu: function () {
                this.isPopupMenuVisible = false;
            },
            getScrollBarWidth: function () {
                let inner = document.createElement('p');
                inner.style.width = "100%";
                inner.style.height = "200px";

                let outer = document.createElement('div');
                outer.style.position = "absolute";
                outer.style.top = "0px";
                outer.style.left = "0px";
                outer.style.visibility = "hidden";
                outer.style.width = "200px";
                outer.style.height = "150px";
                outer.style.overflow = "hidden";
                outer.appendChild(inner);

                document.body.appendChild(outer);
                let w1 = inner.offsetWidth;
                outer.style.overflow = 'scroll';
                let w2 = inner.offsetWidth;

                if (w1 == w2) {
                    w2 = outer.clientWidth;
                }

                document.body.removeChild(outer);

                return (w1 - w2);
            }
        },
        created: function () {
            this.scrollBarPadding = (this.getScrollBarWidth() / 2);
            //console.log('scrollBarPadding: ' + this.scrollBarPadding);		
        }    
    }
</script>
