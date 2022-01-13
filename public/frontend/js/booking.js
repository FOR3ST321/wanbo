$('.single-features-area').click(function(){
    // console.log($(this).data('id'));

    const id = $(this).data('id')
    const packageTitle = $(this).data('title')

    Swal.fire({
        title: `Pick Package ${packageTitle} ?`,
        showDenyButton: true,
        confirmButtonText: 'Confirm',
        denyButtonText: 'Cancel',
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.replace(`/wanbo/package/${id}`);
        }
    })
})
