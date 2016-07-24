tinymce.init({
    selector: "textarea.tinymce",
    plugins: [
        "advlist autolink link image lists charmap hr anchor pagebreak",
        "searchreplace wordcount visualblocks visualchars insertdatetime media nonbreaking",
        "table contextmenu directionality emoticons paste textcolor responsivefilemanager"
    ],
    toolbar1: "undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent",
    toolbar2: "| responsivefilemanager | link unlink anchor | image media | forecolor backcolor",
    image_advtab: true,
    relative_urls: false,
    remove_script_host: false,
    external_filemanager_path:"http://"+window.location.hostname+"/kiwilauncher/public/filemanager/",
    // Real server
    //external_filemanager_path:"http://"+window.location.hostname+"/filemanager/",
	filemanager_title:"File manager",
	external_plugins: { "filemanager" : "http://"+window.location.hostname+"/kiwilauncher/public/filemanager/plugin.min.js"}
	// Real server
	//external_plugins: { "filemanager" : "http://"+window.location.hostname+"/filemanager/plugin.min.js"}
});

$(document).ready(function() {
	$('.filemanager-open').fancybox({
		helpers: {
		    overlay: {
				locked: false
			}
		},
		width: 900,
		height: 600,
		type: "iframe",
		autoSize: false,
		afterClose: function() {
			for(i=1; i<=5; i++){
				url = $(':text[name="image_url_'+ i +'"]').val();
				if (url!='') {
					$('#screenshots'+i).attr('src', url);
				}
			}	
		}
	});
	
	$('.livepreview').click(function(event) {
		title = $(':text[name="title"]').val();
		content = $('.mce-edit-area iframe').contents().find('body').html();
		categories = [];
		$(':checked[name="categories[]"]').each(function(index) {
			categories.push($(this).val());
		});
		tags = $(':text[name="tags"]').val();
		form = $('.livepreview-form');
		form.children(':hidden[name="title"]').val(title);
		form.children(':hidden[name="content"]').val(content);
		form.submit();
	});
});

function removeImage(id){
	var currentHostName = "";
	if(window.location.origin.indexOf("local") > 0) {
	      currentHostName = window.location.origin + '/bkk/public';
	} else {
	      currentHostName = window.location.origin ;
	}
	document.getElementById('screenshots-URL'+id).value = "";
	document.getElementById('screenshots'+id).src = currentHostName+"/images/admin/icon-placeholder.svg";
}




