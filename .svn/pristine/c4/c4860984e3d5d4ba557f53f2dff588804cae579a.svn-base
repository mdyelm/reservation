$(function() {
    var hostname = window.location.hostname;
    var _url = 'http://'+hostname+'/taku/';
    var pageSizeDF = 20;
    var lastPage = '';
    var valpageOrderBy = $('.selFilter').val();
    if (valpageOrderBy == 'idASC') {
        var valOrder = 'ASC';
        valpageOrderBy = 'id';
    } else {
        var valOrder = 'DESC';
    }
    // list job default
    if ($('#hideByDeadline').is(':checked')) {

        API.lstjob({
            pageSize: pageSizeDF,
            pageNumber: 1,
            pageOrder: valOrder,
            pageOrderBy: valpageOrderBy,
            hideByDeadline: 'hide'
        }, function(response) {
            if (response) {
                var divJob = $('.lstJob');
                var pagingNum = $('.pagingNum');
                $('#totalItem').html(response.result.totalItem);
                $('#to-from').html('1〜'+pageSizeDF);
                var data = response.result.data;
                var html = '';
                for (var i = 0; i < data.length; i++) {
                    html += '<article><div class="row">';
                    html += '<div class="col-xs-4 col-sm-2 col-md-2"><img src="' + _url + data[i].job_image + '" alt="' + data[i].job_slug + '" class="img_thumb_job" /></div>';
                    html += '<div class="col-xs-8 col-sm-7 col-md-7">';
                    html += '<h5><a href="' + _url + 'takusaler/job-detail/' + data[i].job_slug + '/' + data[i].id + '">' + data[i].job_title + '</a></h5>';
                    html += '<p>クライアント：' + data[i].corp_name + '</p>';
                    html += '<ul><li class="fee">時給：<span>' + data[i].job_salary + '円</span></li>';
                    if (data[i].job_deadline == 0) {
                        html += '<li class="status">募集終了</li></ul></div>';
                        html += '<div class="col-xs-12 col-sm-3 col-md-3 text-right"><button value="' + data[i].id + '" corpid="'+data[i].corp_id+'" class="btn inquiry disabled"><i class="fa fa-envelope-o"></i>問い合わせる</button></div></article>';
                    } else {
                        html += '<li class="status">残り<span>' + data[i].job_deadline + '</span>日</li></ul></div>';
                        html += '<div class="col-xs-12 col-sm-3 col-md-3 text-right"><button value="' + data[i].id + '" corpid="'+data[i].corp_id+'" class="btn inquiry"><i class="fa fa-envelope-o"></i>問い合わせる</button></div></article>';
                    }
                    divJob.html(html);
                }
                var btnPre = '<li num="1"><a >先頭へ</a></li>';
                var btnNext = '<li  num="' + response.result.numberPage + '"><a>最後へ</a></li>';
                var htmlPaging = '';
                for (var i = 0; i < response.result.numberPage; i++) {
                    var NumPage = i + 1;
                    htmlPaging += '<li num="' + NumPage + '"><a>' + NumPage + '</a></li>';
                }
                pagingNum.append(btnPre);
                pagingNum.append(htmlPaging);
                pagingNum.append(btnNext);
                $('.pagingNum li:first-child').addClass('disabled');
                $('.pagingNum li:nth-child(2)').addClass('active');
                lastPage = response.result.numberPage;
            }
        });
    }else{
        API.lstjob({
            pageSize: pageSizeDF,
            pageNumber: 1,
            pageOrder: valOrder,
            pageOrderBy: valpageOrderBy
        }, function(response) {
            if (response) {
                var divJob = $('.lstJob');
                var pagingNum = $('.pagingNum');
                $('#totalItem').html(response.result.totalItem);
                $('#to-from').html('1〜'+pageSizeDF);
                var data = response.result.data;
                var html = '';
                for (var i = 0; i < data.length; i++) {
                    html += '<article><div class="row">';
                    html += '<div class="col-xs-4 col-sm-2 col-md-2"><img src="' + _url + data[i].job_image + '" alt="' + data[i].job_slug + '" class="img_thumb_job" /></div>';
                    html += '<div class="col-xs-8 col-sm-7 col-md-7">';
                    html += '<h5><a href="' + _url + 'takusaler/job-detail/' + data[i].job_slug + '/' + data[i].id + '">' + data[i].job_title + '</a></h5>';
                    html += '<p>クライアント：' + data[i].corp_name + '</p>';
                    html += '<ul><li class="fee">時給：<span>' + data[i].job_salary + '円</span></li>';
                    if (data[i].job_deadline == 0) {
                        html += '<li class="status">募集終了</li></ul></div>';
                        html += '<div class="col-xs-12 col-sm-3 col-md-3 text-right"><button value="' + data[i].id + '" corpid="'+data[i].corp_id+'" class="btn inquiry disabled"><i class="fa fa-envelope-o"></i>問い合わせる</button></div></article>';
                    } else {
                        html += '<li class="status">残り<span>' + data[i].job_deadline + '</span>日</li></ul></div>';
                        html += '<div class="col-xs-12 col-sm-3 col-md-3 text-right"><button value="' + data[i].id + '" corpid="'+data[i].corp_id+'" class="btn inquiry"><i class="fa fa-envelope-o"></i>問い合わせる</button></div></article>';
                    }
                    divJob.html(html);
                }
                var btnPre = '<li num="1"><a >先頭へ</a></li>';
                var btnNext = '<li  num="' + response.result.numberPage + '"><a>最後へ</a></li>';
                var htmlPaging = '';
                for (var i = 0; i < response.result.numberPage; i++) {
                    var NumPage = i + 1;
                    htmlPaging += '<li num="' + NumPage + '"><a>' + NumPage + '</a></li>';
                }
                pagingNum.append(btnPre);
                pagingNum.append(htmlPaging);
                pagingNum.append(btnNext);
                $('.pagingNum li:first-child').addClass('disabled');
                $('.pagingNum li:nth-child(2)').addClass('active');
                lastPage = response.result.numberPage;
            }
        });
    }
    
    // paging
    $(document).on("click", ".pagingNum li", function() {
        if ($('#hideByDeadline').is(':checked')) {
            var valpageOrderBy = $('.selFilter').val();
            if (valpageOrderBy == 'idASC') {
                var valOrder = 'ASC';
                valpageOrderBy = 'id';
            } else {
                var valOrder = 'DESC';
            }
            if (!$(this).hasClass('disabled')) {
                $('.pagingNum li').removeClass('active');
                $(this).addClass('active');
                var pageNumber = $(this).attr('num');
                if (pageNumber == lastPage) {
                    $('.pagingNum li:first-child').removeClass('disabled');
                    $('.pagingNum li:last-child').addClass('disabled');
                    $('.pagingNum li').removeClass('active');
                    $('.pagingNum li:nth-last-child(2)').addClass('active');
                } else if (pageNumber == 1) {
                    $('.pagingNum li').removeClass('active');
                    $('.pagingNum li:nth-child(2)').addClass('active');
                    $('.pagingNum li:last-child').removeClass('disabled');
                    $('.pagingNum li:first-child').addClass('disabled');
                } else {
                    $('.pagingNum li').removeClass('disabled');
                }
                API.lstjob({
                    pageSize: pageSizeDF,
                    pageNumber: pageNumber,
                    pageOrder: valOrder,
                    pageOrderBy: valpageOrderBy,
                    hideByDeadline: 'hide'
                }, function(response) {
                    if (response) {
                        var divJob = $('.lstJob');
                        if (pageNumber == lastPage) {
                            $('#to-from').html((pageSizeDF*(pageNumber -1) + 1)+'〜'+response.result.totalItem);
                        }else{
                            $('#to-from').html((pageSizeDF*(pageNumber -1) + 1)+'〜'+(pageSizeDF*(pageNumber -1) + pageSizeDF));
                        }
                        var data = response.result.data;
                        var html = '';
                        for (var i = 0; i < data.length; i++) {
                            html += '<article><div class="row">';
                            html += '<div class="col-xs-4 col-sm-2 col-md-2"><img src="' + _url + data[i].job_image + '" alt="' + data[i].job_slug + '" class="img_thumb_job" /></div>';
                            html += '<div class="col-xs-8 col-sm-7 col-md-7">';
                            html += '<h5><a href="' + _url + 'takusaler/job-detail/' + data[i].job_slug + '/' + data[i].id + '">' + data[i].job_title + '</a></h5>';
                            html += '<p>クライアント：' + data[i].corp_name + '</p>';
                            html += '<ul><li class="fee">時給：<span>' + data[i].job_salary + '円</span></li>';
                            if (data[i].job_deadline == 0) {
                                html += '<li class="status">募集終了</li></ul></div>';
                                html += '<div class="col-xs-12 col-sm-3 col-md-3 text-right"><button value="' + data[i].id + '" corpid="'+data[i].corp_id+'" class="btn inquiry disabled"><i class="fa fa-envelope-o"></i>問い合わせる</button></div></article>';
                            } else {
                                html += '<li class="status">残り<span>' + data[i].job_deadline + '</span>日</li></ul></div>';
                                html += '<div class="col-xs-12 col-sm-3 col-md-3 text-right"><button value="' + data[i].id + '" corpid="'+data[i].corp_id+'" class="btn inquiry"><i class="fa fa-envelope-o"></i>問い合わせる</button></div></article>';
                            }
                            divJob.html(html);
                        }
                    }
                });
            }
        } else {
            var valpageOrderBy = $('.selFilter').val();
            if (valpageOrderBy == 'idASC') {
                var valOrder = 'ASC';
                valpageOrderBy = 'id';
            } else {
                var valOrder = 'DESC';
            }
            if (!$(this).hasClass('disabled')) {
                $('.pagingNum li').removeClass('active');
                $(this).addClass('active');
                var pageNumber = $(this).attr('num');
                if (pageNumber == lastPage) {
                    $('.pagingNum li:first-child').removeClass('disabled');
                    $('.pagingNum li:last-child').addClass('disabled');
                    $('.pagingNum li').removeClass('active');
                    $('.pagingNum li:nth-last-child(2)').addClass('active');
                } else if (pageNumber == 1) {
                    $('.pagingNum li').removeClass('active');
                    $('.pagingNum li:nth-child(2)').addClass('active');
                    $('.pagingNum li:last-child').removeClass('disabled');
                    $('.pagingNum li:first-child').addClass('disabled');
                } else {
                    $('.pagingNum li').removeClass('disabled');
                }
                API.lstjob({
                    pageSize: pageSizeDF,
                    pageNumber: pageNumber,
                    pageOrder: valOrder,
                    pageOrderBy: valpageOrderBy,
                }, function(response) {
                    if (response) {
                        var divJob = $('.lstJob');
                        var data = response.result.data;
                        if (pageNumber == lastPage) {
                            $('#to-from').html((pageSizeDF*(pageNumber -1) + 1)+'〜'+response.result.totalItem);
                        }else{
                            $('#to-from').html((pageSizeDF*(pageNumber -1) + 1)+'〜'+(pageSizeDF*(pageNumber -1) + pageSizeDF));
                        }
                        var html = '';
                        for (var i = 0; i < data.length; i++) {
                            html += '<article><div class="row">';
                            html += '<div class="col-xs-4 col-sm-2 col-md-2"><img src="' + _url + data[i].job_image + '" alt="' + data[i].job_slug + '" class="img_thumb_job" /></div>';
                            html += '<div class="col-xs-8 col-sm-7 col-md-7">';
                            html += '<h5><a href="' + _url + 'takusaler/job-detail/' + data[i].job_slug + '/' + data[i].id + '">' + data[i].job_title + '</a></h5>';
                            html += '<p>クライアント：' + data[i].corp_name + '</p>';
                            html += '<ul><li class="fee">時給：<span>' + data[i].job_salary + '円</span></li>';
                            if (data[i].job_deadline == 0) {
                                html += '<li class="status">募集終了</li></ul></div>';
                                html += '<div class="col-xs-12 col-sm-3 col-md-3 text-right"><button value="' + data[i].id + '" corpid="'+data[i].corp_id+'" class="btn inquiry disabled"><i class="fa fa-envelope-o"></i>問い合わせる</button></div></article>';
                            } else {
                                html += '<li class="status">残り<span>' + data[i].job_deadline + '</span>日</li></ul></div>';
                                html += '<div class="col-xs-12 col-sm-3 col-md-3 text-right"><button value="' + data[i].id + '" corpid="'+data[i].corp_id+'" class="btn inquiry"><i class="fa fa-envelope-o"></i>問い合わせる</button></div></article>';
                            }
                            divJob.html(html);
                        }
                    }
                });
            }
        }
    });
    $(document).on("change", ".selFilter", function() {
        if ($('#hideByDeadline').is(':checked')) {
            var valpageOrderBy = $(this).val();
            if (valpageOrderBy == 'idASC') {
                var valOrder = 'ASC';
                valpageOrderBy = 'id';
            } else {
                var valOrder = 'DESC';
            }
            API.lstjob({
                pageSize: pageSizeDF,
                pageNumber: 1,
                pageOrder: valOrder,
                pageOrderBy: valpageOrderBy,
                hideByDeadline: 'hide'
            }, function(response) {
                if (response) {
                    var divJob = $('.lstJob');
                    var pagingNum = $('.pagingNum');
                    var data = response.result.data;
                    $('#to-from').html('1〜'+pageSizeDF);
                    var html = '';
                    for (var i = 0; i < data.length; i++) {
                        html += '<article><div class="row">';
                        html += '<div class="col-xs-4 col-sm-2 col-md-2"><img src="' + _url + data[i].job_image + '" alt="' + data[i].job_slug + '" class="img_thumb_job" /></div>';
                        html += '<div class="col-xs-8 col-sm-7 col-md-7">';
                        html += '<h5><a href="' + _url + 'takusaler/job-detail/' + data[i].job_slug + '/' + data[i].id + '">' + data[i].job_title + '</a></h5>';
                        html += '<p>クライアント：' + data[i].corp_name + '</p>';
                        html += '<ul><li class="fee">時給：<span>' + data[i].job_salary + '円</span></li>';
                        if (data[i].job_deadline == 0) {
                            html += '<li class="status">募集終了</li></ul></div>';
                            html += '<div class="col-xs-12 col-sm-3 col-md-3 text-right"><button value="' + data[i].id + '" corpid="'+data[i].corp_id+'" class="btn inquiry disabled"><i class="fa fa-envelope-o"></i>問い合わせる</button></div></article>';
                        } else {
                            html += '<li class="status">残り<span>' + data[i].job_deadline + '</span>日</li></ul></div>';
                            html += '<div class="col-xs-12 col-sm-3 col-md-3 text-right"><button value="' + data[i].id + '" corpid="'+data[i].corp_id+'" class="btn inquiry"><i class="fa fa-envelope-o"></i>問い合わせる</button></div></article>';
                        }
                        divJob.html(html);
                    }
                    var btnPre = '<li num="1"><a >先頭へ</a></li>';
                    var btnNext = '<li  num="' + response.result.numberPage + '"><a>最後へ</a></li>';
                    var htmlPaging = '';
                    for (var i = 0; i < response.result.numberPage; i++) {
                        var NumPage = i + 1;
                        htmlPaging += '<li num="' + NumPage + '"><a>' + NumPage + '</a></li>';
                    }
                    pagingNum.html('');
                    pagingNum.append(btnPre);
                    pagingNum.append(htmlPaging);
                    pagingNum.append(btnNext);
                    $('.pagingNum li:first-child').addClass('disabled');
                    $('.pagingNum li:nth-child(2)').addClass('active');
                    lastPage = response.result.numberPage;
                }
            });
        } else {
            var valpageOrderBy = $(this).val();
            if (valpageOrderBy == 'idASC') {
                var valOrder = 'ASC';
                valpageOrderBy = 'id';
            } else {
                var valOrder = 'DESC';
            }
            API.lstjob({
                pageSize: pageSizeDF,
                pageNumber: 1,
                pageOrder: valOrder,
                pageOrderBy: valpageOrderBy,
            }, function(response) {
                if (response) {
                    var divJob = $('.lstJob');
                    var pagingNum = $('.pagingNum');
                    $('#to-from').html('1〜'+pageSizeDF);
                    var data = response.result.data;
                    var html = '';
                    for (var i = 0; i < data.length; i++) {
                        html += '<article><div class="row">';
                        html += '<div class="col-xs-4 col-sm-2 col-md-2"><img src="' + _url + data[i].job_image + '" alt="' + data[i].job_slug + '" class="img_thumb_job" /></div>';
                        html += '<div class="col-xs-8 col-sm-7 col-md-7">';
                        html += '<h5><a href="' + _url + 'takusaler/job-detail/' + data[i].job_slug + '/' + data[i].id + '">' + data[i].job_title + '</a></h5>';
                        html += '<p>クライアント：' + data[i].corp_name + '</p>';
                        html += '<ul><li class="fee">時給：<span>' + data[i].job_salary + '円</span></li>';
                        if (data[i].job_deadline == 0) {
                            html += '<li class="status">募集終了</li></ul></div>';
                            html += '<div class="col-xs-12 col-sm-3 col-md-3 text-right"><button value="' + data[i].id + '" corpid="'+data[i].corp_id+'" class="btn inquiry disabled"><i class="fa fa-envelope-o"></i>問い合わせる</button></div></article>';
                        } else {
                            html += '<li class="status">残り<span>' + data[i].job_deadline + '</span>日</li></ul></div>';
                            html += '<div class="col-xs-12 col-sm-3 col-md-3 text-right"><button value="' + data[i].id + '" corpid="'+data[i].corp_id+'" class="btn inquiry"><i class="fa fa-envelope-o"></i>問い合わせる</button></div></article>';
                        }
                        divJob.html(html);
                    }
                    var btnPre = '<li num="1"><a >先頭へ</a></li>';
                    var btnNext = '<li  num="' + response.result.numberPage + '"><a>最後へ</a></li>';
                    var htmlPaging = '';
                    for (var i = 0; i < response.result.numberPage; i++) {
                        var NumPage = i + 1;
                        htmlPaging += '<li num="' + NumPage + '"><a>' + NumPage + '</a></li>';
                    }
                    pagingNum.html('');
                    pagingNum.append(btnPre);
                    pagingNum.append(htmlPaging);
                    pagingNum.append(btnNext);
                    $('.pagingNum li:first-child').addClass('disabled');
                    $('.pagingNum li:nth-child(2)').addClass('active');
                    lastPage = response.result.numberPage;
                }
            });
        }
    });
    $(document).on("click", "#hideByDeadline", function() {
        if ($('#hideByDeadline').is(':checked')) {
            var valpageOrderBy = $('.selFilter').val();
            if (valpageOrderBy == 'idASC') {
                var valOrder = 'ASC';
                valpageOrderBy = 'id';
            } else {
                var valOrder = 'DESC';
            }
            API.lstjob({
                pageSize: pageSizeDF,
                pageNumber: 1,
                pageOrder: valOrder,
                pageOrderBy: valpageOrderBy,
                hideByDeadline: 'hide'
            }, function(response) {
                $('#totalItem').html(response.result.totalItem);
                if (response) {
                    var divJob = $('.lstJob');
                    var pagingNum = $('.pagingNum');
                    $('#to-from').html('1〜'+pageSizeDF);
                    var data = response.result.data;
                    var html = '';
                    for (var i = 0; i < data.length; i++) {
                        html += '<article><div class="row">';
                        html += '<div class="col-xs-4 col-sm-2 col-md-2"><img src="' + _url + data[i].job_image + '" alt="' + data[i].job_slug + '" class="img_thumb_job" /></div>';
                        html += '<div class="col-xs-8 col-sm-7 col-md-7">';
                        html += '<h5><a href="' + _url + 'takusaler/job-detail/' + data[i].job_slug + '/' + data[i].id + '">' + data[i].job_title + '</a></h5>';
                        html += '<p>クライアント：' + data[i].corp_name + '</p>';
                        html += '<ul><li class="fee">時給：<span>' + data[i].job_salary + '円</span></li>';
                        if (data[i].job_deadline == 0) {
                            html += '<li class="status">募集終了</li></ul></div>';
                            html += '<div class="col-xs-12 col-sm-3 col-md-3 text-right"><button value="' + data[i].id + '" corpid="'+data[i].corp_id+'" class="btn inquiry disabled"><i class="fa fa-envelope-o"></i>問い合わせる</button></div></article>';
                        } else {
                            html += '<li class="status">残り<span>' + data[i].job_deadline + '</span>日</li></ul></div>';
                            html += '<div class="col-xs-12 col-sm-3 col-md-3 text-right"><button value="' + data[i].id + '" corpid="'+data[i].corp_id+'" class="btn inquiry"><i class="fa fa-envelope-o"></i>問い合わせる</button></div></article>';
                        }
                        divJob.html(html);
                    }
                    var btnPre = '<li num="1"><a >先頭へ</a></li>';
                    var btnNext = '<li  num="' + response.result.numberPage + '"><a>最後へ</a></li>';
                    var htmlPaging = '';
                    for (var i = 0; i < response.result.numberPage; i++) {
                        var NumPage = i + 1;
                        htmlPaging += '<li num="' + NumPage + '"><a>' + NumPage + '</a></li>';
                    }
                    pagingNum.html('');
                    pagingNum.append(btnPre);
                    pagingNum.append(htmlPaging);
                    pagingNum.append(btnNext);
                    $('.pagingNum li:first-child').addClass('disabled');
                    $('.pagingNum li:nth-child(2)').addClass('active');
                    lastPage = response.result.numberPage;
                }
            });
        } else {
            var valpageOrderBy = $('.selFilter').val();
            if (valpageOrderBy == 'idASC') {
                var valOrder = 'ASC';
                valpageOrderBy = 'id';
            } else {
                var valOrder = 'DESC';
            }
            API.lstjob({
                pageSize: pageSizeDF,
                pageNumber: 1,
                pageOrder: valOrder,
                pageOrderBy: valpageOrderBy,
            }, function(response) {
                $('#totalItem').html(response.result.totalItem);
                if (response) {
                    var divJob = $('.lstJob');
                    var pagingNum = $('.pagingNum');
                    $('#to-from').html('1〜'+pageSizeDF);
                    var data = response.result.data;
                    var html = '';
                    for (var i = 0; i < data.length; i++) {
                        html += '<article><div class="row">';
                        html += '<div class="col-xs-4 col-sm-2 col-md-2"><img src="' + _url + data[i].job_image + '" alt="' + data[i].job_slug + '" class="img_thumb_job" /></div>';
                        html += '<div class="col-xs-8 col-sm-7 col-md-7">';
                        html += '<h5><a href="' + _url + 'takusaler/job-detail/' + data[i].job_slug + '/' + data[i].id + '">' + data[i].job_title + '</a></h5>';
                        html += '<p>クライアント：' + data[i].corp_name + '</p>';
                        html += '<ul><li class="fee">時給：<span>' + data[i].job_salary + '円</span></li>';
                        if (data[i].job_deadline == 0) {
                            html += '<li class="status">募集終了</li></ul></div>';
                            html += '<div class="col-xs-12 col-sm-3 col-md-3 text-right"><button value="' + data[i].id + '" corpid="'+data[i].corp_id+'" class="btn inquiry disabled"><i class="fa fa-envelope-o"></i>問い合わせる</button></div></article>';
                        } else {
                            html += '<li class="status">残り<span>' + data[i].job_deadline + '</span>日</li></ul></div>';
                            html += '<div class="col-xs-12 col-sm-3 col-md-3 text-right"><button value="' + data[i].id + '" corpid="'+data[i].corp_id+'" class="btn inquiry"><i class="fa fa-envelope-o"></i>問い合わせる</button></div></article>';
                        }
                        divJob.html(html);
                    }
                    var btnPre = '<li num="1"><a >先頭へ</a></li>';
                    var btnNext = '<li  num="' + response.result.numberPage + '"><a>最後へ</a></li>';
                    var htmlPaging = '';
                    for (var i = 0; i < response.result.numberPage; i++) {
                        var NumPage = i + 1;
                        htmlPaging += '<li num="' + NumPage + '"><a>' + NumPage + '</a></li>';
                    }
                    pagingNum.html('');
                    pagingNum.append(btnPre);
                    pagingNum.append(htmlPaging);
                    pagingNum.append(btnNext);
                    $('.pagingNum li:first-child').addClass('disabled');
                    $('.pagingNum li:nth-child(2)').addClass('active');
                    lastPage = response.result.numberPage;
                }
            });
        }
    });
    $(document).on('click', '.inquiry', function() {
        if (!$(this).hasClass('disabled')) {
            $("html, body").animate({ scrollTop: 0 }, 'slow');
            var job_id = $(this).attr('value');
            var corp_id = $(this).attr('corpid');
            $(location).attr('href',_url+'form/'+job_id+'/'+corp_id);
            // API.apply({
            //     job_id: job_id
            // }, function(response) {
            //     var code = response.code;
            //     if(code == 1){
            //         $('.message-apply').html('Apply Success');
            //     }else if(code == 4){
            //         $('.message-apply').html('You Has Apply Job');
            //     }else if(code == 2){
            //         $('.message-apply').html('You need login account user!');
            //     }
            //     $('.message-apply').show();
            //     setTimeout(function() {
            //         $('.message-apply').hide('slow');
            //     }, 5000);
            // })
        }
    });
});