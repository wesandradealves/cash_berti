import{_ as a}from"./js/_plugin-vue_export-helper.d7c6d548.js";import{c as i,b as c,o as l,G as u}from"./js/vue.runtime.esm-bundler.a2ae84e1.js";const p={data(){return{display:!1,interval:null}},methods:{addMenuHighlight(){const t=document.querySelector("#toplevel_page_aioseo");if(!t)return;t.querySelectorAll(".wp-submenu li").forEach(n=>{const o=n.querySelector("a");if(!o)return;const e=o.querySelector(".aioseo-menu-highlight");if(e){n.classList.add("aioseo-submenu-highlight"),e.classList.contains("red")&&n.classList.add("red");const s=n.querySelector("a");s&&!e.classList.contains("red")&&s.setAttribute("target","_blank")}})}},created(){this.addMenuHighlight()}},d={key:0};function _(t,r,n,o,e,s){return e.display?(l(),i("div",d)):c("",!0)}const m=a(p,[["render",_]]);document.getElementById("aioseo-admin")&&u({...m,name:"Standalone/App"}).mount("#aioseo-admin");
