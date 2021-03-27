function delete_r( url ,id){
     
    var answer = confirm('vous etes sure?');
    if (answer){
        // if user clicked ok, 
        // pass the id to delete.php and execute the delete query
        window.location = url + id;
    } 
}
