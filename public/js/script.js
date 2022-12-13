const zoekbar = document.querySelector("#zoekbar");
const search = document.querySelector("#search");

document.addEventListener("keydown", function (e) {
    if (e.ctrlKey && e.key === "/") {
        zoekbar.focus();
    }
});
zoekbar.addEventListener("focus", function (e) {
    search.classList.add("active");
});
zoekbar.addEventListener("blur", function (e) {
    search.classList.remove("active");
});

// search.style.border.focus = "2px solid #24354d !important";
// search.style.border = "2px solid #f5f5f5";

$(document).ready(function () {
    $(".like-button").on("click", function () {
        var post_id = $(this).data("id");
        $clicked_btn = $(this);

        if ($clicked_btn.hasClass("fa-thumb-o-up")) {
            action = "like";
        } else if ($clicked_btn.hasClass("fa-thumbs-up")) {
            action = "unlike";
        }

        $.ajax({
            url: "{{URL::to('search')}}",
            type: "post",
            data: {
                action: action,
                post_id: post_id,
            },
            success: function (data) {
                res = JSON.parse(data);
                if (action == "like") {
                    $clicked_btn.removeClass("fa-thumbs-o-up");
                    $clicked_btn.addClass("fa-thumbs-up");
                } else if (action == "unlike") {
                    $clicked_btn.removeClass("fa-thumbs-up");
                    $clicked_btn.addClass("fa-thumbs-o-up");
                }
                // display the number of likes and dislikes
                // $clicked_btn.siblings('span.likes').text(res.likes);
                // $clicked_btn.siblings('span.dislikes').text(res.dislikes);

                // change button styling of the other button if user is reacting the second time to post
                // $clicked_btn.siblings('i.fa-thumbs-down').removeClass('fa-thumbs-down').addClass('fa-thumbs-o-down');
            },
        });
    });
});
