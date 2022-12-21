(function($){
    $(document).ready(function () {
        // Mobile Menu Dropdown
        const mobileNavToggler = document.querySelector(".nav--toggle");
        const body = document.querySelector("body");
        if (mobileNavToggler) {
          mobileNavToggler.addEventListener("click", function () {
            body.classList.toggle("nav-toggler");
          });
        }
        // Mobile Menu Dropdown End
    
        // Mobile Submenu
        $(".primary-menu__list.has-sub .primary-menu__link").on(
          "click",
          function (e) {
            e.preventDefault();
            body.classList.add("primary-submenu-toggler");
          }
        );
        $(".primary-menu__list.has-sub.active .primary-menu__link").on(
          "click",
          function (e) {
            e.preventDefault();
            body.classList.remove("primary-submenu-toggler");
          }
        );
        $(".primary-menu__list.has-sub").on("click", function () {
          $(this).toggleClass("active").siblings().removeClass("active");
        });
})
});



    
