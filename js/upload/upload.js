$(function () {
    $('input#file').fileinput({
        language: 'zh',
        uploadUrl: 'upload.php',
        allowedFileExtensions: ['png', 'jpg', 'jpeg'],
        overwriteInitial: false,
        maxFileSize: 5120,
        maxFilesNum: 1,
        slugCallback: function (filename) {
            return filename.replace('(', '_').replace(']', '_');
        },
        uploadExtraData: {
            'image': new Date().getTime() + '.jpg' //参数
        }
    });
    $('input#file').on("filepreupload", function (event, data, previewId, index) {
        $('#model_loading').modal('show');
        $('#span_loading').css("display", "block");
        $('#span_result').css("display", "none");
    });
    $('input#file').on("fileuploaded", function (event, data, previewId, index) {
        // alert(data.filenames + ' ' + data.response);
        if (data.response == 'failed') {
            alert('失败');
        }
        $('img#img_result').attr("src", "../output/" + data.response);
        //$('button#button_save').attr("href", "../output/" + data.response);
        $('#span_loading').css("display", "none");
        $('#span_result').css("display", "block");
    });
    $('button#button_save').on("click",function(){
        imgURL=$('img#img_result')[0].src;
        var oPop=window.open(imgURL,"","width=1,   height=1,   top=5000,   left=5000");   
        for(;   oPop.document.readyState   !=   "complete";   )   
        { 
           if   (oPop.document.readyState   ==   "complete")break; 
        } 
        oPop.document.execCommand("SaveAs"); 
        oPop.close(); 
    });
})
