!function(e){function t(e){return"object"==typeof e?e:{top:e,left:e}}var n=e.scrollTo=function(t,n,o){e(window).scrollTo(t,n,o)};n.defaults={axis:"xy",duration:parseFloat(e.fn.jquery)>=1.3?0:1,limit:!0},n.window=function(t){return e(window)._scrollable()},e.fn._scrollable=function(){return this.map(function(){var t=this,n=!t.nodeName||-1!=e.inArray(t.nodeName.toLowerCase(),["iframe","#document","html","body"]);if(!n)return t;var o=(t.contentWindow||t).document||t.ownerDocument||t;return/webkit/i.test(navigator.userAgent)||"BackCompat"==o.compatMode?o.body:o.documentElement})},e.fn.scrollTo=function(o,r,i){return"object"==typeof r&&(i=r,r=0),"function"==typeof i&&(i={onAfter:i}),"max"==o&&(o=9e9),i=e.extend({},n.defaults,i),r=r||i.duration,i.queue=i.queue&&i.axis.length>1,i.queue&&(r/=2),i.offset=t(i.offset),i.over=t(i.over),this._scrollable().each(function(){function a(e){u.animate(l,r,i.easing,e&&function(){e.call(this,f,i)})}if(null!=o){var s,c=this,u=e(c),f=o,l={},d=u.is("html,body");switch(typeof f){case"number":case"string":if(/^([+-]=?)?\d+(\.\d+)?(px|%)?$/.test(f)){f=t(f);break}if(f=e(f,this),!f.length)return;case"object":(f.is||f.style)&&(s=(f=e(f)).offset())}e.each(i.axis.split(""),function(e,t){var o="x"==t?"Left":"Top",r=o.toLowerCase(),m="scroll"+o,h=c[m],w=n.max(c,t);if(s)l[m]=s[r]+(d?0:h-u.offset()[r]),i.margin&&(l[m]-=parseInt(f.css("margin"+o))||0,l[m]-=parseInt(f.css("border"+o+"Width"))||0),l[m]+=i.offset[r]||0,i.over[r]&&(l[m]+=f["x"==t?"width":"height"]()*i.over[r]);else{var b=f[r];l[m]=b.slice&&"%"==b.slice(-1)?parseFloat(b)/100*w:b}i.limit&&/^\d+$/.test(l[m])&&(l[m]=l[m]<=0?0:Math.min(l[m],w)),!e&&i.queue&&(h!=l[m]&&a(i.onAfterFirst),delete l[m])}),a(i.onAfter)}}).end()},n.max=function(t,n){var o="x"==n?"Width":"Height",r="scroll"+o;if(!e(t).is("html,body"))return t[r]-e(t)[o.toLowerCase()]();var i="client"+o,a=t.ownerDocument.documentElement,s=t.ownerDocument.body;return Math.max(a[r],s[r])-Math.min(a[i],s[i])}}(jQuery);