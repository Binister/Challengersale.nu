(function($) {
 "use strict"
 
	$("#typesButton").click(function () {
		$("#roles").show("slow");
		$("#typesButton").hide("slow");
	});	

	$("#noTypesButton").click(function () {
		$("#roles").hide("slow");
		$("#typesButton").show("slow");
	});	

	$("#propertiesButton").click(function () {
		$("#properties").show("slow");
		$("#propertiesButton").hide("slow");
	});	

	$("#noPropertiesButton").click(function () {
		$("#properties").hide("slow");
		$("#propertiesButton").show("slow");
	});	
		
})(jQuery);