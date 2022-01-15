$(".single-features-area").click(function () {
    // console.log($(this).data('id'));

    const id = $(this).data("id");
    const packageTitle = $(this).data("title");

    Swal.fire({
        title: `Pick Package ${packageTitle} ?`,
        showDenyButton: true,
        confirmButtonText: "Confirm",
        denyButtonText: "Cancel",
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.replace(`/wanbo/package/${id}`);
        }
    });
});

$("#total_time").change(function () {
    let val = parseInt($(this).val());
    let prices = parseInt($("#total_price").data("prices"));
    $("#total_price").text((val * prices) / 60);
});

$(".pickroom").hover(function () {
    if ($(this).attr("data-disabled") != 1) {
        $(this).css({
            "background-color": "#9f80e9",
            cursor: "pointer",
        });
    }
});

$(".pickroom").mouseleave(function () {
    if ($(this).attr("data-disabled") != 1) {
        $(this).css({
            "background-color": "#ffffff",
        });
    }
});

$(".radio-group .radio").click(function () {
    if ($(this).attr("data-disabled") != 1) {
        $(this).parent().find(".radio").removeClass("selected");
        $(this).addClass("selected");
        var val = $(this).attr("data-value");
        // alert(val);
        $(this).parent().find("input").val(val);
    }
});

//form submit
$("#formBtn").on("click", function (e) {
    e.preventDefault();
    var form = $(this).parents("form");

    if ($("#selected_room").val() == "") {
        Swal.fire({
            icon: "error",
            title: "Please pick room first",
        });
        return false;
    }

    Swal.fire({
        title: "Confirm order?",
        icon: "question",
        showDenyButton: true,
        confirmButtonText: "Confirm",
        denyButtonText: "Wait..",
    }).then((result) => {
        if (result.isConfirmed) {
            form.submit();
            return true;
        }
    });
});

//cancelBooking
$(".cancelBooking").on("click", function (e) {
    e.preventDefault();
    var form = $(this).parents("form");

    Swal.fire({
        title: "Are you sure want to cancel this booking ?",
        icon: "question",
        showDenyButton: true,
        confirmButtonText: "Confirm",
        denyButtonText: "no",
    }).then((result) => {
        if (result.isConfirmed) {
            form.submit();
            return true;
        }
    });
});

//check in
$(".checkInBooking").on("click", function (e) {
    e.preventDefault();
    var form = $(this).parents("form");

    Swal.fire({
        title: `Checkin on Room ${$(this).data("roomname")}?`,
        icon: "question",
        showDenyButton: true,
        confirmButtonText: "Yes",
        denyButtonText: "No",
    }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire({
                title: "Please Insert Unique code on the Computer...",
                icon: "info",
                confirmButtonText: "Im done Check In",
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire({
                        icon: "success",
                        title: "Success!",
                        text: "Enjoy your booking!",
                    }).then((result) => {
                        form.submit();
                    });
                }
            });
        }
    });
});

//checkout booking
$(".checkoutBooking").on("click", function (e) {
    e.preventDefault();
    var form = $(this).parents("form");

    Swal.fire({
        title: `Checkout From Room ${$(this).data("roomname")}?`,
        text: "Your action cannot be undone!",
        icon: "question",
        showDenyButton: true,
        confirmButtonText: "Checkout",
        denyButtonText: "Cancel",
    }).then((result) => {
        if (result.isConfirmed) {
            form.submit();
        }
    });
});

// //order foods
$('.pickfood').on("click", function () {
    $('#foodOrderTitle').text($(this).data('name'));
    $('#prices').text($(this).data('price'));
    $('#beverage_id').val($(this).data('id'))
    $('#totalPrice').text('Rp: ' + $(this).data('price'));
});

$('#qty').change(function(){
    $('#orderButtonSubmit').removeAttr('disabled');

    if($(this).val() < 1){
        $('#totalPrice').text('Invalid ! (Qty cant be less than 1)')

        $('#orderButtonSubmit').attr('disabled','disabled');
    }
    else if($(this).val() > 10){
        $('#totalPrice').text('Invalid ! (Qty cant be more than 10)')
        $('#orderButtonSubmit').attr('disabled','disabled');
    }

    //kalau bener
    $('#totalPrice').text(`Rp: ${$('#prices').text() * $(this).val()}`)
})
