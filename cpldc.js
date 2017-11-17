	var viewportWidth = $(window).width();
	// click on search icon, input field appears
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
	// removes input field on search; only occurs when resizing - no "close" button in bibliocommons, so none here
	function hideSearch() {
		$(".header-search-dropped").addClass("hide");
		$(".header-search-collapsed").removeClass("hide");
	}
	// mouseover "Browse" to see menu
	function showDropdown() {
		$(".header-browse-dropdown-wrapper").toggle();
	}
	// pages are broken into fixed and collapsible sidebar layouts; home (always) and smaller window content pages are collapsible; 
	// content pages at larger sizes are fixed.
	// only Home is designated as collapsible, and that happens via css class (see Home.php 31) the rest are based on window size checks
	
	// not sure why this var declaration assigns fixed here; commenting out to see if anything breaks before removing
	// var layout = "fixed";
	var layout;
	
	// this function is called on resize to switch layouts
    function switchLayout() {
        console.log(layout);
        if (layout == "fixed"){
            switchToCollapsibleLayout();
        } else if (layout == "collapsible") {
            switchToFixedLayout();
        }
	}
	// how to swith to collapsible sidebar - detach() all contents of sidebar and dump them at the collapsible sidebar target; 
	// change bootstrap breakpoints, show the button that collapses the sidebar
    function switchToCollapsibleLayout() {
        layout = "collapsible";
        var sidebarFull = $(".left-sidebar-toplevel").detach();
        $(".sidebar-target-collapsible").prepend(sidebarFull);
        $(".left-sidebar-toplevel").addClass("left-sidebar-collapsible");
        $(".left-sidebar-toplevel").removeClass("left-sidebar-fixed col-4 col-lg-4 col-xl-3 ");
        $(".left-sidebar-togglebutton").removeClass("hide");
        $(".center-content").removeClass("col-8 col-lg-5");
        $(".center-content").addClass("col-12");
	}
	// how to switch to fixed: detach() and dump into fixed sidebar target; change bootstrap breakpoints, hit button
    function switchToFixedLayout() {
        layout = "fixed";
        var sidebarFull = $(".left-sidebar-toplevel").detach();
        $(".sidebar-target-fixed").prepend(sidebarFull);
        $(".left-sidebar-toplevel").removeClass("left-sidebar-collapsible");
        $(".left-sidebar-toplevel").addClass("left-sidebar-fixed col-4 col-lg-4 col-xl-3 ");
        $(".left-sidebar-togglebutton").addClass("hide");
        $(".center-content").addClass("col-8 col-lg-5");
		$(".main-container-fixed").css("margin-left","auto");
		$(".center-content").removeClass("col-12");
	}
	// shows sidebar; happens when clicking the button or resizing to larger sizes
	function showLeftSidebar(){
		$(".left-sidebar-togglebutton-target").empty();
		$(".left-sidebar-toplevel").show();
		$(".left-sidebar-togglebutton-target").append(togglebuttonLeft);
		var leftSidebarButton = $(".left-sidebar-togglebutton").detach();
		$(".left-sidebar-header").append(leftSidebarButton);
		$(".left-sidebar-togglebutton").css("float","right");
		if ($(".PAGE_TYPE").hasClass("content") && $(".container").hasClass("main-container-fixed")) {
			$(".main-container-fixed").css("margin-left","235px");
		}
		if ($(".PAGE_TYPE").hasClass("home") || $(".container").hasClass("main-container-collapsible")) {
			$(".main-container-collapsible").css("padding-left","235px");
		}
	}
	// hides sidebar, leaves button behind; happens when clicking the button or resizing to smaller sizes
	function hideLeftSidebar(){
		$(".left-sidebar-togglebutton-target").empty();
		$(".left-sidebar-toplevel").hide();
		$(".left-sidebar-togglebutton-target").append(togglebuttonRight);
		var leftSidebarButton = $(".left-sidebar-togglebutton").detach();
		$("main").prepend(leftSidebarButton);
		$(".left-sidebar-togglebutton").css("float","left");
		if ($(".PAGE_TYPE").hasClass("content")) {
			$(".main-container-fixed").css("margin-left","auto");
		}
		if ($(".PAGE_TYPE").hasClass("home")) {
			$(".main-container-collapsible").css("padding-left","0");
		}

	}
	// toggle function for sidebar hiding - this is what the button actually calls
	function toggleLeftSidebar() {
		if ($(".left-sidebar-toplevel").is( ":hidden")) {
			showLeftSidebar();
		} else if ($(".left-sidebar-toplevel").is(":visible")) {
			hideLeftSidebar();
		}
	}
	// breakpoints when user resizes window (*not* when page first loads; ideally these would just be functions that are called identically by resize and first load):
		// changes expanded search to a dropdown thing;
		// shows/hides sidebar 
		// changes fixed/collapsible layout for content pages
	$(window).resize(function () {
		var viewportWidth = $(window).width();
		if (viewportWidth < 976) {
			var sidebarType = "collapsible";
			if (!($(".header-search-expanded").hasClass("hide"))) {
				$(".header-search-expanded").addClass("hide");
				$(".header-search-dropped").removeClass("hide");
			}
			hideLeftSidebar();
			if ($(".PAGE_TYPE").hasClass("content")) {
				switchToCollapsibleLayout();
			}
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
	// sends user's input to end of url, which is how contentdm searches
	function searchQuery() {
		var query = document.getElementsByName("search-query")[0].value;
		if ( query != "") {
			window.location.href = 'http://digital.chipublib.org/digital/search/searchterm/' + query;
		}
	}
	// needed a separate function to search from the dropped-down search input or else the page wouldn't pull the input from either
	function searchQuery2() {
		var query = document.getElementsByName("search-query2")[0].value;
		if ( query != "") {
			window.location.href = 'http://digital.chipublib.org/digital/search/searchterm/' + query;
		}
	}
	// nonfunctional.  attempts to hijack all images onload and check whether they are from MP, and adds rights div if true
	function rightsInsertion() {
		console.log('onload loading');
		$(".slbImage").prepend('<p style="position: absolute; top: 0; left: 0; font-size: 24; color: #fff; z-index: 3000">asdfasdfasdf</p>');
		//  '<i class="rights-i rights-i-lightbox fa fa-info-circle" style="top: 200px"></i>' + 
		// 				'<div class="rights-overlay rights-overlay-main">' + 
		// 					'<div class="rights-guts">' + 
		// 						'<span class="rights-statement">' + 
		// 							'Courtesy of U.S. Equities Realty and the men and women who built Millennium Park' + 
		// 						'</span>' + 
		// 					'</div>' + 
		// 					'<div class="rights-close">' + 
		// 						'<i class="rights-close-icon fa fa-times"></i>' + 
		// 					'</div>' + 
		// 				'</div>');
	}
	// docreadies: 
	// 	checks window size to assign layout; 
	// 	waits for enter key to be pressed after typing in search input (x2 for both search inputs); 
	// 	waits for a click to show MP rights statement, or hide it
	// 	checks img src in simpleLightbox for MP collection, doesn't work :(
	$( document ).ready(function() {
		// var viewportWidth = $(window).width();
		if (viewportWidth < 976) {
			hideLeftSidebar();
			if ($(".PAGE_TYPE").hasClass("content")) {
				switchToCollapsibleLayout();
			}
		}
		if (viewportWidth > 976) {
			showLeftSidebar();
			if ($(".PAGE_TYPE").hasClass("content")) {
				switchToFixedLayout();
			}
		}
		$('[data-toggle="tooltip"]').tooltip()
		$('#search-input').keypress(function(e){
			if(e.keyCode==13)
				searchQuery();
		});
		$('#search-input2').keypress(function(e){
			if(e.keyCode==13)
				searchQuery2();
		});
		$(".rights-i").click(function () {
			event.preventDefault();
			$(".rights-overlay").toggle();
			$(".rights-i").toggle();
		});
		$(".rights-close").click(function() {
			event.preventDefault();
			$(".rights-overlay").toggle();
			$(".rights-i").toggle();
		});
		$("img[src*='mpu']").each(function () {
			console.log("check");
			if($(this).parent().attr('class')  == "lightbox-main-img-div") { $(this).parent().addClass('mine')}
		});
	});