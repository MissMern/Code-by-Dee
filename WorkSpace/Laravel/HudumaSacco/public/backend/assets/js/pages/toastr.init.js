!function(p)
{"use strict";
function t(){}t.prototype.send=function(t,i,o,e,n,a,s,r){var c={heading:t,text:i,position:o,loaderBg:e,icon:n,hideAfter:a=a||3e3,stack:s=s||1};r&&(c.showHideTransition=r),console.log(c),p.toast().reset("all"),p.toast(c)},

p.NotificationApp=new t,p.NotificationApp.Constructor=t}(window.jQuery),function(i){"use strict";i("#toastr-one").on("click",function(t){i.NotificationApp.send("Heads up!","This alert needs your attention, but it is not super important.","top-right","#3b98b5","info")}),

i("#toastr-two").on("click",function(t){i.NotificationApp.send("Heads up!","Check below fields please.","top-center","#da8609","warning")}),

i("#toastr-three").on("click",function(t){i.NotificationApp.send("Well Done!","You successfully read this important alert message","top-right","#5ba035","success")}),
i("#toastr-four").on("click",function(t){i.NotificationApp.send("Oh snap!","Change a few things up and try submitting again.","top-right","#bf441d","danger")}),
i("#toastr-five").on("click",function(t){i.NotificationApp.send("How to contribute?",["Fork the repository","Improve/extend the functionality","Create a pull request"],"top-right","#1ea69a","info")}),
i("#toastr-six").on("click",function(t){i.NotificationApp.send("Can I add <em>icons</em>?","Yes! check this <a href='https://github.com/kamranahmedse/jquery-toast-plugin/commits/master'>update</a>.","top-right","#1ea69a","info",!1)}),
i("#toastr-seven").on("click",function(t){i.NotificationApp.send("","Set the `hideAfter` property to false and the toast will become sticky.","top-right","#1ea69a","")}),
i("#toastr-eight").on("click",function(t){i.NotificationApp.send("","Set the `showHideTransition` property to fade|plain|slide to achieve different transitions.","top-right","#1ea69a","info",3e3,1,"fade")}),
i("#toastr-nine").on("click",function(t){i.NotificationApp.send("Slide transition","Set the `showHideTransition` property to fade|plain|slide to achieve different transitions.","top-right","#1ea69a","info",3e3,1,"slide")}),
i("#toastr-ten").on("click",function(t){i.NotificationApp.send("Plain transition","Set the `showHideTransition` property to fade|plain|slide to achieve different transitions.","top-right","#3b98b5","info",3e3,1,"plain")})}(window.jQuery);