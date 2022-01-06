$(".formBtn").on("click", function (e) {
    e.preventDefault();
    var form = $(this).parents('form');
    Swal.fire({
        title: `Do you wish to continue ?`,
        icon: 'question',
        showDenyButton: true,
        confirmButtonText: "yes",
        denyButtonText: "Cancel",
    }).then((result) => {
        if (result.isConfirmed) {
            form.submit();
            return true;
        } else if (result.isDenied) {
            Swal.fire("Action Canceled!", "", "info");
            return false;
        }
    });
});
