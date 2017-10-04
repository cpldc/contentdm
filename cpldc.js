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
		// if ($(".left-sidebar-toplevel").hasClass("left-sidebar-collapsible")) {
			$(".left-sidebar-toplevel").addClass("hide");
			$(".left-sidebar-togglebutton-show").removeClass("hide");
			$(".main-container").css("padding-left","0");
		// }
		// if ($(".left-sidebar-toplevel").hasClass("left-sidebar-fixed")){
			$(".center-content").removeClass("col-8 col-lg-6");
			$(".center-content").addClass("col-12");
		// }
	}
	function showLeftSidebar() {
		// if ($(".left-sidebar-toplevel").hasClass("left-sidebar-collapsible")) {
			$(".left-sidebar-toplevel").removeClass("hide");
			$(".left-sidebar-togglebutton-show").addClass("hide");
			$(".main-container").css("padding-left","230px");
		// }
		// if ($(".left-sidebar-toplevel").hasClass("left-sidebar-fixed")){
			$(".center-content").addClass("col-8 col-lg-6");
			$(".center-content").removeClass("col-12");
		// }
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
	function searchQuery() {
		var query = document.getElementsByName("search-query")[0].value;
		if ( query != "") {
			window.location.href = 'http://digital.chipublib.org/digital/search/searchterm/' + query;
		}
	}