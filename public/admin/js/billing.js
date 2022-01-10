$(".stopBillingBtn").on("click", function (e) {
    e.preventDefault();
    var form = $(this).parents('form');
    Swal.fire({
        title: 'Stop billing on room \"' + $(this).attr("value") + '\" ?',
        text: 'This action cannot be undone!',
        icon: 'question',
        showDenyButton: true,
        confirmButtonText: "Yes",
        denyButtonText: "Cancel",
    }).then((result) => {
        if (result.isConfirmed) {
            form.submit();
            return true;
        }

        return false;
    });
});

$(".cancelBookingBtn").on("click", function (e) {
    e.preventDefault();
    var form = $(this).parents('form');
    Swal.fire({
        title: 'Cancel Booking For \"' + $(this).attr("value") + '\" ?',
        text: 'This action cannot be undone!',
        icon: 'question',
        showDenyButton: true,
        confirmButtonText: "Yes",
        denyButtonText: "Cancel",
    }).then((result) => {
        if (result.isConfirmed) {
            form.submit();
            return true;
        }

        return false;
    });
});
