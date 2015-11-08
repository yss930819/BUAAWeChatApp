//pre-excuted codes
$(function() {
    $("[data-role='navbar']").navbar();
    $("[data-role='footer']").toolbar();
});
//pre-excuted codes end
$(document).on("pagecontainerchange",
function() {
    // Each of the four pages in this demo has a data-title attribute
    // which value is equal to the text of the nav button
    // For example, on first page: <div data-role="page" data-title="Info">
    var current = $(".ui-page-active").jqmData("title");
    //Change the title of the webpage
    var $body = $('body');
        document.title = current;
        // hack在微信等webview中无法修改document.title的情况
        var $iframe = $('<iframe src="/favicon.ico"></iframe>');
        $iframe.on('load',function() {
            setTimeout(function() {
                $iframe.off('load').remove();
            }, 0);
        }).appendTo($body);
    //if it is a sub page, then we add a back button and don't remove active class to the current active nav button
    var subPageTitles = ["GPA计算", "最新成绩", "所有成绩", "成绩记录本", "资讯", "校历", "意见"];
    for (var index in subPageTitles) {
        if (current === subPageTitles[index]) {
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
    });
});

$(document).on("pageshow", "#syllabus-page-dayview", prepareSwiperJS);

function prepareSwiperCSS() {
    if (!$("[href='/css/swiper.min.css']").length) {
        $("<link>").attr({
            rel: "stylesheet",
            type: "text/css",
            href: "/css/swiper.min.css"
        }).appendTo("head");
    }
}

function prepareSwiperJS() {
    if ("undefined" == typeof swiper) {
        var swiper = new Swiper('.swiper-container', {
            pagination: '.swiper-pagination',
            slidesPerView: 1,
            loop: true,
            paginationClickable: true,
            centeredSlides: true,
            spaceBetween: 30,
            nextButton: '.swiper-button-next',
            prevButton: '.swiper-button-prev',
        });
    }
    $(".ui-table-columntoggle-btn").remove();
    $('td').fontFlex(6, 30, 25);
}

(function($) {

    $.fn.fontFlex = function(min, max, mid) {

        var $this = this;

        $(window).resize(function() {

            var size = window.innerWidth / mid;

            if (size < min) size = min;
            if (size > max) size = max;

            $this.css('font-size', size + 'px');

        }).trigger('resize');
    };

})(jQuery);

function insertTables() {
    var slides=new Array("slide-sunday","slide-monday","slide-tuesday","slide-wednesday","slide-thursday","slide-friday","slide-saturday");
    for (currentSlideIndex in slides) {
        $("#"+slides[currentSlideIndex]).html(insertTable(slides[currentSlideIndex]));
    }
}

function insertTable(currentSlide) {
    return "<table data-role=\"table\" data-mode=\"columntoggle\" class=\"syllabus-table ui-shadow table-stripe ui-responsive ui-corner-all\" data-column-btn-theme=\"b\" data-column-btn-text=\"Columns to display...\" data-column-popup-theme=\"a\">"+
"            <thead>"+
"              <tr class=\"ui-bar-d\">"+
"                <th scope=\"col\">时间</th>"+
"                <th scope=\"col\">科目 地点</th>"+
"              </tr>"+
"            </thead>"+
"            <tbody>"+
"              <tr>"+
"                <td>08:00~10:00</td>"+
"                <td>The quick brown fox jumps over the lazy dog</td>"+
"              </tr>"+
"              <tr>"+
"                <td>&nbsp;</td>"+
"                <td>&nbsp;</td>"+
"              </tr>"+
"              <tr>"+
"                <td>&nbsp;</td>"+
"                <td>&nbsp;</td>"+
"              </tr>"+
"              <tr>"+
"                <td>&nbsp;</td>"+
"                <td>&nbsp;</td>"+
"              </tr>"+
"              <tr>"+
"                <td>&nbsp;</td>"+
"                <td>&nbsp;</td>"+
"              </tr>"+
"              <tr>"+
"                <td>&nbsp;</td>"+
"                <td>&nbsp;</td>"+
"              </tr>"+
"              <tr>"+
"                <td>&nbsp;</td>"+
"                <td>&nbsp;</td>"+
"              </tr>"+
"            </tbody>"+
"          </table>";
}