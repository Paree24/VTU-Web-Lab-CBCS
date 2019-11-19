<?php
    print "<h3> Refresh Page </h3>";
    $file=fopen("counter.txt","r");
    $hits=fscanf($file,"%d");
    fclose($file);
    $hits[0]++;
    $file=fopen("counter.txt","w");
    fprintf($file,"%d",$hits[0]);
    fclose($file);
    print "Total number of views".$hits[0];
?>