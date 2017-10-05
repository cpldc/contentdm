	var viewportWidth = $(window).width();
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
		$(".header-browse-dropdown-wrapper").toggle();
    }
    var layout = "fixed";
    function switchLayout() {
        console.log(layout);
        if (layout == "fixed"){
            switchToCollapsibleLayout();
        } else if (layout == "collapsible") {
            switchToFixedLayout();
        }
    }
    function switchToCollapsibleLayout() {
        layout = "collapsible";
        var sidebarFull = $(".left-sidebar-toplevel").detach();
        $(".sidebar-target-collapsible").prepend(sidebarFull);
        $(".left-sidebar-toplevel").addClass("left-sidebar-collapsible");
        $(".left-sidebar-toplevel").removeClass("left-sidebar-fixed col-4 col-lg-4 col-xl-3 ");
        $(".left-sidebar-togglebutton-hide").removeClass("hide");
        $(".center-content").removeClass("col-8 col-lg-6");
        $(".center-content").addClass("col-12");
    }
    function switchToFixedLayout() {
        layout = "fixed";
        var sidebarFull = $(".left-sidebar-toplevel").detach();
        $(".sidebar-target-fixed").prepend(sidebarFull);
        $(".left-sidebar-toplevel").removeClass("left-sidebar-collapsible");
        $(".left-sidebar-toplevel").addClass("left-sidebar-fixed col-4 col-lg-4 col-xl-3 ");
        $(".left-sidebar-togglebutton-hide").addClass("hide");
        $(".center-content").addClass("col-8 col-lg-6");
        $(".center-content").removeClass("col-12");
    }
	function hideLeftSidebar() {
			$(".left-sidebar-toplevel").addClass("hide");
			$(".left-sidebar-togglebutton-show").removeClass("hide");
			$(".main-container").css("padding-left","0");
			$(".center-content").removeClass("col-8 col-lg-6");
			$(".center-content").addClass("col-12");
	}
	function showLeftSidebar() {
			$(".left-sidebar-toplevel").removeClass("hide");
			$(".left-sidebar-togglebutton-show").addClass("hide");
			$(".main-container").css("padding-left","230px");
			$(".center-content").addClass("col-8 col-lg-6");
			$(".center-content").removeClass("col-12");
	}
	$(window).resize(function () {
		var viewportWidth = $(window).width();
		if (viewportWidth < 976) {
			var sidebarType = "collapsible";
			if (!($(".header-search-expanded").hasClass("hide"))) {
				$(".header-search-expanded").addClass("hide");
				$(".header-search-dropped").removeClass("hide");
			}
			hideLeftSidebar();
		}
		if (viewportWidth > 976) {
			if ($(".PAGE_TYPE").hasClass("content")){
				var sidebarType = "fixed";
			}
			if (!($(".header-search-dropped").hasClass("hide"))) {
				$(".header-search-dropped").addClass("hide");
				$(".header-search-expanded").removeClass("hide");
			}
			showLeftSidebar();
		}
	});
	$( document ).ready(function() {
		// var viewportWidth = $(window).width();
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