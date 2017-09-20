		function showDropdown() {
			document.getElementById("show-dropdown").classList.toggle("show");
		}
		window.onclick = function(e) {
			if (!e.target.matches('.header-browse-button')) {
				var myDropdown = document.getElementById("show-dropdown");
				if (myDropdown.classList.contains('show')) {
						myDropdown.classList.remove('show');
				}
			}
		}
		function searchExpander() {
            if (document.getElementById('search-collapsed')) {

                if (document.getElementById('search-collapsed').style.display == 'none') {
	                    document.getElementById('search-collapsed').style.display = 'block';
	                    document.getElementById('search-expanded').style.display = 'none';
                }
                else {
                    document.getElementById('search-collapsed').style.display = 'none';
                    document.getElementById('search-expanded').style.display = 'block';
                }
            }
		}
		function navmenuHide() {
		    var x = document.getElementById('left-sidebar-button');
		    var y = document.getElementById('navmenu-c-toggle-left-image');
		    var z = document.getElementById('left-sidebar-menu');
		    if (x.style.display === 'none') {
		        x.style.display = 'table-cell';
		    } else {
		        x.style.display = 'none';
		    }
			if (y.style.display === 'none') {
		        y.style.display = 'table-cell';
		    } else {
		        y.style.display = 'none';
		    }
			if (z.style.display === 'none') {
		        z.style.display = 'table-cell';
		    } else {
		        z.style.display = 'none';
		    }
		}