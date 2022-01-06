$("#datepicker").on("change", function (e) {
    var form = $(this).parents('form');
    form.submit();
});
