<head>	<meta charset="UTF-8">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/css/tether-theme-arrows-dark.css" integrity="sha256-h23kMHZF9EZB4pGSPypdDjFgPawq5Hmdr2X0jD7MCVE=" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
<style>
table {
    margin: auto;
    border-collapse: collapse;
}
tr, td {
    padding: 3;
    margin: 3;
}
tr {
    border: 1px solid #333; 
}
td {
    border: 1px solid #ccc; 
}
.title {
    width: 250px;
    overflow: hidden;
    text-overflow: ellipsis;
}
</style>
</head>
<body>
<div class="container"><div class="row">

<table>
<tr><td>Collection Readable Name</td><td>Collection Code</td><td>Landing Page</td></tr>
<?php 

include 'variables.php';

usort($cards, build_sorter('link'));
foreach ($cards as $key => $val){
    if ($val[type] == 'collection'){
        echo '<tr><td class="title">' . $val[title] . '</td><td class="coll">' . $val[link] . '</td><td class="link"><a href="https://cdm16818.contentdm.oclc.org/customizations/global/pages/content.php?id=' . $val[link] . '">https://cdm16818.contentdm.oclc.org/customizations/global/pages/content.php?id=' . $val[link] . '</td></tr>';
    }
}
?>
</table>
</div></div>
</body>