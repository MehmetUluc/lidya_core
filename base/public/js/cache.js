(()=>{function e(e,n){for(var t=0;t<n.length;t++){var a=n[t];a.enumerable=a.enumerable||!1,a.configurable=!0,"value"in a&&(a.writable=!0),Object.defineProperty(e,a.key,a)}}var n=function(){function n(){!function(e,n){if(!(e instanceof n))throw new TypeError("Cannot call a class as a function")}(this,n)}var t,a;return t=n,(a=[{key:"init",value:function(){$(document).on("click",".btn-clear-cache",(function(e){e.preventDefault();var n=$(e.currentTarget);n.addClass("button-loading"),$.ajax({url:n.data("url"),type:"POST",data:{type:n.data("type")},success:function(e){n.removeClass("button-loading"),e.error?LidyaPos.showError(e.message):LidyaPos.showSuccess(e.message)},error:function(e){n.removeClass("button-loading"),LidyaPos.handleError(e)}})}))}}])&&e(t.prototype,a),n}();$(document).ready((function(){(new n).init()}))})();
