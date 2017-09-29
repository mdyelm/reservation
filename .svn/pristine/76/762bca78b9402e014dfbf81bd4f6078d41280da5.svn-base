var API = function() {
    //url api
    var hostname = window.location.hostname;
    var hostnameSite = 'http://'+hostname+'/taku/'; 
    var lstjob = hostnameSite + 'takusaler/jobsearch';
    var apply = hostnameSite + 'takusaler/jobapply';
    return {
        lstjob:function(data,callback){
            $.ajax({
                type: 'POST',
                url: lstjob,
                data: data,
                dataType: 'JSON',
                success: function(response) {
                    callback(response);
                },
                error: function(xhr, status, error) {
                    callback(xhr.responseText);
                }
            })
        },
        apply:function(data,callback){
            $.ajax({
                type: 'POST',
                url: apply,
                data: data,
                dataType: 'JSON',
                success: function(response) {
                    callback(response);
                },
                error: function(xhr, status, error) {
                    callback(xhr.responseText);
                }
            })
        },
    }
}();
