$(".formBtn").on("click", function (e) {
    e.preventDefault();
    var form = $(this).parents('form');
    Swal.fire({
        title: 'Delete Data : ' + $(this).attr("value") + ' ?',
        text: 'This action cannot be undone!',
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
