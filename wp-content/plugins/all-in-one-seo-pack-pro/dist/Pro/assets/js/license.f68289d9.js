import{d as u,u as i}from"./links.4ebb20e1.js";import{u as p}from"./upperFirst.feef3474.js";const f=(n,e=null)=>{try{n=JSON.parse(n)}catch{n=e}return n},l={individual:0,business:1,agency:2,basic:3,plus:4,pro:5,elite:6},a=(n="")=>{var s,c;const e=u(),t=i().aioseo.data.isNetworkLicensed&&!e.options.general.licenseKey?((s=e.internalNetworkOptions.internal.license)==null?void 0:s.features)||[]:((c=e.internalOptions.internal.license)==null?void 0:c.features)||[];let r=f(t,[]);return n&&(r=r[n]||[]),r},d=(n,e)=>{const o=a("core");for(const t in o)if(n===t&&!e||n===t&&o[t].includes(e))return!0;return!1},_=(n,e)=>{const o=a("addons");for(const t in o)if(n===t&&o[t].includes(e))return!0;return!1},m=n=>{var r,s;const e=u(),t=i().aioseo.data.isNetworkLicensed&&!e.options.general.licenseKey?(r=e.internalNetworkOptions.internal.license)==null?void 0:r.level:(s=e.internalOptions.internal.license)==null?void 0:s.level;return t?l[t]>=l[n]:!1},S=(n,e="")=>{const o=[];return i().aioseo.features.forEach(r=>{r.section===n&&(e&&r.feature!==e||o.push(p(r.license_level)))}),[...new Set(o)]},F={getFeatures:a,getPlansForFeature:S,hasAddonFeature:_,hasCoreFeature:d,hasMinimumLevel:m};export{F as l};
