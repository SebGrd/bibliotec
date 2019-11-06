$(document).ready(function(){

    // M.AutoInit();
    // M.updateTextFields();

    $('.datepicker').datepicker({
        yearRange: 80,
        // maxDate: new Date()
    });
    $('.modal').modal();
    $('select').formSelect();


    var BookAddSection = $('.main-dashboard .book-add');
    var BookListSection = $('.main-dashboard .book-list');
    var userAddSection = $('.main-dashboard .user-add');
    var userListSection = $('.main-dashboard .user-list');
    var dashboardStats = $('.main-dashboard .dashboard-stats');

    function hideAllDash(){
        BookAddSection.hide();
        BookListSection.hide();
        userAddSection.hide();
        userListSection.hide();
        dashboardStats.hide();
    }

    hideAllDash();
    dashboardStats.show();

    $('#bookAdd').click(function () {
        hideAllDash();
        BookAddSection.fadeIn();
    });

    $('#bookList').click(function () {
        hideAllDash();
        BookListSection.fadeIn();
    });

    $('#userAdd').click(function () {
        hideAllDash();
        userAddSection.fadeIn();
    });

    $('#userList').click(function () {
        hideAllDash();
        $('.main-dashboard .user-list').fadeIn();
    });
});