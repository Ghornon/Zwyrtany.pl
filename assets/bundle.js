"use strict";var renderGrid=function(){var e=document.getElementById("grid").children,t=void 0,i=void 0,n=void 0;if(1200<window.innerWidth?(t=4,n=i=0):window.innerWidth<=1200&&768<window.innerWidth&&(t=3,n=i=0),window.innerWidth<=768)for(var o=0;o<e.length;o++)e[o].style.position="relative",e[o].style.top="0px",e[o].style.left="0px";else for(var d=0;d<e.length;d++)e[d].style.position="absolute",0==d?(e[d].style.top="0px",e[d].style.left="0px"):d%t==0?(n=e[d-t].offsetTop+e[d-t].offsetHeight,e[d].style.top=n+"px"):(e[d-t]&&(n=e[d-t].offsetTop+e[d-t].offsetHeight,e[d].style.top=n+"px"),i=e[d-1].offsetLeft+e[d-1].offsetWidth,e[d].style.left=i+"px")},showImage=function(e){e.preventDefault()};window.addEventListener("load",renderGrid),window.addEventListener("resize",renderGrid);
//# sourceMappingURL=bundle.js.map
