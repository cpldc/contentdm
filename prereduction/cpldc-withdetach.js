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
        $(".left-sidebar-togglebutton").removeClass("hide");
        $(".center-content").removeClass("col-8 col-lg-6");
        $(".center-content").addClass("col-12");
    }
    function switchToFixedLayout() {
        layout = "fixed";
        var sidebarFull = $(".left-sidebar-toplevel").detach();
        $(".sidebar-target-fixed").prepend(sidebarFull);
        $(".left-sidebar-toplevel").removeClass("left-sidebar-collapsible");
        $(".left-sidebar-toplevel").addClass("left-sidebar-fixed col-4 col-lg-4 col-xl-3 ");
        $(".left-sidebar-togglebutton").addClass("hide");
        $(".center-content").addClass("col-8 col-lg-6");
        $(".center-content").removeClass("col-12");
	}
	function showLeftSidebar(){
		$(".left-sidebar-togglebutton-target").empty();
		$(".left-sidebar-toplevel").show();
		$(".left-sidebar-togglebutton-target").append(togglebuttonLeft);
		var leftSidebarButton = $(".left-sidebar-togglebutton").detach();
		$(".left-sidebar-header").append(leftSidebarButton);
		$(".left-sidebar-togglebutton").css("float","right");
		$(".main-container").css("padding-left","230px");
	}
	function hideLeftSidebar(){
		$(".left-sidebar-togglebutton-target").empty();
		$(".left-sidebar-toplevel").hide();
		$(".left-sidebar-togglebutton-target").append(togglebuttonRight);
		var leftSidebarButton = $(".left-sidebar-togglebutton").detach();
		$("main").prepend(leftSidebarButton);
		$(".left-sidebar-togglebutton").css("float","left");
		$(".main-container").css("padding-left","0");
	}
	function toggleLeftSidebar() {
		if ($(".left-sidebar-toplevel").is( ":hidden")) {
			showLeftSidebar();
		} else if ($(".left-sidebar-toplevel").is(":visible")) {
			hideLeftSidebar();
		}
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
			switchToCollapsibleLayout();
			// toggleLeftSidebar();
		}
		if (viewportWidth > 976) {
			if (!($(".header-search-dropped").hasClass("hide"))) {
				$(".header-search-dropped").addClass("hide");
				$(".header-search-expanded").removeClass("hide");
			}
			showLeftSidebar();
			if ($(".PAGE_TYPE").hasClass("content")) {
				switchToFixedLayout();
			}
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