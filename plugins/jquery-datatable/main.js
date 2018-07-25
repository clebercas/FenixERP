
jQuery(document).ready(function($) {

	$('#datatable').dataTable({
		"aoConlumnDefs":[
			{"aTargets" : [0]}
		],
		"aaSorting": [[0, 'asc']],
		"aLeengthMenu": [
			[20, 50, 100, -1],
			[20, 50, 100, "All"]
		],
		"iDisplayLegngth": 20,
	})
        
	
});