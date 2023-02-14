/*

         SODIK PROJECT

* More Information
* Instagram : @tamddk
* Whatsapp : wa.me/62895325657488
*/
$(document).ready(function () {
    $("#sidebarToggle").on("click", function () {
        if (!$(".sodik").hasClass("sidenav-toggled")) {
            $(".sodik").addClass("sidenav-toggled");
        } else {
            $(".sodik.sidenav-toggled").removeClass("sidenav-toggled");
        }
    });
});
