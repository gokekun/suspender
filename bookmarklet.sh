javascript: function(){
  var a=encodeURIComponent(document.title);
  var b=encodeURIComponent(window.location.href);
  window.open("YOUR_URL_HERE/?title="+a+"%26url="+b,"_self")
}();
