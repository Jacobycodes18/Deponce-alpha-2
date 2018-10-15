//$(document).ready(function(){
//    var dir = "../images/includes/";
//    var fileExt = ".jpg";
//    
//    $.ajax ({
//        url: dir,
//        success: function (data) {
//    $(data).find("a:contains(" + fileExt + ")").each(function () {
//// removes https header from file path
//            var filename = this.href.replace(window.location.host, "").replace("http:///deponce/novo-simplified/home/", "");
//        //apends image  to a-img classed div
//            $(".a-img").append("<img src='" + dir + filename + "'>");
//        });
//}
//                  })
//});