import{b as N,d as V,u as F,k as M}from"./links.4ebb20e1.js";import{A as D}from"./AddonConditions.422a2842.js";import"./default-i18n.cb62c1e5.js";import"./constants.3cff9bad.js";import{r as d,o as r,d as h,w as s,a as l,g as n,b as _,C as f,y as c,c as g,F as A,D as x,B as O,S as H,n as z,T as W}from"./vue.runtime.esm-bundler.a2ae84e1.js";import{_ as L}from"./_plugin-vue_export-helper.d7c6d548.js";/* empty css                                              */import{A as q,T as j}from"./TitleDescription.51360bb5.js";import{B as U}from"./RadioToggle.48072aa8.js";import{C as J}from"./Card.fb1280a3.js";import{C as Q}from"./Tabs.1abedd25.js";import{C as X}from"./ProBadge.fa206e5a.js";import{C as B}from"./SettingsRow.7db26b8a.js";import{B as I}from"./Checkbox.349747c9.js";import{C as Y}from"./Blur.718f6c18.js";import{C as G}from"./HtmlTagsEditor.75bd8175.js";import{G as E,a as R}from"./Row.eead99c7.js";import{C as Z,S as tt}from"./Schema.208b878e.js";import{B as et}from"./Textarea.e4bb74d5.js";import{C as st}from"./ExcludePosts.f2b364ad.js";import{C as it}from"./Tooltip.f932ed03.js";import{R as ot}from"./RequiredPlans.220e2dcf.js";import{C as at}from"./Index.a392ec8a.js";import"./isArrayLikeObject.86aee886.js";import"./addons.ece7eb50.js";import"./upperFirst.feef3474.js";import"./_stringToArray.4de3b1f3.js";import"./toString.0b0abfad.js";import"./index.63c9ec9d.js";import"./Caret.833cbb47.js";/* empty css                                            *//* empty css                                              */import"./JsonValues.870a4901.js";import"./MaxCounts.12b45bab.js";import"./RobotsMeta.ae240276.js";import"./tags.e7f6eb6d.js";import"./Tags.4c2adefa.js";import"./postContent.5bd61ca1.js";import"./cleanForSlug.896b89f7.js";import"./_baseTrim.8725856f.js";import"./deburr.a5d10bf3.js";import"./html.f121fc84.js";import"./get.5c4e8574.js";import"./GoogleSearchPreview.9e602be2.js";import"./Slide.b264e916.js";import"./TruSeoScore.5da2419b.js";import"./Ellipse.af318a8d.js";import"./Information.4f2d4b14.js";import"./Checkmark.f214118b.js";import"./Editor.e50d1a83.js";import"./UnfilteredHtml.2614b409.js";import"./AddPlus.c4e409c7.js";import"./External.a8a08ac9.js";import"./license.f68289d9.js";const nt={components:{BaseCheckbox:I,BaseRadioToggle:U,CoreBlur:Y,CoreHtmlTagsEditor:G,CoreSettingsRow:B,GridColumn:E,GridRow:R},data(){return{stripPunctuationSettings:[{value:"dashes",label:this.$t.__("Dashes (-)",this.$td)},{value:"underscores",label:this.$t.__("Underscores (_)",this.$td)},{value:"numbers",label:this.$t.__("Numbers (0-9)",this.$td)},{value:"plus",label:this.$t.__("Plus (+)",this.$td)},{value:"apostrophe",label:this.$t.__("Apostrophe (')",this.$td)},{value:"pound",label:this.$t.__("Pound (#)",this.$td)},{value:"ampersand",label:this.$t.__("Ampersand (&)",this.$td)}],strings:{attributeFormat:this.$t.sprintf(this.$t.__("%1$s Format",this.$td),this.$t.__("Title",this.$td)),clickToAddTags:this.$t.sprintf(this.$t.__("Click on the tags below to insert variables into your %1$s attribute.",this.$td),this.$t.__("Title",this.$td).toLowerCase()),stripPunctuation:this.$t.__("Strip Punctuation",this.$td),punctuationCharactersToKeep:this.$t.__("Punctuation Characters to Keep:",this.$td),casing:this.$t.__("Casing",this.$td),casingDescription:this.$t.__("Choose which casing should be applied to the attribute.",this.$td),wordsToStrip:this.$t.__("Words to Strip",this.$td),autogenerate:this.$t.sprintf(this.$t.__("Autogenerate %1$s on Upload",this.$td),this.$t.__("Title",this.$td))},tags:{title:{context:"imageSeoTitle",default:["image_title","separator_sa","site_title"]},altTag:{context:"imageSeoAlt",default:["alt_tag","separator_sa","site_title"]},caption:{context:"imageSeoCaption",default:["attachment_caption","separator_sa","site_title"]},description:{context:"imageSeoDescription",default:["attachment_description","separator_sa","site_title"]}},casings:{lowerCase:{label:this.$t.__("Lower Case",this.$td),description:this.$t.__("All letters are converted to lower case (small) letters.",this.$td)},titleCase:{label:this.$t.__("Title Case",this.$td),description:this.$t.__("Major words are capitalized and minor words remain in their original casing.",this.$td)},sentenceCase:{label:this.$t.__("Sentence Case",this.$td),description:this.$t.__("The first word of each sentence starts with a capital.",this.$td)}}}},props:{activeTab:Object}},rt={class:"aioseo-sa-image-seo"},lt={class:"global-robots-settings aioseo-description"},ct={class:"aioseo-description"},dt=l("br",null,null,-1),ut={class:"casing-options"};function mt(e,u,i,o,t,m){const b=d("base-radio-toggle"),p=d("core-settings-row"),$=d("core-html-tags-editor"),T=d("base-checkbox"),C=d("grid-column"),P=d("grid-row"),w=d("core-blur");return r(),h(w,null,{default:s(()=>[l("div",rt,[["caption","description"].includes("title")?(r(),h(p,{key:0,name:t.strings.autogenerate,align:""},{content:s(()=>[n(b,{name:"autogenerate",options:[{label:e.$constants.GLOBAL_STRINGS.disabled,value:!1,activeClass:"dark"},{label:e.$constants.GLOBAL_STRINGS.enabled,value:!0}]},null,8,["options"])]),_:1},8,["name"])):_("",!0),n(p,{name:t.strings.attributeFormat},{content:s(()=>[n($,{"line-numbers":!1,single:"","tags-context":t.tags.title.context,"default-tags":t.tags.title.default},{"tags-description":s(()=>[f(c(t.strings.clickToAddTags),1)]),_:1},8,["tags-context","default-tags"])]),_:1},8,["name"]),n(p,{name:t.strings.stripPunctuation,align:""},{content:s(()=>[n(b,{name:"stripPunctuation",options:[{label:e.$constants.GLOBAL_STRINGS.disabled,value:!1,activeClass:"dark"},{label:e.$constants.GLOBAL_STRINGS.enabled,value:!0}]},null,8,["options"]),l("div",lt,[l("strong",null,c(t.strings.punctuationCharactersToKeep),1),n(P,{class:"settings"},{default:s(()=>[(r(!0),g(A,null,x(t.stripPunctuationSettings,(S,v)=>(r(),h(C,{key:v,xl:"3",md:"4",sm:"6"},{default:s(()=>[n(T,{size:"medium"},{default:s(()=>[f(c(S.label),1)]),_:2},1024)]),_:2},1024))),128))]),_:1})])]),_:1},8,["name"]),n(p,{name:t.strings.casing,align:""},{content:s(()=>[n(b,{name:"casing",options:[{label:e.$constants.GLOBAL_STRINGS.disabled,value:"",activeClass:"dark"},{label:t.casings.lowerCase.label,value:"lower"},{label:t.casings.titleCase.label,value:"title"},{label:t.casings.sentenceCase.label,value:"sentence"}]},null,8,["options"]),l("div",ct,[l("span",null,c(t.strings.casingDescription),1),dt,l("ul",ut,[(r(!0),g(A,null,x(t.casings,(S,v)=>(r(),g("li",{key:v},[l("span",null,c(S.label),1),l("span",null,c(S.description),1)]))),128))])])]),_:1},8,["name"])])]),_:1})}const K=L(nt,[["render",mt]]),ht={setup(){return{tagsStore:N()}},mixins:[D],components:{Blur:K},data(){return{addonSlug:"aioseo-image-seo",strings:{imageSeoHeader:this.$t.__("Enable Advanced SEO for Images on your Site",this.$tdPro),ctaDescription:this.$t.__("The Image SEO module is a premium feature that enables you to globally control the title, alt tag, caption, description and filename of the images on your site.",this.$tdPro),learnMoreText:this.$t.__("Learn more about Image SEO",this.$tdPro),features:[this.$t.__("Autogenerate image attributes",this.$tdPro),this.$t.__("Clean uploaded image filenames",this.$tdPro),this.$t.__("Strip punctuation from image attributes",this.$tdPro),this.$t.__("Convert casing of image attributes",this.$tdPro)]}}},computed:{ctaButtonText(){return this.shouldShowUpdate?this.$t.__("Update Image SEO",this.$tdPro):this.$t.__("Activate Image SEO",this.$tdPro)}}},pt={class:"aioseo-sa-image-seo"};function _t(e,u,i,o,t,m){const b=d("blur");return r(),g("div",pt,[n(b),(r(),h(O(e.ctaComponent),{"addon-slug":t.addonSlug,"cta-header":t.strings.imageSeoHeader,"cta-description":t.strings.ctaDescription,"cta-button-text":m.ctaButtonText,"learn-more-text":t.strings.learnMoreText,"learn-more-link":e.$links.getDocUrl("imageSeo"),"feature-list":t.strings.features,"post-activation-promises":[o.tagsStore.getTags]},null,8,["addon-slug","cta-header","cta-description","cta-button-text","learn-more-text","learn-more-link","feature-list","post-activation-promises"]))])}const gt=L(ht,[["render",_t]]);const bt={setup(){return{optionsStore:V()}},components:{BaseCheckbox:I,BaseRadioToggle:U,BaseTextarea:et,CoreExcludePosts:st,CoreHtmlTagsEditor:G,CoreSettingsRow:B,CoreTooltip:it,GridColumn:E,GridRow:R},data(){return{strings:{attributeFormat:this.$t.sprintf(this.$t.__("%1$s Format",this.$tdPro),this.activeTab.name),clickToAddTags:this.$t.sprintf(this.$t.__("Click on the tags below to insert variables into your %1$s attribute.",this.$tdPro),this.activeTab.name.toLowerCase()),stripPunctuation:this.$t.__("Strip Punctuation",this.$tdPro),charactersToKeep:this.$t.__("Characters to Exclude from Being Stripped:",this.$tdPro),charactersToConvert:this.$t.__("Characters to Convert to Spaces:",this.$tdPro),casing:this.$t.__("Casing",this.$tdPro),casingDescription:this.$t.__("Choose which casing should be applied to the attribute.",this.$tdPro),wordsToStrip:this.$t.__("Words to Strip",this.$tdPro),wordsToStripDescription:this.$t.__("Here you can add words that should be stripped from the filename, separated by a new line.",this.$tdPro),excludePostsPages:this.$t.__("Exclude Posts / Pages",this.$tdPro),excludeTerms:this.$t.__("Exclude Terms",this.$tdPro),excludeTermsDescription:this.$t.__("Any posts that are assigned to these terms will also be excluded.",this.$tdPro),autogenerate:this.$t.sprintf(this.$t.__("Autogenerate %1$s on Upload",this.$tdPro),this.activeTab.name),autogenerateDescriptions:{caption:this.$t.sprintf(this.$t.__("Choose whether %1$s should automatically generate a %2$s when new images are uploaded. If you disable this setting, you can still generate %3$s in the Media Library via our bulk action.",this.$tdPro),"AIOSEO",this.$t.__("caption",this.$tdPro),this.$t.__("captions",this.$tdPro)),description:this.$t.sprintf(this.$t.__("Choose whether %1$s should automatically generate a %2$s when new images are uploaded. If you disable this setting, you can still generate %3$s in the Media Library via our bulk action.",this.$tdPro),"AIOSEO",this.$t.__("description",this.$tdPro),this.$t.__("descriptions",this.$tdPro))},attributeDescriptions:{title:{first:this.$t.__("The title attribute is used to provide additional information about an image and can be viewed when you hover over the image.",this.$tdPro),second:this.$t.sprintf(this.$t.__("Below you can control how your %1$s look like by setting a format (similar to the SEO title/description formats), stripping punctuation and converting the casing.",this.$tdPro),this.$t.__("title attributes",this.$tdPro))},altTag:{first:this.$t.__("The alt tag attribute is used to display text that describes the image if it cannot be rendered by the browser. Its primary goal is to make images more accessible to visually impaired users, but it also used as a ranking factor by search engines.",this.$tdPro),second:this.$t.sprintf(this.$t.__("Below you can control how your %1$s look like by setting a format (similar to the SEO title/description formats), stripping punctuation and converting the casing.",this.$tdPro),this.$t.__("alt tag attributes",this.$tdPro))},caption:{first:this.$t.__("The caption is usually a few lines of text that are displayed underneath an image to provide more context or explain what can be seen in the picture.",this.$tdPro),second:this.$t.sprintf(this.$t.__("Below you can control how your %1$s look like by setting a format (similar to the SEO title/description formats), stripping punctuation and converting the casing.",this.$tdPro),this.$t.__("image captions",this.$tdPro))},description:{first:this.$t.__("The description is the text that is displayed on an image's attachment page",this.$tdPro),second:this.$t.sprintf(this.$t.__("Below you can control how your %1$s look like by setting a format (similar to the SEO title/description formats), stripping punctuation and converting the casing.",this.$tdPro),this.$t.__("attachment page descriptions",this.$tdPro))},filename:{first:this.$t.__("The filename is name of the image file when it is uploaded to the Media Library. The more descriptive and relevant the filename is, the more likely search engines will include in their results.",this.$tdPro),second:this.$t.sprintf(this.$t.__("Below you can control how your %1$s look like by stripping punctuation, specific words and converting the casing.",this.$tdPro),this.$t.__("filenames",this.$tdPro))}}},charactersToKeep:[{value:"dashes",label:this.$t.__("Dashes (-)",this.$tdPro)},{value:"underscores",label:this.$t.__("Underscores (_)",this.$tdPro)},{value:"numbers",label:this.$t.__("Numbers (0-9)",this.$tdPro)},{value:"plus",label:this.$t.__("Plus (+)",this.$tdPro)},{value:"apostrophe",label:this.$t.__("Apostrophe (')",this.$tdPro)},{value:"pound",label:this.$t.__("Pound (#)",this.$tdPro)},{value:"ampersand",label:this.$t.__("Ampersand (&)",this.$tdPro)}],charactersToConvert:[{value:"dashes",label:this.$t.__("Dashes (-)",this.$tdPro)},{value:"underscores",label:this.$t.__("Underscores (_)",this.$tdPro)}],casings:{lowerCase:{label:this.$t.__("Lower Case",this.$tdPro),description:this.$t.__("All letters are converted to lower case (small) letters.",this.$tdPro)},titleCase:{label:this.$t.__("Title Case",this.$tdPro),description:this.$t.__("Major words are capitalized and minor words remain in their original casing.",this.$tdPro)},sentenceCase:{label:this.$t.__("Sentence Case",this.$tdPro),description:this.$t.__("The first word of each sentence starts with a capital.",this.$tdPro)}},tags:{title:{context:"imageSeoTitle",default:["image_title","separator_sa","site_title"]},altTag:{context:"imageSeoAlt",default:["alt_tag","separator_sa","site_title"]},caption:{context:"imageSeoCaption",default:["attachment_caption","separator_sa","site_title"]},description:{context:"imageSeoDescription",default:["attachment_description","separator_sa","site_title"]}}}},computed:{isFilenameTab(){return this.activeTab.slug==="filename"},filteredCharactersToKeep(){const e=["plus","apostrophe","pound","ampersand"];return this.charactersToKeep.filter(i=>this.activeTab.slug!=="filename"?!0:!e.includes(i.value)).map(i=>{var o;return(o=this.optionsStore.options.image[this.activeTab.slug].charactersToConvert)!=null&&o[i.value]?i.disabled=!0:i.disabled=!1,i})},filteredCharactersToConvert(){return this.charactersToConvert.map(e=>(this.optionsStore.options.image[this.activeTab.slug].charactersToKeep[e.value]?e.disabled=!0:e.disabled=!1,e))}},methods:{charactersToKeepTooltipText(e){return this.$t.sprintf(this.$t.__("Excluding %1$s is disabled when converting to spaces is enabled.",this.$tdPro),e.toLowerCase())},charactersToConvertTooltipText(e){return this.$t.sprintf(this.$t.__("Converting %1$s to spaces is disabled when excluding from stripping.",this.$tdPro),e.toLowerCase())}},props:{activeTab:Object}},vt={class:"aioseo-sa-image-seo"},ft={class:"aioseo-settings-row aioseo-section-description"},Tt=["innerHTML"],$t={class:"aioseo-description"},St={key:0,class:"global-robots-settings aioseo-description"},yt={key:0},Ct={class:"aioseo-description"},Pt=l("br",null,null,-1),wt={class:"casing-options"},kt={class:"aioseo-description"},At={key:3,slug:"advancedSettings"},xt={class:"aioseo-description"};function Lt(e,u,i,o,t,m){const b=d("base-radio-toggle"),p=d("core-settings-row"),$=d("core-html-tags-editor"),T=d("base-checkbox"),C=d("core-tooltip"),P=d("grid-column"),w=d("grid-row"),S=d("base-textarea"),v=d("core-exclude-posts");return r(),g("div",vt,[l("div",ft,[l("div",null,c(t.strings.attributeDescriptions[i.activeTab.slug].first),1),l("div",null,[f(c(t.strings.attributeDescriptions[i.activeTab.slug].second)+" ",1),l("span",{innerHTML:e.$links.getDocLink(e.$constants.GLOBAL_STRINGS.learnMore,"imageSeo",!0)},null,8,Tt)])]),["caption","description"].includes(i.activeTab.slug)?(r(),h(p,{key:0,name:t.strings.autogenerate,align:""},{content:s(()=>[n(b,{modelValue:o.optionsStore.options.image[i.activeTab.slug].autogenerate,"onUpdate:modelValue":u[0]||(u[0]=a=>o.optionsStore.options.image[i.activeTab.slug].autogenerate=a),name:"autogenerate",options:[{label:e.$constants.GLOBAL_STRINGS.disabled,value:!1,activeClass:"dark"},{label:e.$constants.GLOBAL_STRINGS.enabled,value:!0}]},null,8,["modelValue","options"]),l("div",$t,c(t.strings.autogenerateDescriptions[i.activeTab.slug]),1)]),_:1},8,["name"])):_("",!0),m.isFilenameTab?_("",!0):(r(),h(p,{key:1,name:t.strings.attributeFormat},{content:s(()=>[n($,{modelValue:o.optionsStore.options.image[i.activeTab.slug].format,"onUpdate:modelValue":u[1]||(u[1]=a=>o.optionsStore.options.image[i.activeTab.slug].format=a),"line-numbers":!1,single:"","tags-context":t.tags[i.activeTab.slug].context,"default-tags":t.tags[i.activeTab.slug].default,"disable-emoji":""},{"tags-description":s(()=>[f(c(t.strings.clickToAddTags),1)]),_:1},8,["modelValue","tags-context","default-tags"])]),_:1},8,["name"])),n(p,{name:t.strings.stripPunctuation,align:""},{content:s(()=>[n(b,{modelValue:o.optionsStore.options.image[i.activeTab.slug].stripPunctuation,"onUpdate:modelValue":u[2]||(u[2]=a=>o.optionsStore.options.image[i.activeTab.slug].stripPunctuation=a),name:"stripPunctuation",options:[{label:e.$constants.GLOBAL_STRINGS.disabled,value:!1,activeClass:"dark"},{label:e.$constants.GLOBAL_STRINGS.enabled,value:!0}]},null,8,["modelValue","options"]),o.optionsStore.options.image[i.activeTab.slug].stripPunctuation?(r(),g("div",St,[l("div",null,[l("strong",null,c(t.strings.charactersToKeep),1),n(w,{class:"characters-to-keep"},{default:s(()=>[(r(!0),g(A,null,x(m.filteredCharactersToKeep,(a,k)=>(r(),h(P,{class:"characters-grid",key:k,xl:"3",md:"4",sm:"6"},{default:s(()=>[a.disabled?(r(),h(C,{key:0},{tooltip:s(()=>[f(c(m.charactersToKeepTooltipText(a.value)),1)]),default:s(()=>[n(T,{size:"medium",modelValue:o.optionsStore.options.image[i.activeTab.slug].charactersToKeep[a.value],"onUpdate:modelValue":y=>o.optionsStore.options.image[i.activeTab.slug].charactersToKeep[a.value]=y,disabled:a.disabled},{default:s(()=>[f(c(a.label),1)]),_:2},1032,["modelValue","onUpdate:modelValue","disabled"])]),_:2},1024)):_("",!0),a.disabled?_("",!0):(r(),h(T,{key:1,size:"medium",modelValue:o.optionsStore.options.image[i.activeTab.slug].charactersToKeep[a.value],"onUpdate:modelValue":y=>o.optionsStore.options.image[i.activeTab.slug].charactersToKeep[a.value]=y,disabled:a.disabled},{default:s(()=>[f(c(a.label),1)]),_:2},1032,["modelValue","onUpdate:modelValue","disabled"]))]),_:2},1024))),128))]),_:1})]),!m.isFilenameTab&&m.filteredCharactersToConvert.length?(r(),g("div",yt,[l("strong",null,c(t.strings.charactersToConvert),1),n(w,{class:"characters-to-convert"},{default:s(()=>[(r(!0),g(A,null,x(m.filteredCharactersToConvert,(a,k)=>(r(),h(P,{class:"characters-grid",key:k,xl:"3",md:"4",sm:"6"},{default:s(()=>[a.disabled?(r(),h(C,{key:0},{tooltip:s(()=>[f(c(m.charactersToConvertTooltipText(a.value)),1)]),default:s(()=>[n(T,{size:"medium",modelValue:o.optionsStore.options.image[i.activeTab.slug].charactersToConvert[a.value],"onUpdate:modelValue":y=>o.optionsStore.options.image[i.activeTab.slug].charactersToConvert[a.value]=y,disabled:a.disabled},{default:s(()=>[f(c(a.label),1)]),_:2},1032,["modelValue","onUpdate:modelValue","disabled"])]),_:2},1024)):_("",!0),a.disabled?_("",!0):(r(),h(T,{key:1,size:"medium",modelValue:o.optionsStore.options.image[i.activeTab.slug].charactersToConvert[a.value],"onUpdate:modelValue":y=>o.optionsStore.options.image[i.activeTab.slug].charactersToConvert[a.value]=y,disabled:a.disabled},{default:s(()=>[f(c(a.label),1)]),_:2},1032,["modelValue","onUpdate:modelValue","disabled"]))]),_:2},1024))),128))]),_:1})])):_("",!0)])):_("",!0)]),_:1},8,["name"]),n(p,{name:t.strings.casing,align:""},{content:s(()=>[n(b,{modelValue:o.optionsStore.options.image[i.activeTab.slug].casing,"onUpdate:modelValue":u[3]||(u[3]=a=>o.optionsStore.options.image[i.activeTab.slug].casing=a),name:"casing",options:[{label:e.$constants.GLOBAL_STRINGS.disabled,value:"",activeClass:"dark"},{label:t.casings.lowerCase.label,value:"lower"},{label:t.casings.titleCase.label,value:"title"},{label:t.casings.sentenceCase.label,value:"sentence"}]},null,8,["modelValue","options"]),l("div",Ct,[l("span",null,c(t.strings.casingDescription),1),Pt,l("ul",wt,[(r(!0),g(A,null,x(t.casings,(a,k)=>(r(),g("li",{key:k},[l("span",null,c(a.label),1),l("span",null,c(a.description),1)]))),128))])])]),_:1},8,["name"]),m.isFilenameTab?(r(),h(p,{key:2,name:t.strings.wordsToStrip,align:""},{content:s(()=>[n(S,{minHeight:200,modelValue:o.optionsStore.options.image[i.activeTab.slug].wordsToStrip,"onUpdate:modelValue":u[4]||(u[4]=a=>o.optionsStore.options.image[i.activeTab.slug].wordsToStrip=a)},null,8,["modelValue"]),l("div",kt,c(t.strings.wordsToStripDescription),1)]),_:1},8,["name"])):_("",!0),["title","altTag"].includes(i.activeTab.slug)?(r(),g("div",At,[n(p,{name:t.strings.excludePostsPages,class:"aioseo-exclude-pages-posts",align:""},{content:s(()=>[n(v,{options:o.optionsStore.options.image[i.activeTab.slug].advancedSettings,type:"posts"},null,8,["options"])]),_:1},8,["name"]),n(p,{name:t.strings.excludeTerms,class:"aioseo-exclude-terms",align:""},{content:s(()=>[n(v,{options:o.optionsStore.options.image[i.activeTab.slug].advancedSettings,type:"terms"},null,8,["options"]),l("div",xt,c(t.strings.excludeTermsDescription),1)]),_:1},8,["name"])])):_("",!0)])}const Ut=L(bt,[["render",Lt]]);const Bt={components:{Blur:K,RequiredPlans:ot,Cta:at},data(){return{strings:{titleAttributeFormat:this.$t.__("Title Attribute Format",this.$td),ctaDescription:this.$t.__("The Image SEO module is a premium feature that enables you to globally control the title, alt tag, caption, description and filename of the images on your site.",this.$td),ctaButtonText:this.$t.__("Upgrade to Pro and Unlock Image SEO",this.$td),ctaHeader:this.$t.sprintf(this.$t.__("Image SEO is only available for licensed %1$s %2$s users.",this.$td),"AIOSEO","Pro")},features:[this.$t.__("Autogenerate image attributes",this.$td),this.$t.__("Clean uploaded image filenames",this.$td),this.$t.__("Strip punctuation from image attributes",this.$td),this.$t.__("Convert casing of image attributes",this.$td)]}}},Vt={class:"aioseo-sa-image-seo"};function Dt(e,u,i,o,t,m){const b=d("blur"),p=d("required-plans"),$=d("cta");return r(),g("div",Vt,[n(b),n($,{"cta-link":e.$links.getPricingUrl("image-seo","image-seo-upsell"),"button-text":t.strings.ctaButtonText,"learn-more-link":e.$links.getUpsellUrl("image-seo",null,"home"),"feature-list":t.features},{"header-text":s(()=>[f(c(t.strings.ctaHeader),1)]),description:s(()=>[n(p,{addon:"aioseo-image-seo"}),f(" "+c(t.strings.ctaDescription),1)]),_:1},8,["cta-link","button-text","learn-more-link","feature-list"])])}const Ot=L(Bt,[["render",Dt],["__scopeId","data-v-1f4e62b0"]]);const It={setup(){return{optionsStore:V(),rootStore:F(),settingsStore:M()}},mixins:[D],components:{Advanced:q,BaseRadioToggle:U,CoreCard:J,CoreMainTabs:Q,CoreProBadge:X,CoreSettingsRow:B,Cta:gt,CustomFields:Z,ImageSeo:Ut,Lite:Ot,Schema:tt,TitleDescription:j},data(){return{imageSeoKey:0,addonSlug:"aioseo-image-seo",internalDebounce:!1,imageSeoActiveTab:{slug:"title",name:this.$t.__("Title",this.$td),pro:!0},strings:{redirectAttachmentUrls:this.$t.__("Redirect Attachment URLs",this.$td),attachment:this.$t.__("Attachment",this.$td),attachmentParent:this.$t.__("Attachment Parent",this.$td),attachmentUrlsDescription:this.$t.__("We recommended redirecting attachment URLs back to the attachment since the default WordPress attachment pages have little SEO value.",this.$td),imageSeo:this.$t.__("Image SEO",this.$td),advancedSettings:this.$t.__("Advanced Settings",this.$td)},tabs:{attachments:[{slug:"title-description",name:this.$t.__("Title & Description",this.$td),access:"aioseo_search_appearance_settings",pro:!1},{slug:"Schema",name:this.$t.__("Schema Markup",this.$td),access:"aioseo_search_appearance_settings",pro:!0},{slug:"advanced",name:this.$t.__("Advanced",this.$td),access:"aioseo_search_appearance_settings",pro:!1}],imageSeo:[{slug:"title",name:this.$t.__("Title",this.$td),pro:!0},{slug:"altTag",name:this.$t.__("Alt Tag",this.$td),pro:!0},{slug:"caption",name:this.$t.__("Caption",this.$td),pro:!0},{slug:"description",name:this.$t.__("Description",this.$td),pro:!0},{slug:"filename",name:this.$t.__("Filename",this.$td),pro:!0}]}}},computed:{postType(){return this.rootStore.aioseo.postData.postTypes.filter(e=>e.name==="attachment")[0]}},methods:{processChangeTab(e,u){this.internalDebounce||(this.internalDebounce=!0,this.settingsStore.changeTab({slug:`${e}SA`,value:u}),setTimeout(()=>{this.internalDebounce=!1},50))},setImageSeoActiveTab(e){this.imageSeoActiveTab=this.tabs.imageSeo.find(u=>u.slug===e),this.imageSeoKey++}}},Gt={class:"aioseo-search-appearance-content-types"},Et={class:"aioseo-description"};function Rt(e,u,i,o,t,m){const b=d("base-radio-toggle"),p=d("core-settings-row"),$=d("core-main-tabs"),T=d("core-card"),C=d("core-pro-badge"),P=d("image-seo"),w=d("cta"),S=d("lite");return r(),g("div",Gt,[n(T,{slug:`${m.postType.name}SA`},H({header:s(()=>[l("div",{class:z(["icon dashicons",`${m.postType.icon||"dashicons-admin-post"}`])},null,2),l("div",null,c(m.postType.label),1)]),"before-tabs":s(()=>[n(p,{name:t.strings.redirectAttachmentUrls,align:""},{content:s(()=>[n(b,{modelValue:o.optionsStore.dynamicOptions.searchAppearance.postTypes.attachment.redirectAttachmentUrls,"onUpdate:modelValue":u[0]||(u[0]=v=>o.optionsStore.dynamicOptions.searchAppearance.postTypes.attachment.redirectAttachmentUrls=v),name:"redirectAttachmentUrls",options:[{label:e.$constants.GLOBAL_STRINGS.disabled,value:"disabled",activeClass:"dark"},{label:t.strings.attachment,value:"attachment"},{label:t.strings.attachmentParent,value:"attachment_parent"}]},null,8,["modelValue","options"]),l("div",Et,c(t.strings.attachmentUrlsDescription),1)]),_:1},8,["name"])]),default:s(()=>[o.optionsStore.dynamicOptions.searchAppearance.postTypes.attachment.redirectAttachmentUrls==="disabled"?(r(),h(W,{key:0,name:"route-fade",mode:"out-in"},{default:s(()=>[(r(),h(O(o.settingsStore.settings.internalTabs[`${m.postType.name}SA`]),{object:m.postType,separator:o.optionsStore.options.searchAppearance.global.separator,options:o.optionsStore.dynamicOptions.searchAppearance.postTypes[m.postType.name],type:"postTypes"},null,8,["object","separator","options"]))]),_:1})):_("",!0)]),_:2},[o.optionsStore.dynamicOptions.searchAppearance.postTypes.attachment.redirectAttachmentUrls==="disabled"?{name:"tabs",fn:s(()=>[n($,{tabs:t.tabs.attachments,showSaveButton:!1,active:o.settingsStore.settings.internalTabs[`${m.postType.name}SA`],internal:"",onChanged:u[1]||(u[1]=v=>m.processChangeTab(m.postType.name,v))},null,8,["tabs","active"])]),key:"0"}:void 0]),1032,["slug"]),n(T,{slug:"imageSeo",noSlide:!e.shouldShowMain},{header:s(()=>[l("span",null,c(t.strings.imageSeo),1),n(C)]),tabs:s(()=>[n($,{tabs:t.tabs.imageSeo,showSaveButton:!1,active:t.imageSeoActiveTab.slug,internal:"",onChanged:u[2]||(u[2]=v=>m.setImageSeoActiveTab(v))},null,8,["tabs","active"])]),default:s(()=>[e.shouldShowMain?(r(),h(P,{activeTab:t.imageSeoActiveTab,key:t.imageSeoKey},null,8,["activeTab"])):_("",!0),e.shouldShowUpdate||e.shouldShowActivate?(r(),h(w,{key:1})):_("",!0),e.shouldShowLite?(r(),h(S,{key:2})):_("",!0)]),_:1},8,["noSlide"])])}const Ke=L(It,[["render",Rt]]);export{Ke as default};
