(()=>{"use strict";var e={2312:(e,r,t)=>{t.d(r,{A:()=>s});const s=[t(8933).A]},8933:(e,r,t)=>{t.d(r,{A:()=>d});var s=t(1609),o=t.n(s);const i=/^(?:(?:http(?:s)?:\/\/)?(?:www\.)?video(?:\.word)?press\.com\/(?:v|embed)\/)?([a-zA-Z\d]+)(?:.*)?/i;class n extends s.Component{static slug="divi_videopress";render(){let e=this.props.guid;if(!e)return null;const r=e.match(i);if(!r||!r[1])return null;e=r[1];const t="https://videopress.com/embed/"+e+"?autoPlay=0&permalink=0&loop=0&embedder=divi-builder",s=`VideoPress video ${e}`;return o().createElement("div",{className:"vidi-videopress-wrapper"},o().createElement("iframe",{title:s,src:t,width:"100%",height:"100%"}),o().createElement("script",{src:"https://en.wordpress.com/wp-content/plugins/video/assets/js/next/videopress-iframe.js?m=1658739239"}))}}const d=n},1609:e=>{e.exports=window.React},428:e=>{e.exports=window.jQuery}},r={};function t(s){var o=r[s];if(void 0!==o)return o.exports;var i=r[s]={exports:{}};return e[s](i,i.exports,t),i.exports}t.n=e=>{var r=e&&e.__esModule?()=>e.default:()=>e;return t.d(r,{a:r}),r},t.d=(e,r)=>{for(var s in r)t.o(r,s)&&!t.o(e,s)&&Object.defineProperty(e,s,{enumerable:!0,get:r[s]})},t.o=(e,r)=>Object.prototype.hasOwnProperty.call(e,r);var s=t(428),o=t.n(s),i=t(2312);o()(window).on("et_builder_api_ready",((e,r)=>{r.registerModules(i.A)}))})();