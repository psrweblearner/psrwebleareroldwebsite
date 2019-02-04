<?php
     
    	include("db/db.php");
     
    	$query=mysqli_query($con,"select count(id) from `blog`");
    	$row = mysqli_fetch_row($query);
     
    	$rows = $row[0];
     
    	$page_rows =4;
     
    	$last = ceil($rows/$page_rows);
     
    	if($last < 1){
    		$last = 1;
    	}
     
    	$pagenum = 1;
     
    	if(isset($_GET['blog'])){
    		$pagenum = preg_replace('#[^0-9]#', '', $_GET['blog']);
    	}
     
    	if ($pagenum < 1) { 
    		$pagenum = 1; 
    	} 
    	else if ($pagenum > $last) { 
    		$pagenum = $last; 
    	}
     
    	$limit = 'LIMIT ' .($pagenum - 1) * $page_rows .',' .$page_rows;
     
    	$nquery=mysqli_query($con,"select * from `blog` ORDER BY ID DESC $limit");
     
    	$paginationCtrls = '';
     
    	if($last != 1){
     
    	if ($pagenum > 1) {
            $previous = $pagenum - 1;
    		$paginationCtrls .= '<a href="'.$_SERVER['PHP_SELF'].'?blog='.$previous.'" class="btn btn-danger">Previous</a> &nbsp; &nbsp; ';
     
    		for($i = $pagenum-4; $i < $pagenum; $i++){
    			if($i > 0){
    		        $paginationCtrls .= '<a href="'.$_SERVER['PHP_SELF'].'?blog='.$i.'" class="btn btn-danger">'.$i.'</a> &nbsp; ';
    			}
    	    }
        }
     
    	$paginationCtrls .= ''.$pagenum.' &nbsp; ';
     
    	for($i = $pagenum+1; $i <= $last; $i++){
    		$paginationCtrls .= '<a href="'.$_SERVER['PHP_SELF'].'?blog='.$i.'" class="btn btn-danger">'.$i.'</a> &nbsp; ';
    		if($i >= $pagenum+4){
    			break;
    		}
    	}
     
        if ($pagenum != $last) {
            $next = $pagenum + 1;
            $paginationCtrls .= ' &nbsp; &nbsp; <a href="'.$_SERVER['PHP_SELF'].'?blog='.$next.'" class="btn btn-danger">Next</a> ';
        }
    	}
     
    ?>