(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["chunk-b5197f6e"],{"1af6":function(e,t,a){var n=a("63b6");n(n.S,"Array",{isArray:a("9003")})},"20fd":function(e,t,a){"use strict";var n=a("d9f6"),r=a("aebd");e.exports=function(e,t,a){t in e?n.f(e,t,r(0,a)):e[t]=a}},"21d0":function(e,t,a){"use strict";var n=a("4b51"),r=a.n(n);r.a},"469f":function(e,t,a){a("6c1c"),a("1654"),e.exports=a("7d7b")},"4b51":function(e,t,a){},"549b":function(e,t,a){"use strict";var n=a("d864"),r=a("63b6"),i=a("241e"),s=a("b0dc"),o=a("3702"),l=a("b447"),c=a("20fd"),u=a("7cd6");r(r.S+r.F*!a("4ee1")(function(e){Array.from(e)}),"Array",{from:function(e){var t,a,r,d,p=i(e),f="function"==typeof this?this:Array,h=arguments.length,m=h>1?arguments[1]:void 0,v=void 0!==m,b=0,x=u(p);if(v&&(m=n(m,h>2?arguments[2]:void 0,2)),void 0==x||f==Array&&o(x))for(t=l(p.length),a=new f(t);t>b;b++)c(a,b,v?m(p[b],b):p[b]);else for(d=x.call(p),a=new f;!(r=d.next()).done;b++)c(a,b,v?s(d,m,[r.value,b],!0):r.value);return a.length=b,a}})},"54a1":function(e,t,a){a("6c1c"),a("1654"),e.exports=a("95d5")},"5d73":function(e,t,a){e.exports=a("469f")},"774e":function(e,t,a){e.exports=a("d2d5")},"7d7b":function(e,t,a){var n=a("e4ae"),r=a("7cd6");e.exports=a("584a").getIterator=function(e){var t=r(e);if("function"!=typeof t)throw TypeError(e+" is not iterable!");return n(t.call(e))}},"7f7f":function(e,t,a){var n=a("86cc").f,r=Function.prototype,i=/^\s*function ([^ (]*)/,s="name";s in r||a("9e1e")&&n(r,s,{configurable:!0,get:function(){try{return(""+this).match(i)[1]}catch(e){return""}}})},"95d5":function(e,t,a){var n=a("40c3"),r=a("5168")("iterator"),i=a("481b");e.exports=a("584a").isIterable=function(e){var t=Object(e);return void 0!==t[r]||"@@iterator"in t||i.hasOwnProperty(n(t))}},a745:function(e,t,a){e.exports=a("f410")},b364:function(e,t,a){},c321:function(e,t,a){},c8bb:function(e,t,a){e.exports=a("54a1")},d2d5:function(e,t,a){a("1654"),a("549b"),e.exports=a("584a").Array.from},eaf7:function(e,t,a){"use strict";var n=a("b364"),r=a.n(n);r.a},ed5f:function(e,t,a){"use strict";a.r(t);var n=function(){var e=this,t=e.$createElement,a=e._self._c||t;return a("v-content",{staticClass:"pa-0"},[a("v-container",{attrs:{fluid:"fluid"}},[a("v-expansion-panel",{staticClass:"elevation-0 panel-suuma",attrs:{expand:""},model:{value:e.panels,callback:function(t){e.panels=t},expression:"panels"}},[a("v-expansion-panel-content",{scopedSlots:e._u([{key:"header",fn:function(){return[a("div",[a("p",{staticClass:"header-expansion"},[a("i",{staticClass:"fas fa-user"}),e._v("\n              Información básica\n            ")])])]},proxy:!0}])},[a("basic-info",{attrs:{personal:e.profile}})],1),a("v-expansion-panel-content",{scopedSlots:e._u([{key:"header",fn:function(){return[a("div",[a("p",{staticClass:"header-expansion"},[a("i",{staticClass:"fas fa-book-medical"}),e._v("\n              Contacto de emergencia\n            ")])])]},proxy:!0}])},[a("emergency-contact",{attrs:{ec:e.ec}})],1),a("v-expansion-panel-content",{scopedSlots:e._u([{key:"header",fn:function(){return[a("div",[a("p",{staticClass:"header-expansion"},[a("i",{staticClass:"fas fa-wrench"}),e._v("\n              Dirección\n            ")])])]},proxy:!0}])},[a("direction-info",{attrs:{direction:e.direction}})],1),a("v-expansion-panel-content",{scopedSlots:e._u([{key:"header",fn:function(){return[a("div",[a("p",{staticClass:"header-expansion"},[a("i",{staticClass:"fas fa-building"}),e._v("\n              Facturación\n            ")])])]},proxy:!0}])},[a("fiscal-info",{attrs:{fiscal:e.fiscal}})],1),a("v-expansion-panel-content",{scopedSlots:e._u([{key:"header",fn:function(){return[a("div",[a("p",{staticClass:"header-expansion"},[a("i",{staticClass:"fas fa-info-circle"}),e._v("\n              Extras\n            ")])])]},proxy:!0}])},[a("extras-info",{attrs:{extras:e.extras}})],1),a("v-expansion-panel-content",{scopedSlots:e._u([{key:"header",fn:function(){return[a("div",[a("p",{staticClass:"header-expansion"},[a("i",{staticClass:"fas fa-wrench"}),e._v("\n              Avanzado\n            ")])])]},proxy:!0}])},[a("advanced-info")],1)],1)],1)],1)},r=[],i=a("e814"),s=a.n(i),o=(a("96cf"),a("3b8d")),l=(a("cadf"),a("551c"),a("f751"),a("097d"),function(){var e=this,t=e.$createElement,n=e._self._c||t;return n("div",[n("v-divider"),n("v-card",{staticClass:"mb-4 elevation-0"},[n("v-card-text",[n("v-layout",{attrs:{row:"","d-flex":"",wrap:"","pa-2":""}},[n("v-flex",{attrs:{xs12:"",md4:"","pa-2":""}},[n("v-list",{attrs:{"two-line":"",subheader:""}},[n("v-subheader",[e._v("General")]),n("v-list-tile",{attrs:{avatar:""}},[n("v-list-tile-avatar",[""===e.photo?n("img",{staticClass:"profilePhoto",attrs:{src:a("a163"),alt:"Foto de Perfil"}}):e._e(),n("img",{staticClass:"profilePhoto",attrs:{src:e.photo,alt:"Logo"}})]),n("v-list-tile-content",{on:{click:function(t){e.photoChanger=!0}}},[n("v-list-tile-title",[e._v("Foto de Perfil")]),n("v-list-tile-sub-title",[e._v("Click para cambiar")])],1)],1)],1)],1),n("v-flex",{attrs:{xs12:"",md4:""}},[n("v-subheader",[e._v("Personal")]),n("v-flex",{staticClass:"pa-2"},[n("v-form",{ref:"basic",attrs:{"lazy-validation":""},model:{value:e.forms.basic,callback:function(t){e.$set(e.forms,"basic",t)},expression:"forms.basic"}},[n("v-text-field",{attrs:{required:"",clearable:"",label:"Nombre(s)",rules:e.rules.name},model:{value:e.personal.name,callback:function(t){e.$set(e.personal,"name",t)},expression:"personal.name"}}),n("v-flex",{attrs:{"d-flex":""}},[n("v-text-field",{attrs:{xs6:"",required:"",clearable:"",label:"Apellido Paterno",rules:e.rules.appat},model:{value:e.personal.appat,callback:function(t){e.$set(e.personal,"appat",t)},expression:"personal.appat"}}),n("v-text-field",{attrs:{xs6:"",required:"",clearable:"",label:"Apellido Materno",rules:e.rules.apmat},model:{value:e.personal.apmat,callback:function(t){e.$set(e.personal,"apmat",t)},expression:"personal.apmat"}})],1),n("v-text-field",{attrs:{clearable:"",label:"CURP",rules:e.rules.CURP},model:{value:e.personal.CURP,callback:function(t){e.$set(e.personal,"CURP",t)},expression:"personal.CURP"}}),n("v-menu",{attrs:{"close-on-content-click":!1,"nudge-right":40,lazy:"",transition:"scale-transition","offset-y":"","full-width":"","min-width":"290px"},scopedSlots:e._u([{key:"activator",fn:function(t){var a=t.on;return[n("v-text-field",e._g({attrs:{required:"",label:"Fecha de nacimiento","prepend-icon":"event",hint:"DD/MM/AAAA",rules:e.rules.date},model:{value:e.personal.date_birth,callback:function(t){e.$set(e.personal,"date_birth",t)},expression:"personal.date_birth"}},a))]}}]),model:{value:e.datePicker,callback:function(t){e.datePicker=t},expression:"datePicker"}},[n("v-date-picker",{on:{input:function(t){e.datePicker=!1}},model:{value:e.dummyDate,callback:function(t){e.dummyDate=t},expression:"dummyDate"}})],1),n("v-select",{attrs:{required:"",items:e.blood_types,label:"Tipo de sangre"},model:{value:e.personal.blood_type,callback:function(t){e.$set(e.personal,"blood_type",t)},expression:"personal.blood_type"}})],1)],1)],1),n("v-flex",{attrs:{xs12:"",md4:""}},[n("v-form",{ref:"contact",attrs:{"lazy-validation":""},model:{value:e.forms.contact,callback:function(t){e.$set(e.forms,"contact",t)},expression:"forms.contact"}},[n("v-flex",{staticClass:"pa-2"},[n("v-subheader",[e._v("Contacto")]),n("v-text-field",{attrs:{clearable:"",required:"",label:"Celular",rules:e.rules.telephone,mask:"phone"},model:{value:e.personal.tel_contact,callback:function(t){e.$set(e.personal,"tel_contact",t)},expression:"personal.tel_contact"}}),n("v-text-field",{attrs:{clearable:"",label:"Otro teléfono",mask:"phone"},model:{value:e.personal.tel_contact_2,callback:function(t){e.$set(e.personal,"tel_contact_2",t)},expression:"personal.tel_contact_2"}})],1)],1)],1)],1)],1),n("v-card-actions",[n("v-spacer"),n("v-btn",{staticClass:"mr-4",attrs:{depressed:"",color:"primary"},on:{click:e.submit}},[e._v("Guardar")])],1)],1),n("v-dialog",{attrs:{persistent:"",width:"500"},model:{value:e.photoChanger,callback:function(t){e.photoChanger=t},expression:"photoChanger"}},[n("v-card",{staticClass:"pa-2"},[n("v-card-title",{staticClass:"headline"},[e._v("Foto de perfil")]),n("v-card-text",{staticClass:"text-xs-center"},[n("h3",[e._v("Previsualización")]),n("br"),""===e.image.url?n("img",{staticClass:"profilePhoto",attrs:{src:e.photo,alt:"Foto de Perfil",height:"250"}}):n("img",{staticClass:"profilePhoto",attrs:{src:e.image.url,alt:"Logo",height:"250"}}),n("v-text-field",{attrs:{label:"Seleccione imagen","prepend-icon":"attach_file"},on:{click:e.pickFile},model:{value:e.image.name,callback:function(t){e.$set(e.image,"name",t)},expression:"image.name"}}),n("input",{ref:"image",staticStyle:{display:"none"},attrs:{type:"file",accept:"image/x-png, image/gif, image/jpeg"},on:{change:e.onFilePicked}}),n("v-divider"),n("v-subheader",[e._v("Condiciones")]),n("div",{staticClass:"text-xs-left"},[n("ul",[n("li",[e._v("Las dimensiones de la imagen no pueden pasar de 500px x 500px.")]),n("li",[e._v("Formatos aceptados: *.jpeg, *.gif, *.png")])])])],1),n("v-card-actions",[n("v-spacer"),n("v-btn",{attrs:{flat:""},on:{click:function(t){e.photoChanger=!1}}},[e._v("Cancelar")]),n("v-btn",{attrs:{color:"primary",flat:""},on:{click:e.submitPhoto}},[e._v("Cambiar")])],1)],1)],1)],1)}),c=[],u=(a("7f7f"),a("28a5"),a("a745")),d=a.n(u);function p(e){if(d()(e))return e}var f=a("5d73"),h=a.n(f);function m(e,t){var a=[],n=!0,r=!1,i=void 0;try{for(var s,o=h()(e);!(n=(s=o.next()).done);n=!0)if(a.push(s.value),t&&a.length===t)break}catch(l){r=!0,i=l}finally{try{n||null==o["return"]||o["return"]()}finally{if(r)throw i}}return a}function v(){throw new TypeError("Invalid attempt to destructure non-iterable instance")}function b(e,t){return p(e)||m(e,t)||v()}var x=a("cebc"),g=a("2f62"),_={name:"basic-info",props:{personal:{type:Object,default:function(){return{name:"",appat:"",apmat:"",CURP:"",date_birth:"",blood_type:"",tel_contact:"",tel_contact_2:""}}}},computed:Object(x["a"])({},Object(g["d"])({photo:"photo"})),data:function(){return{dialog:!1,photoChanger:!1,datePicker:!1,dummyDate:"",forms:{basic:!1,contact:!1},image:{name:"",url:"",file:"",dimensions:{h:"",w:""}},rules:{name:[function(e){return!!e||"El nombre es requerido"}],appat:[function(e){return!!e||"El A Paterno es requerido"}],apmat:[function(e){return!!e||"El A Materno es requerido"}],CURP:[function(e){return(e||"").length>8||"Más de 8 caracteres"}],telephone:[function(e){return!!e||"Un número de contacto al menos"}],date:[function(e){return!!e||"Fecha de nacimiento es obligatoria"}]},blood_types:["A+","A-","B+","B-","AB+","AB-","O+","O-","Desconocido"],menu:!1,menu2:!1,contacto:{e_nombre:"",e_appat:"",e_apmat:"",e_parentesco:"",e_telefono:""}}},watch:{dummyDate:function(e){this.personal.date_birth=this.formatDate(this.dummyDate)}},methods:{formatDate:function(e){if(!e)return null;var t=e.split("-"),a=b(t,3),n=a[0],r=a[1],i=a[2];return"".concat(i,"/").concat(r,"/").concat(n)},submit:function(){var e=Object(o["a"])(regeneratorRuntime.mark(function e(){var t,a;return regeneratorRuntime.wrap(function(e){while(1)switch(e.prev=e.next){case 0:if(!0!==this.$refs.basic.validate()||!0!==this.$refs.contact.validate()){e.next=15;break}return e.prev=1,e.next=4,this.$http.patch("profile/"+this.personal.id+"/basic",this.personal);case 4:t=e.sent,a=t.data.data,this.$store.state.user.profile=a,this.$store.dispatch("toast_me",{appear:!0,title:"Información básica.",message:"Actualiza con éxito",color:"primary"}),e.next=13;break;case 10:e.prev=10,e.t0=e["catch"](1),console.log(e.t0);case 13:e.next=16;break;case 15:console.log("No están completas");case 16:case"end":return e.stop()}},e,this,[[1,10]])}));function t(){return e.apply(this,arguments)}return t}(),pickFile:function(){this.$refs.image.click()},onFilePicked:function(e){var t=this,a=e.target.files;if(void 0!==a[0]){if(this.image.name=a[0].name,this.image.name.lastIndexOf(".")<=0)return;var n=new FileReader;n.readAsDataURL(a[0]);var r=this.image.dimensions;n.onload=function(e){var t=new Image;t.src=e.target.result,t.onload=function(){r.h=this.height,r.w=this.width}},n.addEventListener("load",function(){t.image.url=n.result,t.image.file=a[0]})}else this.image.name="",this.image.file="",this.image.url=""},submitPhoto:function(){var e=Object(o["a"])(regeneratorRuntime.mark(function e(){var t,a;return regeneratorRuntime.wrap(function(e){while(1)switch(e.prev=e.next){case 0:if(this.image.dimensions.h/this.image.dimensions.w===1){e.next=3;break}return console.log("No es cuadrada"),e.abrupt("return");case 3:return e.prev=3,t=new FormData,t.append("photo",this.image.file),this.$store.commit("SET_LOADING",{appear:!0,message:"Subiendo..."}),e.next=9,this.$http.post("profile/photo",t);case 9:a=e.sent,console.log(a),this.$store.commit("SET_LOADING",{appear:!1,message:""}),this.photoChanger=!1,this.$store.state.photo=this.image.url,this.image={name:"",dimensions:{h:"",w:""},file:null,url:""},e.next=20;break;case 17:e.prev=17,e.t0=e["catch"](3),console.log(e.t0);case 20:case"end":return e.stop()}},e,this,[[3,17]])}));function t(){return e.apply(this,arguments)}return t}()}},y=_,C=(a("21d0"),a("2877")),k=a("6544"),V=a.n(k),w=a("8336"),$=a("b0af"),A=a("99d9"),P=a("12b2"),F=a("2e4b"),S=a("169a"),D=a("ce7e6"),O=a("0e8f"),j=a("4bd4"),R=a("a722"),E=a("8860"),B=a("ba95"),T=a("c954"),L=a("5d23"),I=a("e449"),q=a("b56d"),z=a("9910"),M=a("e0c7"),G=a("2677"),U=Object(C["a"])(y,l,c,!1,null,null,null),N=U.exports;V()(U,{VBtn:w["a"],VCard:$["a"],VCardActions:A["a"],VCardText:A["b"],VCardTitle:P["a"],VDatePicker:F["a"],VDialog:S["a"],VDivider:D["a"],VFlex:O["a"],VForm:j["a"],VLayout:R["a"],VList:E["a"],VListTile:B["a"],VListTileAvatar:T["a"],VListTileContent:L["a"],VListTileSubTitle:L["b"],VListTileTitle:L["c"],VMenu:I["a"],VSelect:q["a"],VSpacer:z["a"],VSubheader:M["a"],VTextField:G["a"]});var H=function(){var e=this,t=e.$createElement,a=e._self._c||t;return a("div",[a("v-subheader",[e._v("Extras")]),a("v-flex",{attrs:{"pa-2":"","d-flex":""}},[a("v-form",{staticClass:"text-xs-center"},[a("p",{staticClass:"text-xs-left"},[e._v("Cambiar la contraseña actual:")]),a("v-text-field",{attrs:{rules:e.password.rules,label:"Contraseña","prepend-icon":"lock",clearable:"clearable",autocomplete:"autocomplete",type:"password"},model:{value:e.password.info,callback:function(t){e.$set(e.password,"info",t)},expression:"password.info"}}),a("v-spacer"),a("v-btn",{attrs:{color:"primary",depressed:""}},[e._v("Guardar")])],1)],1)],1)},J=[],K={data:function(){return{password:{info:"",rules:[]}}}},Q=K,X=Object(C["a"])(Q,H,J,!1,null,null,null),Y=X.exports;V()(X,{VBtn:w["a"],VFlex:O["a"],VForm:j["a"],VSpacer:z["a"],VSubheader:M["a"],VTextField:G["a"]});var Z=function(){var e=this,t=e.$createElement,a=e._self._c||t;return a("div",[a("v-divider"),a("v-card",{staticClass:"mb-4 elevation-0"},[a("v-card-text",[a("v-layout",{attrs:{row:"","d-flex":"",wrap:"","pa-2":""}},[a("v-flex",{attrs:{xs12:"","pa-2":""}},[a("v-subheader",[e._v("Información de contacto")]),a("v-form",{ref:"emergency_contact",attrs:{"lazy-validation":""},model:{value:e.emergency_contact_form,callback:function(t){e.emergency_contact_form=t},expression:"emergency_contact_form"}},[a("v-flex",{attrs:{"d-flex":""}},[a("v-text-field",{attrs:{xs12:"",md4:"",required:"",clearable:"",label:"Nombre(s)",rules:e.rules.name},model:{value:e.ec.name,callback:function(t){e.$set(e.ec,"name",t)},expression:"ec.name"}}),a("v-text-field",{attrs:{xs12:"",md4:"",required:"",clearable:"",label:"Apellido Paterno",rules:e.rules.appat},model:{value:e.ec.appat,callback:function(t){e.$set(e.ec,"appat",t)},expression:"ec.appat"}}),a("v-text-field",{attrs:{xs12:"",md4:"",clearable:"",label:"Apellido Materno"},model:{value:e.ec.apmat,callback:function(t){e.$set(e.ec,"apmat",t)},expression:"ec.apmat"}})],1),a("v-flex",{attrs:{"d-flex":""}},[a("v-select",{attrs:{items:e.parentescos,label:"Parentesco"},model:{value:e.ec.relationship,callback:function(t){e.$set(e.ec,"relationship",t)},expression:"ec.relationship"}}),a("v-text-field",{attrs:{xs12:"",md6:"",required:"",clearable:"",rules:e.rules.telephone,label:"Telefono",mask:"phone"},model:{value:e.ec.telephone,callback:function(t){e.$set(e.ec,"telephone",t)},expression:"ec.telephone"}})],1)],1)],1)],1)],1),a("v-card-actions",[a("v-spacer"),a("v-btn",{staticClass:"mr-4",attrs:{depressed:"",color:"primary"},on:{click:e.submit}},[e._v("Guardar")])],1)],1)],1)},W=[],ee={name:"EmergencyContact",props:{ec:{type:Object,default:function(){return{id:"",name:"",appat:"",apmat:"",relationship:"",telephone:""}}}},data:function(){return{parentescos:["Padre/Madre","Pareja","Hermano","Hijo","Tio","Otro"],rules:{name:[function(e){return!!e||"Nombre es obligatorio"}],appat:[function(e){return!!e||"Apellido Paterno es obligatorio"}],relationship:[function(e){return!!e||"Imperativo saber parentesco"}],telephone:[function(e){return!!e||"Telefono es obligatorio"}]},emergency_contact_form:!1}},methods:{submit:function(){var e=Object(o["a"])(regeneratorRuntime.mark(function e(){var t,a;return regeneratorRuntime.wrap(function(e){while(1)switch(e.prev=e.next){case 0:if(!0!==this.$refs.emergency_contact.validate()){e.next=15;break}return e.prev=1,e.next=4,this.$http.patch("profile/"+this.ec.id+"/ec",this.ec);case 4:t=e.sent,a=t.data.data,this.$store.state.user.profile=a,this.$store.dispatch("toast_me",{appear:!0,title:"Contacto de Emergencia.",message:"Actualizado con éxito",color:"primary"}),e.next=13;break;case 10:e.prev=10,e.t0=e["catch"](1),console.log(e.t0);case 13:e.next=16;break;case 15:console.log("Aun hay faltantes");case 16:case"end":return e.stop()}},e,this,[[1,10]])}));function t(){return e.apply(this,arguments)}return t}()}},te=ee,ae=Object(C["a"])(te,Z,W,!1,null,null,null),ne=ae.exports;V()(ae,{VBtn:w["a"],VCard:$["a"],VCardActions:A["a"],VCardText:A["b"],VDivider:D["a"],VFlex:O["a"],VForm:j["a"],VLayout:R["a"],VSelect:q["a"],VSpacer:z["a"],VSubheader:M["a"],VTextField:G["a"]});var re=function(){var e=this,t=e.$createElement,a=e._self._c||t;return a("div",[a("v-divider"),a("v-card",{staticClass:"mb-4 elevation-0"},[a("v-card-text",[a("v-layout",{attrs:{row:"",wrap:"","d-flex":"","pa-2":""}},[a("v-flex",{attrs:{xs12:"","pa-2":""}},[a("v-subheader",[e._v("Dirección Personal")]),a("v-form",{ref:"direction_form",attrs:{"lazy-validation":""}},[a("v-flex",{attrs:{"d-flex":""}},[a("v-text-field",{attrs:{xs12:"",md6:"",required:"",clearable:"",label:"Calle y número",rules:e.rules.street},model:{value:e.direction.street,callback:function(t){e.$set(e.direction,"street",t)},expression:"direction.street"}}),a("v-select",{attrs:{items:e.states,required:"",label:"Estado"},model:{value:e.direction.state,callback:function(t){e.$set(e.direction,"state",t)},expression:"direction.state"}})],1),a("v-flex",{attrs:{"d-flex":""}},[a("v-text-field",{attrs:{xs12:"",md6:"",required:"",clearable:"",label:"Colonia",rules:e.rules.suburb},model:{value:e.direction.suburb,callback:function(t){e.$set(e.direction,"suburb",t)},expression:"direction.suburb"}}),a("v-text-field",{attrs:{xs12:"",md6:"",required:"",clearable:"",label:"Código Postal",rules:e.rules.postal_code},model:{value:e.direction.postal_code,callback:function(t){e.$set(e.direction,"postal_code",t)},expression:"direction.postal_code"}})],1)],1)],1)],1)],1),a("v-card-actions",[a("v-spacer"),a("v-btn",{staticClass:"mr-4",attrs:{depressed:"",color:"primary"},on:{click:e.submit}},[e._v("Guardar")])],1)],1)],1)},ie=[],se={name:"Direction",props:{direction:{type:Object,default:function(){return{id:"",street:"",state:"",suburb:"",postal_code:""}}}},methods:{submit:function(){var e=Object(o["a"])(regeneratorRuntime.mark(function e(){var t,a;return regeneratorRuntime.wrap(function(e){while(1)switch(e.prev=e.next){case 0:if(!0!==this.$refs.direction_form.validate()){e.next=16;break}return e.prev=1,e.next=4,this.$http.patch("profile/"+this.direction.id+"/direction",this.direction);case 4:t=e.sent,a=t.data.data,console.log(a),this.$store.state.user.profile=a,this.$store.dispatch("toast_me",{appear:!0,title:"Dirección. ",message:"Actualizada con éxito",color:"primary"}),e.next=14;break;case 11:e.prev=11,e.t0=e["catch"](1),console.log(e.t0);case 14:e.next=17;break;case 16:console.log("Aun hay faltantes");case 17:case"end":return e.stop()}},e,this,[[1,11]])}));function t(){return e.apply(this,arguments)}return t}()},data:function(){return{states:["CDMX","Aguascalientes","Baja California","Baja California Sur","Campeche","Chiapas","Chihuahua","Coahuila","Colima","Durango","Estado de México","Guanajuato","Guerrero","Hidalgo","Jalisco","Michoacán","Morelos","Nayarit","Nuevo León","Oaxaca","Puebla","Querétaro","Quintana Roo","San Luis Potosí","Sinaloa","Sonora","Tabasco","Tamaulipas","Tlaxcala","Veracruz","Yucatán","Zacatecas"],rules:{street:[function(e){return!!e||"Calle y número obligatorios"}],state:[function(e){return!!e||"Estado obligatorio"}],suburb:[function(e){return!!e||"Colonia obligatoria"}],postal_code:[function(e){return!!e||"Código postal obligatorio"}]}}}},oe=se,le=Object(C["a"])(oe,re,ie,!1,null,null,null),ce=le.exports;V()(le,{VBtn:w["a"],VCard:$["a"],VCardActions:A["a"],VCardText:A["b"],VDivider:D["a"],VFlex:O["a"],VForm:j["a"],VLayout:R["a"],VSelect:q["a"],VSpacer:z["a"],VSubheader:M["a"],VTextField:G["a"]});var ue=function(){var e=this,t=e.$createElement,a=e._self._c||t;return a("div",[a("v-divider"),a("v-card",{staticClass:"mb-4 elevation-0"},[a("v-card-text",[a("v-layout",{attrs:{row:"",wrap:"","d-flex":"","pa-2":""}},[a("v-flex",{attrs:{xs12:"","pa-2":""}},[a("v-subheader",[e._v("Fiscal")]),a("p",{staticClass:"ma-2"},[e._v("Este apartado puede quedar vacío sino desea agregar información para facturación.")]),a("v-form",{ref:"fiscal_form",attrs:{"lazy-validation":""}},[a("v-flex",{attrs:{"d-flex":""}},[a("v-text-field",{attrs:{xs12:"",md6:"",clearable:"",label:"Razón Social"},model:{value:e.fiscal.business_name,callback:function(t){e.$set(e.fiscal,"business_name",t)},expression:"fiscal.business_name"}}),a("v-text-field",{attrs:{xs12:"",md6:"",clearable:"",label:"Dirección"},model:{value:e.fiscal.direction,callback:function(t){e.$set(e.fiscal,"direction",t)},expression:"fiscal.direction"}})],1),a("v-flex",{attrs:{"d-flex":""}},[a("v-text-field",{attrs:{xs12:"",md6:"",clearable:"",label:"RFC"},model:{value:e.fiscal.RFC,callback:function(t){e.$set(e.fiscal,"RFC",t)},expression:"fiscal.RFC"}}),a("v-text-field",{attrs:{xs12:"",md6:"",clearable:"",label:"Email",rules:[function(e){return/.+@.+/.test(e)||"Ingresa un correo válido"}],type:"email"},model:{value:e.fiscal.email,callback:function(t){e.$set(e.fiscal,"email",t)},expression:"fiscal.email"}})],1)],1)],1)],1)],1),a("v-card-actions",[a("v-spacer"),a("v-btn",{staticClass:"mr-4",attrs:{depressed:"",color:"primary"},on:{click:e.submit}},[e._v("Guardar")])],1)],1)],1)},de=[],pe={name:"Direction",props:{fiscal:{type:Object,default:function(){return{id:"",business_name:"",direction:"",RFC:"",email:""}}}},methods:{submit:function(){var e=Object(o["a"])(regeneratorRuntime.mark(function e(){var t,a,n,r,i,s,o,l,c,u,d;return regeneratorRuntime.wrap(function(e){while(1)switch(e.prev=e.next){case 0:if(t=null!=this.fiscal.business_name||""==this.fiscal.business_name,a=null!=this.fiscal.direction||""==this.fiscal.direction,n=null!=this.fiscal.RFC||""==this.fiscal.RFC,r=null!=this.fiscal.email||""==this.fiscal.email,console.log(t,a,n,r),t||a||n||r||this.$store.dispatch("toast_me",{appear:!0,message:"Sin facturación.",color:"gray darken-5"}),i=t?1:0,s=a?1:0,o=n?1:0,l=r?1:0,c=i+s+o+l,0==c){e.next=15;break}if(!(c<4&&c>0)){e.next=15;break}return this.$store.dispatch("toast_me",{appear:!0,title:"Forma modificada.",message:"Si se modifica algo, complete la forma de facturación.",color:"error"}),e.abrupt("return");case 15:return e.prev=15,console.log(this.fiscal),e.next=19,this.$http.patch("profile/"+this.fiscal.id+"/fiscal",this.fiscal);case 19:u=e.sent,d=u.data.data,console.log(d),this.$store.state.user.profile=d,this.$store.dispatch("toast_me",{appear:!0,title:"Facturación. ",message:"Actualizada con éxito",color:"primary"}),e.next=29;break;case 26:e.prev=26,e.t0=e["catch"](15),console.log(e.t0);case 29:case"end":return e.stop()}},e,this,[[15,26]])}));function t(){return e.apply(this,arguments)}return t}()},data:function(){return{rules:{}}}},fe=pe,he=Object(C["a"])(fe,ue,de,!1,null,null,null),me=he.exports;V()(he,{VBtn:w["a"],VCard:$["a"],VCardActions:A["a"],VCardText:A["b"],VDivider:D["a"],VFlex:O["a"],VForm:j["a"],VLayout:R["a"],VSpacer:z["a"],VSubheader:M["a"],VTextField:G["a"]});var ve=function(){var e=this,t=e.$createElement,a=e._self._c||t;return a("div",[a("v-divider"),a("v-card",{staticClass:"mb-4 elevation-0"},[a("v-card-text",[a("v-layout",{attrs:{row:"",wrap:"","d-flex":"","pa-2":""}},[a("v-flex",{attrs:{xs12:"","pa-2":""}},[a("v-subheader",[e._v("Información complementaria")]),a("v-form",{ref:"extras_form",attrs:{"lazy-validation":""}},[a("v-flex",{attrs:{"d-flex":"",xs12:""}},[a("v-flex",{attrs:{xs12:"",md6:""}},[a("v-select",{attrs:{"persistent-hint":"",hint:"Generación SUUMA",reverse:"",solo:"",dense:"",flat:"",value:e.extras.generation,items:e.generations,label:"Generación"},model:{value:e.extras.generation,callback:function(t){e.$set(e.extras,"generation",t)},expression:"extras.generation"}})],1),a("v-flex",{attrs:{xs12:"",md6:""}},[a("v-menu",{attrs:{"close-on-content-click":!1,"nudge-right":40,lazy:"",transition:"scale-transition","offset-y":"","full-width":"","min-width":"290px"},scopedSlots:e._u([{key:"activator",fn:function(t){var n=t.on;return[a("v-text-field",e._g({attrs:{required:"",label:"Fecha de vencimiento BLS","prepend-icon":"event",hint:"DD/MM/AAAA",rules:e.rules.date},model:{value:e.extras.exp_BLS,callback:function(t){e.$set(e.extras,"exp_BLS",t)},expression:"extras.exp_BLS"}},n))]}}]),model:{value:e.datePicker,callback:function(t){e.datePicker=t},expression:"datePicker"}},[a("v-date-picker",{attrs:{xs12:"",md6:"",type:"month"},on:{input:function(t){e.datePicker=!1}},model:{value:e.dummyDate,callback:function(t){e.dummyDate=t},expression:"dummyDate"}})],1)],1)],1)],1)],1)],1)],1),a("v-card-actions",[a("v-spacer"),a("v-btn",{staticClass:"mr-4",attrs:{depressed:"",color:"primary"},on:{click:e.submit}},[e._v("Guardar")])],1)],1)],1)},be=[];a("ac6a");function xe(e){if(d()(e)){for(var t=0,a=new Array(e.length);t<e.length;t++)a[t]=e[t];return a}}var ge=a("774e"),_e=a.n(ge),ye=a("c8bb"),Ce=a.n(ye);function ke(e){if(Ce()(Object(e))||"[object Arguments]"===Object.prototype.toString.call(e))return _e()(e)}function Ve(){throw new TypeError("Invalid attempt to spread non-iterable instance")}function we(e){return xe(e)||ke(e)||Ve()}var $e={name:"Extras",props:{extras:{type:Object,default:function(){return{id:"",generation:"",exp_BLS:""}}}},data:function(){return{datePicker:!1,dummyDate:"",rules:{date:[function(e){return!!e||"Fecha de nacimiento es obligatoria"}]}}},computed:{generations:function(){return we(Array(50).keys()).reverse()}},watch:{dummyDate:function(e){this.extras.exp_BLS=this.formatDate(this.dummyDate)}},methods:{formatDate:function(e){if(!e)return null;var t=e.split("-"),a=b(t,3),n=a[0],r=a[1],i=a[2];return i=void 0===i?1:i,"".concat(i,"/").concat(r,"/").concat(n)},submit:function(){var e=Object(o["a"])(regeneratorRuntime.mark(function e(){var t,a;return regeneratorRuntime.wrap(function(e){while(1)switch(e.prev=e.next){case 0:if(!0!==this.$refs.extras_form.validate()){e.next=16;break}return e.prev=1,e.next=4,this.$http.patch("profile/"+this.extras.id+"/extras",this.extras);case 4:t=e.sent,a=t.data.data,console.log(a),this.$store.state.user.profile=a,this.$store.dispatch("toast_me",{appear:!0,title:"Extras. ",message:"Actualizado con éxito.",color:"primary"}),e.next=14;break;case 11:e.prev=11,e.t0=e["catch"](1),console.log(e.t0);case 14:e.next=17;break;case 16:console.log("Aun hay faltantes");case 17:case"end":return e.stop()}},e,this,[[1,11]])}));function t(){return e.apply(this,arguments)}return t}()}},Ae=$e,Pe=Object(C["a"])(Ae,ve,be,!1,null,null,null),Fe=Pe.exports;V()(Pe,{VBtn:w["a"],VCard:$["a"],VCardActions:A["a"],VCardText:A["b"],VDatePicker:F["a"],VDivider:D["a"],VFlex:O["a"],VForm:j["a"],VLayout:R["a"],VMenu:I["a"],VSelect:q["a"],VSpacer:z["a"],VSubheader:M["a"],VTextField:G["a"]});var Se={name:"ProfileComponent",components:{"basic-info":N,"advanced-info":Y,"emergency-contact":ne,"direction-info":ce,"fiscal-info":me,"extras-info":Fe},created:function(){var e=Object(o["a"])(regeneratorRuntime.mark(function e(){return regeneratorRuntime.wrap(function(e){while(1)switch(e.prev=e.next){case 0:return e.next=2,this.fetchProfile();case 2:case"end":return e.stop()}},e,this)}));function t(){return e.apply(this,arguments)}return t}(),data:function(){return{profile:{},panels:[!0,!1,!1,!1,!1,!1]}},computed:{ec:function(){return{id:this.profile.id,name:this.profile.ec_name,appat:this.profile.ec_appat,apmat:this.profile.ec_apmat,relationship:this.profile.ec_relationship,telephone:this.profile.ec_telephone}},direction:function(){return{id:this.profile.id,street:this.profile.dir_street,state:this.profile.dir_state,suburb:this.profile.dir_col,postal_code:this.profile.dir_pc}},fiscal:function(){return{id:this.profile.id,business_name:this.profile.fis_business_name,direction:this.profile.fis_dir_fiscal,RFC:this.profile.fis_RFC,email:this.profile.fis_email}},extras:function(){return{id:this.profile.id,generation:s()(this.profile.generation),exp_BLS:this.profile.BLS_exp}}},methods:{fetchProfile:function(){var e=Object(o["a"])(regeneratorRuntime.mark(function e(){var t;return regeneratorRuntime.wrap(function(e){while(1)switch(e.prev=e.next){case 0:return e.prev=0,e.next=3,this.$http.get("profile");case 3:t=e.sent,this.profile=t.data.data,e.next=10;break;case 7:e.prev=7,e.t0=e["catch"](0),console.log(e.t0);case 10:case"end":return e.stop()}},e,this,[[0,7]])}));function t(){return e.apply(this,arguments)}return t}()}},De=Se,Oe=(a("eaf7"),a("a523")),je=a("549c"),Re=(a("c321"),a("6a18")),Ee=a("94ab"),Be=a("58df"),Te=Object.assign||function(e){for(var t=1;t<arguments.length;t++){var a=arguments[t];for(var n in a)Object.prototype.hasOwnProperty.call(a,n)&&(e[n]=a[n])}return e},Le=Object(Be["a"])(Re["a"],Object(Ee["b"])("expansionPanel")).extend({name:"v-expansion-panel",provide:function(){return{expansionPanel:this}},props:{disabled:Boolean,readonly:Boolean,expand:Boolean,focusable:Boolean,inset:Boolean,popout:Boolean,value:{type:[Number,Array],default:function(){return null}}},data:function(){return{items:[],open:[]}},computed:{classes:function(){return Te({"v-expansion-panel--focusable":this.focusable,"v-expansion-panel--popout":this.popout,"v-expansion-panel--inset":this.inset},this.themeClasses)}},watch:{expand:function(e){var t=-1;if(!e){var a=this.open.reduce(function(e,t){return t?e+1:e},0),n=Array(this.items.length).fill(!1);1===a&&(t=this.open.indexOf(!0)),t>-1&&(n[t]=!0),this.open=n}this.$emit("input",e?this.open:t>-1?t:null)},value:function(e){this.updateFromValue(e)}},mounted:function(){null!==this.value&&this.updateFromValue(this.value)},methods:{updateFromValue:function(e){if(!Array.isArray(e)||this.expand){var t=Array(this.items.length).fill(!1);"number"===typeof e?t[e]=!0:null!==e&&(t=e),this.updatePanels(t)}},updatePanels:function(e){this.open=e;for(var t=0;t<this.items.length;t++)this.items[t].toggle(e&&e[t])},panelClick:function(e){for(var t=this.expand?this.open.slice():Array(this.items.length).fill(!1),a=0;a<this.items.length;a++)this.items[a]._uid===e&&(t[a]=!this.open[a],!this.expand&&this.$emit("input",t[a]?a:null));this.updatePanels(t),this.expand&&this.$emit("input",t)},register:function(e){var t=this.items.push(e)-1;null!==this.value&&this.updateFromValue(this.value),e.toggle(!!this.open[t])},unregister:function(e){var t=this.items.findIndex(function(t){return t._uid===e._uid});this.items.splice(t,1),this.open.splice(t,1)}},render:function(e){return e("ul",{staticClass:"v-expansion-panel",class:this.classes},this.$slots.default)}}),Ie=a("0789"),qe=a("3e79"),ze=a("98a1"),Me=a("ad54"),Ge=a("9d26"),Ue=a("d9bd");function Ne(e){if(Array.isArray(e)){for(var t=0,a=Array(e.length);t<e.length;t++)a[t]=e[t];return a}return Array.from(e)}var He=Object(Be["a"])(qe["a"],ze["a"],Me["a"],Object(Ee["a"])("expansionPanel","v-expansion-panel-content","v-expansion-panel")).extend({name:"v-expansion-panel-content",props:{disabled:Boolean,readonly:Boolean,expandIcon:{type:String,default:"$vuetify.icons.expand"},hideActions:Boolean,ripple:{type:[Boolean,Object],default:!1}},data:function(){return{height:"auto"}},computed:{containerClasses:function(){return{"v-expansion-panel__container--active":this.isActive,"v-expansion-panel__container--disabled":this.isDisabled}},isDisabled:function(){return this.expansionPanel.disabled||this.disabled},isReadonly:function(){return this.expansionPanel.readonly||this.readonly}},beforeMount:function(){this.expansionPanel.register(this),"undefined"!==typeof this.value&&Object(Ue["c"])("v-model has been deprecated",this)},beforeDestroy:function(){this.expansionPanel.unregister(this)},methods:{onKeydown:function(e){13===e.keyCode&&this.$el===document.activeElement&&this.expansionPanel.panelClick(this._uid)},onHeaderClick:function(){this.isReadonly||this.expansionPanel.panelClick(this._uid)},genBody:function(){return this.$createElement("div",{ref:"body",class:"v-expansion-panel__body",directives:[{name:"show",value:this.isActive}]},this.showLazyContent(this.$slots.default))},genHeader:function(){var e=[].concat(Ne(this.$slots.header||[]));return this.hideActions||e.push(this.genIcon()),this.$createElement("div",{staticClass:"v-expansion-panel__header",directives:[{name:"ripple",value:this.ripple}],on:{click:this.onHeaderClick}},e)},genIcon:function(){var e=this.$slots.actions||[this.$createElement(Ge["a"],this.expandIcon)];return this.$createElement("transition",{attrs:{name:"fade-transition"}},[this.$createElement("div",{staticClass:"v-expansion-panel__header__icon",directives:[{name:"show",value:!this.isDisabled}]},e)])},toggle:function(e){var t=this;e&&(this.isBooted=!0),this.$nextTick(function(){return t.isActive=e})}},render:function(e){return e("li",{staticClass:"v-expansion-panel__container",class:this.containerClasses,attrs:{tabindex:this.isReadonly||this.isDisabled?null:0,"aria-expanded":Boolean(this.isActive)},on:{keydown:this.onKeydown}},[this.$slots.header&&this.genHeader(),e(Ie["a"],[this.genBody()])])}}),Je=Object(C["a"])(De,n,r,!1,null,"6750e1f3",null);t["default"]=Je.exports;V()(Je,{VContainer:Oe["a"],VContent:je["a"],VExpansionPanel:Le,VExpansionPanelContent:He})},f410:function(e,t,a){a("1af6"),e.exports=a("584a").Array.isArray}}]);
//# sourceMappingURL=chunk-b5197f6e.323bfcee.js.map