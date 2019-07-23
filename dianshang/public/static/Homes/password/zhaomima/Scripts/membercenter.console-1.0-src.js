(function(arale){ if(!arale) return;var deps = arale.deps;
deps.addDependency('alipay.unfamiliarwords',['alipay.unfamiliarwords-1.0.js','aralex.base-1.1.js','arale.aspect-1.0.js','arale.tmpl-1.0.js','arale.class-1.0.js','arale.event-1.1.js','arale.dom-1.1.js','arale.string-1.0.js','arale.hash-1.0.js','arale.array-1.1.js','arale.base-1.1.js']);
deps.addDependency('arale.string',['arale.string-1.0.js','arale.base-1.1.js']);
deps.addDependency('arale.base',['arale.base-1.1.js']);
deps.addDependency('arale.uri',['arale.uri-1.0.js','arale.base-1.1.js']);
deps.addDependency('arale.hash',['arale.hash-1.0.js','arale.base-1.1.js']);
deps.addDependency('arale.event',['arale.event-1.1.js','arale.dom-1.1.js','arale.string-1.0.js','arale.hash-1.0.js','arale.array-1.1.js','arale.base-1.1.js']);
deps.addDependency('arale.http',['arale.http-1.1.js','arale.uri-1.0.js','arale.hash-1.0.js','arale.array-1.1.js','arale.base-1.1.js']);
deps.addDependency('arale.array',['arale.array-1.1.js','arale.base-1.1.js']);
deps.addDependency('aralex.iframeshim',['aralex.iframeshim-1.1.js','aralex.base-1.1.js','arale.aspect-1.0.js','arale.tmpl-1.0.js','arale.class-1.0.js','arale.event-1.1.js','arale.dom-1.1.js','arale.string-1.0.js','arale.hash-1.0.js','arale.array-1.1.js','arale.base-1.1.js']);
deps.addDependency('aralex.cityhint.LocalCityHint',['aralex.cityhint.LocalCityHint-1.5.js','aralex.cityhint.CityHint-1.6.js','arale.http-1.1.js','arale.uri-1.0.js','aralex.iframeshim-1.1.js','aralex.base-1.1.js','arale.aspect-1.0.js','arale.tmpl-1.0.js','arale.class-1.0.js','arale.event-1.1.js','arale.dom-1.1.js','arale.string-1.0.js','arale.hash-1.0.js','arale.array-1.1.js','arale.base-1.1.js']);
deps.addDependency('membercenter.console',['membercenter.console-1.0.js','alipay.unfamiliarwords-1.0.js','aralex.cityhint.LocalCityHint-1.5.js','aralex.cityhint.CityHint-1.6.js','arale.http-1.1.js','arale.uri-1.0.js','aralex.iframeshim-1.1.js','aralex.base-1.1.js','arale.aspect-1.0.js','arale.tmpl-1.0.js','arale.class-1.0.js','arale.event-1.1.js','arale.dom-1.1.js','arale.string-1.0.js','arale.hash-1.0.js','arale.array-1.1.js','arale.base-1.1.js']);
deps.addDependency('arale.dom',['arale.dom-1.1.js','arale.string-1.0.js','arale.hash-1.0.js','arale.array-1.1.js','arale.base-1.1.js']);
deps.addDependency('arale.aspect',['arale.aspect-1.0.js','arale.base-1.1.js']);
deps.addDependency('arale.tmpl',['arale.tmpl-1.0.js','arale.base-1.1.js']);
deps.addDependency('aralex.base',['aralex.base-1.1.js','arale.aspect-1.0.js','arale.tmpl-1.0.js','arale.class-1.0.js','arale.event-1.1.js','arale.dom-1.1.js','arale.string-1.0.js','arale.hash-1.0.js','arale.array-1.1.js','arale.base-1.1.js']);
deps.addDependency('arale.class',['arale.class-1.0.js','arale.base-1.1.js']);
deps.addDependency('aralex.cityhint.CityHint',['aralex.cityhint.CityHint-1.6.js','arale.http-1.1.js','arale.uri-1.0.js','aralex.iframeshim-1.1.js','aralex.base-1.1.js','arale.aspect-1.0.js','arale.tmpl-1.0.js','arale.class-1.0.js','arale.event-1.1.js','arale.dom-1.1.js','arale.string-1.0.js','arale.hash-1.0.js','arale.array-1.1.js','arale.base-1.1.js']);
}((typeof arale == 'undefined') ? undefined : arale));

/** begin ---functions.js---*/
/**
 * User: zhanxin.lin
 * Date: 13-1-2
 * Time: 下午12:07
 * Desc: 这是统一ID的公用JS函数
 */
var unityId;

if (!Array.prototype.indexOf) {
    Array.prototype.indexOf = function (searchElement /*, fromIndex */ ) {
        "use strict";
        if (this == null) {
            throw new TypeError();
        }
        var t = Object(this);
        var len = t.length >>> 0;
        if (len === 0) {
            return -1;
        }
        var n = 0;
        if (arguments.length > 1) {
            n = Number(arguments[1]);
            if (n != n) { // shortcut for verifying if it's NaN
                n = 0;
            } else if (n != 0 && n != Infinity && n != -Infinity) {
                n = (n > 0 || -1) * Math.floor(Math.abs(n));
            }
        }
        if (n >= len) {
            return -1;
        }
        var k = n >= 0 ? n : Math.max(len - Math.abs(n), 0);
        for (; k < len; k++) {
            if (k in t && t[k] === searchElement) {
                return k;
            }
        }
        return -1;
    }
}

seajs.use('$', function (jQuery) {
    unityId = {
        showExplain:function (elememt, message, toggleClass) {

            var item = jQuery(elememt).parents(".ui-form-item");
            var explain = item.find(".ui-form-explain");
            if (explain.length === 0) {
                explain = jQuery('<div class="ui-form-explain"></div>').appendTo(item);
            }
            var expText = '<i class="ui-form-icon"></i>' + message;
            var className = 'ui-form-item ' + toggleClass;
            explain.html(expText);
            item.attr('class', className);

        },
        hideExplain:function () {

        }
    };

});

/** end ---functions.js---*/
/**Last Changed Author: svnsync--Last Changed Date: Thu Jan 24 14:04:38 CST 2013**/
/**membercenter.console-1.0**/
/** CurrentDeveloper: membercenter**/
/** DeployDate: Wed Jan 30 00:13:00 CST 2013**/
