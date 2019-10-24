$(document).ready(function(){
    $('.datepicker').datepicker({
        yearRange: 80,
        maxDate: new Date()
    });
    $('select').formSelect();


    var BookAddSection = $('.main-dashboard .book-add');
    var userAddSection = $('.main-dashboard .user-add');
    var userListSection = $('.main-dashboard .user-list');
    var dashboardStats = $('.main-dashboard .dashboard-stats');

    function hideAllDash(){
        BookAddSection.hide();
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

    $('#userAdd').click(function () {
        hideAllDash();
        userAddSection.fadeIn();
    });

    $('#userList').click(function () {
        hideAllDash();
        $('.main-dashboard .user-list').fadeIn();
    });
});