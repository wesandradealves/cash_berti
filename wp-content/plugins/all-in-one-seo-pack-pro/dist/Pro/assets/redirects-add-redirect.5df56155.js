import{_}from"./js/_plugin-vue_export-helper.d7c6d548.js";import{r as d,c as f,d as c,w as l,b as i,o as a,C as g,y,a as R,G as C}from"./js/vue.runtime.esm-bundler.a2ae84e1.js";import{l as A}from"./js/index.8a6e85a4.js";import{l as k}from"./js/index.63c9ec9d.js";import{u as w,t as S,l as v}from"./js/links.138c5ae5.js";/* empty css                */import{a as E}from"./js/addons.3740efb6.js";import{C as L}from"./js/Portal.13b69d4d.js";import{C as b}from"./js/Index.b528f69d.js";import{i as x}from"./js/isEmpty.ec1f0f93.js";import"./js/translations.2cd8c3d1.js";import"./js/default-i18n.cb62c1e5.js";import"./js/constants.3cff9bad.js";import"./js/Caret.833cbb47.js";import"./js/isArrayLikeObject.7cab3d31.js";import"./js/upperFirst.fa56af60.js";import"./js/_stringToArray.4de3b1f3.js";import"./js/toString.55d4b1ab.js";import"./js/Index.7805c951.js";/* empty css                                                 *//* empty css                                               *//* empty css                                                 */import"./js/JsonValues.870a4901.js";import"./js/strings.b7f040f8.js";import"./js/isString.d9467ca2.js";import"./js/ProBadge.fa206e5a.js";import"./js/External.a8a08ac9.js";import"./js/Exclamation.b5609fd8.js";import"./js/Checkbox.349747c9.js";import"./js/Checkmark.f214118b.js";import"./js/Row.eead99c7.js";import"./js/Gear.4a41a4ff.js";import"./js/Slide.b264e916.js";import"./js/Tooltip.f932ed03.js";import"./js/Plus.cf4682aa.js";import"./js/_getTag.ae88cce7.js";const H={setup(){return{rootStore:w()}},components:{CoreModalPortal:L,CoreAddRedirection:b},data(){return{addons:E,urls:[],display:!1,target:null,loading:!1,strings:{modalHeader:this.$t.__("Add a Redirect",this.$td),redirectAdded:this.$t.sprintf(this.$t.__('%2$sYour redirect was added and you may edit it <a href="%1$s" target="_blank">here</a>.%3$s',this.$td),this.rootStore.aioseo.urls.aio.redirects,"<strong>","</strong>")},watchClasses:["aioseo-redirects-slug-changed","aioseo-redirects-trashed-post"]}},computed:{classSelectors(){return"."+this.watchClasses.join(", .")}},methods:{reload(){var e,o;this.display=!1;const t=(o=(e=this.target)==null?void 0:e.parentElement)==null?void 0:o.parentElement;if(t&&(t.classList.contains("components-notice__content")||t.classList.contains("notice"))){t.innerHTML="<p>"+this.strings.redirectAdded+"</p>";return}this.target.outerHTML=this.strings.redirectAdded},loadRedirect(t){this.loading=!0,S.get(this.$links.restUrl("redirects/manual-redirects/"+t)).then(e=>{this.urls=e.body.redirects,this.loading=!1}).catch(e=>console.log("Redirect modal failed to load the redirect data.",e))},preloadRedirect(){const t=document.querySelector(this.classSelectors);if(t){const e=this.getElementRedirectHash(t);if(!e)return;this.loadRedirect(e)}},watchClicks(){document.body.onclick=t=>{var o;if(!((o=t.target)!=null&&o.classList))return;let e=!1;this.watchClasses.forEach(n=>{t.target.classList.contains(n)&&(e=!0)}),e&&(t.preventDefault(),this.target=t.target,this.display=!0,x(this.url)&&this.loadRedirect(this.getElementRedirectHash(this.target)))}},getElementRedirectHash(t){return new URLSearchParams(t.href).get("aioseo-manual-urls")}},async created(){this.preloadRedirect(),this.watchClicks(),window.aioseoBus.$on("wp-core-notice-created",()=>{this.preloadRedirect()})}},$={key:0,class:"aioseo-redirects-add-redirect-standalone"},B={class:"bd"};function P(t,e,o,n,r,m){const u=d("core-add-redirection"),h=d("core-modal-portal");return r.addons.isActive("aioseo-redirects")?(a(),f("div",$,[r.display?(a(),c(h,{key:0,classes:["aioseo-redirects","modal"],onClose:e[0]||(e[0]=U=>r.display=!1)},{headerTitle:l(()=>[g(y(r.strings.modalHeader),1)]),body:l(()=>[R("div",B,[r.loading?i("",!0):(a(),c(u,{key:0,urls:r.urls,target:r.urls[0].target?r.urls[0].target:"/",disableSource:!0,onAddedRedirect:m.reload},null,8,["urls","target","onAddedRedirect"]))])]),_:1})):i("",!0)])):i("",!0)}const T=_(H,[["render",P]]),p=document.createElement("div");p.id="aioseo-redirects-add-redirect-standalone";document.body.appendChild(p);let s=C({...T,name:"Standalone/Redirects/AddRedirect"});s=A(s);s=k(s);v(s);s.mount("#aioseo-redirects-add-redirect-standalone");
