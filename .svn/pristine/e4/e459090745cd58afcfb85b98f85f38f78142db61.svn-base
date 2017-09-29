/***************************************************************************
 *
 * script.js
 *
 ***************************************************************************/

$(document).ready(function () {
    setTimeout(function () {
        $('#flashMessage').hide('slow');
    }, 3000);
    $('.sPolicy').click(function () {
        $('.policy').slideToggle('slow');
    })

    $('.sTerms').click(function () {
        $('.terms').slideToggle('slow');
    })
    $('.hoverJS').hover(function () {
        $(this).stop().fadeTo(100, 0.8);
    }, function () {
        $(this).stop().fadeTo(100, 1);
    });

    $('.accordion .itemTitle').click(function () {
        $('.accordion .item').removeClass('active');
        $(this).parent().toggleClass('active');
        $(this).next().stop().slideToggle(300);
        var scrt = $(this).position().top + $(this).parent().parent().parent().scrollTop();
        $(this).parent().parent().parent().animate({
            scrollTop: scrt
        }, 500);
        window.href.location = window.href.location + $(this).attr('href');
        return false;
    });

    setHeight();

    $(window).load(function () {
        getLink();

        setHeight();

        if ($(window).width() > 768) {
            $('.accordion').niceScroll({
                cursorcolor: '#dddddd',
                cursorwidth: '15px',
                cursorborderradius: 0
            });

            $('.listPage li ul').niceScroll({
                cursorcolor: '#dddddd',
                cursorwidth: '8px',
                cursorborderradius: 0,
                railpadding: {top: 0, right: 2, left: 0, bottom: 0}
            });
        }
    });

    $(window).resize(function () {
        setHeight();

        if ($(window).width() <= 768) {
            $('.accordion').css('height', $(window).height() - $('header').outerHeight() - 51);
            $('.listPage').css('height', $(window).height() - $('header').outerHeight() - $('#footer').height() - 10);
        }

        processSidebarLink();
    });

    processSidebarLink();

    $('#btnMenu').click(function () {
        $(this).toggleClass('active');
        $(this).find('img').stop().fadeToggle();
        $('#overlay').stop().fadeToggle(400)
        $('#mainSidebar').toggleClass('opened');
    });

    $('#overlay').click(function () {
        $('#btnMenu').click();
    });

    $('.listPage li li a').click(function () {
        $('.listPage li li').removeClass('active');
        $(this).parent().addClass('active');
        var defaultID = $(this).attr('href');
        $('.innerContent .tab').fadeOut(200);
        $(defaultID).addClass('active').stop().fadeIn(200);
        $('#btnMenu').click();
        return false;
    });

    $('a[href^=#]:not(.tabLink):not(.itemTitle)').click(function () {
        getLink($(this).attr('href'));
    });

});

function setHeight() {
    if ($(window).width() > 768) {
        $('body').css('height', $(window).height());
        $('#content').css('height', $(window).height() - $('header').height());
        $('.accordion').css('height', $('#mainContent').height() - 90);
        $('.accordion .inner').css('height', $('#mainContent').height() - 89);
        $('.listPage li ul').css('height', $('#mainContent').height() - $('.sidebarContent .searchForm').outerHeight());
        $('.innerContent table').css('width', $('.innerContent').width() - 60);
        $('.innerContent table.half').css('width', $('.innerContent').width() - 75);
    }
}

function getLink(hashUrl) {
    var target = location.hash.slice(1);
    if (hashUrl != null)
        target = hashUrl.slice(1);
    if (target != '') {
        for (var i = 1; i <= target.length; i++) {
            var pageNumber = target.substr(0, 1);
            var tabNumber = target.substr(1, 1);
            var contentNumber = target.substr(2, 1);
        }
        var pageSelector = $('.listPage > li:nth-child(' + pageNumber + ') > a');
        pageSelector.click();
        var tabSelector = $('.listPage > li:nth-child(' + pageNumber + ') li:nth-child(' + tabNumber + ') a');
        tabSelector.click();
        var contentSelector = $('.tab.active .item:nth-child(' + contentNumber + ') > a');
        contentSelector.click();
        $('#btnMenu').click();
    }
}

var tf = true;
function processSidebarLink() {
    if ($(window).width() > 768) {
        $('.listPage > li > a').click(function () {
            $('.default').hide();
            $('.accordion .itemContent').fadeOut(200);
            $('.listPage li').removeClass('active');
            $(this).parent().addClass('active');
            $('.listPage li ul').hide();
            if (tf && location.hash.slice(1) != '') {
                $(this).next().fadeIn(200);
                tf = false;
            } else {
                $(this).next().fadeIn(200).find('li').first().addClass('active').find('a').click();
            }
            return false;
        });
    } else {
        $('.accordion').css('height', $(window).height() - $('header').outerHeight() - 51);
        $('.listPage').css('height', $(window).height() - $('header').outerHeight() - $('#footer').height() - 10);

        $('.listPage > li > a').click(function () {
            $('.listPage li ul').slideUp(200);
            $(this).next().stop().slideToggle(200);
            return false;
        });
    }
}
$(document).ready(function () {
    $('#formA02').validationEngine({
        scrollOffset: 200,
        promptPosition: 'topLeft'
    });
    // check placeholder ie < 10
    var supportsPlaceholder = 'placeholder' in document.createElement('input');
    $('[placeholder]').each(function () {
        if (!supportsPlaceholder) {
            var self = $(this);

            self.val(self.attr('placeholder')).addClass('placeholder');

            self.focus(function () {
                if (self.val() == self.attr('placeholder')) {
                    self.val('').removeClass('placeholder');
                }
            });

            self.blur(function () {
                if (self.val() == '') {
                    self.val(self.attr('placeholder')).addClass('placeholder');
                }
            });

            $('[placeholder]').parents('form').submit(function () {
                $(this).find('[placeholder]').each(function () {
                    var input = $(this);
                    if (input.val() == input.attr('placeholder')) {
                        input.val('');
                    }
                })
            });
        }
    });


})