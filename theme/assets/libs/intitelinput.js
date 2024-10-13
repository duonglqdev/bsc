/*
 * International Telephone Input v24.6.0
 * https://github.com/jackocnr/intl-tel-input.git
 * Licensed under the MIT license
 */

// UMD
(function(factory) {
    if (typeof module === 'object' && module.exports) {
      module.exports = factory();
    } else {
      window.intlTelInput = factory();
    }
  }(() => {
  
  var factoryOutput=(()=>{var L=Object.defineProperty;var O=Object.getOwnPropertyDescriptor;var H=Object.getOwnPropertyNames;var R=Object.prototype.hasOwnProperty;var F=(a,t)=>{for(var e in t)L(a,e,{get:t[e],enumerable:!0})},U=(a,t,e,i)=>{if(t&&typeof t=="object"||typeof t=="function")for(let n of H(t))!R.call(a,n)&&n!==e&&L(a,n,{get:()=>t[n],enumerable:!(i=O(t,n))||i.enumerable});return a};var B=a=>U(L({},"__esModule",{value:!0}),a);var Y={};F(Y,{Iti:()=>w,default:()=>q});var D=[["af","93"],["ax","358",1,["18"]],["al","355"],["dz","213"],["as","1",5,["684"]],["ad","376"],["ao","244"],["ai","1",6,["264"]],["ag","1",7,["268"]],["ar","54"],["am","374"],["aw","297"],["ac","247"],["au","61",0],["at","43"],["az","994"],["bs","1",8,["242"]],["bh","973"],["bd","880"],["bb","1",9,["246"]],["by","375"],["be","32"],["bz","501"],["bj","229"],["bm","1",10,["441"]],["bt","975"],["bo","591"],["ba","387"],["bw","267"],["br","55"],["io","246"],["vg","1",11,["284"]],["bn","673"],["bg","359"],["bf","226"],["bi","257"],["kh","855"],["cm","237"],["ca","1",1,["204","226","236","249","250","263","289","306","343","354","365","367","368","382","387","403","416","418","428","431","437","438","450","584","468","474","506","514","519","548","579","581","584","587","604","613","639","647","672","683","705","709","742","753","778","780","782","807","819","825","867","873","879","902","905"]],["cv","238"],["bq","599",1,["3","4","7"]],["ky","1",12,["345"]],["cf","236"],["td","235"],["cl","56"],["cn","86"],["cx","61",2,["89164"]],["cc","61",1,["89162"]],["co","57"],["km","269"],["cg","242"],["cd","243"],["ck","682"],["cr","506"],["ci","225"],["hr","385"],["cu","53"],["cw","599",0],["cy","357"],["cz","420"],["dk","45"],["dj","253"],["dm","1",13,["767"]],["do","1",2,["809","829","849"]],["ec","593"],["eg","20"],["sv","503"],["gq","240"],["er","291"],["ee","372"],["sz","268"],["et","251"],["fk","500"],["fo","298"],["fj","679"],["fi","358",0],["fr","33"],["gf","594"],["pf","689"],["ga","241"],["gm","220"],["ge","995"],["de","49"],["gh","233"],["gi","350"],["gr","30"],["gl","299"],["gd","1",14,["473"]],["gp","590",0],["gu","1",15,["671"]],["gt","502"],["gg","44",1,["1481","7781","7839","7911"]],["gn","224"],["gw","245"],["gy","592"],["ht","509"],["hn","504"],["hk","852"],["hu","36"],["is","354"],["in","91"],["id","62"],["ir","98"],["iq","964"],["ie","353"],["im","44",2,["1624","74576","7524","7924","7624"]],["il","972"],["it","39",0],["jm","1",4,["876","658"]],["jp","81"],["je","44",3,["1534","7509","7700","7797","7829","7937"]],["jo","962"],["kz","7",1,["33","7"]],["ke","254"],["ki","686"],["xk","383"],["kw","965"],["kg","996"],["la","856"],["lv","371"],["lb","961"],["ls","266"],["lr","231"],["ly","218"],["li","423"],["lt","370"],["lu","352"],["mo","853"],["mg","261"],["mw","265"],["my","60"],["mv","960"],["ml","223"],["mt","356"],["mh","692"],["mq","596"],["mr","222"],["mu","230"],["yt","262",1,["269","639"]],["mx","52"],["fm","691"],["md","373"],["mc","377"],["mn","976"],["me","382"],["ms","1",16,["664"]],["ma","212",0],["mz","258"],["mm","95"],["na","264"],["nr","674"],["np","977"],["nl","31"],["nc","687"],["nz","64"],["ni","505"],["ne","227"],["ng","234"],["nu","683"],["nf","672"],["kp","850"],["mk","389"],["mp","1",17,["670"]],["no","47",0],["om","968"],["pk","92"],["pw","680"],["ps","970"],["pa","507"],["pg","675"],["py","595"],["pe","51"],["ph","63"],["pl","48"],["pt","351"],["pr","1",3,["787","939"]],["qa","974"],["re","262",0],["ro","40"],["ru","7",0],["rw","250"],["ws","685"],["sm","378"],["st","239"],["sa","966"],["sn","221"],["rs","381"],["sc","248"],["sl","232"],["sg","65"],["sx","1",21,["721"]],["sk","421"],["si","386"],["sb","677"],["so","252"],["za","27"],["kr","82"],["ss","211"],["es","34"],["lk","94"],["bl","590",1],["sh","290"],["kn","1",18,["869"]],["lc","1",19,["758"]],["mf","590",2],["pm","508"],["vc","1",20,["784"]],["sd","249"],["sr","597"],["sj","47",1,["79"]],["se","46"],["ch","41"],["sy","963"],["tw","886"],["tj","992"],["tz","255"],["th","66"],["tl","670"],["tg","228"],["tk","690"],["to","676"],["tt","1",22,["868"]],["tn","216"],["tr","90"],["tm","993"],["tc","1",23,["649"]],["tv","688"],["ug","256"],["ua","380"],["ae","971"],["gb","44",0],["us","1",0],["uy","598"],["vi","1",24,["340"]],["uz","998"],["vu","678"],["va","39",1,["06698"]],["ve","58"],["vn","84"],["wf","681"],["eh","212",1,["5288","5289"]],["ye","967"],["zm","260"],["zw","263"]],N=[];for(let a=0;a<D.length;a++){let t=D[a];N[a]={name:"",iso2:t[0],dialCode:t[1],priority:t[2]||0,areaCodes:t[3]||null,nodeById:{}}}var f=N;var j={ad:"Andorra",ae:"United Arab Emirates",af:"Afghanistan",ag:"Antigua & Barbuda",ai:"Anguilla",al:"Albania",am:"Armenia",ao:"Angola",ar:"Argentina",as:"American Samoa",at:"Austria",au:"Australia",aw:"Aruba",ax:"\xC5land Islands",az:"Azerbaijan",ba:"Bosnia & Herzegovina",bb:"Barbados",bd:"Bangladesh",be:"Belgium",bf:"Burkina Faso",bg:"Bulgaria",bh:"Bahrain",bi:"Burundi",bj:"Benin",bl:"St. Barth\xE9lemy",bm:"Bermuda",bn:"Brunei",bo:"Bolivia",bq:"Caribbean Netherlands",br:"Brazil",bs:"Bahamas",bt:"Bhutan",bw:"Botswana",by:"Belarus",bz:"Belize",ca:"Canada",cc:"Cocos (Keeling) Islands",cd:"Congo - Kinshasa",cf:"Central African Republic",cg:"Congo - Brazzaville",ch:"Switzerland",ci:"C\xF4te d\u2019Ivoire",ck:"Cook Islands",cl:"Chile",cm:"Cameroon",cn:"China",co:"Colombia",cr:"Costa Rica",cu:"Cuba",cv:"Cape Verde",cw:"Cura\xE7ao",cx:"Christmas Island",cy:"Cyprus",cz:"Czechia",de:"Germany",dj:"Djibouti",dk:"Denmark",dm:"Dominica",do:"Dominican Republic",dz:"Algeria",ec:"Ecuador",ee:"Estonia",eg:"Egypt",eh:"Western Sahara",er:"Eritrea",es:"Spain",et:"Ethiopia",fi:"Finland",fj:"Fiji",fk:"Falkland Islands",fm:"Micronesia",fo:"Faroe Islands",fr:"France",ga:"Gabon",gb:"United Kingdom",gd:"Grenada",ge:"Georgia",gf:"French Guiana",gg:"Guernsey",gh:"Ghana",gi:"Gibraltar",gl:"Greenland",gm:"Gambia",gn:"Guinea",gp:"Guadeloupe",gq:"Equatorial Guinea",gr:"Greece",gt:"Guatemala",gu:"Guam",gw:"Guinea-Bissau",gy:"Guyana",hk:"Hong Kong SAR China",hn:"Honduras",hr:"Croatia",ht:"Haiti",hu:"Hungary",id:"Indonesia",ie:"Ireland",il:"Israel",im:"Isle of Man",in:"India",io:"British Indian Ocean Territory",iq:"Iraq",ir:"Iran",is:"Iceland",it:"Italy",je:"Jersey",jm:"Jamaica",jo:"Jordan",jp:"Japan",ke:"Kenya",kg:"Kyrgyzstan",kh:"Cambodia",ki:"Kiribati",km:"Comoros",kn:"St. Kitts & Nevis",kp:"North Korea",kr:"South Korea",kw:"Kuwait",ky:"Cayman Islands",kz:"Kazakhstan",la:"Laos",lb:"Lebanon",lc:"St. Lucia",li:"Liechtenstein",lk:"Sri Lanka",lr:"Liberia",ls:"Lesotho",lt:"Lithuania",lu:"Luxembourg",lv:"Latvia",ly:"Libya",ma:"Morocco",mc:"Monaco",md:"Moldova",me:"Montenegro",mf:"St. Martin",mg:"Madagascar",mh:"Marshall Islands",mk:"North Macedonia",ml:"Mali",mm:"Myanmar (Burma)",mn:"Mongolia",mo:"Macao SAR China",mp:"Northern Mariana Islands",mq:"Martinique",mr:"Mauritania",ms:"Montserrat",mt:"Malta",mu:"Mauritius",mv:"Maldives",mw:"Malawi",mx:"Mexico",my:"Malaysia",mz:"Mozambique",na:"Namibia",nc:"New Caledonia",ne:"Niger",nf:"Norfolk Island",ng:"Nigeria",ni:"Nicaragua",nl:"Netherlands",no:"Norway",np:"Nepal",nr:"Nauru",nu:"Niue",nz:"New Zealand",om:"Oman",pa:"Panama",pe:"Peru",pf:"French Polynesia",pg:"Papua New Guinea",ph:"Philippines",pk:"Pakistan",pl:"Poland",pm:"St. Pierre & Miquelon",pr:"Puerto Rico",ps:"Palestinian Territories",pt:"Portugal",pw:"Palau",py:"Paraguay",qa:"Qatar",re:"R\xE9union",ro:"Romania",rs:"Serbia",ru:"Russia",rw:"Rwanda",sa:"Saudi Arabia",sb:"Solomon Islands",sc:"Seychelles",sd:"Sudan",se:"Sweden",sg:"Singapore",sh:"St. Helena",si:"Slovenia",sj:"Svalbard & Jan Mayen",sk:"Slovakia",sl:"Sierra Leone",sm:"San Marino",sn:"Senegal",so:"Somalia",sr:"Suriname",ss:"South Sudan",st:"S\xE3o Tom\xE9 & Pr\xEDncipe",sv:"El Salvador",sx:"Sint Maarten",sy:"Syria",sz:"Eswatini",tc:"Turks & Caicos Islands",td:"Chad",tg:"Togo",th:"Thailand",tj:"Tajikistan",tk:"Tokelau",tl:"Timor-Leste",tm:"Turkmenistan",tn:"Tunisia",to:"Tonga",tr:"Turkey",tt:"Trinidad & Tobago",tv:"Tuvalu",tw:"Taiwan",tz:"Tanzania",ua:"Ukraine",ug:"Uganda",us:"United States",uy:"Uruguay",uz:"Uzbekistan",va:"Vatican City",vc:"St. Vincent & Grenadines",ve:"Venezuela",vg:"British Virgin Islands",vi:"U.S. Virgin Islands",vn:"Vietnam",vu:"Vanuatu",wf:"Wallis & Futuna",ws:"Samoa",ye:"Yemen",yt:"Mayotte",za:"South Africa",zm:"Zambia",zw:"Zimbabwe"},A=j;var z={selectedCountryAriaLabel:"Selected country",noCountrySelected:"No country selected",countryListAriaLabel:"List of countries",searchPlaceholder:"Search",zeroSearchResults:"No results found",oneSearchResult:"1 result found",multipleSearchResults:"${count} results found",ac:"Ascension Island",xk:"Kosovo"},S=z;var $={...A,...S},T=$;for(let a=0;a<f.length;a++)f[a].name=T[f[a].iso2];var K=0,P={allowDropdown:!0,autoPlaceholder:"polite",containerClass:"",countryOrder:null,countrySearch:!0,customPlaceholder:null,dropdownContainer:null,excludeCountries:[],fixDropdownWidth:!0,formatAsYouType:!0,formatOnDisplay:!0,geoIpLookup:null,hiddenInput:null,i18n:{},initialCountry:"",loadUtilsOnInit:"",nationalMode:!0,onlyCountries:[],placeholderNumberType:"MOBILE",showFlags:!0,separateDialCode:!1,strictMode:!1,useFullscreenPopup:typeof navigator<"u"&&typeof window<"u"?/Android.+Mobile|webOS|iPhone|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)||window.innerWidth<=500:!1,utilsScript:"",validationNumberType:"MOBILE"},V=["800","822","833","844","855","866","877","880","881","882","883","884","885","886","887","888","889"],I=a=>a.replace(/\D/g,""),k=(a="")=>a.normalize("NFD").replace(/[\u0300-\u036f]/g,"").toLowerCase(),M=a=>{let t=I(a);if(t.charAt(0)==="1"){let e=t.substr(1,3);return V.indexOf(e)!==-1}return!1},W=(a,t,e,i)=>{if(e===0&&!i)return 0;let n=0;for(let s=0;s<t.length;s++){if(/[+0-9]/.test(t[s])&&n++,n===a&&!i)return s+1;if(i&&n===a+1)return s}return t.length},c=(a,t,e)=>{let i=document.createElement(a);return t&&Object.entries(t).forEach(([n,s])=>i.setAttribute(n,s)),e&&e.appendChild(i),i},b=(a,...t)=>{let{instances:e}=r;Object.values(e).forEach(i=>i[a](...t))},w=class{constructor(t,e={}){this.id=K++,this.a=t,this.c=null,this.d=Object.assign({},P,e),this.e=!!t.getAttribute("placeholder")}_init(){this.d.useFullscreenPopup&&(this.d.fixDropdownWidth=!1),this.d.onlyCountries.length===1&&(this.d.initialCountry=this.d.onlyCountries[0]),this.d.separateDialCode&&(this.d.nationalMode=!1),this.d.allowDropdown&&!this.d.showFlags&&!this.d.separateDialCode&&(this.d.nationalMode=!1),this.d.useFullscreenPopup&&!this.d.dropdownContainer&&(this.d.dropdownContainer=document.body),this.isAndroid=typeof navigator<"u"?/Android/i.test(navigator.userAgent):!1,this.isRTL=!!this.a.closest("[dir=rtl]");let t=this.d.allowDropdown||this.d.separateDialCode;this.showSelectedCountryOnLeft=this.isRTL?!t:t,this.d.separateDialCode&&(this.isRTL?this.originalPaddingRight=this.a.style.paddingRight:this.originalPaddingLeft=this.a.style.paddingLeft),this.d.i18n={...T,...this.d.i18n};let e=new Promise((n,s)=>{this.h=n,this.i=s}),i=new Promise((n,s)=>{this.i0=n,this.i1=s});this.promise=Promise.all([e,i]),this.s={},this._b(),this._f(),this._h(),this._i(),this._i3()}_b(){this._d(),this._d2(),this._d0(),this._sortCountries()}_sortCountries(){this.d.countryOrder&&(this.d.countryOrder=this.d.countryOrder.map(t=>t.toLowerCase())),this.p.sort((t,e)=>{let{countryOrder:i}=this.d;if(i){let n=i.indexOf(t.iso2),s=i.indexOf(e.iso2),o=n>-1,u=s>-1;if(o||u)return o&&u?n-s:o?-1:1}return t.name.localeCompare(e.name)})}_c(t,e,i){e.length>this.dialCodeMaxLen&&(this.dialCodeMaxLen=e.length),this.q.hasOwnProperty(e)||(this.q[e]=[]);for(let s=0;s<this.q[e].length;s++)if(this.q[e][s]===t)return;let n=i!==void 0?i:this.q[e].length;this.q[e][n]=t}_d(){let{onlyCountries:t,excludeCountries:e}=this.d;if(t.length){let i=t.map(n=>n.toLowerCase());this.p=f.filter(n=>i.indexOf(n.iso2)>-1)}else if(e.length){let i=e.map(n=>n.toLowerCase());this.p=f.filter(n=>i.indexOf(n.iso2)===-1)}else this.p=f}_d0(){for(let t=0;t<this.p.length;t++){let e=this.p[t].iso2.toLowerCase();this.d.i18n.hasOwnProperty(e)&&(this.p[t].name=this.d.i18n[e])}}_d2(){this.dialCodes={},this.dialCodeMaxLen=0,this.q={};for(let t=0;t<this.p.length;t++){let e=this.p[t];this.dialCodes[e.dialCode]||(this.dialCodes[e.dialCode]=!0),this._c(e.iso2,e.dialCode,e.priority)}for(let t=0;t<this.p.length;t++){let e=this.p[t];if(e.areaCodes){let i=this.q[e.dialCode][0];for(let n=0;n<e.areaCodes.length;n++){let s=e.areaCodes[n];for(let o=1;o<s.length;o++){let u=e.dialCode+s.substr(0,o);this._c(i,u),this._c(e.iso2,u)}this._c(e.iso2,e.dialCode+s)}}}}_f(){this.a.classList.add("iti__tel-input"),!this.a.hasAttribute("autocomplete")&&!(this.a.form&&this.a.form.hasAttribute("autocomplete"))&&this.a.setAttribute("autocomplete","off");let{allowDropdown:t,separateDialCode:e,showFlags:i,containerClass:n,hiddenInput:s,dropdownContainer:o,fixDropdownWidth:u,useFullscreenPopup:l,countrySearch:p,i18n:h}=this.d,d="iti";t&&(d+=" iti--allow-dropdown"),i&&(d+=" iti--show-flags"),n&&(d+=` ${n}`),l||(d+=" iti--inline-dropdown");let m=c("div",{class:d});if(this.a.parentNode?.insertBefore(m,this.a),t||i||e){this.k=c("div",{class:"iti__country-container"},m),this.showSelectedCountryOnLeft?this.k.style.left="0px":this.k.style.right="0px",t?(this.selectedCountry=c("button",{type:"button",class:"iti__selected-country","aria-expanded":"false","aria-label":this.d.i18n.selectedCountryAriaLabel,"aria-haspopup":"true","aria-controls":`iti-${this.id}__dropdown-content`,role:"combobox"},this.k),this.a.disabled&&this.selectedCountry.setAttribute("disabled","true")):this.selectedCountry=c("div",{class:"iti__selected-country"},this.k);let y=c("div",{class:"iti__selected-country-primary"},this.selectedCountry);if(this.l=c("div",{class:"iti__flag"},y),this.selectedCountryA11yText=c("span",{class:"iti__a11y-text"},this.l),t&&(this.u=c("div",{class:"iti__arrow","aria-hidden":"true"},y)),e&&(this.t=c("div",{class:"iti__selected-dial-code"},this.selectedCountry)),t){let g=u?"":"iti--flexible-dropdown-width";if(this.dropdownContent=c("div",{id:`iti-${this.id}__dropdown-content`,class:`iti__dropdown-content iti__hide ${g}`}),p&&(this.searchInput=c("input",{type:"text",class:"iti__search-input",placeholder:h.searchPlaceholder,role:"combobox","aria-expanded":"true","aria-label":h.searchPlaceholder,"aria-controls":`iti-${this.id}__country-listbox`,"aria-autocomplete":"list",autocomplete:"off"},this.dropdownContent),this.searchResultsA11yText=c("span",{class:"iti__a11y-text"},this.dropdownContent)),this.countryList=c("ul",{class:"iti__country-list",id:`iti-${this.id}__country-listbox`,role:"listbox","aria-label":h.countryListAriaLabel},this.dropdownContent),this._g(),p&&this._p4(),o){let C="iti iti--container";l?C+=" iti--fullscreen-popup":C+=" iti--inline-dropdown",this.dropdown=c("div",{class:C}),this.dropdown.appendChild(this.dropdownContent)}else this.k.appendChild(this.dropdownContent)}}if(m.appendChild(this.a),this._updateInputPadding(),s){let y=this.a.getAttribute("name")||"",g=s(y);g.phone&&(this.hiddenInput=c("input",{type:"hidden",name:g.phone}),m.appendChild(this.hiddenInput)),g.country&&(this.hiddenInputCountry=c("input",{type:"hidden",name:g.country}),m.appendChild(this.hiddenInputCountry))}}_g(){for(let t=0;t<this.p.length;t++){let e=this.p[t],i=t===0?"iti__highlight":"",n=c("li",{id:`iti-${this.id}__item-${e.iso2}`,class:`iti__country ${i}`,tabindex:"-1",role:"option","data-dial-code":e.dialCode,"data-country-code":e.iso2,"aria-selected":"false"},this.countryList);e.nodeById[this.id]=n;let s="";this.d.showFlags&&(s+=`<div class='iti__flag iti__${e.iso2}'></div>`),s+=`<span class='iti__country-name'>${e.name}</span>`,s+=`<span class='iti__dial-code'>+${e.dialCode}</span>`,n.insertAdjacentHTML("beforeend",s)}}_h(t=!1){let e=this.a.getAttribute("value"),i=this.a.value,s=e&&e.charAt(0)==="+"&&(!i||i.charAt(0)!=="+")?e:i,o=this._5(s),u=M(s),{initialCountry:l,geoIpLookup:p}=this.d,h=l==="auto"&&p;if(o&&!u)this._v(s);else if(!h||t){let d=l?l.toLowerCase():"";d&&this._y(d,!0)?this._z(d):o&&u?this._z("us"):this._z()}s&&this._u(s)}_i(){this._j(),this.d.allowDropdown&&this._i2(),(this.hiddenInput||this.hiddenInputCountry)&&this.a.form&&this._i0()}_i0(){this._a14=()=>{this.hiddenInput&&(this.hiddenInput.value=this.getNumber()),this.hiddenInputCountry&&(this.hiddenInputCountry.value=this.getSelectedCountryData().iso2||"")},this.a.form?.addEventListener("submit",this._a14)}_i2(){this._a9=e=>{this.dropdownContent.classList.contains("iti__hide")?this.a.focus():e.preventDefault()};let t=this.a.closest("label");t&&t.addEventListener("click",this._a9),this._a10=()=>{this.dropdownContent.classList.contains("iti__hide")&&!this.a.disabled&&!this.a.readOnly&&this._n()},this.selectedCountry.addEventListener("click",this._a10),this._a11=e=>{this.dropdownContent.classList.contains("iti__hide")&&["ArrowUp","ArrowDown"," ","Enter"].includes(e.key)&&(e.preventDefault(),e.stopPropagation(),this._n()),e.key==="Tab"&&this._2()},this.k.addEventListener("keydown",this._a11)}_i3(){let{loadUtilsOnInit:t,utilsScript:e,initialCountry:i,geoIpLookup:n}=this.d;!t&&e&&(console.warn("intl-tel-input: The `utilsScript` option is deprecated and will be removed in a future release! Please use the `loadUtilsOnInit` option instead."),t=e),t&&!r.utils?(this._handlePageLoad=()=>{window.removeEventListener("load",this._handlePageLoad),r.loadUtils(t)?.catch(()=>{})},r.documentReady()?this._handlePageLoad():window.addEventListener("load",this._handlePageLoad)):this.i0(),i==="auto"&&n&&!this.s.iso2?this._i4():this.h()}_i4(){r.autoCountry?this.handleAutoCountry():r.startedLoadingAutoCountry||(r.startedLoadingAutoCountry=!0,typeof this.d.geoIpLookup=="function"&&this.d.geoIpLookup((t="")=>{let e=t.toLowerCase();e&&this._y(e,!0)?(r.autoCountry=e,setTimeout(()=>b("handleAutoCountry"))):(this._h(!0),b("rejectAutoCountryPromise"))},()=>{this._h(!0),b("rejectAutoCountryPromise")}))}_nWithPlus(){this._n(),this.searchInput.value="+",this._p3("",!0)}_j(){let{strictMode:t,formatAsYouType:e,separateDialCode:i,formatOnDisplay:n,allowDropdown:s,countrySearch:o}=this.d,u=!1;/\p{L}/u.test(this.a.value)&&(u=!0),this._a12=l=>{if(this.isAndroid&&l?.data==="+"&&i&&s&&o){let m=this.a.selectionStart||0,y=this.a.value.substring(0,m-1),g=this.a.value.substring(m);this.a.value=y+g,this._nWithPlus();return}this._v(this.a.value)&&this._8();let p=l?.data&&/[^+0-9]/.test(l.data),h=l?.inputType==="insertFromPaste"&&this.a.value;p||h&&!t?u=!0:/[^+0-9]/.test(this.a.value)||(u=!1);let d=l?.detail&&l.detail.isSetNumber&&!n;if(e&&!u&&!d){let m=this.a.selectionStart||0,g=this.a.value.substring(0,m).replace(/[^+0-9]/g,"").length,C=l?.inputType==="deleteContentForward",v=this._9(),_=W(g,v,m,C);this.a.value=v,this.a.setSelectionRange(_,_)}},this.a.addEventListener("input",this._a12),(t||i)&&(this._handleKeydownEvent=l=>{if(l.key&&l.key.length===1&&!l.altKey&&!l.ctrlKey&&!l.metaKey){if(i&&s&&o&&l.key==="+"){l.preventDefault(),this._nWithPlus();return}if(t){let p=this.a.value,h=p.charAt(0)==="+",d=!h&&this.a.selectionStart===0&&l.key==="+",m=/^[0-9]$/.test(l.key),y=i?m:d||m,g=p.slice(0,this.a.selectionStart)+l.key+p.slice(this.a.selectionEnd),C=this._6(g),v=r.utils.getCoreNumber(C,this.s.iso2),_=this.maxCoreNumberLength&&v.length>this.maxCoreNumberLength,E=!1;if(h){let x=this.s.iso2;E=this._getCountryFromNumber(C)!==x}(!y||_&&!E&&!d)&&l.preventDefault()}}},this.a.addEventListener("keydown",this._handleKeydownEvent))}_j2(t){let e=parseInt(this.a.getAttribute("maxlength")||"",10);return e&&t.length>e?t.substr(0,e):t}_trigger(t,e={}){let i=new CustomEvent(t,{bubbles:!0,cancelable:!0,detail:e});this.a.dispatchEvent(i)}_n(){let{fixDropdownWidth:t,countrySearch:e}=this.d;if(t&&(this.dropdownContent.style.width=`${this.a.offsetWidth}px`),this.dropdownContent.classList.remove("iti__hide"),this.selectedCountry.setAttribute("aria-expanded","true"),this._o(),e){let i=this.countryList.firstElementChild;i&&(this._x(i,!1),this.countryList.scrollTop=0),this.searchInput.focus()}this._p(),this.u.classList.add("iti__arrow--up"),this._trigger("open:countrydropdown")}_o(){if(this.d.dropdownContainer&&this.d.dropdownContainer.appendChild(this.dropdown),!this.d.useFullscreenPopup){let t=this.a.getBoundingClientRect(),e=this.a.offsetHeight;this.d.dropdownContainer&&(this.dropdown.style.top=`${t.top+e}px`,this.dropdown.style.left=`${t.left}px`,this._a4=()=>this._2(),window.addEventListener("scroll",this._a4))}}_p(){this._a0=n=>{let s=n.target?.closest(".iti__country");s&&this._x(s,!1)},this.countryList.addEventListener("mouseover",this._a0),this._a1=n=>{let s=n.target?.closest(".iti__country");s&&this._1(s)},this.countryList.addEventListener("click",this._a1);let t=!0;this._a2=()=>{t||this._2(),t=!1},document.documentElement.addEventListener("click",this._a2);let e="",i=null;if(this._a3=n=>{["ArrowUp","ArrowDown","Enter","Escape"].includes(n.key)&&(n.preventDefault(),n.stopPropagation(),n.key==="ArrowUp"||n.key==="ArrowDown"?this._q(n.key):n.key==="Enter"?this._r():n.key==="Escape"&&this._2()),!this.d.countrySearch&&/^[a-zA-ZÀ-ÿа-яА-Я ]$/.test(n.key)&&(n.stopPropagation(),i&&clearTimeout(i),e+=n.key.toLowerCase(),this._searchForCountry(e),i=setTimeout(()=>{e=""},1e3))},document.addEventListener("keydown",this._a3),this.d.countrySearch){let n=()=>{let o=this.searchInput.value.trim();o?this._p3(o):this._p3("",!0)},s=null;this._a7=()=>{s&&clearTimeout(s),s=setTimeout(()=>{n(),s=null},100)},this.searchInput.addEventListener("input",this._a7),this.searchInput.addEventListener("click",o=>o.stopPropagation())}}_searchForCountry(t){for(let e=0;e<this.p.length;e++){let i=this.p[e];if(i.name.substr(0,t.length).toLowerCase()===t){let s=i.nodeById[this.id];this._x(s,!1),this._3(s);break}}}_p3(t,e=!1){let i=!0;this.countryList.innerHTML="";let n=k(t);for(let s=0;s<this.p.length;s++){let o=this.p[s],u=k(o.name),l=o.name.split(/[^a-zA-ZÀ-ÿа-яА-Я]/).map(h=>h[0]).join("").toLowerCase(),p=`+${o.dialCode}`;if(e||u.includes(n)||p.includes(n)||o.iso2.includes(n)||l.includes(n)){let h=o.nodeById[this.id];h&&this.countryList.appendChild(h),i&&(this._x(h,!1),i=!1)}}i&&this._x(null,!1),this.countryList.scrollTop=0,this._p4()}_p4(){let{i18n:t}=this.d,e=this.countryList.childElementCount,i;e===0?i=t.zeroSearchResults:e===1?i=t.oneSearchResult:i=t.multipleSearchResults.replace("${count}",e.toString()),this.searchResultsA11yText.textContent=i}_q(t){let e=t==="ArrowUp"?this.c?.previousElementSibling:this.c?.nextElementSibling;!e&&this.countryList.childElementCount>1&&(e=t==="ArrowUp"?this.countryList.lastElementChild:this.countryList.firstElementChild),e&&(this._3(e),this._x(e,!1))}_r(){this.c&&this._1(this.c)}_u(t){let e=t;if(this.d.formatOnDisplay&&r.utils&&this.s){let i=this.d.nationalMode||e.charAt(0)!=="+"&&!this.d.separateDialCode,{NATIONAL:n,INTERNATIONAL:s}=r.utils.numberFormat,o=i?n:s;e=r.utils.formatNumber(e,this.s.iso2,o)}e=this._7(e),this.a.value=e}_v(t){let e=this._getCountryFromNumber(t);return e!==null?this._z(e):!1}_getCountryFromNumber(t){let e=t.indexOf("+"),i=e?t.substring(e):t,n=this.s.dialCode;i&&n==="1"&&i.charAt(0)!=="+"&&(i.charAt(0)!=="1"&&(i=`1${i}`),i=`+${i}`),this.d.separateDialCode&&n&&i.charAt(0)!=="+"&&(i=`+${n}${i}`);let o=this._5(i,!0),u=I(i);if(o){let l=this.q[I(o)],p=l.indexOf(this.s.iso2)!==-1&&u.length<=o.length-1;if(!(n==="1"&&M(u))&&!p){for(let d=0;d<l.length;d++)if(l[d])return l[d]}}else{if(i.charAt(0)==="+"&&u.length)return"";if((!i||i==="+")&&!this.s.iso2)return this.j}return null}_x(t,e){let i=this.c;if(i&&(i.classList.remove("iti__highlight"),i.setAttribute("aria-selected","false")),this.c=t,this.c){this.c.classList.add("iti__highlight"),this.c.setAttribute("aria-selected","true");let n=this.c.getAttribute("id")||"";this.selectedCountry.setAttribute("aria-activedescendant",n),this.d.countrySearch&&this.searchInput.setAttribute("aria-activedescendant",n)}e&&this.c.focus()}_y(t,e){for(let i=0;i<this.p.length;i++)if(this.p[i].iso2===t)return this.p[i];if(e)return null;throw new Error(`No country data for '${t}'`)}_z(t){let{separateDialCode:e,showFlags:i,i18n:n}=this.d,s=this.s.iso2?this.s:{};if(this.s=t?this._y(t,!1)||{}:{},this.s.iso2&&(this.j=this.s.iso2),this.l){let o="",u="";t&&i?(o=`iti__flag iti__${t}`,u=`${this.s.name} +${this.s.dialCode}`):(o="iti__flag iti__globe",u=n.noCountrySelected),this.l.className=o,this.selectedCountryA11yText.textContent=u}if(this._z3(t,e),e){let o=this.s.dialCode?`+${this.s.dialCode}`:"";this.t.innerHTML=o,this._updateInputPadding()}return this._0(),this._updateMaxLength(),s.iso2!==t}_updateInputPadding(){if(this.selectedCountry){let e=(this.selectedCountry.offsetWidth||this._z2())+6;this.showSelectedCountryOnLeft?this.a.style.paddingLeft=`${e}px`:this.a.style.paddingRight=`${e}px`}}_updateMaxLength(){let{strictMode:t,placeholderNumberType:e,validationNumberType:i}=this.d,{iso2:n}=this.s;if(t&&r.utils)if(n){let s=r.utils.numberType[e],o=r.utils.getExampleNumber(n,!1,s,!0),u=o;for(;r.utils.isPossibleNumber(o,n,i);)u=o,o+="0";let l=r.utils.getCoreNumber(u,n);this.maxCoreNumberLength=l.length,n==="by"&&(this.maxCoreNumberLength=l.length+1)}else this.maxCoreNumberLength=null}_z3(t=null,e){if(!this.selectedCountry)return;let i;t&&!e?i=`${this.s.name}: +${this.s.dialCode}`:t?i=this.s.name:i="Unknown",this.selectedCountry.setAttribute("title",i)}_z2(){if(this.a.parentNode){let t=this.a.parentNode.cloneNode(!1);t.style.visibility="hidden",document.body.appendChild(t);let e=this.k.cloneNode();t.appendChild(e);let i=this.selectedCountry.cloneNode(!0);e.appendChild(i);let n=i.offsetWidth;return document.body.removeChild(t),n}return 0}_0(){let{autoPlaceholder:t,placeholderNumberType:e,nationalMode:i,customPlaceholder:n}=this.d,s=t==="aggressive"||!this.e&&t==="polite";if(r.utils&&s){let o=r.utils.numberType[e],u=this.s.iso2?r.utils.getExampleNumber(this.s.iso2,i,o):"";u=this._7(u),typeof n=="function"&&(u=n(u,this.s)),this.a.setAttribute("placeholder",u)}}_1(t){let e=this._z(t.getAttribute("data-country-code"));this._2(),this._4(t.getAttribute("data-dial-code")),this.a.focus(),e&&this._8()}_2(){this.dropdownContent.classList.add("iti__hide"),this.selectedCountry.setAttribute("aria-expanded","false"),this.selectedCountry.removeAttribute("aria-activedescendant"),this.c&&this.c.setAttribute("aria-selected","false"),this.d.countrySearch&&this.searchInput.removeAttribute("aria-activedescendant"),this.u.classList.remove("iti__arrow--up"),document.removeEventListener("keydown",this._a3),this.d.countrySearch&&this.searchInput.removeEventListener("input",this._a7),document.documentElement.removeEventListener("click",this._a2),this.countryList.removeEventListener("mouseover",this._a0),this.countryList.removeEventListener("click",this._a1),this.d.dropdownContainer&&(this.d.useFullscreenPopup||window.removeEventListener("scroll",this._a4),this.dropdown.parentNode&&this.dropdown.parentNode.removeChild(this.dropdown)),this._handlePageLoad&&window.removeEventListener("load",this._handlePageLoad),this._trigger("close:countrydropdown")}_3(t){let e=this.countryList,i=document.documentElement.scrollTop,n=e.offsetHeight,s=e.getBoundingClientRect().top+i,o=s+n,u=t.offsetHeight,l=t.getBoundingClientRect().top+i,p=l+u,h=l-s+e.scrollTop;if(l<s)e.scrollTop=h;else if(p>o){let d=n-u;e.scrollTop=h-d}}_4(t){let e=this.a.value,i=`+${t}`,n;if(e.charAt(0)==="+"){let s=this._5(e);s?n=e.replace(s,i):n=i,this.a.value=n}}_5(t,e){let i="";if(t.charAt(0)==="+"){let n="";for(let s=0;s<t.length;s++){let o=t.charAt(s);if(!isNaN(parseInt(o,10))){if(n+=o,e)this.q[n]&&(i=t.substr(0,s+1));else if(this.dialCodes[n]){i=t.substr(0,s+1);break}if(n.length===this.dialCodeMaxLen)break}}}return i}_6(t){let e=t||this.a.value.trim(),{dialCode:i}=this.s,n,s=I(e);return this.d.separateDialCode&&e.charAt(0)!=="+"&&i&&s?n=`+${i}`:n="",n+e}_7(t){let e=t;if(this.d.separateDialCode){let i=this._5(e);if(i){i=`+${this.s.dialCode}`;let n=e[i.length]===" "||e[i.length]==="-"?i.length+1:i.length;e=e.substr(n)}}return this._j2(e)}_8(){this._trigger("countrychange")}_9(){let t=this._6(),e=r.utils?r.utils.formatNumberAsYouType(t,this.s.iso2):t,{dialCode:i}=this.s;return this.d.separateDialCode&&this.a.value.charAt(0)!=="+"&&e.includes(`+${i}`)?(e.split(`+${i}`)[1]||"").trim():e}handleAutoCountry(){this.d.initialCountry==="auto"&&r.autoCountry&&(this.j=r.autoCountry,this.s.iso2||this.l.classList.contains("iti__globe")||this.setCountry(this.j),this.h())}handleUtils(){r.utils&&(this.a.value&&this._u(this.a.value),this.s.iso2&&(this._0(),this._updateMaxLength())),this.i0()}destroy(){let{allowDropdown:t,separateDialCode:e}=this.d;if(t){this._2(),this.selectedCountry.removeEventListener("click",this._a10),this.k.removeEventListener("keydown",this._a11);let s=this.a.closest("label");s&&s.removeEventListener("click",this._a9)}let{form:i}=this.a;this._a14&&i&&i.removeEventListener("submit",this._a14),this.a.removeEventListener("input",this._a12),this._handleKeydownEvent&&this.a.removeEventListener("keydown",this._handleKeydownEvent),this.a.removeAttribute("data-intl-tel-input-id"),e&&(this.isRTL?this.a.style.paddingRight=this.originalPaddingRight:this.a.style.paddingLeft=this.originalPaddingLeft);let n=this.a.parentNode;n?.parentNode?.insertBefore(this.a,n),n?.parentNode?.removeChild(n),delete r.instances[this.id]}getExtension(){return r.utils?r.utils.getExtension(this._6(),this.s.iso2):""}getNumber(t){if(r.utils){let{iso2:e}=this.s;return r.utils.formatNumber(this._6(),e,t)}return""}getNumberType(){return r.utils?r.utils.getNumberType(this._6(),this.s.iso2):-99}getSelectedCountryData(){return this.s}getValidationError(){if(r.utils){let{iso2:t}=this.s;return r.utils.getValidationError(this._6(),t)}return-99}isValidNumber(){if(!this.s.iso2)return!1;let t=this._6(),e=t.search(/\p{L}/u);if(e>-1){let i=t.substring(0,e),n=this._utilsIsPossibleNumber(i),s=this._utilsIsPossibleNumber(t);return n&&s}return this._utilsIsPossibleNumber(t)}_utilsIsPossibleNumber(t){return r.utils?r.utils.isPossibleNumber(t,this.s.iso2,this.d.validationNumberType):null}isValidNumberPrecise(){if(!this.s.iso2)return!1;let t=this._6(),e=t.search(/\p{L}/u);if(e>-1){let i=t.substring(0,e),n=this._utilsIsValidNumber(i),s=this._utilsIsValidNumber(t);return n&&s}return this._utilsIsValidNumber(t)}_utilsIsValidNumber(t){return r.utils?r.utils.isValidNumber(t,this.s.iso2):null}setCountry(t){let e=t?.toLowerCase(),i=this.s.iso2;(t&&e!==i||!t&&i)&&(this._z(e),this._4(this.s.dialCode),this._8())}setNumber(t){let e=this._v(t);this._u(t),e&&this._8(),this._trigger("input",{isSetNumber:!0})}setPlaceholderNumberType(t){this.d.placeholderNumberType=t,this._0()}setDisabled(t){this.a.disabled=t,t?this.selectedCountry.setAttribute("disabled","true"):this.selectedCountry.removeAttribute("disabled")}},G=a=>{if(!r.utils&&!r.startedLoadingUtilsScript){let t;if(typeof a=="string")t=import(/* webpackIgnore: true */ a);else if(typeof a=="function")try{if(t=a(),!(t instanceof Promise))throw new TypeError(`The function passed to loadUtils must return a promise for the utilities module, not ${typeof t}`)}catch(e){return Promise.reject(e)}else return Promise.reject(new TypeError(`The argument passed to loadUtils must be a URL string or a function that returns a promise for the utilities module, not ${typeof a}`));return r.startedLoadingUtilsScript=!0,t.then(e=>{let i=e?.default;if(!i||typeof i!="object")throw typeof a=="string"?new TypeError(`The module loaded from ${a} did not set utils as its default export.`):new TypeError("The loader function passed to loadUtils did not resolve to a module object with utils as its default export.");return r.utils=i,b("handleUtils"),!0}).catch(e=>{throw b("rejectUtilsScriptPromise",e),e})}return null},r=Object.assign((a,t)=>{let e=new w(a,t);return e._init(),a.setAttribute("data-intl-tel-input-id",e.id.toString()),r.instances[e.id]=e,e},{defaults:P,documentReady:()=>document.readyState==="complete",getCountryData:()=>f,getInstance:a=>{let t=a.getAttribute("data-intl-tel-input-id");return t?r.instances[t]:null},instances:{},loadUtils:G,startedLoadingUtilsScript:!1,startedLoadingAutoCountry:!1,version:"24.6.0"}),q=r;return B(Y);})();
  
  // UMD
    return factoryOutput.default;
  }));