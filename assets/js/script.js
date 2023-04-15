$(document).on("ready", function () {
  // $("nav ul li").on("click", function () {
  //     $(this).addClass("active").siblings().removeClass("active");
  //   });
  $(".top_content ul li").on("click", function () {
    $(this).addClass("active").siblings().removeClass("active");
  });

  $(".btn-close").on("click", function () {
    $("body").removeClass("popup-open");
    let target = $(this).data("bs-dismiss");
    $(target).hide();
  });

  $('button[data-bs-toggle="popup"]').on("click", function () {
    $("body").addClass("popup-open");
    let target = $(this).data("bs-target");
    $(target).show();
    console.log(target);
  });

  $(".category_list_wrap li").on("click", function () {
    $(this).addClass("active").siblings().removeClass("active");
  });
});
