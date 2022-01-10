$("#logout").click(function() {
    Swal.fire({
        title: `Are you sure want to logout ??`,
        showDenyButton: true,
        confirmButtonText: 'Logout',
        denyButtonText: 'Cancel',
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.replace("/wanbo/logout");
        }
    })
})