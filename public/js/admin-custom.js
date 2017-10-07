/*
|------------------------------------------------------------------------------------
| render boolean column to checkbox
|------------------------------------------------------------------------------------
*/
function renderBoolColumn(tableauID, boolClass) {
  $(tableauID + ' tr').each(function (i, row) {
    $('td', this).each(function (j, cell) {
      if ($(tableauID + ' th').eq(j).hasClass( boolClass )) {
        if (cell.innerHTML == '1') {cell.innerHTML = '<div class="text-center text-success"><span class="fa fa-check-circle"></span></div>';}
        if (cell.innerHTML == '0') {cell.innerHTML = '<div class="text-center text-danger"><span class="fa fa-times-circle lg"></span></div>';}
      }
    });
  });
};

(function($) {
    /*
    |------------------------------------------------------------------------------------
    | Init DateTime
    |------------------------------------------------------------------------------------
    */
    $('.datetime').datetimepicker({
         format: 'Y-m-d H:i'
    });

    /*
    |------------------------------------------------------------------------------------
    | We change select we send the form
    |------------------------------------------------------------------------------------
    */
    $('select.onchange').change(function() {
        $(this).closest('form').submit();
    })


    /*
    |------------------------------------------------------------------------------------
    | Chosen
    |------------------------------------------------------------------------------------
    */
    if ($('select.chosen').length > 0) {
        $('select.chosen').chosen({
            // no_results_text: "Oops, rien n'a été trouvé!",
        });
    }

    /*
    |------------------------------------------------------------------------------------
    | iCheck
    |------------------------------------------------------------------------------------
    */
    //$('input').iCheck({
    //  checkboxClass: 'icheckbox_square-blue',
    //  radioClass: 'iradio_square-blue',
    //  increaseArea: '20%' // optional
    //});

    /*
    |------------------------------------------------------------------------------------
    | Submit delete form
    |------------------------------------------------------------------------------------
    */
    $(document).on('click', "form.delete button", function(e) {
        var _this = $(this);
        e.preventDefault();
        swal({
            title: 'Are you sure?',
            //text: 'Are you sure to continue ?',
            type: 'error',
            showCancelButton: true,
            confirmButtonColor: '#DD4B39',
            cancelButtonColor: '#00C0EF',
            confirmButtonText: 'Yes',
            cancelButtonText: 'No',
            closeOnConfirm: false
        }).then(function(isConfirm) {
            if (isConfirm) {
                _this.closest("form").submit();
            }
        });
    });


})(jQuery);
