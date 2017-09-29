	function expandSearch() {
		var viewportWidth = $(window).width();
		$(".header-search-collapsed").addClass("hide");
		if (viewportWidth > 976) {
			$(".header-search-expanded").removeClass("hide");
		}
		if (viewportWidth < 976) {
			$(".header-search-dropped").removeClass("hide");
		}
	}
	function hideSearch() {
		$(".header-search-dropped").addClass("hide");
		$(".header-search-collapsed").removeClass("hide");
	}
	function showDropdown() {
		$(".header-browse-dropdown-wrapper").removeClass("hide");
	}
	function hideDropdown() {
		$(".header-browse-dropdown-wrapper").addClass("hide");
	}
	function hideLeftSidebar() {
		$(".left-sidebar-toplevel").addClass("hide");
		$(".left-sidebar-togglebutton-show").removeClass("hide");
		$(".main-container").css("padding-left","0");
	}
	function showLeftSidebar() {
		$(".left-sidebar-toplevel").removeClass("hide");
		$(".left-sidebar-togglebutton-show").addClass("hide");
		$(".main-container").css("padding-left","230px");
	}
	$(window).resize(function () {
		var viewportWidth = $(window).width();
		if (viewportWidth < 976) {
			if (!($(".header-search-expanded").hasClass("hide"))) {
				$(".header-search-expanded").addClass("hide");
				$(".header-search-dropped").removeClass("hide");
			}
			hideLeftSidebar();
		}
		if (viewportWidth > 976) {
			if (!($(".header-search-dropped").hasClass("hide"))) {
				$(".header-search-dropped").addClass("hide");
				$(".header-search-expanded").removeClass("hide");
			}
			showLeftSidebar();
		}
	});
	$( document ).ready(function() {
		var viewportWidth = $(window).width();
		if (viewportWidth < 976) {
			hideLeftSidebar();
		}
		if (viewportWidth > 976) {
			showLeftSidebar();
		}
	});