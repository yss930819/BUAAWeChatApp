//pre-excuted codes
$(function() {
    $("[data-role='navbar']").navbar();
    $("[data-role='header'], [data-role='footer']").toolbar();
});
//pre-excuted codes end
$(document).on("pagecontainerchange", function() {
    //Cancel the automatically-changing of the document title by jQuery Mobile
    document.title = "北航微教务 - by Pride 1952 @ BUAA";
    // Each of the four pages in this demo has a data-title attribute
    // which value is equal to the text of the nav button
    // For example, on first page: <div data-role="page" data-title="Info">
    var current = $(".ui-page-active").jqmData("title");
    // Change the heading
    $("[data-role='header'] h1").text(current);
    //if it is a sub page, then wee add a back button and don't remove active class to the current active nav button
    var subPageTitles = ["GPA计算", "最新成绩", "所有成绩", "成绩记录本"];
    for (var index in subPageTitles) {
        if (current === subPageTitles[index]) {
            $("#back_button").css("visibility", "visible");
            return false;
        }
    }
    // Remove active class from nav buttons
    $("[data-role='navbar'] a.ui-btn-active").removeClass("ui-btn-active");
    // Add active class to current nav button
    $("[data-role='navbar'] a").each(function() {
        if ($(this).text() === current) {
            $(this).addClass("ui-btn-active");
        }
        $("#back_button").css("visibility", "hidden");
    });
});