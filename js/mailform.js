// 定休日（日/月/火）を選択不可にする
jQuery(function ($) {
    $('.hasDatepicker').datepicker('option', 'beforeShowDay', function (date) {
        var ret = [(date.getDay() != 0 && date.getDay() != 6)];
        return ret;
    });
});
