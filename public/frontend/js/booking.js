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

$('#total_time').change(function(){
    let val = parseInt($(this).val());
    let prices = parseInt($("#total_price").data('prices'));
    $("#total_price").text(val*prices/60);
})

$('.pickroom').hover(function(){
    if($(this).attr('data-disabled') != 1){
        $(this).css({
            "background-color" : '#9f80e9',
            'cursor' : 'pointer'
        });
    }
})

$('.pickroom').mouseleave(function(){
    if($(this).attr('data-disabled') != 1){
        $(this).css({
            "background-color" : '#ffffff',
        });
    }
});

$('.radio-group .radio').click(function(){
    if($(this).attr('data-disabled') != 1){
        $(this).parent().find('.radio').removeClass('selected');
        $(this).addClass('selected');
        var val = $(this).attr('data-value');
        // alert(val);
        $(this).parent().find('input').val(val);
    }
});

//form submit
$("#formBtn").on("click", function (e) {
    e.preventDefault();
    var form = $(this).parents('form');

    if($('#selected_room').val() == ''){
        Swal.fire({
            icon: 'error',
            title: 'Please pick room first'
        })
        return false;
    }
    
    Swal.fire({
        title: 'Confirm order?',
        icon: 'question',
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
