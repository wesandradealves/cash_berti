import{p as o,r as s,q as S,l as _,t as e,c as b,M as c}from"./helpers.73050afe.js";var j=o(s,"WeakMap");const i=j;var M=S(Object.keys,Object);const P=M;var T=Object.prototype,O=T.hasOwnProperty;function K(t){if(!_(t))return P(t);var n=[];for(var a in Object(t))O.call(t,a)&&a!="constructor"&&n.push(a);return n}var $=o(s,"DataView");const u=$;var C=o(s,"Promise");const p=C;var V=o(s,"Set");const g=V;var f="[object Map]",k="[object Object]",v="[object Promise]",w="[object Set]",m="[object WeakMap]",y="[object DataView]",A=e(u),W=e(c),d=e(p),h=e(g),x=e(i),r=b;(u&&r(new u(new ArrayBuffer(1)))!=y||c&&r(new c)!=f||p&&r(p.resolve())!=v||g&&r(new g)!=w||i&&r(new i)!=m)&&(r=function(t){var n=b(t),a=n==k?t.constructor:void 0,l=a?e(a):"";if(l)switch(l){case A:return y;case W:return f;case d:return v;case h:return w;case x:return m}return n});const L=r;export{g as S,i as W,K as b,L as g};
